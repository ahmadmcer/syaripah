<?php

class JurusanModel extends Model
{
  private $table = 'jurusan';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllJurusan()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getJurusanById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahJurusan($data)
  {
    $query = "INSERT INTO jurusan (nama, deskripsi) VALUES (:nama, :deskripsi)";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editJurusan($data)
  {
    $query = "UPDATE jurusan SET nama=:nama, deskripsi=:deskripsi WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusJurusan($id)
  {
    $query = "DELETE FROM jurusan WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}