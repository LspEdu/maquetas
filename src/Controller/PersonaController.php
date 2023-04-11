<?php

namespace App\Controller;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Knp\Snappy\Pdf;

class PersonaController extends AbstractController
{
    #[Route('/', name: 'cocina_pdf')]
    public function index(Pdf $pdf)
    {
        $html = $this->renderView('persona/index.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html),
            'parte_cocina.pdf',
        );
    }


    #[Route('/diario', name: 'diario_pdf')]
    public function diario(Pdf $pdf)
    {
        $html = $this->renderView('persona/diario.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html),
            'parte_diario.pdf',
        );
    }

    #[Route('/permiso', name: 'permiso_pdf')]
    public function perm(Pdf $pdf)
    {
        $html = $this->renderView('/persona/permiso.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html),
            'Permiso_Alumnado.pdf',
        );
    }

    #[Route('/salida', name: 'salida_pdf')]
    public function salida(Pdf $pdf)
    {
        $html = $this->renderView('/persona/salida.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html, [
                'orientation' => 'Landscape'
            ]),
            'Permiso_Salida.pdf',
        );
    }

    #[Route('/autorizacion', name: 'autorizacion_pdf')]
    public function autorizacion(Pdf $pdf)
    {
        $html = $this->renderView('/persona/autori.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html, [
                'orientation' => 'Landscape'
            ]),
            'Autorizacion_Salida.pdf',
        );
    }

    #[Route('/amonestacion', name: 'amonestacion_pdf')]
    public function amonestacion(Pdf $pdf)
    {
        $html = $this->renderView('/persona/amonestacion.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html, [
            ]),
            'Amonestacion.pdf',
        ); 
    }

    #[Route('/revision', name: 'revision_pdf')]
    public function revision(Pdf $pdf)
    {
        $html = $this->renderView('/persona/revision.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html, [
                'orientation' => 'Landscape'
            ]),
            'Revision.pdf',
        ); 

 /*        return $this->render('/persona/revision.html.twig',[
            
        ]); */
    }
}
