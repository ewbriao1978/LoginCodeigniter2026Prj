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
        return redirect()->to('/')->with('success', 'Usuário registrado com sucesso! Faça login para continuar.');
    }

    public function loginUser()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->usersModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login bem-sucedido
            $this->session->set('user_id', $user['id']);
            $this->session->set('user_name', $user['name']);
            $this->session->set('user_email', $user['email']);
            $this->session->set('logged_in', true);

            return redirect()->to('/myhome'); // Redireciona para a página inicial do usuário

        } else {
            // Login falhou
            return redirect()->to('/')->with('error', 'Email ou senha inválidos!');
        }
    }

    public function myHome()
    {
        return view('myhome');
    }

    public function logout()
    {
        $this->session->destroy(); // Destroi a sessão do usuário
        return redirect()->to('/');
    }
}
