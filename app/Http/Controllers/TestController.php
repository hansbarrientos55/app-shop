<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function bienvenido() {

    	$a = 5;
    	$b = 10;
    	$c = $a + $b;
    	return view('welcome');
    	//return "El valor de la suma es: conchudo : $c";
    }
}
