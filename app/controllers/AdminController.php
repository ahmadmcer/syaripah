<?php

class AdminController extends Controller
{
  // Constructor
  public function __construct()
  {
    if (!isset($_SESSION['id'])) {
      header('Location: ' . BASE_URL . '/login');
    }
  }

  // Index
  public function index()
  {
    $this->view('admin/index');
  }

  // Data Guru
  public function data_guru($id = null)
  {
    $data['guru'] = $this->model('GuruModel')->getAllGuru();
    if ($id) {
      $data['guru_id'] = $this->model('GuruModel')->getGuruById($id);
    }
    $this->view('admin/data_guru', $data);
  }

  public function tambah_guru()
  {
    if ($this->model('GuruModel')->tambahGuru($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/admin/data_guru');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_guru');
      exit;
    }
  }

  public function edit_guru()
  {
    if ($this->model('GuruModel')->editGuru($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASE_URL . '/admin/data_guru');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_guru');
      exit;
    }
  }

  public function hapus_guru($id)
  {
    if ($this->model('GuruModel')->hapusGuru($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/admin/data_guru');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_guru');
      exit;
    }
  }

  // Jurusan
  public function jurusan($id = null)
  {
    $data['jurusan'] = $this->model('JurusanModel')->getAllJurusan();
    if ($id) {
      $data['jurusan_id'] = $this->model('JurusanModel')->getJurusanById($id);
    }
    $this->view('admin/jurusan', $data);
  }

  public function tambah_jurusan()
  {
    if ($this->model('JurusanModel')->tambahJurusan($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/admin/jurusan');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/admin/jurusan');
      exit;
    }
  }

  public function edit_jurusan()
  {
    if ($this->model('JurusanModel')->editJurusan($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASE_URL . '/admin/jurusan');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/admin/jurusan');
      exit;
    }
  }

  public function hapus_jurusan($id)
  {
    if ($this->model('JurusanModel')->hapusJurusan($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/admin/jurusan');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/admin/jurusan');
      exit;
    }
  }

  // Mata Pelajaran
  public function mata_pelajaran($id = null)
  {
    $data['mata_pelajaran'] = $this->model('MataPelajaranModel')->getAllMataPelajaran();
    if ($id) {
      $data['mata_pelajaran_id'] = $this->model('MataPelajaranModel')->getMataPelajaranById($id);
    }
    $this->view('admin/mata_pelajaran', $data);
  }

  public function tambah_mata_pelajaran()
  {
    if ($this->model('MataPelajaranModel')->tambahMataPelajaran($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/admin/mata_pelajaran');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/admin/mata_pelajaran');
      exit;
    }
  }

  public function edit_mata_pelajaran()
  {
    if ($this->model('MataPelajaranModel')->editMataPelajaran($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASE_URL . '/admin/mata_pelajaran');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/admin/mata_pelajaran');
      exit;
    }
  }

  public function hapus_mata_pelajaran($id)
  {
    if ($this->model('MataPelajaranModel')->hapusMataPelajaran($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/admin/mata_pelajaran');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/admin/mata_pelajaran');
      exit;
    }
  }

  // Tahun Ajaran
  public function tahun_ajaran($id = null)
  {
    $data['tahun_ajaran'] = $this->model('TahunAjaranModel')->getAllTahunAjaran();
    if ($id) {
      $data['tahun_ajaran_id'] = $this->model('TahunAjaranModel')->getTahunAjaranById($id);
    }
    $this->view('admin/tahun_ajaran', $data);
  }

  public function tambah_tahun_ajaran()
  {
    if ($this->model('TahunAjaranModel')->tambahTahunAjaran($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/admin/tahun_ajaran');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/admin/tahun_ajaran');
      exit;
    }
  }

  public function edit_tahun_ajaran()
  {
    if ($this->model('TahunAjaranModel')->editTahunAjaran($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASE_URL . '/admin/tahun_ajaran');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/admin/tahun_ajaran');
      exit;
    }
  }

  public function hapus_tahun_ajaran($id)
  {
    if ($this->model('TahunAjaranModel')->hapusTahunAjaran($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/admin/tahun_ajaran');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/admin/tahun_ajaran');
      exit;
    }
  }

  // Data Kelas
  public function data_kelas($id = null)
  {
    $data['jurusan'] = $this->model('JurusanModel')->getAllJurusan();
    $data['kelas'] = $this->model('KelasModel')->getAllKelas();
    if ($id) {
      $data['kelas_id'] = $this->model('KelasModel')->getKelasById($id);
    }
    $this->view('admin/data_kelas', $data);
  }

  public function tambah_kelas()
  {
    if ($this->model('KelasModel')->tambahKelas($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/admin/data_kelas');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_kelas');
      exit;
    }
  }

  public function edit_kelas()
  {
    if ($this->model('KelasModel')->editKelas($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASE_URL . '/admin/data_kelas');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_kelas');
      exit;
    }
  }

  public function hapus_kelas($id)
  {
    if ($this->model('KelasModel')->hapusKelas($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/admin/data_kelas');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_kelas');
      exit;
    }
  }

  // Data Siswa
  public function data_siswa($id = null)
  {
    $data['tahun_ajaran'] = $this->model('TahunAjaranModel')->getAllTahunAjaran();
    $data['kelas'] = $this->model('KelasModel')->getAllKelas();
    $data['siswa'] = $this->model('SiswaModel')->getAllSiswa();
    if ($id) {
      $data['siswa_id'] = $this->model('SiswaModel')->getSiswaById($id);
    }
    $this->view('admin/data_siswa', $data);
  }

  public function tambah_siswa()
  {
    if ($this->model('SiswaModel')->tambahSiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASE_URL . '/admin/data_siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_siswa');
      exit;
    }
  }

  public function edit_siswa()
  {
    if ($this->model('SiswaModel')->editSiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASE_URL . '/admin/data_siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_siswa');
      exit;
    }
  }

  public function hapus_siswa($id)
  {
    if ($this->model('SiswaModel')->hapusSiswa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASE_URL . '/admin/data_siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASE_URL . '/admin/data_siswa');
      exit;
    }
  }
}
