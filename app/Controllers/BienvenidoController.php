<?php

namespace App\Controllers;

class BienvenidoController extends BaseController
{

    public function bienvenido()
    {
        return view('bienvenido.php');
    }
}