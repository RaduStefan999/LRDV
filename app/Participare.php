<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participare extends Model
{
    protected $dates = [
        'start_date',
        'end_date',
    ];
}
