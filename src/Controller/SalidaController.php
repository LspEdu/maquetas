<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalidaController extends AbstractController
{
    #[Route('/salida', name: 'app_salida')]
    public function index(Request $request): Response
    {
        $hoy = new \DateTime();
        $html = $this->renderView('/salida/index.html.twig', [
            'title' => "Permiso de Salida ",
            'path' => $request->getHost().$request->getBasePath(),
        ]);
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setChroot($this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A6', 'landscape');
        $dompdf->render();

        $dompdf->stream("Amonestacion " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);

        //Si no carga el PDF cargará la vista
        //Sin esto da error interno aunque cargue el PDF porque debe devolver un objeto Response
        return $this->render('/amonestacion/index.html.twig', [
            'title' => "Amonestacion " . $hoy->format('d-m-Y_H:i'),
        ]);

    }
}
