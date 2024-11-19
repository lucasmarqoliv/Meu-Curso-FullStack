<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // importação de uma classe nativa do laravel.
use App\Models\Produto; // importação da classe produto.

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    public function cadastrar() {
        return view('produto.cadastrar'); // renderiza o templete chamado cadastrar, que esta dentro de produto que esta na pasta view.
    }

    public function store(Request $request) { // nome do metodo padrão do laravel que vai receber os dados do formulario, e cadastrar banco.
        //chamar classe produto e um metodo de classe chamado create que da um insert dos dados no banco.
        $produto = Produto::create($request->all()); // o all traz todos os dados da requisição.

        return redirect()->route('produto.index'); // redireciona o usuario para a pagina de index, apos o envio do formulario.


    }
}
