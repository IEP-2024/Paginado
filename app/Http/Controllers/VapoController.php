<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Vapo;

class VapoController extends Controller
{

    public function Listar(Request $request){
        $vapos = Vapo::all();
        return $vapos;
    }

    public function Crear(Request $request){
        $vapo = new Vapo();
        $vapo -> marca = $request->post("marca");
        $vapo -> modelo = $request->post("modelo");
        $vapo -> color = $request->post("color");
        $vapo -> cantidad_de_pilas = $request->post("cantidad_de_pilas");
        $vapo -> potencia_maxima = $request->post("potencia_maxima");
        $vapo -> capacidad = $request->post("capacidad");
        $vapo -> save();
        return $vapo;
    }








}
