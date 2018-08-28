<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// esta vaina es para poder usar los querys
use Illuminate\Support\Facades\DB;

// aqui se especifica el nombre de la clase del modelo 
// para poder usarlo en el controlador
use App\Home_Model;

class Login extends Controller
{
    public function index()
    { 
      

        // ejemplo de foreach funcionando
         // $productos = DB::select('select * from productos where id = ?', [1]);
         // ejemplo de foreach funcionando
         // return view('home', ['productos' => $productos]);  

    	return view('login'); 
           	

    }    

    // public function index()
    // {    
    // 	$prueba="jonathan";
    // 	// le paso la variable a la vista	
    // 	return view('login',compact('prueba'));
    // }


    public function mostrar()
    {    	
    	// $productos = Home_Model::all();

        // $productos = Home_Model::find(1);
        // $productos = DB::table('productos')->get();

        $productos = DB::select('select * from productos where id = ?', [1]);


        var_dump($productos);


    }    


}
