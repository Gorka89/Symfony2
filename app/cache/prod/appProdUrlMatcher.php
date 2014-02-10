<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // mdw_demo_homepage
        if (0 === strpos($pathinfo, '/hellos') && preg_match('#^/hellos/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mdw_demo_homepage')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/articulo')) {
            // articulos
            if ($pathinfo === '/articulos') {
                return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\DefaultController::articulosAction',  '_route' => 'articulos',);
            }

            // articulo
            if (preg_match('#^/articulo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\DefaultController::articuloAction',));
            }

            // articulo_crear
            if ($pathinfo === '/articulos/crear') {
                return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\BlogController::crearAction',  '_route' => 'articulo_crear',);
            }

        }

        // login
        if ($pathinfo === '/loginOld') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // path_hello_world
        if ($pathinfo === '/hellol') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\DefaultController::indexxAction',  '_route' => 'path_hello_world',);
        }

        // blog_mostrar
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_mostrar')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\BlogController::showAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_list
            if ($pathinfo === '/user/list') {
                return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::listAction',  '_route' => 'user_list',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::createAction',  '_route' => 'user_create',);
            }

            // user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::editAction',));
            }

            // user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_view')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::viewAction',));
            }

            // user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::deleteAction',));
            }

            // user_exists
            if (0 === strpos($pathinfo, '/user/exists') && preg_match('#^/user/exists/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_exists')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::existsAction',));
            }

        }

        // user_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::loginAction',  '_route' => 'user_login',);
        }

        // user_access
        if ($pathinfo === '/access') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::accessAction',  '_route' => 'user_access',);
        }

        // show_users
        if ($pathinfo === '/showusers') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::showUsersAction',  '_route' => 'show_users',);
        }

        // MDWDemoBundle_noticias
        if ($pathinfo === '/noticias') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\NoticeController::indexAction',  '_route' => 'MDWDemoBundle_noticias',);
        }

        // MDWDemoBundle_noticeView
        if (0 === strpos($pathinfo, '/leerNoticia') && preg_match('#^/leerNoticia/(?P<notice_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'MDWDemoBundle_noticeView')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\NoticeController::noticeViewAction',));
        }

        // modules_list
        if (0 === strpos($pathinfo, '/modules') && preg_match('#^/modules/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modules_list')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::moduleslistAction',));
        }

        // app_service
        if (0 === strpos($pathinfo, '/app') && preg_match('#^/app/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_service')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::appserviceAction',));
        }

        if (0 === strpos($pathinfo, '/landing')) {
            // landing_service
            if (preg_match('#^/landing/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'landing_service')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::landingserviceAction',));
            }

            // load_stats
            if ($pathinfo === '/landing/stats') {
                return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::loadstatsAction',  '_route' => 'load_stats',);
            }

            // load_registers
            if (0 === strpos($pathinfo, '/landing/registers') && preg_match('#^/landing/registers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'load_registers')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::loadregistersAction',));
            }

            // load_export
            if (0 === strpos($pathinfo, '/landing/export') && preg_match('#^/landing/export/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'load_export')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::loadexportAction',));
            }

        }

        // load_pagination
        if ($pathinfo === '/pagination') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::paginationAction',  '_route' => 'load_pagination',);
        }

        // load_graphic_stats
        if ($pathinfo === '/stats') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::graphicstatsAction',  '_route' => 'load_graphic_stats',);
        }

        if (0 === strpos($pathinfo, '/exportcsv')) {
            // export_csv
            if ($pathinfo === '/exportcsv') {
                return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::exportcsvAction',  '_route' => 'export_csv',);
            }

            // Calendario
            if ($pathinfo === '/exportcsv') {
                return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::exportcsvAction',  '_route' => 'Calendario',);
            }

        }

        // module
        if (0 === strpos($pathinfo, '/module') && preg_match('#^/module/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'module')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::modulephpAction',));
        }

        // traslate
        if ($pathinfo === '/traslate') {
            return array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::traslatetestAction',  '_route' => 'traslate',);
        }

        // contact
        if (preg_match('#^/(?P<_locale>en|fr|de|es)/contact$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact')), array (  '_controller' => 'MDW\\DemoBundle\\Controller\\UsersController::traslatetestAction',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
