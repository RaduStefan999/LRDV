<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proiect;

class DPJudete extends Controller
{
    public function GetJudet ($id) {
        $proiecte = Proiect::all();
        $nr = 0;
        foreach ($proiecte as $proiect) {
            if ($proiect->judet_id == $id) {
                $nr++;
            }
        }
        return $nr;
    }
}
