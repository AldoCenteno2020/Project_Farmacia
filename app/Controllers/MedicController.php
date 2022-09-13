<?php

namespace App\Controllers;

class MedicController extends BaseController
{
    public function nuevo()
    {
        return view('Medicamentos/medic_registro.php');
    }
}