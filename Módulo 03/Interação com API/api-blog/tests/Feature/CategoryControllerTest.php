<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Categoria;
class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_index()
    {
        // Cria um usuário e gera o token
        $usuario = User::factory()->create();
        $token = $usuario->createToken('Test Token')->plainTextToken;

        // Realiza a requisição GET para o index com o Bearer token
        $response = $this->getJson('api/categoria/index', [
            'Authorization' => 'Bearer '. $token,
        ]);

        // Verifica se a resposta tem status 200
        $response->assertStatus(200);
    }

    public function test_criando_uma_categoria()
    {
        // Cria um usuario e gera o token
        $usuario = User::factory()->create();
        $token = $usuario->createToken('Test Token')->plainTextToken;

        // Dados para criação de categoria
        $dados = [
            'nome' => 'Categoria Teste',
            'descricao' => 'Descrição de categoria teste'
        ];

        // Realiza a requisição POST com o token Bearer
        $response = $this->postJson('/api/categoria/salvar', $dados, [
            'Authorization' => 'Bearer '.$token,
        ]);

        // Verifica se a resposta tem o status 201 (created)
        $response->assertStatus(201);

        // Verifica se a categoria foi criada
        $this->assertDatabaseHas('categorias', [
            'nome' => 'Categoria Teste',
            'descricao' => 'Descrição da Categoria Teste',
        ]);
    }
}
