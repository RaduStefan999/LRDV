<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proiect;
use PDF;

class PdfGenerator extends Controller
{
    public function Diploma ($id) {
        $all = Proiect::all();
        $proiect;
        foreach ($all as $data) {
            if ($data->id == $id) {
                $proiect = $data;
            }
        }

        $pdf = \App::make('dompdf.wrapper');
        $HTM_string = view('diploma', compact('proiect'))->render();
        

        $pdf->loadHTML($HTM_string);
        return $pdf->stream();
    }
}
