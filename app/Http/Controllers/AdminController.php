<?php

namespace App\Http\Controllers;
use App\Pediatre;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {



        $pediatres = Pediatre::where('isActive', '=', 0) -> paginate(3);
        \Barryvdh\Debugbar\Facade::info($pediatres);


        return view('admin.dashboard', compact(['pediatres']) );


    }
}
