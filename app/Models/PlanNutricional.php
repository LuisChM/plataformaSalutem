<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanNutricional extends Model
{
    protected $fillable = [
        'desLunes',
        'mMatLunes',
        'almLunes',
        'mMerLunes',
        'cenLunes',
        'desMartes',
        'mMatMartes',
        'almMartes',
        'mMerMartes',
        'cenMartes',
        'desMiercoles',
        'mMatMiercoles',
        'almMiercoles',
        'mMerMiercoles',
        'cenMiercoles',
        'desJueves',
        'mMatJueves',
        'almJueves',
        'mMerJueves',
        'cenJueves',
        'desViernes',
        'mMatViernes',
        'almViernes',
        'mMerViernes',
        'cenViernes',
        'desSabado',
        'mMatSabado',
        'almSabado',
        'mMerSabado',
        'cenSabado',
        'desDomingo',
        'mMatDomingo',
        'almDomingo',
        'mMerDomingo',
        'cenDomingo',

    ];
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
