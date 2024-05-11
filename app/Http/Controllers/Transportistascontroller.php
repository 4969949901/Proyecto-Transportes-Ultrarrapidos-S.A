<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class Transportistascontroller extends Controller
{
    public function index()
    {
        $datos=Transportista::all();
        return view('welcome',compact('datos'));
    }

    public function create(){
        return " Se crea registro";
    }
    public function store(Request  $request){

    }

    public function Show( Transportista $trasportista){

    }

    public function edit(Transportista $transportista){

    }

    public function update(Request $request,Transportista $transportista){

    }
    public function destroy(Transportsta $transportsta){

    }
}
