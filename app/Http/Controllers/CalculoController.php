<?php

namespace App\Http\Controllers;

class CalculoController extends Controller
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
        return view('administracion.calculo.index', compact('calculo'));
    }
}
