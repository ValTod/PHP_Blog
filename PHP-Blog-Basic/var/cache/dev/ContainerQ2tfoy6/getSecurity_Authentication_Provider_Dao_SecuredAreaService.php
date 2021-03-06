<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.secured_area' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserChecker.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Provider\\UserAuthenticationProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider.php';

return $this->services['security.authentication.provider.dao.secured_area'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['security.user.provider.concrete.database_users']) ? $this->services['security.user.provider.concrete.database_users'] : $this->load(__DIR__.'/getSecurity_User_Provider_Concrete_DatabaseUsersService.php')) && false ?: '_'}, new \Symfony\Component\Security\Core\User\UserChecker(), 'secured_area', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load(__DIR__.'/getSecurity_EncoderFactoryService.php')) && false ?: '_'}, true);
