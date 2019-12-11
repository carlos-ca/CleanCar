<?php

namespace App\Http;
use App\Http\Controller\Kernel\Controller;
use App\Constracts\ICancelarServicio;

class MostrarServiciosSolicitados extends  
{
    public function MostrarServiciosSolicitados ($mostrarId, $listaId)
    {
        $mostrar= new mostrar::firstOrFail($mostrarId);
        if($mostrarId==null)
        	trow new \ErrorException

        $lista= new mostrar::firstOrFail($mostrarId);
        if($listaId==null)
        	trow new \ErrorException
        


    }
}