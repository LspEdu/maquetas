<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Snappy\Pdf;

class PersonaController extends AbstractController
{

    #[Route('/bocadillo', name: 'bocadillo')]
    public function bocadillo()
    {

        $hoy = new \DateTime();
        $data = [
            'data' => [
                'Planta 1' => [
                    '1' => [
                        'Alumno' => [
                            [
                                'habitacion' => 'A-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],

                    ],
                    '2' => [
                        'Alumno' => [
                             [
                                'habitacion' => 'A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '3' => [
                        'Alumno' => [
                            [
                                'habitacion' => 'A-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '4' => [
                        'Alumno' => [
                             [
                                'habitacion' => 'A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '5' => [
                        'Alumno' => [
                            [
                                'habitacion' => 'A-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '6' => [
                        'Alumno' => [
                             [
                                'habitacion' => 'A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '7' => [
                        'Alumno' => [
                            [
                                'habitacion' => 'A-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '8' => [
                        'Alumno' => [
                             [
                                'habitacion' => 'A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '9' => [
                        'Alumno' => [
                            [
                                'habitacion' => 'A-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'A-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'B-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'C-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BI',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            [
                                'habitacion' => 'D-BD',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                    '10' => [
                        'Alumno' => [
                             [
                                'habitacion' => 'A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                ],
                'Planta 2' => [
                    '1' => [
                        'Alumno' => [
                             [
                                'habitacion' => 'A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                        'Alumno' => [
                            [
                               'habitacion' => 'A',
                               'apartadoAcademico' => [
                                   'alumno' => 'Juan',
                                   
                               ],
                           ],
                           

                       ],
                    ],
                    '2' => [
                        'Alumno' => [
                             [
                                'habitacion' => 'A',
                                'apartadoAcademico' => [
                                    'alumno' => 'Juan',
                                    
                                ],
                            ],
                            

                        ],
                    ],
                ],
            ],
            'bocadilloMan' => 'Nocilla',
            'bocadilloTar' => 'Mortadela con aceituna',
        ];
        $html = $this->renderView('pdf/informe_bocadillos.html.twig', $data);
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->setChroot($this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4');
        $dompdf->render();
        $dompdf->stream("Amonestacion " . $hoy->format('d-m-Y_H:i'), ["Attachment" => false]);
        exit(0);
        //return $this->render('pdf/informe_bocadillos.html.twig', $data); 
    }

    #[Route('/', name: 'index')]
    public function index()
    {
        return $this->render('index.html.twig', []);
    }


    #[Route('/cocina', name: 'cocina_pdf')]
    public function cocina(Pdf $pdf)
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

    #[Route('/salida_knp', name: 'salida_pdf')]
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

    #[Route('/amonestacion_pdf', name: 'amonestacion_pdf')]
    public function amonestacion(Pdf $pdf)
    {
        $html = $this->renderView('/persona/amonestacion.html.twig');
        return new PdfResponse(
            $pdf->getOutputFromHtml($html, []),
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

    #[Route('/cocina_dompdf', name: 'cocina_dompdf')]
    public function cocina_dompdf()
    {
        $html = $this->renderView('/persona/dompdf/cocina.html.twig');
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new PdfResponse(
            $dompdf->stream("parte_cocina", ["Attachment" => false]),

        );
    }

    #[Route('/diario_dompdf', name: 'diario_dompdf')]
    public function diario_dompdf()
    {
        $html = $this->renderView('/persona/dompdf/diario.html.twig');
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new PdfResponse(
            $dompdf->stream("parte_diario", ["Attachment" => false]),

        );
    }
}
