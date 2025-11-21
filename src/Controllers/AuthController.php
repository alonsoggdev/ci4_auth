<?php

namespace Alonso\CIAuth\Controllers;

use CodeIgniter\Controller;
use Alonso\CIAuth\Models\UserModel;

class AuthController extends Controller
{
    public function login()
    {
        return view('Alonso\CIAuth\Views\login');
    }

    public function attempt()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Credenciales incorrectas');
        }

        session()->set('user', $user);

        return redirect()->to(config('Auth')->redirects['dashboard']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(config('Auth')->redirects['logout']);
    }
}
