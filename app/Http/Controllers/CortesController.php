<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CortesController extends Controller
{
    
    public function index(){
        return view('site.cortes');
    }

    public function barba(){
        return view('site.servicos.barba');
    }

    public function coloracao(){
        return view('site.servicos.coloracao');
    }

    public function cuidados(){
        return view('site.servicos.cuidados');
    }

    public function tratamento(){
        return view('site.servicos.tratamento');
    }

}
