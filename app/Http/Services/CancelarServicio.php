<?php

namespace App\Http;
use App\Http\Controller\Kernel\Controller;
use App\Constracts\ICancelarServicio;

class CancelarServicio extends 
{
    public function CancelarServicio ($IdServicio)
    {
        $Servicio= CancelarServicio($IdServicioId);
        if($Servicio==null)
        	throw new \ErrorException("No se elimino");
        	
    }
  }
