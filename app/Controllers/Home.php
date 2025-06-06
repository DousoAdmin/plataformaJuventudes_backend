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

    public function misionVision(): string
    {
        return view('repositorio/zamir/mision_vision');
    }
    public function presentacion(): string
    {
        return view('repositorio/zamir/presentacion');
    }
    public function trayectoria(): string
    {
        return view('repositorio/zamir/trayectoria');
    }
    public function imagenes(): string
    {
        return view('repositorio/zamir/imagenes');
    }
}