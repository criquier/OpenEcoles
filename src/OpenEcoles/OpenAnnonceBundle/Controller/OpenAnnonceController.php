<?php

namespace OpenEcoles\OpenAnnonceBundle\Controller;

use OpenEcoles\OpenAnnonceBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;

class OpenAnnonceController extends Controller
{
    public function IndexAction()
    {

      $annonces = $this->getDoctrine()
            ->getRepository('OpenEcolesOpenAnnonceBundle:Annonce')
            ->findAll();

       return $this->render('OpenEcolesOpenAnnonceBundle:OpenAnnonce:index.html.twig', array('lesannonces' => $annonces));
    }

    public function AjouterAction()
    {
        // On crée un objet Article
        $annonce = new Annonce();

        $annonce->setDateCreation(new \DateTime());
        $annonce->setIdAuteur($this->getUser()->getId());

        // On crée le FormBuilder grâce à la méthode du contrôleur
        $formBuilder = $this->createFormBuilder($annonce);
        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('Titre',        'text')
            ->add('Contenu',       'textarea');

        // Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // On récupère la requête
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
            $form->bind($request);

            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On l'enregistre notre objet $article dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($annonce);
                $em->flush();

                // On redirige vers la page de visualisation de l'article nouvellement créé
                return $this->redirect($this->generateUrl('open_ecoles_open_annonce_homepage'));
            }
        }

        // À ce stade :
        // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau

        return $this->render('OpenEcolesOpenAnnonceBundle:OpenAnnonce:ajoutAnnonce.html.twig', array(
            'form' => $form->createView(),
        ));
    }


}
