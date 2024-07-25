<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?= BASE_URL; ?>/css/styles.css" rel="stylesheet">
  <title><?= APP_NAME ?></title>
</head>

<body class="bg-gray-100">
  <header id="header" class="fixed top-0 left-0 w-full bg-green-600 p-4 z-10 transition-all duration-300 <?php if (empty($data['title'])) echo 'bg-opacity-0'; ?>">
    <nav class="container flex items-center justify-between mx-auto">
      <a href="<?= BASE_URL; ?>">
        <h1 id="header-title" class="text-white text-center text-2xl font-bold transition-all duration-300 <?php if (empty($data['title'])) echo 'text-opacity-0'; ?>">
          <?= APP_SHORT_NAME ?>
        </h1>
      </a>
      <ul class="flex gap-2">
        <li><a href="#tentang" class="text-white hover:bg-black/25 px-4 py-2 rounded transition-all duration-300">
          Tentang
        </a></li>
        <li><a href="#pengumuman" class="text-white hover:bg-black/25 px-4 py-2 rounded transition-all duration-300">
          Pengumuman
        </a></li>
        <li><a href="#keunggulan" class="text-white hover:bg-black/25 px-4 py-2 rounded transition-all duration-300">
          Keunggulan
        </a></li>
        <li><a href="home/daftar" class="text-white hover:bg-black/25 px-4 py-2 rounded transition-all duration-300">
          Pendaftaran
        </a></li>
        <li><a href="#galeri" class="text-white hover:bg-black/25 px-4 py-2 rounded transition-all duration-300">
          Galeri
        </a></li>
        <li><a href="#footer" class="text-white hover:bg-black/25 px-4 py-2 rounded transition-all duration-300">
          Kontak
        </a></li>
      </ul>
    </nav>
  </header>