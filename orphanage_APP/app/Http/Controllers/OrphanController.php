<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrphanController extends Controller
{
   
    public function index()
    {
        $orphans = [
            ['firstname' => 'John', 'lastname' => 'Mbaga', 'gender' => 'male', 'age' => '27','status_id' => 'kipofu na kiziwi', 'date of birth' => '12/04/1993', 'register date' => '12/04/2020'],
            ['firstname' => 'Marry', 'lastname' => 'magu', 'gender' => 'female', 'age' => '20','status_id' => 'kiziwi', 'date of birth' => '01/07/1998', 'register date' => '12/03/2019'],
            ['firstname' => 'Arnold', 'lastname' => 'turuma', 'gender' => 'male', 'age' => '26','status_id' => 'kipofu', 'date of birth' => '11/05/1995', 'register date' => '23/07/2015'],
            ['firstname' => 'Christopher', 'lastname' => 'Lukulelo', 'gender' => 'male', 'age' => '23','status_id' => 'Albino', 'date of birth' => '17/11/1993', 'register date' => '10/09/2020'],
            ['firstname' => 'ALpa', 'lastname' => 'Kimoda', 'gender' => 'male', 'age' => '21','status_id' => 'kilema wa viungo', 'date of birth' => '11/04/2000', 'register date' => '10/09/2020'],
            ['firstname' => 'Boniface', 'lastname' => 'Mosha', 'gender' => 'male', 'age' => '19','status_id' => 'kipofu na kilema wa miguu', 'date of birth' => '12/06/2002', 'register date' => '12/04/2015'],
            ['firstname' => 'Amina', 'lastname' => 'MSabato', 'gender' => 'female', 'age' => '31','status_id' => 'kiziwi', 'date of birth' => '10/11/1990', 'register date' => '12/04/2012'],
            ['firstname' => 'Grace', 'lastname' => 'odunga', 'gender' => 'female', 'age' => '20','status_id' => 'albino', 'date of birth' => '22/08/2000', 'register date' => '12/04/2020'],
            


        ];

        return view('orphans', ['orphans' => $orphans]);
    }

    public function create()
    {

        return view('operations.create-orphans');
    }

    public function update()
    {

        return view('operations.edit-orphans');
    }
}
    

