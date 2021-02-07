<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Donor123Controller extends Controller
{
    public function index()
    {
        $donations = [
            ['firstname' => 'Azizah', 'lastname' => 'Isack', 'amount' => '250,000', 'email' => 'zizerisack@gmail.com'],
            ['firstname' => 'Arapha', 'lastname' => 'Benson', 'amount' => '750,000', 'email' => 'arapha3432@gmail.com'],
            ['firstname' => 'Benard', 'lastname' => 'Ally', 'amount' => '230,000', 'email' => 'ben478@gmail.com'],
            ['firstname' => 'Ian', 'lastname' => 'Isack', 'amount' => '25,000', 'email' => 'ianisack@gmail.com'],
            ['firstname' => 'Pandule', 'lastname' => 'Benjamin', 'amount' => '75,000', 'email' => 'panduboy@gmail.com'],
            ['firstname' => 'Angaza', 'lastname' => 'Bruno', 'amount' => '230,000', 'email' => 'lastborn3478@gmail.com'],
            ['firstname' => 'Rachel', 'lastname' => 'Paul', 'amount' => '29,000', 'email' => 'rachelpaul@gmail.com'],
            ['firstname' => 'Emanuel', 'lastname' => 'Shemdoe', 'amount' => '68,000', 'email' => 'ema1232@gmail.com'],
            ['firstname' => 'Raphael', 'lastname' => 'Moshi', 'amount' => '230,000', 'email' => 'ben1256713578@gmail.com'],
            ['firstname' => 'Thomas', 'lastname' => 'Tembo', 'amount' => '25,000', 'email' => 'thote1998@gmail.com'],
            ['firstname' => 'Sharifa', 'lastname' => 'Jonathan', 'amount' => '75,000', 'email' => 'sharifajonathan32@gmail.com'],
            ['firstname' => 'Juma', 'lastname' => 'Mcharo', 'amount' => '230,000', 'email' => 'mcharo.juma21@gmail.com'],
            ['firstname' => 'Kelvin', 'lastname' => 'Kimati', 'amount' => '25,000', 'email' => 'kimatikelvin@gmail.com'],
            ['firstname' => 'Elvix', 'lastname' => 'Mulobo', 'amount' => '75,000', 'email' => 'muloboerick@gmail.com'],
            ['firstname' => 'Mariah', 'lastname' => 'Salihe', 'amount' => '200,000', 'email' => 'mariahsalihe@gmail.com'],
            ['firstname' => 'Erick', 'lastname' => 'Isack', 'amount' => '250,000', 'email' => 'erickisack@gmail.com'],
            ['firstname' => 'Jackie', 'lastname' => 'Johnson', 'amount' => '72,000', 'email' => 'jj2343@gmail.com'],
            ['firstname' => 'Mussa', 'lastname' => 'Erickson', 'amount' => '230,000', 'email' => 'ericksonmussa@gmail.com'],
            ['firstname' => 'Rose', 'lastname' => 'Peter', 'amount' => '750,000', 'email' => 'rosepeter@gmail.com'],
            ['firstname' => 'Jane', 'lastname' => 'Patrick', 'amount' => '670,000', 'email' => 'janepatrick@gmail.com'],



        ];

        return view('donations', ['donations' => $donations]);
    }

    public function create()
    {

        return view('operations.create-donations');
    }

    public function update()
    {

        return view('operations.edit-donations');
    }
}
