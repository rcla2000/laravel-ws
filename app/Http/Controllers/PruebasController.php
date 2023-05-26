<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\Http;

class PruebasController extends Controller
{
    public function inicio() {
        $mascotas = Mascota::paginate(5);
        return view('inicio', compact('mascotas'));
    }

    public function pruebaAPI() {
        $token = 'c474f2c65ff704';
        $response = Http::get("https://ipinfo.io/45.228.233.57?token=$token");
        if ($response->successful()) {
            $data = $response->json();
            $latlng = explode(',', $data["loc"]);
            $lat = $latlng[0];
            $lng = $latlng[1];
            echo "Latitud: $lat Longitud: $lng";
        }
    }
}
