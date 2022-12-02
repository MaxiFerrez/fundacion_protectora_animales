<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
   
    public function index(){
        $mensajes=Mensaje::all();
        return view('mensajes.index',compact('mensajes'));        
    }

    public function store(Request $request){
        $mensaje=new Mensaje;
        /* $mensaje->nombre = $request->nombre;
        $mensaje->email = $request->email;
        $mensaje->telefono = $request->telefono;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->save(); */
        $mensaje->create(request()->all());
        return redirect()->back();
    }

    public function show(Mensaje $mensaje){
        return view('mensajes.show',compact('mensaje'));
    }

    
    public function destroy(Mensaje $mensaje){
        $mensaje->delete();
        return redirect(route('mensajes.index'));        
    }
}
