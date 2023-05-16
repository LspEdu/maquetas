<?php

namespace App\Controller;

use App\Entity\Alumno;
use App\Repository\HabitacionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlumnoController extends AbstractController
{
    #[Route('/alumno', name: 'app_alumno')]
    public function index(): Response
    {
        return $this->render('alumno/index.html.twig', [
            'controller_name' => 'AlumnoController',
        ]);
    }

    #[Route('/alumno/crear', name: 'alumno_crear')]
    public function crear(EntityManagerInterface $em, HabitacionRepository $habitacionRepository)
    {
        $nombres = [
            'Pepe',
            'Juan',
            'Luis',
            'Jesús',
            'María',
        ];
        $apes = [
            'Gómez',
            'Revilla',
            'García',
            'Sanchez',
            'del Rocío',
        ];
        $cursos = [
            '1 ESO',
            '2 ESO',
            '1 BTO',
            '2 CGS',
            '1 CGM',
        ];
        foreach ($habitacionRepository->findBy(['numeroModulo' => '20']) as $hab) {
            for ($i=0; $i < 3; $i++) { 
                $alumno = new Alumno();
                $alumno ->setNombre($nombres[rand(0,4)])
                        ->setApellido1($apes[rand(0,4)])
                        ->setApellido2($apes[rand(0,4)])
                        ->setTlf1(rand(600000000, 720000000))
                        ->setTlf2(rand(600000000, 720000000))
                        ->setCurso($cursos[rand(0,4)])
                        ->setEdad(rand(12, 20))
                        ->setHabitacion($hab);
                $em->persist($alumno);
                $em->flush();
            }
        }
        return $this->redirectToRoute('app_habitacion');

    }
}
