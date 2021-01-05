<?php

namespace App\Http\Controllers;

class VentaController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
        
    }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view('administracion.CompraDeComida.compra');
    }
}
