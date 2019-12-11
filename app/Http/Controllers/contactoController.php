<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
public function ver($id)
    {
        return view('contactos.ver', ['id' => $id]);
    }
}