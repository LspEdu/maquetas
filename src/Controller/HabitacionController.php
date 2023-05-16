<?php

namespace App\Controller;

use App\Entity\Habitacion;
use App\Repository\AlumnoRepository;
use App\Repository\HabitacionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HabitacionController extends AbstractController
{
    #[Route('/habitacion', name: 'app_habitacion')]
    public function index(HabitacionRepository $habitacionRepository, Request $request, AlumnoRepository $alumnoRepository)
    {
        $hoy = new \DateTime();
        $html = $this->renderView('/habitacion/index.html.twig', [
            'habitaciones' =>  $habitacionRepository->findBy(['numeroModulo' => '20']), 
            'title' => "Módulo 20",
            'path' => $request->getHost().$request->getBasePath(),
            'name' => "Modulo_20_ " . $hoy->format('d-m-Y_H:i'),
            'hoy' => $hoy,
        ]); 
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setChroot($this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html); 
        $dompdf->setPaper('A4', 'Portrait');
        $dompdf->render();

        $dompdf->stream("salida " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);

        return $this->render('/habitacion/index.html.twig',[
            'name' => "Modulo_20_ " . $hoy->format('d-m-Y_H:i'),
        ]);

    }

    #[Route('/habitacion/crear', name: 'habitación_crear')]
    public function crear(EntityManagerInterface $em)
    {
        $letras = ['A', 'B', 'C', 'D'];
        foreach($letras as $letra) {
                $habitacion = new Habitacion();
                $habitacion ->setNumeroModulo(20)
                            ->setLetra($letra);
                $em->persist($habitacion);
                $em->flush();
        }
        return $this->redirectToRoute('alumno_crear');
    }
}
