<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.change_password.controller' shared service.

require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ContainerAwareTrait.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerTrait.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller.php';
require_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Controller\\ChangePasswordController.php';

$this->services['fos_user.change_password.controller'] = $instance = new \FOS\UserBundle\Controller\ChangePasswordController(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.change_password.form.factory']) ? $this->services['fos_user.change_password.form.factory'] : $this->load(__DIR__.'/getFosUser_ChangePassword_Form_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load(__DIR__.'/getFosUser_UserManagerService.php')) && false ?: '_'});

$instance->setContainer($this);

return $instance;
