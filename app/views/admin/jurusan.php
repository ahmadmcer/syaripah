<?php include ('../app/views/partials/admin_header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Jurusan</h1>


  <!-- DataTables -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Jurusan</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['jurusan'] as $jurusan): ?>
              <tr>
                <td><?= $jurusan['nama']; ?></td>
                <td><?= $jurusan['deskripsi']; ?></td>
                <td class="text-center">
                  <a href="<?= BASE_URL; ?>/admin/jurusan/<?= $jurusan['id']; ?>?show=edit"
                    class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= BASE_URL; ?>/admin/hapus_jurusan/<?= $jurusan['id']; ?>" class="btn btn-danger btn-sm"
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
      <form action="<?= BASE_URL; ?>/admin/tambah_jurusan" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Tambah Jurusan</h5>
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
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
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
      <form action="<?= BASE_URL; ?>/admin/edit_jurusan" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Jurusan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $data['jurusan_id']['id']; ?>">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['jurusan_id']['nama']; ?>"
              required>
          </div>
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control"
              required><?= $data['jurusan_id']['deskripsi']; ?></textarea>
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