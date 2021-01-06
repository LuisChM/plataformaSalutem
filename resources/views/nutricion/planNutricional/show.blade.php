@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Plan Nutricional</h1>
@stop

@section('content')
    <div class="container">
        <div class="responsive-table">
            <table class="table mt-4 text-center">
                <thead class="thead-green">
                    <tr>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sabádo</th>
                        <th scope="col">Domingo</th>

                    </tr>
                </thead>
                <tbody class="bg-white text-left ">
                    {{-- Desayuno --}}
                    <tr>

                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desLunes">Desayuno</label>
                            <p>{{ $planNutricional->desLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desMartes">Desayuno</label>
                            <p>{{ $planNutricional->desMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desMiercoles">Desayuno</label>
                            <p>{{ $planNutricional->desMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desJueves">Desayuno</label>
                            <p>{{ $planNutricional->desJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desViernes">Desayuno</label>
                            <p>{{ $planNutricional->desViernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desSabado">Desayuno</label>
                            <p>{{ $planNutricional->desSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desDomingo">Desayuno</label>
                            <p>{{ $planNutricional->desDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Desayuno --}}

                    {{-- Merienda matutina --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatLunes">Merienda matutina</label>
                            <p>{{ $planNutricional->mMatLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatMartes">Merienda matutina</label>
                            <p>{{ $planNutricional->mMatMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatMiercoles">Merienda matutina</label>
                            <p>{{ $planNutricional->mMatMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatJueves">Merienda matutina</label>
                            <p>{{ $planNutricional->mMatJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatviernes">Merienda matutina</label>
                            <p>{{ $planNutricional->mMatviernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatSabado">Merienda matutina</label>
                            <p>{{ $planNutricional->mMatSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatDomingo">Merienda matutina</label>
                            <p>{{ $planNutricional->mMatDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Merienda matutina --}}

                    {{-- Almuerzo --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almLunes">Almuerzo</label>
                            <p>{{ $planNutricional->almLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almMartes">Almuerzo</label>
                            <p>{{ $planNutricional->almMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almMiercoles">Almuerzo</label>
                            <p>{{ $planNutricional->almMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almJueves">Almuerzo</label>
                            <p>{{ $planNutricional->almJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almViernes">Almuerzo</label>
                            <p>{{ $planNutricional->almViernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almSabado">Almuerzo</label>
                            <p>{{ $planNutricional->almSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almDomingo">Almuerzo</label>
                            <p>{{ $planNutricional->almDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Almuerzo --}}

                    {{-- Merienda tarde --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerLunes">Merienda tarde</label>
                            <p>{{ $planNutricional->mMerLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerMartes">Merienda tarde</label>
                            <p>{{ $planNutricional->mMerMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerMiercoles">Merienda tarde</label>
                            <p>{{ $planNutricional->mMerMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerJueves">Merienda tarde</label>
                            <p>{{ $planNutricional->mMerJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerviernes">Merienda tarde</label>
                            <p>{{ $planNutricional->mMerviernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerSabado">Merienda tarde</label>
                            <p>{{ $planNutricional->mMerSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerDomingo">Merienda tarde</label>
                            <p>{{ $planNutricional->mMerDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Merienda tarde --}}

                    {{-- Cena --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenLunes">Cena</label>
                            <p>{{ $planNutricional->cenLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenMartes">Cena</label>
                            <p>{{ $planNutricional->cenMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenMiercoles">Cena</label>
                            <p>{{ $planNutricional->cenMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenJueves">Cena</label>
                            <p>{{ $planNutricional->cenJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenViernes">Cena</label>
                            <p>{{ $planNutricional->cenViernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenSabado">Cena</label>
                            <p>{{ $planNutricional->cenSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenDomingo">Cena</label>
                            <p>{{ $planNutricional->cenDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Cena --}}



                </tbody>

            </table>
        </div>

        <div class="d-flex justify-content-end mt-5 mb-5">
            <a class="btn btn-primary mr-3" href="{{ route('planNutricionals.index') }}" role="button">Volver</a>
        </div>
    </div>

    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
    @stop