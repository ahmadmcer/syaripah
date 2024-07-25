<?php

class GuruModel extends Model
{
  private $table = 'guru';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllGuru()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getGuruById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahGuru($data)
  {
    $query = "INSERT INTO guru (nama, nip, alamat, telepon, email) VALUES (:nama, :nip, :alamat, :telepon, :email)";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nip', $data['nip']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('telepon', $data['telepon']);
    $this->db->bind('email', $data['email']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editGuru($data)
  {
    $query = "UPDATE guru SET nama=:nama, nip=:nip, alamat=:alamat, telepon=:telepon, email=:email WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nip', $data['nip']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('telepon', $data['telepon']);
    $this->db->bind('email', $data['email']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusGuru($id)
  {
    $query = "DELETE FROM guru WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}