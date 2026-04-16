<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Home extends BaseController
{
    public function __construct() // Construtor para inicializar o modelo de usuários
    {
        $this->usersModel = new UsersModel();
    }

    public function index(): string
    {
        return view('login');
    }

    public function registrarUsuarioForm(): string
    {
        return view('register');
    }

    public function registrarUsuario()
    {
        $data['name'] = $this->request->getPost('name');
        $data['email'] = $this->request->getPost('email');

// embaralhamento de senha
        $password = $this->request->getPost('password');
        $hash = password_hash($password, PASSWORD_BCRYPT);

        $data['password'] = $hash;

        $this->usersModel->insert($data);
        return redirect()->to('/');
    }

    public function loginUser()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->usersModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login bem-sucedido
            return "Login bem-sucedido! Bem-vindo, " . $user['name'] . "!";

        } else {
            // Login falhou
            return "Email ou senha incorretos.";
        }
    }
}
