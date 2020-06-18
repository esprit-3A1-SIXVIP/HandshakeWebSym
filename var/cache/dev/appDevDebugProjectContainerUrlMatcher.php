<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/b')) {
            // blog_default_index
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_default_index',);
            }

            if (0 === strpos($pathinfo, '/blog/ajax')) {
                // ajaxform
                if ('/blog/ajax' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::ajaxcomAction',  '_route' => 'ajaxform',);
                }

                // ajaxform1
                if ('/blog/ajax1' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::ajaxcom1Action',  '_route' => 'ajaxform1',);
                }

            }

            elseif (0 === strpos($pathinfo, '/backrefuge')) {
                // refuge_homepage_back
                if ('/backrefuge' === $pathinfo) {
                    return array (  '_controller' => 'RefugeBundle\\Controller\\BeneficiaireController::indexbackAction',  '_route' => 'refuge_homepage_back',);
                }

                // delete_refuge_back
                if (preg_match('#^/backrefuge/(?P<beneficiaireid>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_refuge_back']), array (  '_controller' => 'RefugeBundle\\Controller\\BeneficiaireController::deletebackAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/article')) {
            // blog_default_all
            if ('/article/all' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::allAction',  '_route' => 'blog_default_all',);
            }

            // blog_default_similar
            if ('/article/similar' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::similarAction',  '_route' => 'blog_default_similar',);
            }

            // blog_default_byid
            if (0 === strpos($pathinfo, '/article/find') && preg_match('#^/article/find/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'blog_default_byid']), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::byidAction',));
            }

            if (0 === strpos($pathinfo, '/article/mob')) {
                if (0 === strpos($pathinfo, '/article/mob/new')) {
                    // blog_default_newmob
                    if ('/article/mob/new' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::NewmobAction',  '_route' => 'blog_default_newmob',);
                    }

                    // blog_default_newmobcomm
                    if ('/article/mob/newcomment' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::NewmobcommAction',  '_route' => 'blog_default_newmobcomm',);
                    }

                }

                // blog_default_newmobupolad
                if ('/article/mob/upload' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::NewMobUpoladAction',  '_route' => 'blog_default_newmobupolad',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_blog_default_newmobupolad;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'blog_default_newmobupolad'));
                    }

                    return $ret;
                }
                not_blog_default_newmobupolad:

                // blog_default_getmobcomm
                if ('/article/mob/all' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::getmobcommAction',  '_route' => 'blog_default_getmobcomm',);
                }

                // blog_default_mobcommliste
                if (preg_match('#^/article/mob/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'blog_default_mobcommliste']), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::mobcommListeAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/add')) {
            // beneficiaire_new
            if ('/add' === $pathinfo) {
                return array (  '_controller' => 'RefugeBundle\\Controller\\BeneficiaireController::newAction',  '_route' => 'beneficiaire_new',);
            }

            // don_new
            if ('/add_don' === $pathinfo) {
                return array (  '_controller' => 'RefugeBundle\\Controller\\DonController::newAction',  '_route' => 'don_new',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Article')) {
            // admin_Article_ajouter
            if ('/Article/ajouter' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::ajout',  '_route' => 'admin_Article_ajouter',);
            }

            // admin_Article_modifier
            if (0 === strpos($pathinfo, '/Article/modifier') && preg_match('#^/Article/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_Article_modifier']), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::modifier',));
            }

            // admin_Article_voir
            if (0 === strpos($pathinfo, '/Article/consulter') && preg_match('#^/Article/consulter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_Article_voir']), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::voir',));
            }

            // admin_Article_supprimer
            if (0 === strpos($pathinfo, '/Article/supprimer') && preg_match('#^/Article/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_Article_supprimer']), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::supprimer',));
            }

            // admin_Article_liste
            if ('/Article' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::Article_liste',  '_route' => 'admin_Article_liste',);
            }

            // admin_Article_stat
            if ('/Article/stat' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::stat',  '_route' => 'admin_Article_stat',);
            }

            // admin_Article_commenter
            if (preg_match('#^/Article/(?P<id>[^/]++)/commenter$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_Article_commenter']), array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::ajoutcommentaire',));
            }

        }

        // AjoutEvenement
        if ('/AjoutEvenement' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::AjoutEvenementAction',  '_route' => 'AjoutEvenement',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

            // list
            if ('/list' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::listAction',  '_route' => 'list',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        // participer
        if ('/participer' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::participerAction',  '_route' => 'participer',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            // beneficiaire_index
            if ('/read' === $pathinfo) {
                return array (  '_controller' => 'RefugeBundle\\Controller\\BeneficiaireController::indexAction',  '_route' => 'beneficiaire_index',);
            }

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        // acceuil
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::layoutAction',  '_route' => 'acceuil',);
        }

        if (0 === strpos($pathinfo, '/task')) {
            // task
            if ('/task' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::taskAction',  '_route' => 'task',);
            }

            // taskShow
            if ('/taskShow' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::taskShowAction',  '_route' => 'taskShow',);
            }

            // taskUpdate
            if ('/taskUpdate' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::taskUpdateAction',  '_route' => 'taskUpdate',);
            }

        }

        // refuge_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'RefugeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'refuge_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_refuge_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'refuge_homepage'));
            }

            return $ret;
        }
        not_refuge_homepage:

        if (0 === strpos($pathinfo, '/e')) {
            // beneficiaire_edit
            if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<beneficiaireid>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'beneficiaire_edit']), array (  '_controller' => 'RefugeBundle\\Controller\\BeneficiaireController::editAction',));
            }

            // evenement_homepage
            if ('/evenement' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evenement_homepage',);
            }

            // events
            if ('/events' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::eventsAction',  '_route' => 'events',);
            }

        }

        // beneficiaire_show
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<beneficiaireid>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'beneficiaire_show']), array (  '_controller' => 'RefugeBundle\\Controller\\BeneficiaireController::showAction',));
        }

        if (0 === strpos($pathinfo, '/delete')) {
            // beneficiaire_delete
            if (preg_match('#^/delete/(?P<beneficiaireid>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'beneficiaire_delete']), array (  '_controller' => 'RefugeBundle\\Controller\\BeneficiaireController::deleteAction',));
            }

            // delete
            if (preg_match('#^/delete/(?P<evenementId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete']), array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/don')) {
            // don_index
            if ('/don' === $pathinfo) {
                return array (  '_controller' => 'RefugeBundle\\Controller\\DonController::indexAction',  '_route' => 'don_index',);
            }

            // don_show
            if ('/don' === $pathinfo) {
                return array (  '_controller' => 'RefugeBundle\\Controller\\DonController::indexAction',  '_route' => 'don_show',);
            }

        }

        // calendar
        if ('/calendar' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::calendarAction',  '_route' => 'calendar',);
        }

        // consulter
        if (0 === strpos($pathinfo, '/consulter') && preg_match('#^/consulter/(?P<evenementId>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'consulter']), array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::consulterAction',));
        }

        // update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<evenementId>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'update']), array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::updateAction',));
        }

        // findEvent
        if ('/findEvent' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::findEventAction',  '_route' => 'findEvent',);
        }

        // getParticipants
        if ('/getParticipants' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::getParticipantsAction',  '_route' => 'getParticipants',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
