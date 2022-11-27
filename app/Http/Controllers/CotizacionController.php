<?php

namespace App\Http\Controllers;

use App\Models\Cotizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CotizacionController extends Controller
{
    //
    protected $table='limones';
    protected $estados = 'estados';

    public function cotizar(Request $request)
    {
        $modalidad=($request->modalidad);
        settype( $modalidad, "float");
        $cantidad=($request->cantidad);
        settype( $cantidad, "float");
        //$precio=DB::table('limones')->select('precio')->where('tipo', 'like',$request->tipo."%")->get();
        $precio=DB::table('limones')->where('tipo', 'like',$request->tipo."%")->value('precio');
        $estado=DB::table('estados')->where('estado', 'like',$request->estado."%")->value('estado');
        $monto=DB::table('estados')->where('estado', 'like',$request->estado."%")->value('monto');
        $total=($modalidad * $cantidad * $precio + $monto);
        //getttype($variable) srive para saber que tipo de dato estamos trabajando
        $tipo=DB::table('limones')->where('tipo', 'like',$request->tipo."%")->value('tipo');
        $msg='El total de tu pedido sería de $'.$total.' por una cantidad de '.$cantidad.' paquetes en presentación de '.$modalidad.' (red/cajas) de limón orgánico '.$tipo.'. El estado seleccionado fue: '.$estado.' y el monto extra por el envío a este estado es de: $'.$monto;
        return view("pedido.cotizar_pedido")->with('msg',$msg);
    
      
        //return view("pedido.cotizar_pedido",compact("precio"));
       // $msg='El total es de:'.$total.'pesos y el tipo es '.$tipo;
    }


    public function pdf(Request $request)
    {
        $modalidad=($request->modalidad);
        $cantidad=($request->cantidad);
        $precio=DB::table('limones')->where('tipo', 'like',$request->tipo."%")->value('precio');
        $total=($modalidad * $cantidad * $precio);
        $tipo=DB::table('limones')->where('tipo', 'like',$request->tipo."%")->value('tipo');
        $msg='El total seria de tu pedido sería de $'.$total.' por una cantidad de '.$cantidad.' paquetes en presentación de '.$modalidad.' (red/cajas) de limón orgánico '.$tipo;
        return view("pedido.pdf");

    }
}
