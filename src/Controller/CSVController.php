<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use League\Csv\Reader;
use League\Csv\Statement;



class CSVController extends AbstractController
{
    #[Route('/csv', name: 'app_csv')]
    public function index()
    {
        $csvFilePath = './Alumnos.csv';
        $csv = Reader::createFromPath($csvFilePath, 'r');
        $csv->setHeaderOffset(0); // Indica la fila del encabezado en el archivo CSV (VARON, APELLIDOS ETC)...

        //CSV es un objeto que al desglosarlo podemos acceder a la columna en un diccionario 'Cabecera' => valor
        foreach($csv as $row ) {
            print_r($row); // Cada fila completa con sus cabeceras
            print_r($row['APELLIDOS']); // Accedemos sólo a los valores que nos interesan
        }

        die();

    }
}
