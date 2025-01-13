<?php
// arquivo para dar permissão para efetuar cadastro, login, logout, etc.
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    // registrar um novo usuario
    public function registrer(Request $request) {
        // validação de dados
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Criação do usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Criação do token
        $token = $user->createToken('YourAppName')->plainTextToken;

        // Resposta com token de autenticação
        return response()->json([
            'message' => 'Usuário registrado com sucesso!',
            'token' => $token
        ]);
    }

    /**
     * Fazer login e gerar token para o usuário
     */
    public function login(Request $request)
    {
        // Validação dos dados
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Buscar o usuário
        $user = User::where('email', $request->email)->first();

        // Verificar as credenciais
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais informadas são válidas.'],
            ]);
        }

        // Criar o token
        $token = $user->createToken('YourAppName')->plainTextToken;

        // Retornar o token
        return response()->json([
            'message' => 'Login realizado com sucesso!',
            'token' => $token
        ]);
    }

    /**
     * Fazer logout e revogar o token
     */
    public function logout(Request $request)
    {
        // revogar o token atual
        $request->user()->tokens->each(function ($token){
            $token->delete();
        });

        return response()->json([
            'message' => 'Logout realizado com sucesso!'
        ]);
    }

    /**
     * Retornar as informações do usuário autenticado
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
