<?php

namespace App\Http\Controllers;

use App\Jurizare;
use App\Participare;
use Illuminate\Http\Request;
use App\Proiect;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $proiecte = Proiect::all();
        $participare = Participare::first();
        $jurizare = Jurizare::first();
        return view('home')->with(compact('proiecte', 'participare', 'jurizare'));
    }

    public function jurizare(Request $request)
    {
        $jurizare = Jurizare::first();
        $jurizare->start_date = $request->input('j_start');
        $jurizare->end_date = $request->input('j_end');
        $jurizare->save();

        return redirect()->route('home');
    }

    public function participare(Request $request)
    {
        $participare = Participare::first();
        $participare->start_date = $request->input('p_start');
        $participare->end_date = $request->input('p_end');
        $participare->save();

        return redirect()->route('home');
    }

    public function proiect($id)
    {
        $proiect = Proiect::findOrFail($id);
        return view('proiect')->with(compact('proiect'));
    }

    public function descalifica($id)
    {
        $proiect = Proiect::findOrFail($id);
        $proiect->punctaj = 0;
        $proiect->save();

        $data_email = array(
            'nume' => $proiect->nume,
            'elev' => $proiect->elev_one,
        );

        $email = $proiect->email;
        Mail::send('email.descalificat', $data_email, function ($message) use ($email) {

            $message->from('concurs.chisinau@gmail.com', 'Proiect descalificat!');
            $message->to($email)->subject('Proiect descalificat!');

        });
        return redirect()->route('admin.proiect', ['id' => $proiect->id]);
    }

    public function verifica($id)
    {
        $proiect = Proiect::findOrFail($id);
        $proiect->verificat = 1;
        $proiect->save();

        $data_email = array(
            'nume' => $proiect->nume,
            'elev' => $proiect->elev_one,
        );

        $email = $proiect->email;
        Mail::send('email.verificat', $data_email, function ($message) use ($email) {

            $message->from('concurs.chisinau@gmail.com', 'Proiect verificat!');
            $message->to($email)->subject('Proiect verificat!');

        });

        return redirect()->route('admin.proiect', ['id' => $proiect->id]);
    }

    public function punctaj(Request $request, $id)
    {
        $proiect = Proiect::findOrFail($id);
        $proiect->punctaj = $request->input('punctaj');
        if ($request->input('premiu') != 0) {
            $proiect->premiu = $request->input('premiu');
        }
        $proiect->save();

        $data_email = array(
            'nume' => $proiect->nume,
            'elev' => $proiect->elev_one,
            'punctaj' => $request->input('punctaj'),
        );

        $email = $proiect->email;
        Mail::send('email.jurizare', $data_email, function ($message) use ($email) {

            $message->from('concurs.chisinau@gmail.com', 'Proiect jurizat!');
            $message->to($email)->subject('Proiect jurizat!');

        });
        return redirect()->route('admin.proiect', ['id' => $proiect->id]);
    }
}
