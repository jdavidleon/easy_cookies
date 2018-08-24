<?php 

	// Autoload
	spl_autoload_register( function ($nombre_clase) {
		include DIRECTORIO_ROOT.'class/class.'.$nombre_clase.".php";
	});


	/*
	*
	* Cear Cookie 
	*
	*/

	$data1 = array('first' => 1, 'second' => 2 );

	Cookie::createCookie('nombre_cookie',$data1, 60 * 60 * 24 * 31);


	/*
	*
	* Retornar Cookie 
	*
	*/

	Cookie::readCookie('nombre_cookie');

	/*
	*
	* Buscar dentro de Cookie 
	*
	*/

	$keys = array('firts' => 1);

	Cookie::find('nombre_cookie',$keys);

	/*
	*
	* Actualizar valor de Cookie 
	*
	*/

	$compare = array('firts' => 1);
	$insert = array('firts' => 3);

	Cookie::updateCookie('nombre_cookie',$compare,$insert);