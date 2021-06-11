<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\MaterielRepository;
use App\Repository\LienRepository;
use App\Entity\Client;
use App\Entity\Materiel;
use App\Entity\Lien;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireController extends AbstractController
{
    /**
     * @Route("/", name="formulaire")
     */
    public function index(ClientRepository $repoCli, MaterielRepository $repoMat, LienRepository $repoLie): Response
    {   
        $lien = $repoLie->findAll();
        $client = $repoCli->findAll();
        $materiel = $repoMat->findAll();

        return $this->render('formulaire/index.html.twig', compact('client', 'materiel', 'lien'));
    }

    /**
     * @Route("/stats")
     */
    public function stats(ClientRepository $repoCli, MaterielRepository $repoMat, LienRepository $repoLie): Response
    {   
        $lien = $repoLie->findAll();
        $client = $repoCli->findAll();
        $materiel = $repoMat->findAll();

        return $this->render('formulaire/stats.html.twig', compact('client', 'materiel', 'lien'));
    }

    /**
     * @Route("/createcli", methods="GET|PATCH|POST"))
     */
    public function createcli(Request $request, ClientRepository $repoCli, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $client = new Client;
            $client->setFirstname($request->request->get("firstname"));
            $client->setLastname($request->request->get("lastname"));
            $em->persist($client);
            $em->flush();
        }
        return $this->render('formulaire/createcli.html.twig');
    }

    /**
     * @Route("/createmat", methods="GET|PATCH|POST"))
     */
    public function createmat(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $materiel = new Materiel;
            $materiel->setName($request->request->get("name"));
            $materiel->setCost($request->request->get("cost"));
            $materiel->setState(false);
            $em->persist($materiel);
            $em->flush();
        }
        return $this->render('formulaire/createmat.html.twig');
    }

    /**
     * @Route("/create", methods="GET|PATCH|POST"))
     */
    public function create(Request $request, EntityManagerInterface $em, ClientRepository $repoCli, MaterielRepository $repoMat): Response
    {
        $client = $repoCli->findAll();
        $materiel = $repoMat->findAll();

        if ($request->isMethod('POST')) {
            $lien = new Lien;
            $lien->setClientId($request->request->get("client_id"));
            $lien->setMaterielId($request->request->get("materiel_id"));
            $lien->setDate(" ");
            $em->persist($lien);
            $em->flush();
        }

        return $this->render('formulaire/create.html.twig', compact('client', 'materiel'));
    }
}
