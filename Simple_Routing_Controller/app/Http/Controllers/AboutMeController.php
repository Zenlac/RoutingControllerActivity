<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){

        $AboutMeData = array(
            "name" => "Calel Eizen Rillera",
            "age" => 21,
            "email" => "caleleizenrillera@gmail.com",
            "contact" => "09608960572"
        );
        return view('About_Me', ['AboutMeData'=> $AboutMeData]);
    }
}
