<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class MakeCvController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create(){
        return view('formCv');
    }

    public function viewCv(Request $request){
        $dados = $request->all();
        $pdf = Pdf::loadView('curriculoM1', compact('dados'));
        return $pdf->download('curriculo.pdf');
    }
}
