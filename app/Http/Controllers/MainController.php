<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function show(){
    	return view('Inscripcion');
    }

	public function showEnd(){
    	return view('EndOfForm');
    }
}

