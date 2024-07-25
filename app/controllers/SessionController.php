<?php

class SessionController extends Controller
{
  public function index()
  {
    $data['session'] = $_SESSION;
    $this->view('session/index', $data);
  }
}