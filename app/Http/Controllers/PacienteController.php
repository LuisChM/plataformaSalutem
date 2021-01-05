<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\HojaSeguimiento;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SaveConsultaRequest;
use Symfony\Component\Console\Input\Input;

// use SweetAlert;

class PacienteController extends Controller
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
    public function index(Request $request)
    {
        $name  = $request->get('buscarpor');
        $paciente = Paciente::where('nombre', 'like', "%$name%")->paginate();
        return view('nutricion.pacientes.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')
            ->join('asignar_roles', 'users.id', '=', 'asignar_roles.user_id')
            ->join('roles', 'asignar_roles.role_id', '=', 'roles.id')
            ->where('roles.nombre', '=', 'paciente')
            ->select('users.*')
            ->get();

        return view('nutricion.pacientes.create', [
            'paciente' => new Paciente,
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveConsultaRequest $request)
    {
        $datos = Paciente::create($request->validated());
        $user_id = $request->input("user_id");
        $radio = $request->input("genero");
        $datos->user_id = $user_id;
        $datos->genero = $radio;
        $datos->save();

        return redirect()->route('pacientes.index')->with('success', 'La consulta se formo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('nutricion.pacientes.show', ['paciente' => $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $seguimiento = HojaSeguimiento::where('paciente_id', $paciente->id)->get();
        // dd($seguimiento);
        return view('nutricion.pacientes.edit', [
            'paciente' => $paciente,
            'seguimiento' => $seguimiento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(SaveConsultaRequest $request, Paciente $paciente)
    {

        $paciente->update($request->validated());
        return redirect()->route('pacientes.index')->with('success', 'Se actualizo el paciente con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
