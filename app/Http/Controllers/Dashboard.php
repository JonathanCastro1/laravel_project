<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// esta vaina es para poder usar los querys
use Illuminate\Support\Facades\DB;

// aqui se especifica el nombre de la clase del modelo 
// para poder usarlo en el controlador
use App\Home_Model;

class Dashboard extends Controller
{
    public function index()
    { 
        // esta forma es lo mismo que admin/dashboard
    	return view('admin.dashboard');

        // return view('admin/dashboard');  
           	

    }     


    public function mostrar()
    {    	
    	// $productos = Home_Model::all();

        // $productos = Home_Model::find(1);
        // $productos = DB::table('productos')->get();

        $productos = DB::select('select * from productos where id = ?', [1]);


        var_dump($productos);


    }    


}
