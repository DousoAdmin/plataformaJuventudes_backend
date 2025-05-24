<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function hola_mundo(): string
    {

        return view('repositorio/holamundo');
        
    }

    public function nicolas(): string
    {
        return view('repositorio/holamundo');
    }

    public function zamir(): string
    {
        return view('repositorio/zamir/mision_vision');
    }

    public function santiago(): string
    {
        return view('repositorio/holamundo');
    }



}
