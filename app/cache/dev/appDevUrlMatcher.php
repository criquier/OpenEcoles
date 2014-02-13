<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/Open')) {
            // open_ecoles_open_seance_homepage
            if ($pathinfo === '/OpenSeances/admin/creation') {
                return array (  '_controller' => 'OpenEcoles\\OpenSeanceBundle\\Controller\\GestionOpenSeanceController::accueilAction',  '_route' => 'open_ecoles_open_seance_homepage',);
            }

            if (0 === strpos($pathinfo, '/OpenAnnonces')) {
                // open_ecoles_open_annonce_homepage
                if (rtrim($pathinfo, '/') === '/OpenAnnonces') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'open_ecoles_open_annonce_homepage');
                    }

                    return array (  '_controller' => 'OpenEcoles\\OpenAnnonceBundle\\Controller\\OpenAnnonceController::IndexAction',  '_route' => 'open_ecoles_open_annonce_homepage',);
                }

                // open_ecoles_open_annonce_ajoutannonce
                if ($pathinfo === '/OpenAnnonces/ajouterAnnonce') {
                    return array (  '_controller' => 'OpenEcoles\\OpenAnnonceBundle\\Controller\\OpenAnnonceController::AjouterAction',  '_route' => 'open_ecoles_open_annonce_ajoutannonce',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // open_ecoles_user_homepage
            if ($pathinfo === '/user/utilisateur') {
                return array (  '_controller' => 'OpenEcoles\\UserBundle\\Controller\\MessageController::indexMessageAction',  '_route' => 'open_ecoles_user_homepage',);
            }

            // open_ecoles_user_envoie_messsage
            if (0 === strpos($pathinfo, '/user/message') && preg_match('#^/user/message/(?P<idauteur>\\d+)/(?P<iddestinataire>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_ecoles_user_envoie_messsage;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_user_envoie_messsage')), array (  '_controller' => 'OpenEcoles\\UserBundle\\Controller\\MessageController::envoyerMessageAction',));
            }
            not_open_ecoles_user_envoie_messsage:

            if (0 === strpos($pathinfo, '/user/con')) {
                // open_ecoles_user_consulte_messsage
                if (0 === strpos($pathinfo, '/user/consulte') && preg_match('#^/user/consulte/(?P<idauteur>\\d+)/(?P<iddestinataire>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_user_consulte_messsage')), array (  '_controller' => 'OpenEcoles\\UserBundle\\Controller\\MessageController::consulterMessageAction',));
                }

                // open_ecoles_user_conversation_messsage
                if (0 === strpos($pathinfo, '/user/conversation') && preg_match('#^/user/conversation/(?P<idauteur>[^/]++)/(?P<iddestinataire>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_user_conversation_messsage')), array (  '_controller' => 'OpenEcoles\\UserBundle\\Controller\\MessageController::conversationMessageAction',));
                }

            }

        }

        // open_ecoles_annexe_homepage
        if (0 === strpos($pathinfo, '/annexeDesBundles/hello') && preg_match('#^/annexeDesBundles/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_annexe_homepage')), array (  '_controller' => 'OpenEcoles\\AnnexeBundle\\Controller\\DefaultController::indexAction',));
        }

        // open_ecoles_front_office_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'open_ecoles_front_office_homepage');
            }

            return array (  '_controller' => 'OpenEcoles\\FrontOfficeBundle\\Controller\\AccueilController::indexAction',  '_route' => 'open_ecoles_front_office_homepage',);
        }

        // open_ecoles_back_office_homepage
        if (rtrim($pathinfo, '/') === '/Admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'open_ecoles_back_office_homepage');
            }

            return array (  '_controller' => 'OpenEcoles\\BackOfficeBundle\\Controller\\AccueilController::indexAction',  '_route' => 'open_ecoles_back_office_homepage',);
        }

        if (0 === strpos($pathinfo, '/Tutoriel')) {
            // open_ecoles_tutorial_homepage
            if (rtrim($pathinfo, '/') === '/Tutoriel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'open_ecoles_tutorial_homepage');
                }

                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::accueilAction',  '_route' => 'open_ecoles_tutorial_homepage',);
            }

            // open_ecoles_tutorial_back_homepage
            if ($pathinfo === '/Tutoriel/Admin') {
                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::backAccueilAction',  '_route' => 'open_ecoles_tutorial_back_homepage',);
            }

            // open_ecoles_tutorial_top
            if ($pathinfo === '/Tutoriel/top/tutoriel') {
                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::topTutorielAction',  '_route' => 'open_ecoles_tutorial_top',);
            }

            // open_ecoles_tutorial_visualiser
            if (0 === strpos($pathinfo, '/Tutoriel/voir/tutoriel') && preg_match('#^/Tutoriel/voir/tutoriel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_visualiser')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::visualiserTutorielAction',));
            }

            // open_ecoles_tutorial_visualiser_tutoriels
            if ($pathinfo === '/Tutoriel/Admin/voir/tutoriels') {
                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::visualiserTutorielBackAction',  '_route' => 'open_ecoles_tutorial_visualiser_tutoriels',);
            }

            // open_ecoles_tutorial_ajout
            if ($pathinfo === '/Tutoriel/ajouter') {
                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::creerTutorielAction',  '_route' => 'open_ecoles_tutorial_ajout',);
            }

            // open_ecoles_tutorial_modifier
            if (0 === strpos($pathinfo, '/Tutoriel/modifier') && preg_match('#^/Tutoriel/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_modifier')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::modifierTutorielAction',));
            }

            if (0 === strpos($pathinfo, '/Tutoriel/Admin')) {
                // open_ecoles_tutorial_supprimer
                if (0 === strpos($pathinfo, '/Tutoriel/Admin/supprimer') && preg_match('#^/Tutoriel/Admin/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_supprimer')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::supprimerTutorielAction',));
                }

                // open_ecoles_tutorial_valider
                if (0 === strpos($pathinfo, '/Tutoriel/Admin/valider') && preg_match('#^/Tutoriel/Admin/valider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_valider')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::validerTutorielAction',));
                }

            }

            // open_ecoles_tutorial_homepage_chapitre
            if (rtrim($pathinfo, '/') === '/Tutoriel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'open_ecoles_tutorial_homepage_chapitre');
                }

                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::accueilAction',  '_route' => 'open_ecoles_tutorial_homepage_chapitre',);
            }

            // open_ecoles_tutorial_visualiser_section
            if (0 === strpos($pathinfo, '/Tutoriel/section') && preg_match('#^/Tutoriel/section/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_visualiser_section')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::visualiserChapitreAction',));
            }

            // open_ecoles_tutorial_ajout_section
            if (0 === strpos($pathinfo, '/Tutoriel/ajouter/section') && preg_match('#^/Tutoriel/ajouter/section/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_ajout_section')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::creerSectionAction',));
            }

            // open_ecoles_tutorial_modifier_section
            if (0 === strpos($pathinfo, '/Tutoriel/modifier/section') && preg_match('#^/Tutoriel/modifier/section/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_modifier_section')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::modifierChapitreAction',));
            }

            // open_ecoles_tutorial_supprimer_section
            if (0 === strpos($pathinfo, '/Tutoriel/supprimer/section') && preg_match('#^/Tutoriel/supprimer/section/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_supprimer_section')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::supprimerSectionAction',));
            }

            // open_ecoles_tutorial_visualiser_chapitre
            if (0 === strpos($pathinfo, '/Tutoriel/chapitre') && preg_match('#^/Tutoriel/chapitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_visualiser_chapitre')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::visualiserChapitreAction',));
            }

            // open_ecoles_tutorial_ajout_chapitre
            if (0 === strpos($pathinfo, '/Tutoriel/ajouter/chapitre') && preg_match('#^/Tutoriel/ajouter/chapitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_ajout_chapitre')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::creerChapitreAction',));
            }

            // open_ecoles_tutorial_modifier_chapitre
            if (0 === strpos($pathinfo, '/Tutoriel/modifier/chapitre') && preg_match('#^/Tutoriel/modifier/chapitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_modifier_chapitre')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::modifierChapitreAction',));
            }

            // open_ecoles_tutorial_supprimer_chapitre
            if (0 === strpos($pathinfo, '/Tutoriel/supprimer/chapitre') && preg_match('#^/Tutoriel/supprimer/chapitre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_supprimer_chapitre')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\ChapitreController::supprimerChapitreAction',));
            }

            // open_ecoles_tutorial_mes_documents
            if ($pathinfo === '/Tutoriel/mesDocuments') {
                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::mesDocumentsAction',  '_route' => 'open_ecoles_tutorial_mes_documents',);
            }

            // open_ecoles_tutorial_afficher_plus
            if (0 === strpos($pathinfo, '/Tutoriel/tutoriels/categorie') && preg_match('#^/Tutoriel/tutoriels/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_afficher_plus')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\TutorielController::visualiserAllTutorielByCategoryAction',));
            }

            // open_ecoles_tutorial_categorie
            if ($pathinfo === '/Tutoriel/Admin/categorie') {
                return array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\CategoryController::indexAction',  '_route' => 'open_ecoles_tutorial_categorie',);
            }

            // open_ecoles_tutorial_noter_tutoriel
            if (0 === strpos($pathinfo, '/Tutoriel/noter') && preg_match('#^/Tutoriel/noter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_open_ecoles_tutorial_noter_tutoriel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_ecoles_tutorial_noter_tutoriel')), array (  '_controller' => 'OpenEcoles\\TutorialBundle\\Controller\\NoteController::noterTutorielAction',));
            }
            not_open_ecoles_tutorial_noter_tutoriel:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
