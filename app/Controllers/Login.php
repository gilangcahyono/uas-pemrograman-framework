<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{

  protected $users;

  public function __construct()
  {
    $this->users = new UsersModel();
  }
  public function index(): string
  {
    return view('login');
  }

  public function login()
  {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $users = $this->users->findAll();

    foreach ($users as $user) {
      if ($user['username'] === $username && $user['password'] === $password) {
        switch ($user['role']) {
          case 1:
            $this->session->set("user", $user['role']);
            header('Location: /dashboard');
            exit;
            break;
          case 2:
            $this->session->set("user", $user['role']);
            header('Location: /dashboard');
            exit;
            break;
        }
      } else {
        echo "<script>
          alert('username atau password salah!');
          location.href = '/login';
        </script>";
      }
    }
  }
}
