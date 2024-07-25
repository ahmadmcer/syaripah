<?php

class LoginModel extends Model
{
  private $table = 'admin';

  public function __construct()
  {
    parent::__construct();
  }

  public function login($email, $password)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
    $this->db->bind('email', $email);
    $user = $this->db->single();
    if ($user) {
      if (password_verify($password, $user['password'])) {
        return $user;
      }
    }
    return false;
  }

  public function register($data)
  {
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $this->db->query('INSERT INTO ' . $this->table . ' (nama, email, password) VALUES (:nama, :email, :password)');
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', $password);
    $this->db->execute();
    return $this->db->rowCount();
  }
}