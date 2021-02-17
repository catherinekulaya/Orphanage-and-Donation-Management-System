<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;

class DonorController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function donateForm()
    {
        return view('user.donate');
    }

    public function donateRequiredForm($item)
    {
        return view('user.donateRequiredItem', [ 'item' => $item]);
    }

}
