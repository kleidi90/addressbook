<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Entity\AddressBook;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class AddressBookControllerTest extends WebTestCase
{
    /**
     * @var object
     */
    private $client = null;

    /**
     * @var object
     */
    private $em = null;

    /**
     * Initialize the client
     */
    public function setUp()
    {
        $this->client = static::createClient();
    }



    public function testIndex()
    {

        $this->client->request('GET', '/addressbook/1/list');

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertContains(
            'Addressbook',
            $this->client->getResponse()->getContent()
        );

        $this->assertContains('<thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
        <th>Country</th>
        <th>Email</th>
        <th>Picture</th>
        <th></th>
    </tr>
    </thead>', $this->client->getResponse()->getContent());

    }



    public function testInsert()
    {
        $this->em();

        $crawler = $this->client->request('GET', '/addressbook/insert');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertContains(
            'Insert an entry',
            $this->client->getResponse()->getContent()
        );

        $this->assertContains('<input type="text" id="address_book_firstname" name="address_book[firstname]" required="required" class="Form-input form-control" id="firstname" />', $this->client->getResponse()->getContent());
        $this->assertContains('<input type="text" id="address_book_lastname" name="address_book[lastname]" required="required" class="Form-input form-control" id="lastname" />', $this->client->getResponse()->getContent());
        $this->assertContains('<input type="text" id="address_book_streetAndNumber" name="address_book[streetAndNumber]" required="required" class="Form-input form-control" id="streetAndNumber" />', $this->client->getResponse()->getContent());
        $this->assertContains('<input type="text" id="address_book_zip" name="address_book[zip]" required="required" class="Form-input form-control" id="zip" />', $this->client->getResponse()->getContent());
        $this->assertContains('<input type="text" id="address_book_city" name="address_book[city]" required="required" class="Form-input form-control" id="city" />', $this->client->getResponse()->getContent());
        $this->assertContains('<select id="address_book_country" name="address_book[country]" class="Form-input form-control" id="country">', $this->client->getResponse()->getContent());
        $this->assertContains('<input type="text" id="address_book_phonenumber" name="address_book[phonenumber]" required="required" class="Form-input form-control" id="phonenumber" />', $this->client->getResponse()->getContent());
        $this->assertContains('<input type="text" id="address_book_birthday" name="address_book[birthday]" required="required" id="datepicker" class="form-control" />', $this->client->getResponse()->getContent());
        $this->assertContains('<input type="email" id="address_book_email" name="address_book[email]" required="required" class="Form-input form-control" id="email" />', $this->client->getResponse()->getContent());


        /*
         * Test with when an existing email is submitted
         */
        $repository = $this->em->getRepository(AddressBook::class);
        $query = $repository->createQueryBuilder('p')
            ->select('p.email')
            ->setMaxResults(1)
            ->getQuery();
        $email = $query->getResult()[0]['email'];

        //Set the submit button
        $form = $crawler->selectButton('address_book[save]')->form();

        // set some values
        $form['address_book[firstname]'] = 'Kleidi';
        $form['address_book[lastname]']  = 'Amedani';
        $form['address_book[streetAndNumber]'] = '123456';
        $form['address_book[zip]']   = '12454 ';
        $form['address_book[city]']  = 'Title';
        $form['address_book[country]']  = ' Germany ';
        $form['address_book[phonenumber]']  = '545 4 51454';
        $form['address_book[birthday]']  = '1990-08-11';
        $form['address_book[email]']  = $email;

        // submit the form
        $crawler = $this->client->submit($form);

        $this->assertContains('This value is already used', $this->client->getResponse()->getContent());


        /*
         * Test with when a new email is submitted
         */
        $form = $crawler->selectButton('address_book[save]')->form();

        //Create a file to put on the picture field
        $photo = new UploadedFile(
            'web/uploads/test.jpeg',
            'default.jpeg',
            'image/jpeg',
            2
        );

       // dump($photo);

        //Create some randoms chars for the file
        $rand_chars = substr(md5(microtime()),rand(0,26),5);

        // set some values
        $form['address_book[firstname]'] = 'Kleidi';
        $form['address_book[lastname]']  = 'Amedani';
        $form['address_book[streetAndNumber]'] = '123456';
        $form['address_book[zip]']   = '12454 ';
        $form['address_book[city]']  = 'Title';
        $form['address_book[country]']  = ' Germany ';
        $form['address_book[phonenumber]']  = '545 4 51454';
        $form['address_book[birthday]']  = '1990-08-11';
        $form['address_book[email]']  = 'kk'.$rand_chars.'@live.com';
        $form['address_book[picture]']  = $photo;

        // submit the form
        $this->client->submit($form);

        $this->assertContains('The entry was inserted correctly!', $this->client->getResponse()->getContent());

    }


    public function testEdit()
    {
        //use some guest book from the database
        $crawler = $this->client->request('GET', '/addressbook/2/edit');

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        $form = $crawler->selectButton('address_book[save]')->form();

        // make the form submition go in error in putting wrong password
        // set some values
        $form['address_book[firstname]'] = 'Kleidi';
        $form['address_book[lastname]']  = 'Amedani';
        $form['address_book[streetAndNumber]'] = '123456';
        $form['address_book[zip]']   = '12454 ';
        $form['address_book[city]']  = 'Tirana';
        $form['address_book[country]']  = ' Albania ';
        $form['address_book[phonenumber]']  = '999 4 51454';

        // submit the form
        $this->client->submit($form);

        $this->assertContains('The entry was modified correctly!', $this->client->getResponse()->getContent());

    }
//
//    public function testDelete()
//    {
//
//        $crawler = $this->client->request('GET', '/addressbook/1/list');
//        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
//        $this->assertContains(
//            'Addressbook',
//            $this->client->getResponse()->getContent()
//        );
//
//        $link = $crawler
//            ->filter('a:contains("Delete")') // find all links with the text "Delete"
//            ->last() // select the last link in the list
//            ->link()
//        ;
//
//        $this->client->click($link);
//
//        //dump($link);
//        $this->assertContains('The entry was deleted successfully!', $this->client->getResponse()->getContent());
//    }
//



    private function em() {
        $this->em = $this->client->getContainer()->get('doctrine.orm.default_entity_manager');

    }

}
