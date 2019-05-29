<?php

namespace App\Http\Controllers;

use App\Judet;
use App\Jurizare;
use App\Participare;
use App\Sectiune;
use Illuminate\Http\Request;
use App\Proiect;

class PagesController extends Controller
{
    public function index () {
        $sections = Sectiune::all();
        $proiecte = Proiect::all();
        $judete = Judet::all();
        $participare = Participare::first();
        $jurizare = Jurizare::first();
        $end_date = date('Y-m-d H:i:s' , strtotime(Participare::first()->end_date));
        $now = time();
        $end_date_jurizare = date('Y-m-d H:i:s' , strtotime(Jurizare::first()->end_date));
        $rezultate_are_active = (strtotime($end_date_jurizare) < $now);
        return view('index')->with(compact('sections', 'judete', 'participare', 'jurizare', 'end_date', 'proiecte', 'rezultate_are_active', 'end_date_jurizare'));
    }

    public function proiecte () {
        $proiect = Proiect::all();
        return view('proiecte')->with(compact('proiect'));
    }
}
