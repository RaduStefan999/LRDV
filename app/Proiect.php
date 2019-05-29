<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proiect extends Model
{
    public function judet () {
        return $this->hasOne('\App\Judet', 'id', 'judet_id');
    }

    public function sectiune () {
        return $this->hasOne('\App\Sectiune', 'id', 'sectiune_id');
    }
}
