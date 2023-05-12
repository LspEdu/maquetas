<?php

namespace App\Controller;

use App\Entity\Salida;
use App\Repository\SalidaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SalidaController extends AbstractController
{
    #[Route('/salida', name: 'app_salida')]
    public function index(Request $request, SalidaRepository $salInf)
    {
        $hoy = new \DateTime();
        $html = $this->renderView('/salida/index.html.twig', [
            'salida' => $salInf->find(1), 
            'title' => "Permiso de Salida",
            'path' => $request->getHost().$request->getBasePath(),
        ]);
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setChroot($this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A6', 'landscape');
        $dompdf->render();

        $dompdf->stream("salida " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);

        //Si no carga el PDF cargará la vista
        //Sin esto da error interno aunque cargue el PDF porque debe devolver un objeto Response
        return $this->render('/salida/index.html.twig', [
            'title' => "salida " . $hoy->format('d-m-Y_H:i'),
        ]);

    }

    #[Route('/salida/crear', name: 'salida_crear')]
    public function crear(EntityManagerInterface $em)
    {
        $salida = new Salida();

        $salida
            ->setFechaLlegada(new \DateTimeImmutable('yesterday'))
            ->setFechaSalida(new \DateTimeImmutable('tomorrow'))
            ->setIdAlumno('Paco Pepe')
            ->setIdEducador('Abril Méndez');
        $em->persist($salida);
        $em->flush();
        return $this->redirectToRoute('app_salida');

    }
}
