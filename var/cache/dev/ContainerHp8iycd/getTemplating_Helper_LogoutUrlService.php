<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.logout_url' shared service.

require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper.php';

return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
