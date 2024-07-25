<?php include ('../app/views/partials/admin_header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Kelas</h1>


  <!-- DataTables -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Kelas</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['kelas'] as $kelas): ?>
              <tr>
                <td><?= $kelas['nama']; ?></td>
                <td><?= $data['jurusan'][$kelas['jurusan_id'] - 1]['nama']; ?></td>
                <td class="text-center">
                  <a href="<?= BASE_URL; ?>/admin/data_kelas/<?= $kelas['id']; ?>?show=edit"
                    class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= BASE_URL; ?>/admin/hapus_kelas/<?= $kelas['id']; ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- Tambah Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= BASE_URL; ?>/admin/tambah_kelas" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Tambah Kelas</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jurusan_id">Jurusan</label>
            <select name="jurusan_id" id="jurusan_id" class="form-control" required>
              <option value="">Pilih Jurusan</option>
              <?php foreach ($data['jurusan'] as $jurusan): ?>
                <option value="<?= $jurusan['id']; ?>"><?= $jurusan['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= BASE_URL; ?>/admin/edit_kelas" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Kelas</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $data['kelas_id']['id']; ?>">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['kelas_id']['nama']; ?>"
              required>
          </div>
          <div class="form-group">
            <label for="jurusan_id">Jurusan</label>
            <select name="jurusan_id" id="jurusan_id" class="form-control" required>
              <option value="">Pilih Jurusan</option>
              <?php foreach ($data['jurusan'] as $jurusan): ?>
                <option value="<?= $jurusan['id']; ?>" <?= $jurusan['id'] == $data['kelas_id']['jurusan_id'] ? 'selected' : ''; ?>><?= $jurusan['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

</div>
<!-- End of Main Content -->

<?php include ('../app/views/partials/admin_footer.php'); ?>