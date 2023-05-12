<?php

namespace App\Controller;

use App\Entity\SalidaMayorEdad;
use App\Repository\SalidaMayorEdadRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalidaMayorEdadController extends AbstractController
{
    #[Route('/salida/mayor/edad', name: 'salidamayor')]
    public function index(SalidaMayorEdadRepository $salMayorRep, Request $request): Response
    {
        $hoy = new \DateTime();
        $html = $this->renderView('/salida_mayor_edad/index.html.twig', [
            'salidaMayor' => $salMayorRep->find(1), 
            'title' => "Autorización Salida",
            'path' => $request->getHost().$request->getBasePath(),
            'name' => "salida " . $hoy->format('d-m-Y_H:i'),
            'hoy' => $hoy,
        ]); 
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setChroot($this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html); 
        $dompdf->setPaper('A5', 'landscape');
        $dompdf->render();

        $dompdf->stream("salida " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);

        //Si no carga el PDF cargará la vista
        //Sin esto da error interno aunque cargue el PDF porque debe devolver un objeto Response
        return $this->render('/salida_mayor_edad/index.html.twig', [
            'title' => "salida " . $hoy->format('d-m-Y_H:i'),
        ]);
    }

    #[Route('/salida/mayor/edad/crear', name: 'salidamayor_crear')]
    public function crear(EntityManagerInterface $em)
    {
        $salidaMayor = new SalidaMayorEdad();

        $salidaMayor->setDni('12345678R')
            ->setNombre('Pepe Juan Rodríguez')
            ->setMotivo('Cumpleaños de abuelo')
            ->setFechaLlegada(new \DateTimeImmutable('tomorrow'))
            ->setFechaSalida(new \DateTimeImmutable('now'));

        $em->persist($salidaMayor);
        $em->flush();

        return $this->redirectToRoute('salidamayor');
    }
}
