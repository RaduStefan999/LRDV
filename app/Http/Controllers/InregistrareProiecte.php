<?php

namespace App\Http\Controllers;

use App\Jurizare;
use Illuminate\Http\Request;
use App\Proiect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class InregistrareProiecte extends Controller
{
    public function inregistrare (Request $data) {

        $validator = Validator::make($data->input(), [
            'nume' => 'required:max:255',
            'clasa' => 'required|numeric',
            'sectiune' => 'required|numeric',
            'scoala' => 'required|:max:255',
            'url' => 'required|:max:255',
            'descriere' => 'required|:max:1000',
            'judet' => 'required|numeric',
            'nume_profesor' => 'required|:max:255',
            'materie_profesor' => 'required|:max:255',
            'elev_one' => 'max:255',
            'elev_two' => 'max:255',
            'elev_three' => 'max:255',
            'elev_four' => 'max:255',
            'email' => 'required|email|:max:255'
        ]);
        if ($validator->fails())
            return redirect()->route('acasa')->withInput()->withErrors($validator->errors());
        $stored = new Proiect;
        $stored ->nume = ($data->input('nume'));
        $stored ->email = ($data->input('email'));
        $stored ->clasa = ($data->input('clasa'));
        $stored ->sectiune_id = ($data->input('sectiune'));
        $stored ->scoala = ($data->input('scoala'));
        $stored ->descriere = ($data->input('descriere'));
        $stored ->url = ($data->input('url'));
        $stored ->judet_id = ($data->input('judet'));
        $stored ->prof_nume = ($data->input('nume_profesor'));
        $stored ->prof_materie = ($data->input('materie_profesor'));
        $stored ->elev_one = ($data->input('elev_one'));
        $stored ->elev_two = ($data->input('elev_two'));
        $stored ->elev_three = ($data->input('elev_three'));
        $stored ->elev_four = ($data->input('elev_four'));
        $stored ->save();

        //TRIMITERE EMAILURI
        $data_email = array(
            'nume' => $data->input('nume'),
            'elev' => $data->input('elev_one'),
        );

        $email = $data->input('email');

        Mail::send('email.register', $data_email, function ($message) use ($email) {

            $message->from('concurs.chisinau@gmail.com', 'Proiect inregistrat!');
            $message->to($email)->subject('Proiect inregistrat!');

        });


        return redirect()->route('acasa');

    }
}
