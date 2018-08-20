<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_home
            if ('/_profiler' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_home');
                }

                return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
            }

            if (0 === strpos($pathinfo, '/_profiler/search')) {
                // _profiler_search
                if ('/_profiler/search' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                }

                // _profiler_search_bar
                if ('/_profiler/search_bar' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                }

            }

            // _profiler_phpinfo
            if ('/_profiler/phpinfo' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
            }

            // _profiler_open_file
            if ('/_profiler/open' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
            }

            // _profiler_router
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
            }

            // _profiler_exception
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
            }

            // _profiler_exception_css
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
            }

        }

        // _twig_error_test
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',  '_locale' => 'en',));
        }

        // admin_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/admin/post/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_index')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',  '_locale' => 'en',));
        }
        not_admin_index:

        // admin_post_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/admin/post/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_post_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_post_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_index')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',  '_locale' => 'en',));
        }
        not_admin_post_index:

        // admin_post_new
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/admin/post/new$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_admin_post_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_new')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::newAction',  '_locale' => 'en',));
        }
        not_admin_post_new:

        // admin_post_show
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/admin/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_post_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_show')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::showAction',  '_locale' => 'en',));
        }
        not_admin_post_show:

        // admin_post_edit
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/admin/post/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_admin_post_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_edit')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::editAction',  '_locale' => 'en',));
        }
        not_admin_post_edit:

        // admin_post_delete
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/admin/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_admin_post_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::deleteAction',  '_locale' => 'en',));
        }
        not_admin_post_delete:

        // blog_index
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/blog/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_blog_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_index')), array (  'page' => '1',  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',  '_locale' => 'en',));
        }
        not_blog_index:

        // blog_rss
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/blog/rss\\.xml$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_blog_rss;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_rss')), array (  'page' => '1',  '_format' => 'xml',  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',  '_locale' => 'en',));
        }
        not_blog_rss:

        // blog_index_paginated
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/blog/page/(?P<page>[1-9]\\d*)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_blog_index_paginated;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_index_paginated')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',  '_locale' => 'en',));
        }
        not_blog_index_paginated:

        // blog_post
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/blog/posts/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_blog_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::postShowAction',  '_locale' => 'en',));
        }
        not_blog_post:

        // comment_new
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/blog/comment/(?P<postSlug>[^/]++)/new$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_comment_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_new')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::commentNewAction',  '_locale' => 'en',));
        }
        not_comment_new:

        // blog_search
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/blog/search$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_blog_search;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_search')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::searchAction',  '_locale' => 'en',));
        }
        not_blog_search:

        // security_login
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_login')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',));
        }

        // security_logout
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_logout')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',));
        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'default/homepage.html.twig',  '_locale' => 'en',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
