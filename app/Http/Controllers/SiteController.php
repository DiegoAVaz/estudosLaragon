<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class SiteController extends Controller
{
    public function index()
    {
        // return 'index';

/*         $produtos = \App\Models\Produto::all();
        return dd($produtos); */

/*         $nome = "Diego";
        $idade  = 31;
        $frutas = ['laranja', 'Banana', 'Maçã'];
        $objetos = []; */

/*         return view('site.empresa', [
            'nome' => $nome,
            'idade' => $idade
        ]); */

        // Passar variáveis usando compact
        //return view('site.home', compact('nome', 'idade', 'frutas', 'objetos'));

        $produtos = Produto::paginate(3);

        return view('site.home', compact('produtos'));
    }
}
