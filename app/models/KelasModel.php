<?php

class KelasModel extends Model
{
  private $table = 'kelas';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllKelas()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getKelasById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahKelas($data)
  {
    $this->db->query('INSERT INTO ' . $this->table . ' (nama, jurusan_id) VALUES (:nama, :jurusan_id)');
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('jurusan_id', $data['jurusan_id']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editKelas($data)
  {
    $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, jurusan_id=:jurusan_id WHERE id=:id');
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('jurusan_id', $data['jurusan_id']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusKelas($id)
  {
    $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}