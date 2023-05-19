<?php

namespace App\Controller;

use App\Entity\Habitacion;
use App\Entity\Modulo;
use App\Repository\AlumnoRepository;
use App\Repository\HabitacionRepository;
use App\Repository\ModuloRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModuloController extends AbstractController
{
    #[Route('/habitacion', name: 'app_habitacion')]
    public function index(HabitacionRepository $habitacionRepository, Request $request)
    {
        $hoy = new \DateTime();
        $html = $this->renderView('/habitacion/index.html.twig', [
            'habitaciones' =>  $habitacionRepository->findBy(['numeroModulo' => '20']),
            'title' => "Módulo 20",
            'path' => $request->getHost() . $request->getBasePath(),
            'name' => "Modulo_20_" . $hoy->format('d-m-Y_H:i'),
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

        return $this->render('/habitacion/index.html.twig', [
            'name' => "Modulo_20_ " . $hoy->format('d-m-Y_H:i'),
        ]);
    }

    #[Route('/habitacion/crear', name: 'habitacion_crear')]
    public function crear(EntityManagerInterface $em)
    {
        $letras = ['A', 'B', 'C', 'D'];
        $modulo = new Modulo();
        $modulo->setNumeroModulo(20);
        $em->persist($modulo);
        foreach ($letras as $letra) {
            $habitacion = new Habitacion();
            $habitacion->setNumeroModulo(20)
                ->setLetra($letra)
                ->setModulo($modulo);
            $modulo->addHabitacione($habitacion);
            $em->persist($habitacion);
        }
        $em->flush();
        return $this->redirectToRoute('alumno_crear');
    }

    #[Route('/modulo', name: 'modulo_revision')]
    public function revision(Request $request, ModuloRepository $moduloRepository)
    {
        $hoy = new \DateTime();
        $modulo = $moduloRepository->find(1);

        $today = date("Y-m-d");
        $mon = new \DateTime($today);
        $sun = new \DateTime($today);
        $mon->modify('last Monday');
        $sun->modify('next Friday');
        $primer = $mon->format("d");
        $ultimo = $sun->format("d");

        $html = $this->renderView('/modulo/index.html.twig', [
            'modulo' =>  $modulo,
            'primer' => $primer,
            'ultimo' => $ultimo,
            'title' => "Revisión de Módulos Módulo Nº " . $modulo->getNumeroModulo(),
            'path' => $request->getHost() . $request->getBasePath(),
            'name' => "Revision_Modulo_" . $modulo->getNumeroModulo() . "_" . $hoy->format('d-m-Y_H:i'),
            'hoy' => $hoy,
        ]);
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setChroot($this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'Landscape');
        $dompdf->render();

        $dompdf->stream("salida " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);

        return $this->render('/modulo/index.html.twig', [
            'name' => "Modulo_20_ " . $hoy->format('d-m-Y_H:i'),
        ]);
    }
}
