<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_status' shared service.

require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle\\Command\\ServerCommand.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand.php';

$this->services['web_server.command.server_status'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand();

$instance->setName('server:status');

return $instance;
