<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected $table='pedido';

   
    public function index()
    {
        //
        $datos['pedido']=Pedido::paginate(5);
        return view ('pedido.mis_pedidos',$datos);
    }

    
    /*public function verPedidos(){

        $datos['pedido']=Pedido::paginate(5);
        return view('admin.pedidos',$datos);
    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('pedido.crear_pedido');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosPedido=request()->except('_token');
        Pedido::insert($datosPedido);
        return response()->json($datosPedido);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

    }

    public function search(Request $request){
        //ORIGINAL
        $pedidos = DB::table('pedido')->where('nombre','like', $request->text."%")->orWhere('rfc_Empresa','like', $request->text."%")->paginate(5);
        //return view('pedido.resultados',$pedidos);
        return view("pedido.resultados",compact("pedidos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pedido=Pedido::findOrFail($id);
        return view('pedido.editar_pedido', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosPedido=request()->except(['_token','_method']);
        Pedido::where('id','=',$id)->update($datosPedido);

        //$pedido=Pedido::findOrFail($id);
        //return view('pedido.editar_pedido', compact('pedido'));
        $datos['pedido']=Pedido::paginate(5);
        return view ('pedido.mis_pedidos',$datos);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Pedido $pedido
    {
        //
        Pedido::destroy($id);
        return redirect('crear-pedido');
        //{{url('/mis_pedidos/'.$pedido->id)}}
        //{{method_filed('DELETE')}}
    }
}
