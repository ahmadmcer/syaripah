<?php include '../app/views/partials/header.php'; ?>

  <section id="hero" class="relative text-white h-svh">
    <img src="https://i.imgur.com/yp6xmjF.jpg" alt="Madrasah" class="absolute object-cover w-full h-full -z-10" />
    <div class="flex items-center justify-center h-full bg-black/75">
      <div class="container mx-auto">
        <h1 class="text-4xl font-bold">Selamat Datang di<br /><?= APP_NAME ?></h1>
        <p class="mt-4">Sekolah yang berkomitmen untuk memberikan pendidikan terbaik.</p>
      </div>
    </div>
  </section>
  
  <section id="tentang" class="container py-16 mx-auto">
    <hr class="container my-8 mx-auto" />
    
    <h2 class="text-2xl text-center tracking-widest font-bold mb-8">TENTANG SEKOLAH KAMI</h2>
    <p class="text-center">Madrasah Aliyah Plus Al-Bukhori adalah sekolah yang berkomitmen untuk memberikan pendidikan terbaik
      bagi siswa-siswi. Dengan fasilitas yang memadai dan tenaga pengajar yang berpengalaman, kami siap membantu
      siswa-siswi untuk meraih prestasi terbaik.</p>
  </section>

  <section id="pengumuman" class="container py-16 mx-auto">
    <hr class="container my-8 mx-auto" />

    <h2 class="text-2xl text-center tracking-widest font-bold mb-8">PENGUMUMAN ACARA</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-white p-4 rounded shadow">
        <h3 class="font-bold text-xl mb-2">Pengumuman 1</h3>
        <p>Pengumuman acara 1.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="font-bold text-xl mb-2">Pengumuman 2</h3>
        <p>Pengumuman acara 2.</p>
      </div>
    </div>
  </section>

  <section id="keunggulan" class="container py-16 mx-auto">
    <hr class="container my-8 mx-auto" />

    <h2 class="text-2xl text-center tracking-widest font-bold mb-8">KEUNGGULAN SEKOLAH KAMI</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-white p-4 rounded shadow">
        <h3 class="font-bold text-xl mb-2">Fasilitas Memadai</h3>
        <p>Kami memiliki fasilitas yang memadai untuk menunjang kegiatan belajar mengajar.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="font-bold text-xl mb-2">Tenaga Pengajar Berpengalaman</h3>
        <p>Tenaga pengajar kami berpengalaman dan siap membantu siswa-siswi meraih prestasi terbaik.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="font-bold text-xl mb-2">Kurikulum Terbaik</h3>
        <p>Kami menggunakan kurikulum terbaik untuk membantu siswa-siswi meraih prestasi terbaik.</p>
      </div>
    </div>
  </section>

  <section id="daftar-sekarang" class="container py-16 mx-auto">
    <hr class="container my-8 mx-auto" />

    <h2 class="text-2xl text-center tracking-widest font-bold mb-8">DAFTAR SEKARANG</h2>
    <p class="text-center">Daftarkan diri Anda sekarang juga untuk mendapatkan pendidikan terbaik dari Madrasah Aliyah Plus
      Al-Bukhori.</p>
    <div class="flex justify-center mt-4">
      <a href="#" class="bg-green-600 text-white px-4 py-2 rounded shadow">Daftar Sekarang</a>
    </div>
  </section>

  <section id="galeri" class="container py-16 mx-auto">
    <hr class="container my-8 mx-auto" />

    <h2 class="text-2xl text-center tracking-widest font-bold mb-8">GALERI</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-white p-4 rounded shadow">
        <img src="https://i.imgur.com/yp6xmjF.jpg" alt="Madrasah" class="w-full h-48 object-cover mb-2" />
        <p>Gambar 1.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <img src="https://i.imgur.com/yp6xmjF.jpg" alt="Madrasah" class="w-full h-48 object-cover mb-2" />
        <p>Gambar 2.</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <img src="https://i.imgur.com/yp6xmjF.jpg" alt="Madrasah" class="w-full h-48 object-cover mb-2" />
        <p>Gambar 3.</p>
      </div>
    </div>
  </section>

  <script src="<?= BASE_URL ?>/js/scripts.js"></script>

<?php include '../app/views/partials/footer.php'; ?>
