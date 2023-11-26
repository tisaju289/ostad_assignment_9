<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function master(){
        return view("pages.master");
    }
    public function home(){
        return view("pages.home");
    }

    public function about(){
        return view("pages.about");
    }

    public function project(){
        return view("pages.project");
    }
    public function contact(){
        return view("pages.contact");
    }


    

}
