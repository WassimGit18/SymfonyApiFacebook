<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.database_drop_command' shared service.

require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
require_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\DropDatabaseDoctrineCommand.php';

$this->services['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand();

$instance->setName('doctrine:database:drop');

return $instance;
