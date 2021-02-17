<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;

class DonateController extends Controller
{
    public function store(Request $req){
        $donate = new Donate;
        $donate->name = $req->name;
        $donate->item = $req->item;
        $donate->money = $req->money;
        $donate->donationDate = $req->donationDate;
        $donate->description = $req->description;
        $donate->save();

        return redirect('/')->with('msg','Donation added successfully');
    }

    public function retrieve(){
        
        $donations = Donate::all();

        return view('operations.view-donations',compact('donations'));
    }

    public function delete($id){
        $donation = Donate::find($id);
        $donation->delete();

        return back()->with('msg','deleted successfully');
}
}