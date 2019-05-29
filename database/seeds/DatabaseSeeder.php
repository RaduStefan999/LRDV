<?php

use App\Judet;
use App\Jurizare;
use App\Participare;
use App\Sectiune;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Judet::create(['nume' => 'Alba']);
        Judet::create(['nume' => 'Arad']);
        Judet::create(['nume' => 'Arges']);
        Judet::create(['nume' => 'Bacau']);
        Judet::create(['nume' => 'Bihor']);
        Judet::create(['nume' => 'Bistrita-Nasaud']);
        Judet::create(['nume' => 'Botosani']);
        Judet::create(['nume' => 'Braila']);
        Judet::create(['nume' => 'Brasov']);
        Judet::create(['nume' => 'Bucuresti']);
        Judet::create(['nume' => 'Buzau']);
        Judet::create(['nume' => 'Calarasi']);
        Judet::create(['nume' => 'Caras-Severin']);
        Judet::create(['nume' => 'Cluj']);
        Judet::create(['nume' => 'Constanta']);
        Judet::create(['nume' => 'Covasna']);
        Judet::create(['nume' => 'Dambovita']);
        Judet::create(['nume' => 'Dolj']);
        Judet::create(['nume' => 'Galati']);
        Judet::create(['nume' => 'Giurgiu']);
        Judet::create(['nume' => 'Gorj']);
        Judet::create(['nume' => 'Harghita']);
        Judet::create(['nume' => 'Hunedoara']);
        Judet::create(['nume' => 'Ialomita']);
        Judet::create(['nume' => 'Iasi']);
        Judet::create(['nume' => 'Ilfov']);
        Judet::create(['nume' => 'Maramures']);
        Judet::create(['nume' => 'Mehedinti']);
        Judet::create(['nume' => 'Mures']);
        Judet::create(['nume' => 'Neamt']);
        Judet::create(['nume' => 'Olt']);
        Judet::create(['nume' => 'Prahova']);
        Judet::create(['nume' => 'Salaj']);
        Judet::create(['nume' => 'Satu Mare']);
        Judet::create(['nume' => 'Sibiu']);
        Judet::create(['nume' => 'Suceava']);
        Judet::create(['nume' => 'Teleorman']);
        Judet::create(['nume' => 'Timis']);
        Judet::create(['nume' => 'Tulcea']);
        Judet::create(['nume' => 'Valcea']);
        Judet::create(['nume' => 'Vaslui']);
        Judet::create(['nume' => 'Vrancea']);

        Sectiune::create(['nume' => 'Destin literar']);
        Sectiune::create(['nume' => 'Reconstituire']);
        Sectiune::create(['nume' => 'Impact cultural']);
        Sectiune::create(['nume' => 'Pecetele traditiei']);

        Jurizare::create(['start_date' => Carbon::now(), 'end_date' => Carbon::now()]);
        Participare::create(['start_date' => Carbon::now(), 'end_date' => Carbon::now()]);

    }
}
