<?php

namespace App\Http;
use App\Http\Controller\Kernel\Controller;
use App\Constracts\ICancelarServicio;

class RegistrarEntradaService extends
{
    public function Registrar ($horaId, $fechaId);
    {
        $hora= new hora::firstOrFail($horaId);
        if($fechaId==null)
        	trow new \ErrorException("No se registro hora");


        $fecha= new fecha::firstOrFail($fechaId);
        if($fechaId==null)
        	trow new \ErrorException("No se registro fecha");
    }
  }