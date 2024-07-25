<?php

class SiswaModel extends Model
{
  private $table = 'siswa';

  public function __construct()
  {
    parent::__construct();
  }

  public function getAllSiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getSiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahSiswa($data)
  {
    $this->db->query('INSERT INTO ' . $this->table . ' (nama, nis, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, telepon, email, password, kelas_id, tahun_ajaran_id) VALUES (:nama, :nis, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :alamat, :telepon, :email, :password, :kelas_id, :tahun_ajaran_id)');
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nis', $data['nis']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('tempat_lahir', $data['tempat_lahir']);
    $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('telepon', $data['telepon']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
    $this->db->bind('kelas_id', $data['kelas_id']);
    $this->db->bind('tahun_ajaran_id', $data['tahun_ajaran_id']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editSiswa($data)
  {
    $this->db->query('UPDATE ' . $this->table . ' SET nama=:nama, nis=:nis, jenis_kelamin=:jenis_kelamin, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, alamat=:alamat, telepon=:telepon, email=:email, password=:password, kelas_id=:kelas_id, tahun_ajaran_id=:tahun_ajaran_id WHERE id=:id');
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nis', $data['nis']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('tempat_lahir', $data['tempat_lahir']);
    $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('telepon', $data['telepon']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
    $this->db->bind('kelas_id', $data['kelas_id']);
    $this->db->bind('tahun_ajaran_id', $data['tahun_ajaran_id']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusSiswa($id)
  {
    $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}