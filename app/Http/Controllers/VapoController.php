<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Vapo;

class VapoController extends Controller
{

    public function Listar(Request $request){
        $vapos = Vapo::paginate(10);
        return $vapos;
    }

    public function ListarWeb(Request $request){
        $vapos = Vapo::paginate(10);
        return view("listar", ["vapos" => $vapos]);
    }

    public function Crear(Request $request){
        $vapo = new Vapo();
        $vapo -> marca = $request->post("marca");
        $vapo -> modelo = $request->post("modelo");
        $vapo -> color = $request->post("color");
        $vapo -> save();
        return $vapo;
    }








}
