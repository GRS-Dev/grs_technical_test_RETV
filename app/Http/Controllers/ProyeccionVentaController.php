<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProyeccionVenta; 

class ProyeccionVentaController extends Controller
{
    public function index()
    {
        $proyecciones = proyeccionventa::all();
      
        return view('dashboard', compact('proyecciones'));
    }
}
