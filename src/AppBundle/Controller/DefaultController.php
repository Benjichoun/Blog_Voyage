<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BatistaBadelon\BlogBundle\Entity\Article;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {


        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('BatistaBadelonBlogBundle:Article')
            ;

        if(!isset($_GET['search']) && !isset($_GET['continent']) && !isset($_GET['auteur'])) {
            $AllArticle = $repository->findAll();
        }
        else{
            if(!isset($_GET['continent']) && !isset($_GET['auteur'])) {
                $data = $_GET['search'];
                $AllArticle = $repository->createQueryBuilder('article')
                    ->where('article.titre LIKE :search OR article.ville LIKE :search OR article.auteur LIKE :search OR article.pays LIKE :search OR article.texte LIKE :search OR article.phrase LIKE :search')
                    ->setParameter('search', "%$data%")
                    ->getQuery();
            }
            else{
                if(!isset($_GET['auteur'])) {
                    $data = $_GET['continent'];
                    $AllArticle = $repository->createQueryBuilder('article')
                        ->where('article.continent LIKE :continent')
                        ->setParameter('continent', "%$data%")
                        ->getQuery();
                }
                else{
                    $data = $_GET['auteur'];
                    $AllArticle = $repository->createQueryBuilder('article')
                        ->where('article.auteur LIKE :auteur')
                        ->setParameter('auteur', "%$data%")
                        ->getQuery();
                }
            }




            $AllArticle= $AllArticle->getResult();

        }




        // replace this example code with whatever you need
        return $this->render('base.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'AllArticle' => $AllArticle
        ));
    }
}
