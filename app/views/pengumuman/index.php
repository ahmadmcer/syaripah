<!DOCTYPE html>
<html>

<head>
  <title>Pengumuman</title>
</head>

<body>
  <h1>Pengumuman</h1>
  <ul>
    <?php foreach ($data as $pengumuman): ?>
      <li>
        <h2><?= $pengumuman->judul; ?></h2>
        <p><?= $pengumuman->isi; ?></p>
        <small><?= $pengumuman->tanggal; ?></small>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>