<?php include ('../app/views/partials/admin_header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Siswa</h1>


  <!-- DataTables -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Siswa</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>NIS</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['siswa'] as $siswa): ?>
              <tr>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['nama']; ?></td>
                <td><?= $data['kelas'][$siswa['kelas_id'] - 1]['nama']; ?></td>
                <td class="text-center">
                  <a href="<?= BASE_URL; ?>/admin/data_siswa/<?= $siswa['id']; ?>?show=detail"
                    class="btn btn-info btn-sm">Detail</a>
                  <a href="<?= BASE_URL; ?>/admin/data_siswa/<?= $siswa['id']; ?>?show=edit"
                    class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= BASE_URL; ?>/admin/hapus_siswa/<?= $siswa['id']; ?>" class="btn btn-danger btn-sm"
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
      <form action="<?= BASE_URL; ?>/admin/tambah_siswa" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Tambah Siswa</h5>
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
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
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
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="kelas_id">Kelas</label>
            <select name="kelas_id" id="kelas_id" class="form-control" required>
              <option value="">Pilih Kelas</option>
              <?php foreach ($data['kelas'] as $kelas): ?>
                <option value="<?= $kelas['id']; ?>"><?= $kelas['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tahun_ajaran_id">Tahun Ajaran</label>
            <select name="tahun_ajaran_id" id="tahun_ajaran_id" class="form-control" required>
              <option value="">Pilih Tahun Ajaran</option>
              <?php foreach ($data['tahun_ajaran'] as $tahun_ajaran): ?>
                <option value="<?= $tahun_ajaran['id']; ?>"><?= $tahun_ajaran['nama']; ?></option>
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
<?php if (isset($data['siswa_id']) && $_GET['show'] == 'edit'): ?>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="<?= BASE_URL; ?>/admin/edit_siswa" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Siswa</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="id" value="<?= $data['siswa_id']['id']; ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['siswa_id']['nama']; ?>"
                required>
            </div>
            <div class="form-group">
              <label for="nis">NIS</label>
              <input type="text" name="nis" id="nis" class="form-control" value="<?= $data['siswa_id']['nis']; ?>"
                required>
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" <?= $data['siswa_id']['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>
                  Laki-laki</option>
                <option value="Perempuan" <?= $data['siswa_id']['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>
                  Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                value="<?= $data['siswa_id']['tempat_lahir']; ?>" required>
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                value="<?= $data['siswa_id']['tanggal_lahir']; ?>" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" class="form-control"
                required><?= $data['siswa_id']['alamat']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="telepon">Telepon</label>
              <input type="text" name="telepon" id="telepon" class="form-control"
                value="<?= $data['siswa_id']['telepon']; ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="<?= $data['siswa_id']['email']; ?>"
                required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="kelas_id">Kelas</label>
              <select name="kelas_id" id="kelas_id" class="form-control" required>
                <option value="">Pilih Kelas</option>
                <?php foreach ($data['kelas'] as $kelas): ?>
                  <option value="<?= $kelas['id']; ?>" <?= $data['siswa_id']['kelas_id'] == $kelas['id'] ? 'selected' : ''; ?>>
                    <?= $kelas['nama']; ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="tahun_ajaran_id">Tahun Ajaran</label>
              <select name="tahun_ajaran_id" id="tahun_ajaran_id" class="form-control" required>
                <option value="">Pilih Tahun Ajaran</option>
                <?php foreach ($data['tahun_ajaran'] as $tahun_ajaran): ?>
                  <option value="<?= $tahun_ajaran['id']; ?>" <?= $data['siswa_id']['tahun_ajaran_id'] == $tahun_ajaran['id'] ? 'selected' : ''; ?>>
                    <?= $tahun_ajaran['nama']; ?>
                  </option>
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
<?php endif; ?>

<!-- Detail Modal -->
<?php if (isset($data['siswa_id']) && $_GET['show'] == 'detail'): ?>
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">Detail Siswa</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['siswa_id']['nama']; ?>"
              readonly>
          </div>
          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control" value="<?= $data['siswa_id']['nis']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
              value="<?= $data['siswa_id']['jenis_kelamin']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
              value="<?= $data['siswa_id']['tempat_lahir']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
              value="<?= $data['siswa_id']['tanggal_lahir']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"
              readonly><?= $data['siswa_id']['alamat']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control"
              value="<?= $data['siswa_id']['telepon']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $data['siswa_id']['email']; ?>"
              readonly>
          </div>
          <div class="form-group">
            <label for="kelas_id">Kelas</label>
            <input type="text" name="kelas_id" id="kelas_id" class="form-control"
              value="<?= $data['kelas'][$data['siswa_id']['kelas_id'] - 1]['nama']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="tahun_ajaran_id">Tahun Ajaran</label>
            <input type="text" name="tahun_ajaran_id" id="tahun_ajaran_id" class="form-control"
              value="<?= $data['tahun_ajaran'][$data['siswa_id']['tahun_ajaran_id'] - 1]['nama']; ?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

</div>
<!-- End of Main Content -->

<?php include ('../app/views/partials/admin_footer.php'); ?>