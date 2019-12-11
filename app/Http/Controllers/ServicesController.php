<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\Service;

class ServicesController extends Controller
{
    public function details(){
        $Professional = Professional::all();
        $Service = Service::all();
        
        return view('examen.details', compact('Professional','Service'));
    }
}
