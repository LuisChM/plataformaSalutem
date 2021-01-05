<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HojaSeguimiento extends Model
{
    protected $fillable =['paciente_id','logrosPlan', 'deficientes', 'pesoInicial', 'pesoSeguimiento', 'imcInicial',
    'imcSeguimiento', 'grasaInicial', 'grasaSeguimiento', 'circAbdominalInicial', 'circAbdominalSeguimiento', 'requerimientoInicial', 'requerimientoSeguimiento', 'distChoInicial', 'distChoSeguimiento', 'distChonInicial', 'distChonSeguimiento', 'distGrasasInicial',
    'distGrasasSeguimiento', 'cambioPlan', 'metasObjetivos'];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class);
    }}
