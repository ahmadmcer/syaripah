<?php

class TahunAjaranModel extends Model
{
  private $table = 'tahun_ajaran';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllTahunAjaran()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getTahunAjaranById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahTahunAjaran($data)
  {
    $this->db->query('INSERT INTO ' . $this->table . ' (nama, mulai, selesai) VALUES (:nama, :mulai, :selesai)');
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('mulai', $data['mulai']);
    $this->db->bind('selesai', $data['selesai']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editTahunAjaran($data)
  {
    $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, mulai=:mulai, selesai=:selesai WHERE id=:id');
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('mulai', $data['mulai']);
    $this->db->bind('selesai', $data['selesai']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusTahunAjaran($id)
  {
    $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}