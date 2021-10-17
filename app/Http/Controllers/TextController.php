<?php

namespace App\Http\Controllers;

use App\Models\Caracter;
use Illuminate\Http\Request;
use App\Models\Texto;
use App\Models\Numero;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class TextController extends Controller
{

    public function index()
    {

        return view('welcome', [
            'texts' => Texto::latest()->paginate(5),
            'numbers' => Numero::latest()->paginate(5),
            'characters' => Caracter::latest()->paginate(5)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'texto' => 'required',
        ]);

        if (is_numeric($request->texto)) {

            $last = Numero::select("acumulado")->latest()->first();

            Numero::create([
                'numero' => $request->texto,
                'acumulado' => $request->texto + $last->acumulado,
            ]);
            return back();
        }

        $ch = '#%áéíóúÁÉÍÓÚ,.;@?¿/*$&"()=¡!-´';
        $b = '';

        if ($b = strpbrk($request->texto, $ch)) {
            Caracter::create([
                'caracteres' => (mb_substr($b, 0, 1)),
            ]);

            return back();
        }


        Texto::create([
            'texto' => $request->texto,
            'inicial' => $request->texto[0],
            'final' => substr($request->texto, -1),
        ]);
        return back();
    }
}
