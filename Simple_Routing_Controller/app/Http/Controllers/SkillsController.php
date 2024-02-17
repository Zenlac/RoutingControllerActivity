<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //
    public function index(){
        $SkillsData = array(
            "Java","HTML","CSS","PHP","Godot",
            "DaVinci Resolve", "Adalo", "Figma"
        );
        return view('Skills', ['SkillsData'=> $SkillsData]);
    }
}
