<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.default.transport.real' shared service.

include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';

return $this->services['swiftmailer.mailer.default.transport.real'] = new \Swift_Transport_NullTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher()) && false ?: '_'});
