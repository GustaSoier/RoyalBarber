<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('site.login');
    }

    public function cadastrar() {
        return view('site.cadastrar');
    }
}
