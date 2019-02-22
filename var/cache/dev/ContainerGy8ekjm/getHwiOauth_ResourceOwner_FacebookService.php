<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.resource_owner.facebook' shared service.

require_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\RequestDataStorageInterface.php';
require_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\RequestDataStorage\\SessionStorage.php';
require_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwnerInterface.php';
require_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\AbstractResourceOwner.php';
require_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner.php';
require_once $this->targetDirs[3].'\\vendor\\hwi\\oauth-bundle\\OAuth\\ResourceOwner\\FacebookResourceOwner.php';

return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner(${($_ = isset($this->services['hwi_oauth.http_client']) ? $this->services['hwi_oauth.http_client'] : $this->load(__DIR__.'/getHwiOauth_HttpClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, array('client_id' => 588295211629091, 'client_secret' => '29aab12813f1c3496e2ab1aaa54c2ad6', 'scope' => 'email', 'paths' => array(), 'options' => array()), 'facebook', new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load(__DIR__.'/getSessionService.php')) && false ?: '_'}));