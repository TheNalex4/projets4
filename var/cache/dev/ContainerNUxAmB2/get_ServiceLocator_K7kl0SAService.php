<?php

namespace ContainerNUxAmB2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K7kl0SAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K7kl0SA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K7kl0SA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cardRepository' => ['privates', 'App\\Repository\\CardRepository', 'getCardRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'cardRepository' => 'App\\Repository\\CardRepository',
            'entityManager' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
