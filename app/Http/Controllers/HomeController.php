<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
        /*if(auth()->user()->tipo=='1'){
            return redirect()->to('admin/index');
        }
        else{
            return redirect()->to('/');
        }*/
    }

     /*intento
     public function store(){
        if(auth()->user()->tipo=='1'){
            return redirect()->to('admin.index');
        }
        else{
            return redirect()->to('/');
        }
    }*/
}
