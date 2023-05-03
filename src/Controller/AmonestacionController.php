<?php

namespace App\Controller;

use App\Entity\Amonestacion;
use App\Form\AmonestacionType;
use App\Repository\AmonestacionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AmonestacionController extends AbstractController
{
    #[Route('/amonestacion', name: 'app_amonestacion')]
    public function index(AmonestacionRepository $amonRep)
    {
        $data = [
            'amonestacion' => $amonRep->find(1)
        ];
        $html = $this->renderView('/amonestacion/index.html.twig', $data);
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new PdfResponse (
            $dompdf->stream("amonestacion", ["Attachment" => false]),

        ); 
/*         return $this->render('/amonestacion/index.html.twig',$data); */
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
