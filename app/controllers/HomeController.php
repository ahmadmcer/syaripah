<?php

class HomeController extends Controller
{
  public function index()
  {
    $this->view('home/index');
  }

  public function daftar()
  {
    $data['title'] = 'Daftar';
    $this->view('home/daftar', $data);
  }
}