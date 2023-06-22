<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensualidadesController extends Controller{
    public function index(){
        return view('mensualidades');
    }
}
