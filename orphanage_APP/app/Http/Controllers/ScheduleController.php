<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = [
            ['firstname' => 'Abdalla', 'lastname' => 'Abuu', 'phonenumber' => '+255783456735', 'date' => 'March 14, 2021', 'time' => '03:00 pm'],
            ['firstname' => 'Emily', 'lastname' => 'Victor', 'phonenumber' => '+255783463735', 'date' => 'March 21, 2021', 'time' => '10:00 am'],
            ['firstname' => 'Benson', 'lastname' => 'Isack', 'phonenumber' => '+255783457835', 'date' => 'March 13, 2021', 'time' => '03:00 pm'],
            ['firstname' => 'Emily', 'lastname' => 'John', 'phonenumber' => '+255783463987', 'date' => 'April 26, 2021', 'time' => '10:00 am'],
            ['firstname' => 'Abdallah', 'lastname' => 'Abdallah', 'phonenumber' => '+255783457644', 'date' => 'January 15, 2021', 'time' => '03:00 pm'],
            ['firstname' => 'Emily', 'lastname' => 'Victor', 'phonenumber' => '+255783466566', 'date' => 'July 21, 2021', 'time' => '10:00 am'],
            ['firstname' => 'Mathew', 'lastname' => 'Amani', 'phonenumber' => '+255783457878', 'date' => 'June 13, 2021', 'time' => '03:00 pm'],
            ['firstname' => 'Chipegwa', 'lastname' => 'Yoram', 'phonenumber' => '+255783463999', 'date' => 'April 26, 2021', 'time' => '10:00 am'],
            ['firstname' => 'Mary', 'lastname' => 'Joseph', 'phonenumber' => '+255783464445', 'date' => 'April 14, 2021', 'time' => '09:00 am'],
            ['firstname' => 'James', 'lastname' => 'Gabriel', 'phonenumber' => '+255783457649', 'date' => 'January 15, 2021', 'time' => '03:00 pm'],
            ['firstname' => 'Imani', 'lastname' => 'Ally', 'phonenumber' => '+255783466569', 'date' => 'July 29, 2021', 'time' => '12:00 pm'],
            ['firstname' => 'Elizabeth', 'lastname' => 'Amani', 'phonenumber' => '+255783457878', 'date' => 'June 12, 2021', 'time' => '03:00 pm'],
            ['firstname' => 'Monica', 'lastname' => 'Benard', 'phonenumber' => '+255783423999', 'date' => 'April 20, 2021', 'time' => '10:00 am'],

        ];

        return view('schedule', ['schedule' => $schedule]);
    }

    public function create()
    {

        return view('operations.create-schedule');
    }

    public function update()
    {

        return view('operations.edit-schedule');
    }
}
