<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

/**
 * 
 */
class contriesController extends Controller
{
	//public function ver(){
	//	$rapi=null;
	//	
	//}

	public function info(){
		//$pais=
		if(isset($_GET['pais'])){
			$pais=$_GET['pais'];
			$cliente=new Client();
			$respuesta=$cliente->get("https://restcountries.eu/rest/v2/currency/".$pais);

			$rapi=json_decode($respuesta->getBody()->getContents(), true);
			return view('contrie.contries', compact('rapi'));
		}else{
			return view('contrie.contries');
		}
		
	}
}