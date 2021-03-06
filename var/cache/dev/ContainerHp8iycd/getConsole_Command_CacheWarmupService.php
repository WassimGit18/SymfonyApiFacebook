<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_warmup' shared service.

require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
require_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand.php';

$this->services['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(${($_ = isset($this->services['cache_warmer']) ? $this->services['cache_warmer'] : $this->load(__DIR__.'/getCacheWarmerService.php')) && false ?: '_'});

$instance->setName('cache:warmup');

return $instance;
