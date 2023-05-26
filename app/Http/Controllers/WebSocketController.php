<?php

namespace App\Http\Controllers;

use App\Events\NewTrade;
use Illuminate\Http\Request;

class WebSocketController extends Controller
{
    public function inicio() {
        return view('websocket');
    }

    public function generarEvento($mensaje) {
        NewTrade::dispatch($mensaje);
        return "Mensaje enviado";
    }

    public function evento() {
        return view('evento');
    }
}
