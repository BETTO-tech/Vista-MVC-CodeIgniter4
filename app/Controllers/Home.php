<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $datos = [
	'titulo' => '¡Bienvenido a CodeIgniter 4!',
	'mensaje' => 'Esta es mi primera vista desde CodeIgniter4 :P'

	];

	$renderer = service ('renderer');
	$renderer->setData($datos);
	return $renderer->render('home');
    }
}
