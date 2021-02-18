<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequiredItem;
use App\Donate;


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
        $donations = Donate::all()->count();
        $janDonations = Donate::whereMonth('donationDate','01')->count();
        $febDonations = Donate::whereMonth('donationDate','02')->count();
        $marDonations = Donate::whereMonth('donationDate','03')->count();
        $aprDonations = Donate::whereMonth('donationDate','04')->count();
        $mayDonations = Donate::whereMonth('donationDate','05')->count();
        $junDonations = Donate::whereMonth('donationDate','06')->count();
        $julDonations = Donate::whereMonth('donationDate','07')->count();
        $augDonations = Donate::whereMonth('donationDate','08')->count();
        $septDonations = Donate::whereMonth('donationDate','09')->count();
        $octDonations = Donate::whereMonth('donationDate','10')->count();
        $novDonations = Donate::whereMonth('donationDate','11')->count();
        $decDonations = Donate::whereMonth('donationDate','12')->count();


        $funds = Donate::all()->sum('money');
        $requiredItems = RequiredItem::all()->count();
        return view('home', [
            'donations' => $donations,
            'requiredItems' => $requiredItems,
            'funds' => $funds,
            'janDonations' => $janDonations,
            'febDonations' => $febDonations,
            'marDonations' => $marDonations,
            'aprDonations' => $aprDonations,
            'mayDonations' => $mayDonations,
            'junDonations' => $junDonations,
            'julDonations' => $julDonations,
            'augDonations' => $augDonations,
            'septDonations' => $septDonations,
            'octDonations' => $octDonations,
            'novDonations' => $novDonations,
            'decDonations' => $decDonations,

        ]);
    }
}
