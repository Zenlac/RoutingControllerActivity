<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    //
    public function index(){
        $HobbiesData = array(
            "Music", "Videogames",
            "Sleep", "Reading"
        );

        return view('Hobbies', ['HobbiesData'=> $HobbiesData]);
    }
}
