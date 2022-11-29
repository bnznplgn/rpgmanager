<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    function generateSpeciality()
    {  
        $randomSpecialityNumber = rand(1, 14);
        return $randomSpecialityNumber; 
    }
}
