<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // crearEventos
        if ($pathinfo === '/admin/crearEventos') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\EventsController::createAction',  '_route' => 'crearEventos',);
        }

        // eliminarEventos
        if (0 === strpos($pathinfo, '/admin/eliminarEvento') && preg_match('#^/admin/eliminarEvento/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\EventsController::deleteAction',)), array('_route' => 'eliminarEventos'));
        }

        // modificarEvento
        if (0 === strpos($pathinfo, '/admin/modificarEvento') && preg_match('#^/admin/modificarEvento/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\EventsController::updateAction',)), array('_route' => 'modificarEvento'));
        }

        // calendarizacion
        if ($pathinfo === '/admin/calendarizacion') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\EventsController::listAction',  '_route' => 'calendarizacion',);
        }

        // agregarNoticia
        if (0 === strpos($pathinfo, '/admin/agregarNoticia') && preg_match('#^/admin/agregarNoticia/(?P<idEvent>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\NewsController::addAction',)), array('_route' => 'agregarNoticia'));
        }

        // listaNoticias
        if ($pathinfo === '/admin/listaNoticias') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\NewsController::listAction',  '_route' => 'listaNoticias',);
        }

        // eliminarNoticia
        if (0 === strpos($pathinfo, '/admin/eliminarNoticia') && preg_match('#^/admin/eliminarNoticia/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\NewsController::deleteAction',)), array('_route' => 'eliminarNoticia'));
        }

        // modificarNoticia
        if (0 === strpos($pathinfo, '/admin/modificarNoticia') && preg_match('#^/admin/modificarNoticia/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\NewsController::updateAction',)), array('_route' => 'modificarNoticia'));
        }

        // agregarInstrumentos
        if ($pathinfo === '/admin/agregarInstrumentos') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\InstrumentsController::addAction',  '_route' => 'agregarInstrumentos',);
        }

        // listaInstrumentos
        if ($pathinfo === '/admin/listaInstrumentos') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\InstrumentsController::listAction',  '_route' => 'listaInstrumentos',);
        }

        // modificarInstrumento
        if (0 === strpos($pathinfo, '/admin/modificarInstrumento') && preg_match('#^/admin/modificarInstrumento/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\InstrumentsController::updateAction',)), array('_route' => 'modificarInstrumento'));
        }

        // eliminarInstrumento
        if (0 === strpos($pathinfo, '/admin/eliminarInstrumento') && preg_match('#^/admin/eliminarInstrumento/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\InstrumentsController::deleteAction',)), array('_route' => 'eliminarInstrumento'));
        }

        // agregarUsuario
        if ($pathinfo === '/admin/agregarUsuario') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\UsersController::addAction',  '_route' => 'agregarUsuario',);
        }

        // listaUsuario
        if ($pathinfo === '/admin/listaUsuario') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\UsersController::listAction',  '_route' => 'listaUsuario',);
        }

        // modificarUsuario
        if (0 === strpos($pathinfo, '/admin/modificarUsuario') && preg_match('#^/admin/modificarUsuario/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\UsersController::updateAction',)), array('_route' => 'modificarUsuario'));
        }

        // eliminarUsuario
        if (0 === strpos($pathinfo, '/admin/eliminarUsuario') && preg_match('#^/admin/eliminarUsuario/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\UsersController::deleteAction',)), array('_route' => 'eliminarUsuario'));
        }

        // listaAcceso
        if ($pathinfo === '/admin/listaAcceso') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\AccessController::listAction',  '_route' => 'listaAcceso',);
        }

        // agregarAcceso
        if ($pathinfo === '/admin/agregarAcceso') {
            return array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\AccessController::addAction',  '_route' => 'agregarAcceso',);
        }

        // modificarAcceso
        if (0 === strpos($pathinfo, '/admin/modificarAcceso') && preg_match('#^/admin/modificarAcceso/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\AccessController::updateAction',)), array('_route' => 'modificarAcceso'));
        }

        // eliminarAcceso
        if (0 === strpos($pathinfo, '/admin/eliminarAcceso') && preg_match('#^/admin/eliminarAcceso/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\AccessController::deleteAction',)), array('_route' => 'eliminarAcceso'));
        }

        // listaMultimedia
        if (0 === strpos($pathinfo, '/admin/listaMultimedia') && preg_match('#^/admin/listaMultimedia/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\MultimediaController::listAction',)), array('_route' => 'listaMultimedia'));
        }

        // agregarMultimedia
        if (0 === strpos($pathinfo, '/admin/agregarMultimedia') && preg_match('#^/admin/agregarMultimedia/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\RumbaBundle\\Controller\\MultimediaController::addAction',)), array('_route' => 'agregarMultimedia'));
        }

        // crystal_base_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Crystal\\BaseBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'crystal_base_homepage'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
