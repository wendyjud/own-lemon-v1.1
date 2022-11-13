<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    // Lo que aparecera en respuesta
    public function index(){
        return view('admin/index');
    }
    
    public function verPedidos(){

        $datos['pedido']=Pedido::paginate(5);
        return view('admin/pedidos',$datos);
    }
}
