<?php

namespace App\Controller;

use App\Document\Address;
use App\Form\AddressType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddressController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Route("/address", name="address-list")
     *
     * @return Response
     */
    public function index(): Response
    {
        $om = $this->get('doctrine_mongodb')->getManager();

        $repoAddr = $om->getRepository(Address::class);

        $addresses = $repoAddr->findAll();

        return $this->render('address/index.html.twig', [
            'addresses' => $addresses,
        ]);
    }

    /**
     * @Route("/address/new", name="address-insert")
     *
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $address = new Address();

        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $om = $this->get('doctrine_mongodb')->getManager();

            $om->persist($address);
            $om->flush();

            return $this->redirectToRoute('address-update', [
                'id' => $address->getId(),
            ]);
        }

        return $this->render('address/insert.html.twig', [
            'address' => $address,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/address/{id}", name="address-update")
     *
     * @param Request $request
     * @param string $id
     * @return Response
     */
    public function edit(Request $request, string $id): Response
    {
        $om = $this->get('doctrine_mongodb')->getManager();

        $repoAddr = $om->getRepository(Address::class);

        $address = $repoAddr->find($id);

        if ($address === null) {
            // 404 resource not found
            return $this->redirectToRoute('address-list');
        }

        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $om->persist($address);
            $om->flush();

            return $this->redirectToRoute('address-list');
        }

        return $this->render('address/update.html.twig', [
            'address' => $address,
            'form' => $form->createView(),
        ]);
    }
}
