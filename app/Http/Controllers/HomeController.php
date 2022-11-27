<?php

namespace App\Http\Controllers;

use App\Http\Requests\Paciente\StoreRequest;
use App\Http\Requests\Paciente\UpdateRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
     public function index(){
        $paciente=Paciente::orderBy('id','desc')->get();
        return view('home.index', compact('paciente'));
    }

    public function store(StoreRequest $request,Paciente $paciente){

        $q=new Paciente;
            $q->nombres= $request->nombres;
            $q->apellidos=$request->apellidos;
            $q->temperatura=$request->temperatura;
            $q->f_cardiaca=$request->f_cardiaca;
            $q->peso=$request->peso;
            $q->talla=$request->talla;
            $q->p_arterial=$request->p_arterial;
            $q->saturacion=$request->saturacion;
            $q->s_corporal=$request->s_corporal;
            $q->imc=$request->imc;
            $q->r_enfermedad=$request->r_enfermedad;
            $q->clasificacion_imc=$request->  clasificacion_imc;
            $q->save();
        return redirect()->route('home.index')->with('Guardado','OK');

     }
     public function edit(Paciente $paciente){
        return Paciente::find($paciente);
     }

     public function update(UpdateRequest $request,Paciente $paciente){
        $paciente->update($request->all());
        return redirect()->route('home.index')->with('Actualizado','OK');
     }

     public function delete(Paciente $paciente){
        $paciente->delete();
        return redirect()->route('home.index')->with('Eliminado','OK');
     }
}
