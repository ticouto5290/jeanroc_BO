<?php

namespace ContainerE4NjBQs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WtOqpeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Wt_Oqpe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Wt_Oqpe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\FreelancerApiController::create' => ['privates', '.service_locator.jYQR168', 'get_ServiceLocator_JYQR168Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FreelancerCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\FreelancerApiController:create' => ['privates', '.service_locator.jYQR168', 'get_ServiceLocator_JYQR168Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:batchDelete' => ['privates', '.service_locator.twrFs.m', 'get_ServiceLocator_TwrFs_MService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:createEditForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:createEditFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.lng3o3t', 'get_ServiceLocator_Lng3o3tService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:createNewForm' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:createNewFormBuilder' => ['privates', '.service_locator.Lazlz4J', 'get_ServiceLocator_Lazlz4JService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FreelancerCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FreelancerCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\FreelancerApiController::create' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::delete' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::detail' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::edit' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::index' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::new' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController::updateEntity' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\FreelancerApiController:create' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:delete' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:detail' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:edit' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:index' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:new' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\FreelancerCrudController:updateEntity' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
