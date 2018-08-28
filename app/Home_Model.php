<?php

// el namespace es para poder hubicarlo
// en los controladores 
namespace App;

use Illuminate\Database\Eloquent\Model;



class Home_Model extends Model
{

	// ahy que colocar el nombre de la tabla si es diferente a la clase del modelo
	// por ejemplo $table son propiedades que ya vienen en la clase model
	// entonces lo que hago es extenderla y establecer el valor
	protected $table = 'productos';

    // $productos = DB::table('productos')->get();
  
}
