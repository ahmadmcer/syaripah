<?php

class LoginController extends Controller
{
  public function index()
  {
    if (isset($_SESSION['id'])) {
      header('Location: ' . BASE_URL . '/admin');
    } else {
      $this->view('login/index');
    }
  }

  public function register()
  {
    if (isset($_SESSION['id'])) {
      header('Location: ' . BASE_URL . '/admin');
    } else {
      $this->view('login/register');
    }
  }

  public function registerAction()
  {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data = [
      'nama' => $nama,
      'email' => $email,
      'password' => $password
    ];

    $register = $this->model('LoginModel')->register($data);
    if ($register > 0) {
      Flasher::setFlash('Berhasil', 'register', 'success');
      header('Location: ' . BASE_URL . '/login');
    } else {
      Flasher::setFlash('Gagal', 'register', 'danger');
      header('Location: ' . BASE_URL . '/login/register');
    }
  }

  public function loginAction()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $this->model('LoginModel')->login($email, $password);
    if ($user) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['nama'] = $user['nama'];
      $_SESSION['email'] = $user['email'];
      header('Location: ' . BASE_URL . '/admin');
    } else {
      Flasher::setFlash('Gagal', 'login', 'danger');
      header('Location: ' . BASE_URL . '/login');
    }
  }

  public function logoutAction()
  {
    session_destroy();
    header('Location: ' . BASE_URL . '/login');
  }
}