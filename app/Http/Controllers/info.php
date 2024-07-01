<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class info extends Controller {
    

    public function enviarinfo(Request $request){

        DB::table('viajes')->insert([
            'viaje' => $request->viaje,
            'user' => $request->user,
        ]);
    }

    public function viajescomrpados(Request $request){

        $datos = DB::table('viajes')->where([
            'user' => $request->idusu,
        ])->get();

        return response()->json([
            'viajes' => $datos
        ]);
    }
}
