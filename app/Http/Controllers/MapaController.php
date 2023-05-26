<?php

namespace App\Http\Controllers;

use App\Models\TVoto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class MapaController extends Controller
{
    public function votos() {
        $votos = TVoto::where(DB::raw('une+cambio+cabal+azul+r19+coalicion+humanista+vamos'), 1)->get();
        return $votos;
    }

    public function votosSinGeolocalizacion() {
        $votos = TVoto::where('latitud', 0)->get();

        foreach ($votos as $voto) {
            $token = 'c474f2c65ff704';
            $response = Http::get("https://ipinfo.io/$voto->ip?token=$token");
            if ($response->successful()) {
                $data = $response->json();
                $latlng = explode(',', $data["loc"]);
                $lat = $latlng[0];
                $lng = $latlng[1];
                $voto->latitud = $lat;
                $voto->longitud = $lng;
                $voto->save();
                echo "Actualización de voto: $voto->id_voto correcta.";
            }
        }

    }

    public function mapa() {
       return view('mapa');
    }

    public function actualizarLtnLng(Request $request) {
        $voto = TVoto::find($request->id_voto);
        if ($voto !== null) {
            try {
                $voto->latitud = $request->latitud;
                $voto->longitud = $request->longitud;
                $voto->save();
                return response()->json($voto, 200);
            } catch(Exception $e) {
                return response()->json(['error' => 'No se pudo actualizar el voto: ' . $e->getMessage()], 500);
            }
        }
        return response()->json(['error' => 'No se encontró el registro de dicho voto.'], 404);
    }
}
