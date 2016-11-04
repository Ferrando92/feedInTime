<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/feed')) {
            // feed_index
            if (rtrim($pathinfo, '/') === '/feed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_feed_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'feed_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FeedController::indexAction',  '_route' => 'feed_index',);
            }
            not_feed_index:

            // feed_new
            if ($pathinfo === '/feed/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_feed_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FeedController::newAction',  '_route' => 'feed_new',);
            }
            not_feed_new:

            // feed_show
            if (preg_match('#^/feed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_feed_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feed_show')), array (  '_controller' => 'AppBundle\\Controller\\FeedController::showAction',));
            }
            not_feed_show:

            // feed_edit
            if (preg_match('#^/feed/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_feed_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feed_edit')), array (  '_controller' => 'AppBundle\\Controller\\FeedController::editAction',));
            }
            not_feed_edit:

            // feed_delete
            if (preg_match('#^/feed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_feed_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feed_delete')), array (  '_controller' => 'AppBundle\\Controller\\FeedController::deleteAction',));
            }
            not_feed_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
