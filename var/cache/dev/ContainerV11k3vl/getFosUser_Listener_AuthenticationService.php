<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.listener.authentication' shared service.

require_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\EventListener\\AuthenticationListener.php';

return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener(${($_ = isset($this->services['fos_user.security.login_manager']) ? $this->services['fos_user.security.login_manager'] : $this->load(__DIR__.'/getFosUser_Security_LoginManagerService.php')) && false ?: '_'}, 'main');
