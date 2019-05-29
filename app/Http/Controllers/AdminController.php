<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proiect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function evaluare (Request $data) {

        $validator = Validator::make($data->input(), [
            'punctaj' => 'required|numeric'
        ]);
        if ($validator->fails())
            return redirect()->route('home')->withInput()->withErrors($validator->errors());

        if ($data->punctaj > 100 || $data->punctaj < 0) {
            return redirect()->route('home');
        }

        $proiect = Proiect::find($data->DataID);

        if($proiect) {
            $proiect->punctaj = $data->punctaj;
            $proiect->save();
        }

        $data_email = array(
            'nume' => $proiect->nume,
            'elev' => $proiect->elev_one,
            'punctaj' => $data->punctaj,
        );

        $email = $proiect->email;
        Mail::send('email.jurizare', $data_email, function ($message) use ($email) {

            $message->from('concurs.chisinau@gmail.com', 'Proiect jurizat!');
            $message->to($email)->subject('Proiect jurizat!');

        });

        return redirect()->route('home');
    }

    public function setEventDates (Request $data) {

    }
}
