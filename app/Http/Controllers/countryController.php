<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class countryController extends Controller
{
    public function index(){
        $countries = [
                ['id' => 1, 'Name' => "India"],
                ['id' => 2, 'Name' => "Singapore"],
                ['id' => 3, 'Name' => "UAE"],
                ['id' => 4, 'Name' => "Qatar"],
                ['id' => 5, 'Name' => "Australia"],
        ];

        return response()-> json($countries);
    }
}
