<?php

namespace App\Controller;

use App\Entity\Amonestacion;
use App\Form\AmonestacionType;
use App\Repository\AmonestacionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AmonestacionController extends AbstractController
{
    #[Route('/amonestacion', name: 'app_amonestacion')]
    public function index(AmonestacionRepository $amonRep, Request $request)
    {
        $hoy = new \DateTime();
        $html = $this->renderView('/amonestacion/index.html.twig', [
            'codigo' => $amonRep->find(1),
            'title' => "Amonestacion " . $hoy->format('d-m-Y_H:i'),
            'path' => $request->getHost().$request->getBasePath(),
        ]);
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4');
        $dompdf->render();

        $dompdf->stream("Amonestacion " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);

        //Si no carga el PDF cargará la vista
        //Sin esto da error interno aunque cargue el PDF porque debe devolver un objeto Response
        return $this->render('/amonestacion/index.html.twig', [
            'amonestacion' => $amonRep->find(1),
            'title' => "Amonestacion " . $hoy->format('d-m-Y_H:i'),
        ]);
    }

    #[Route('/amonestacion/crear', name: 'amonestacion_crear')]
    public function crear(EntityManagerInterface $em, Request $request)
    {
        $amonestacion = new Amonestacion();

        $form = $this->createForm(AmonestacionType::class, $amonestacion);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $amonestacion = $form->getData();
            $time = new \DateTimeImmutable();
            $amonestacion
                ->setFecha($time)
                ->setHora($time);
            $em->persist($amonestacion);
            $em->flush();
            return $this->redirectToRoute('app_amonestacion');
        }
        return $this->renderForm('/amonestacion/crear.html.twig', [
            'form' => $form,
        ]);
    }
}
