<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelGoogleGrapController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
    }
    function graficoCircular()
    {
        $data = DB::table('pacientes')
                ->select(
                    DB::raw('genero as genero'),
                    DB::raw('count(*) as number'))
                ->groupBy('genero')
                ->get();
        $array[] = ['Genero','Number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->genero, $value->number];  
        }
        return view('charts')->with('genero', json_encode(
            $array));
    }

    // function graficoCombo()
    // {
    //     $data = DB::table('pacientes')
    //             ->select(
    //                 DB::raw('pesoInicial as pesoInicial'),
    //                 // DB::raw('triglicerios as triglicerios'),
    //                 // DB::raw('hemoglobina as hemoglobina'),               
    //                 // DB::raw('colesterol as colesterol'),
    //                 // DB::raw('grasaInicial as grasaInicial'))
    //                  DB::raw('count(*) as number'))
    //             ->groupBy('pesoInicial')
    //             ->get();
    //     $array[] = ['pesoInicial','Number'];
    //     foreach($data as $key => $value)
    //     {
    //         $array[++$key] = [$value->pesoInicial, $value->number];  
    //     }


    //     return view('charts')->with('pesoInicial', json_encode(
    //         $array));

    // }

    public function graficoBarras()
    {
       $pacientes = Paciente::all();
       return view('charts',['pacientes' => $pacientes]);   
    }
    }
