<?php

class MataPelajaranModel extends Model
{
  private $table = 'mata_pelajaran';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllMataPelajaran()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMataPelajaranById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahMataPelajaran($data)
  {
    $this->db->query('INSERT INTO ' . $this->table . ' (nama, deskripsi) VALUES (:nama, :deskripsi)');
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editMataPelajaran($data)
  {
    $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, deskripsi=:deskripsi WHERE id=:id');
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('deskripsi', $data['deskripsi']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusMataPelajaran($id)
  {
    $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}