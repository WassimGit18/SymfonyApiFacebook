<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.command.change_password' shared service.

require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
require_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Command\\ChangePasswordCommand.php';

$this->services['fos_user.command.change_password'] = $instance = new \FOS\UserBundle\Command\ChangePasswordCommand(${($_ = isset($this->services['fos_user.util.user_manipulator']) ? $this->services['fos_user.util.user_manipulator'] : $this->load(__DIR__.'/getFosUser_Util_UserManipulatorService.php')) && false ?: '_'});

$instance->setName('fos:user:change-password');

return $instance;
