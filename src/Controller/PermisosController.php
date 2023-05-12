<?php

namespace App\Controller;

use App\Entity\Permisos;
use App\Repository\PermisosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PermisosController extends AbstractController
{
    #[Route('/permisos', name: 'app_permisos')]
    public function index(PermisosRepository $perRep, Request $request): Response
    {
        $hoy = new \DateTime();
        $html = $this->renderView('/permisos/index.html.twig', [
            'permisos' => $perRep->findAll(), 
            'title' => "Permisos Alumnado",
            'path' => $request->getHost().$request->getBasePath(),
            'name' => "Permisos " . $hoy->format('d-m-Y_H:i'),
            'hoy' => $hoy,
        ]); 
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setChroot($this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html); 
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("salida " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);

        //Si no carga el PDF cargará la vista
        //Sin esto da error interno aunque cargue el PDF porque debe devolver un objeto Response
        return $this->render('/permisos/index.html.twig', [
            'title' => "salida " . $hoy->format('d-m-Y_H:i'),
        ]);
    }

    #[Route('/permisos/crear', name: 'permisos_crear')]
    public function crear(EntityManagerInterface $em)
    {
        $nombres = [
            'Pepe Juan',
            'Alfonso',
            'Manuel',
            'María',
            'Ana',
            'Laura',
        ];
        $motivos = [
            'Dolor de Barriga',
            'Cumpleaños de Abuelo',
            'Vacaciones',
            'Covid-19',
            'Enfermedad',
        ];
        $autoriza = [
            'Carlos',
            'Gloria',
        ];
        for ($i=0; $i < 18; $i++) { 
            $permisos = new Permisos();
            $permisos->setIdAlumno($nombres[rand(0,5)])
                    ->setMotivo($motivos[rand(0,4)])
                    ->setFechaInicio(new \DateTimeImmutable('now'))
                    ->setFechaFin(new \DateTimeImmutable('tomorrow'))
                    ->setAutoriza($autoriza[rand(0,1)]);
            $em->persist($permisos);
        }
        $em->flush();

        return $this->redirectToRoute('app_permisos');
        

    }
}
