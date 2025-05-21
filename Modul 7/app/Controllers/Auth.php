<?php
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController {
    public function login() {
        return view('login');
    }

    public function prosesLogin() {
        $userModel = new UserModel();
        $user = $userModel->where('username', $this->request->getPost('username'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set('user_id', $user['id']);
            return redirect()->to('/buku');
        } else{
            return redirect()->back()->with('error', 'login gagal. Periksa username dan password!');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function register()
{
    return view('register');
}

public function prosesRegister()
{
    $validation = \Config\Services::validation();
    $validation->setRules([
        'username' => 'required|is_unique[users.username]',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]',
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $userModel = new \App\Models\UserModel();
    $userModel->save([
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    ]);

    return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login!');
}

}