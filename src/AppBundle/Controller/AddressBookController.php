<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AddressBook;
use AppBundle\Form\AddressBookType;
use AppBundle\Services\FileManager;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;


use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\File\File;

class AddressBookController extends Controller
{
    /**
     * @Route("/addressbook/insert",name="InsertEntry")
     * @param Request $request
     * @param FileManager $fileManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function InsertAction(Request $request, FileManager $fileManager)
    {


        $em =  $this->getDoctrine()->getManager();
        $addressBook = new AddressBook();
        $form = $this->createForm(AddressBookType::class, $addressBook);
        $fileName = '';

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            //Upload the picture
            $file = $data->getPicture();

            if($file){
                try {
                    //Call the Filemanager service to upload the file
                    $fileName = $fileManager->uploadFile($file);
                } catch (FileException $e) {
                    $this->addFlash('error', 'The picture was not uploaded correctly!');
                }
            }

            //Create the Entry
            $addressBook->setPicture($fileName);
            $em->persist($addressBook);
            $em->flush();
            $this->addFlash('success', 'The entry was inserted correctly!');
        }

        return $this->render('@App/AddressBook/addressbook.html.twig', array(
            'form'=> $form->createView(),
        ));
    }


    /**
     * @Route("/addressbook/{id}/edit",name="EditEntry")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function EditAction($id,Request $request, FileManager $fileManager)
    {

        $addressBook = new AddressBook();

        $em = $this->getDoctrine()->getManager();
        $addressBook = $em->getRepository(AddressBook::class)->find($id);

        // Get the picture name form the database
        $fileName = $addressBook->getPicture();

        //If the picture is not empty use the default  as a file
        if($fileName){
            $file = new File($this->getParameter('pictures_directory').'/'.$fileName);
            $addressBook->setPicture($file);
        }else{
            $file = new File($this->getParameter('pictures_directory').'/default.jpeg');
            $addressBook->setPicture($file);
        }

        //Make the form ready
        $form = $this->createForm(AddressBookType::class, $addressBook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            //Get all data from the form
            $data = $form->getData();
            //Get the file from the form
            $fileEntered = $data->getPicture();

            if($fileEntered){
                try {
                    //Delete the old file
                    $filesystem = new Filesystem();
                    $filesystem->remove($this->getParameter('pictures_directory').'/'.$fileName);
                    //Call the Filemanager service to upload the file
                    $fileName = $fileManager->uploadFile($fileEntered);
                } catch (FileException $e) {
                    $this->addFlash('error', 'The picture was not uploaded correctly!');
                }
            }

            //Modify the Addressbook
            $data->setPicture($fileName);
            $em->persist($addressBook);
            $em->flush();
            $this->addFlash('success', 'The entry was modified correctly!');
        }

        return $this->render('@App/AddressBook/addressbook.html.twig', array(
            'form'=> $form->createView(),
            'picture'=>$fileName,
        ));
    }

    /**
     * @Route("/addressbook/{id}/delete", name="DeleteEntry")
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function DeleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $addressBook = $em->getRepository(AddressBook::class)->find($id);

        if (!$addressBook) {
            $this->addFlash('error', 'This entry is not valid!');
            return $this->redirectToRoute('ListAddressBook', array('page' => '1'));
        }
        $fileName = $addressBook->getPicture();
        //Delete the image from the folder
        $filesystem = new Filesystem();
        $filesystem->remove($this->getParameter('pictures_directory').'/'.$fileName);

        $em->remove($addressBook);
        $em->flush();

        $this->addFlash('success', 'The entry was deleted successfully!');
        return $this->redirectToRoute('ListAddressBook', array('page' => '1'));
    }


    /**
     * @Route("/addressbook/{page}/list ",name="ListAddressBook")
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */

    public function indexAction($page)
    {

        $addressBooks = $this->getAllAddressBooks($page); // Returns 5 posts

        $limit = 5;
        $maxPages = ceil($addressBooks->count() / $limit);
        $thisPage = $page;

        if (!$addressBooks){
            //Send error message
            $this->addFlash('error', 'Currently there are no addressbooks !');
        }

        return $this->render('@App/AddressBook/addressBookList.html.twig', array(
            'addressbooks'=> $addressBooks,
            'maxPages' => $maxPages,
            'thisPage' => $thisPage,
        ));
    }


    /**
     *  Create & pass query to paginate method
     *
     * @param integer $currentPage The current page (passed from controller)
     * @return \Doctrine\ORM\Tools\Pagination\Paginator
     */

    public function getAllAddressBooks($currentPage = 1) : Paginator
    {
        $repository = $this->getDoctrine()->getRepository(AddressBook::class);

        //Get all Addressbook list
        $query = $repository->createQueryBuilder('p')
            ->orderBy('p.firstname', 'DESC')
            ->getQuery();

        $paginator = $this->paginate($query, $currentPage);
        return $paginator;

    }

    /**
     * Paginator Helper
     *
     * @param Doctrine\ORM\Query $dql   DQL Query Object
     * @param integer            $page  Current page (defaults to 1)
     * @param integer            $limit The total number per page (defaults to 10)
     *
     * @return \Doctrine\ORM\Tools\Pagination\Paginator
     */

    public function paginate($dql, $page = 1, $limit = 5) : Paginator
    {
        $paginator = new Paginator($dql);

        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit); // Limit

        return $paginator;
    }


}
