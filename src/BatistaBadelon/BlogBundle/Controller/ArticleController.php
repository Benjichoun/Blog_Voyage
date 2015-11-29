<?php

namespace BatistaBadelon\BlogBundle\Controller;

use Doctrine\DBAL\Types\StringType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BatistaBadelon\BlogBundle\Entity\Article;

class ArticleController extends Controller
{


    public function formulaireAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $texte = $_POST['texte'];
        $phrase = $_POST['phrase'];
        $continent = $_POST['continent'];
        $pays = $_POST['pays'];
        $ville = $_POST['ville'];

        $status = 'success';
        $e = new Article();


        $e->setTitre($titre);
        $e->setDate(new \DateTime());
        $e->setAuteur($auteur);
        $e->setTexte($texte);

        $e->setPhrase($phrase);
        $e->setContinent($continent);
        $e->setPays($pays);
        $e->setVille($ville);

        $em->persist($e);


        $dossier = 'img/';
        $fichier = basename($_FILES['images']['name']);
        $taille_maxi = 26214400;
        $taille = filesize($_FILES['images']['tmp_name']);

        if ($taille > $taille_maxi || $taille==0) {
            $erreur = 'Le fichier est trop gros ou il n y a pas de fichier';

        }
        $extensions = array('png', 'gif', 'jpg', 'jpeg');
        $extension = pathinfo($_FILES['images']['name']);


        if(!in_array($extension['extension'], $extensions)) //Si l'extension n'est pas dans le tableau
        {
            $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
        }
        if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
        {
            //On formate le nom du fichier ici...
            $fichier = strtr($fichier,
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ ',
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy_');
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            $name = basename($_FILES['images']['name']);
            if (move_uploaded_file($_FILES['images']['tmp_name'], "$dossier/$name")) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {

                echo 'Upload effectué avec succès !';

            } else //Sinon (la fonction renvoie FALSE).
            {
                echo 'Echec de l\'upload !';
            }

        } else {
            echo $erreur;
        }
        $e->setImages("$name");
        $em->flush();


        return $this->redirectToRoute('homepage');

    }

    public function formulairemodifAction()
    {


        $em = $this->getDoctrine()->getManager();
        $id = $_POST['id'];
        $titre = $_POST['titre'];

        $texte = $_POST['texte'];
        $phrase = $_POST['phrase'];
        $continent = $_POST['continent'];
        $pays = $_POST['pays'];
        $ville = $_POST['ville'];
        $rep = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BatistaBadelonBlogBundle:Article');

        $e = $rep->find($id);

        $status = 'success';


        if ($e->getTitre() != $titre)
            $e->setTitre($titre);
        if ($e->getTexte() != $texte)
            $e->setTexte($texte);
        if ($e->getPhrase() != $phrase)
            $e->setPhrase($phrase);
        if ($e->getContinent() != $continent)
            $e->setContinent($continent);
        if ($e->getPays() != $pays)
            $e->setPays($pays);
        if ($e->getVille() != $ville)
            $e->setVille($ville);

        $em->persist($e);

        $name = basename($_FILES['images']['name']);

        if (!empty($name) ) {

            $dossier = 'img/';
            $fichier = basename($_FILES['images']['name']);
            $taille = filesize($_FILES['images']['tmp_name']);
            $taille_maxi = 26214400;


            if ($taille > $taille_maxi || $taille==0) {
                $erreur = 'Le fichier est trop gros ou il n y a pas de fichier';

            }
            $extensions = array('png', 'gif', 'jpg', 'jpeg');
            $extension = pathinfo($_FILES['images']['name']);


            if(!in_array($extension['extension'], $extensions)) //Si l'extension n'est pas dans le tableau
            {
                $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
            }


            if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
            {
                //On formate le nom du fichier ici...
                $fichier = strtr($fichier,
                    'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ ',
                    'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy_');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

                if (move_uploaded_file($_FILES['images']['tmp_name'], "$dossier/$name")) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                {

                    $image=$e->getImages();
                    if(!empty($image))
                    unlink("$dossier/$image");
                    $e->setImages("$name");
                    echo 'Upload effectué avec succès !';
                } else //Sinon (la fonction renvoie FALSE).
                {
                    echo 'Echec de l\'upload !';
                }
            } else {
                echo $erreur;
            }

        }
        $em->flush();


        return $this->redirectToRoute('homepage');

    }

    public function ajouterAction()
    {

        return $this->render('BatistaBadelonBlogBundle:Article:ajouter.html.twig');


    }

    public function modifierAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id = $_GET["id"];
        $rep = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BatistaBadelonBlogBundle:Article');

        $article = $rep->find($id);


        return $this->render('BatistaBadelonBlogBundle:Article:modifier.html.twig', array(
            'article' => $article
        ));
    }


    public function suppAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id = $_GET["id"];
        $rep = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BatistaBadelonBlogBundle:Article');

        $article = $rep->find($id);
        $dossier = 'img/';
         $image=$article->getImages();
        if(!empty($image))
        unlink("$dossier/$image");

        $em->remove($article);

        $em->flush();

        return $this->redirectToRoute('homepage');
    }


    public function carteAction()
    {

        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('BatistaBadelonBlogBundle:Article')
        ;
        $AllArticle = $repository->findAll();


    return $this->render('BatistaBadelonBlogBundle:Article:carte.html.twig', array(
        'AllArticle' => $AllArticle
    ));
}

}