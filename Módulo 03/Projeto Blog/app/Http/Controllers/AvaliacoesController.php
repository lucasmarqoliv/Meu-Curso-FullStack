<?php

namespace App\Http\Controllers;

use App\Models\Avaliacoes;
use Illuminate\Http\Request;

class AvaliacoesController extends Controller
{

    public function incrementar(Request $request)
{
    // Obtém o valor do campo 'like' da requisição
    $like = $request->like;

    // Busca todas as avaliações que correspondem ao 'post_id' fornecido na requisição
    $avaliacao = Avaliacoes::where('post_id', $request->post_id)->get();

    // Verifica se a consulta retornou uma coleção vazia
    if ($avaliacao->isEmpty()) {
        // Se não houver avaliações para o 'post_id' fornecido, cria uma nova avaliação
        $avaliacao = new Avaliacoes();
        // Inicializa o número de likes com 1
        $avaliacao->like = 1;
        // Define o 'post_id' da nova avaliação com o valor fornecido na requisição
        $avaliacao->post_id = $request->post_id;
        // Salva a nova avaliação no banco de dados
        $avaliacao->save();
    } else {
        // Se houver avaliações para o 'post_id' fornecido, incrementa o número de likes da primeira avaliação encontrada
        $avaliacao[0]->like = $avaliacao[0]->like + 1;
        // Atualiza a avaliação no banco de dados
        $avaliacao[0]->update();
    }

    // Redireciona o usuário para a rota 'post.index'
    return redirect()->route('post.index');
}


    public function decrementar(Request $request)
    {
        $deslike = $request->deslike;
        $avaliacao = Avaliacoes::where('post_id', $request->post_id)->get();

        if ($avaliacao->isEmpty()) {
            // Se não houver avaliações para o 'post_id' fornecido, cria uma nova avaliação
            $avaliacao = new Avaliacoes();
            // Inicializa o número de deslikes com 1
            $avaliacao->deslike = 1;
            // Define o 'post_id' da nova avaliação com o valor fornecido na requisição
            $avaliacao->post_id = $request->post_id;
            // Salva a nova avaliação no banco de dados
            $avaliacao->save();
        } else {
            // Se houver avaliações para o 'post_id' fornecido, incrementa o número de deslikes da primeira avaliação encontrada
            $avaliacao[0]->deslike = $avaliacao[0]->deslike + 1;
            // Atualiza a avaliação no banco de dados
            $avaliacao[0]->update();
        }

        // Redireciona o usuário para a rota 'post.index'
        return redirect()->route('post.index');
    }

}
