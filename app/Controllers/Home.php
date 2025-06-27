<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function base(): string
    {
        return view('tools/base',['title' => 'Base de la Aplicación']);
    }

    public function hola_mundo(): string
    {
        return view('repositorio/holamundo');
    }

    public function misionVision(): string
    {
        return view('repositorio/view_ajax/misionVision');
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
        return view('repositorio/view_ajax/imagenes');
    }
    public function servicios(): string
    {
    return view('repositorio/view_ajax/servicios',['title' => 'servicios']);
    }
    public function areas(): string
    {
        return view('repositorio/view_ajax/areas');
    }
    public function testimonios (): string
    {
        return view('repositorio/view_ajax/testimonios');
    }
    public function publicaciones(): string
    {
        return view('repositorio/view_ajax/publicaciones');
    }
}