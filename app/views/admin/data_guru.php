<?php include ('../app/views/partials/admin_header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Guru</h1>


  <!-- DataTables -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Guru</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($data['guru'] as $guru): ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $guru['nama']; ?></td>
                <td><?= $guru['email']; ?></td>
                <td class="text-center">
                  <a href="<?= BASE_URL; ?>/admin/data_guru/<?= $guru['id']; ?>?show=detail"
                    class="btn btn-info btn-sm">Detail</a>
                  <a href="<?= BASE_URL; ?>/admin/data_guru/<?= $guru['id']; ?>?show=edit"
                    class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= BASE_URL; ?>/admin/hapus_guru/<?= $guru['id']; ?>" class="btn btn-danger btn-sm"
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
      <form action="<?= BASE_URL; ?>/admin/tambah_guru" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Tambah Guru</h5>
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
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= BASE_URL; ?>/admin/edit_guru" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Guru</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['guru_id']['nama']; ?>"
              required>
          </div>
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control" value="<?= $data['guru_id']['nip']; ?>"
              required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"
              required><?= $data['guru_id']['alamat']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control"
              value="<?= $data['guru_id']['telepon']; ?>" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $data['guru_id']['email']; ?>"
              required>
          </div>
          <input type="hidden" name="id" value="<?= $data['guru_id']['id']; ?>">
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['guru_id']['nama']; ?>"
            readonly>
        </div>
        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" name="nip" id="nip" class="form-control" value="<?= $data['guru_id']['nip']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea name="alamat" id="alamat" class="form-control"
            readonly><?= $data['guru_id']['alamat']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="telepon">Telepon</label>
          <input type="text" name="telepon" id="telepon" class="form-control"
            value="<?= $data['guru_id']['telepon']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" value="<?= $data['guru_id']['email']; ?>"
            readonly>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<!-- End of Main Content -->

<?php include ('../app/views/partials/admin_footer.php'); ?>