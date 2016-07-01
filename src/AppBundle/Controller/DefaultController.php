<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
     /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
      $session = $this->get('session');
      $session->remove('user');
      return $this
             ->render('default/index.html.twig', array(
             'errorAuthentification' => ''));
    }

    /**
    * @Route("/joue", name="joue")
    */
    public function jeuxAction(Request $request)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Historique');

        $boule1 = $request->request->get('boule1');
        $boule2 = $request->request->get('boule2');
        $boule3 = $request->request->get('boule3');
        $boule4 = $request->request->get('boule4');
        $boule5 = $request->request->get('boule5');
        $bouleComp = $request->request->get('bouleComp');

        // On récupère l'entité correspondante à l'id $id
        $listeCombinaison = $repository->findOneBy(array('boule1' => $boule1,'boule2' => $boule2,
          'boule3' => $boule3,'boule4' => $boule4,'boule5' => $boule5,'bouleComp' => $bouleComp));  

        $maxGain = $repository->findBy(array(), array('g1' => 'desc'),1);
        
        if ($listeCombinaison)
        { 
          return $this->render('default/jeux.html.twig',array('maxDateTirage' => current($maxGain)->getDateTirage(),'b1' => current($maxGain)->getBoule1(),'b2' => current($maxGain)->getBoule2(),
          'b3' => current($maxGain)->getBoule3(),'b4' => current($maxGain)->getBoule4(),'b5' => current($maxGain)->getBoule5(),'bComp' => current($maxGain)->getBouleComp(),'maxGain' => current($maxGain)->getG1(),'statistique' => "false",'dateTirage' => $listeCombinaison->getDateTirage(), 'participant1' => $listeCombinaison->getP1(), 'gain1' => $listeCombinaison->getG1(),
            'participant2' => $listeCombinaison->getP2(), 'gain2' => $listeCombinaison->getG2(),
            'participant3' => $listeCombinaison->getP3(), 'gain3' => $listeCombinaison->getG3(),
             'participant4' => $listeCombinaison->getP4(), 'gain4' => $listeCombinaison->getG4(),
             'participant5' => $listeCombinaison->getP5(), 'gain5' => $listeCombinaison->getG5(),
             'participant6' => $listeCombinaison->getP6(), 'gain6' => $listeCombinaison->getG6()));
        }
        else
        {
          $statBoule1 = $repository->findBy(array('boule1' => $boule1));
          $statBoule2 = $repository->findBy(array('boule2' => $boule2));
          $statBoule3 = $repository->findBy(array('boule3' => $boule3));
          $statBoule4 = $repository->findBy(array('boule4' => $boule4));
          $statBoule5 = $repository->findBy(array('boule5' => $boule5));
          $statBouleComp = $repository->findBy(array('bouleComp' => $bouleComp));
          $countStat1 = count($statBoule1);
          $countStat2 = count($statBoule2);
          $countStat3 = count($statBoule3);
          $countStat4 = count($statBoule4);
          $countStat5 = count($statBoule5);
          $countStatComp = count($statBouleComp);

          return $this->render('default/jeux.html.twig',array('maxDateTirage' => current($maxGain)->getDateTirage(),'b1' => current($maxGain)->getBoule1(),'b2' => current($maxGain)->getBoule2(),
          'b3' => current($maxGain)->getBoule3(),'b4' => current($maxGain)->getBoule4(),'b5' => current($maxGain)->getBoule5(),'bComp' => current($maxGain)->getBouleComp(),'maxGain' => current($maxGain)->getG1(),'statistique' => "true",'dateTirage' => 'false',
            'boule1' => $boule1, 'boule2' => $boule2, 'boule3' => $boule3, 'boule4' => $boule4, 'boule5' =>
             $boule5, 'bouleComp' => $bouleComp,'statBoule1' => $countStat1, 'statBoule2' => $countStat2, 'statBoule3' => $countStat3, 'statBoule4' => $countStat4, 'statBoule5' => $countStat5, 'statBouleComp' => $countStatComp));
        }
   }

    /**
     * @Route("/pageAccueil", name="pageAccueil")
     */
    public function pageAccueilAction(Request $request)
    {

      $session = $this->get('session');

      if( $session->get('user') === null)
      {
        // On récupère le repository
          $repository = $this->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:Utilisateur');

        // On récupère l'entité correspondante à l'id $id
          $pass = $request->request->get("password");
          $email = $request->request->get("email");

        $user = $repository->findOneBy(array('email' => $email,'password' => $pass));

         if (null === $user) {
          return $this->render('default/index.html.twig',array('errorAuthentification' => 'L\'utilisateur saisie est incorrecte.'));
        }

        $session->set('user', $email);
        //retourne un tableau de valeur .
        return $this->render('default/jeux.html.twig',array('maxGain' => 'false','statistique' => "false",'dateTirage' => 'false'));
      }
      else
      {
         return $this->render('default/jeux.html.twig',array('maxGain' => 'false','statistique' => "false",'dateTirage' => "false"));
      }

    }

     /**
     * @Route("/inscription", name="inscription")
     */
     public function inscriptionAction(Request $request)
    {
      return $this->render('default/inscription.html.twig', array(
             'errorInscription' => ''));
    }

    /**
    * @Route("/inscript", name="inscript")
    */
    public function inscriptAction(Request $request)
    {
        // On récupère l'entité correspondante à l'id $id
        $pass = $request->request->get("password");
        $email = $request->request->get("email");

        if (empty($pass) || empty($email))
        {
          return $this->render('default/inscription.html.twig', array('errorInscription' => 'Merci de vérifier vos informations saisies.' ));
        }

        $utilisateur = new Utilisateur();
        $utilisateur->setEmail($email);
        $utilisateur->setPassword($pass);

         // On récupère le repository
        $repository = $this->getDoctrine()
          ->getManager();
          
        
        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $repository->persist($utilisateur);

        // actually executes the queries (i.e. the INSERT query)
        $repository->flush();
                
        //retourne un tableau de valeur .
        return $this->render('default/index.html.twig',array('errorAuthentification' => ''));
    }
}
