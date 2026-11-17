<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | Muhammad Syifa Abdika - msyifaabdika.lab</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <header class="site-header">
    <a class="brand" href="{{ url('/web-statis') }}">msyifaabdika<span>.lab</span></a>
    <nav>
    <ul>
      <li><a href="{{ url('/web-statis') }}" class="active">Beranda</a></li>
      <li><a href="{{ url('/web-statis/about') }}">Tentang</a></li>
      <li><a href="{{ url('/web-statis/portfolio') }}">Portofolio</a></li>
      <li><a href="{{ url('/web-statis/contact') }}">Kontak</a></li>
    </ul>
    </nav>
  </header>
  <main>
    <section class="hero">
      <img class="avatar" src="{{ asset('img/avatar.svg') }}" alt="Avatar dika">
      <div>
        <p class="eyebrow">Portofolio Mahasiswa</p>
        <h1>Halo, saya Muhammad Syifa Abdika</h1>
        <p class="lead">Muhammad Syifa Abdika<br>NIM 108052530009</p>
        <p>Mahasiswa Sistem Informasi dengan sertifikasi Google Career Certificate in Project Management yang berfokus pada pengembangan produk digital dan strategi bisnis. Berpengalaman mengelola proyek serta aktif berkompetisi dalam berbagai ajang business case dan business plan.</p>
        <a class="btn" href="{{ url('/web-statis/portfolio') }}">Lihat Portofolio</a>
        <a class="btn ghost" href="{{ url('/web-statis/contact') }}">Hubungi Saya</a>
      </div>
    </section>
    <section class="cards">
      <article class="card"><h3>Business Strategy</h3><p>Aktif merancang model bisnis, validasi pasar, serta solusi strategis dalam berbagai kompetisi bisnis.</p></article>
      <article class="card"><h3>Information Systems</h3><p>Menjembatani kebutuhan bisnis dengan pengembangan teknologi dan sistem informasi yang efektif dan terukur.</p></article>
      <article class="card"><h3>Project Management</h3><p>Tersertifikasi oleh Google dalam merencanakan, mengeksekusi, dan mengelola proyek digital menggunakan metodologi Agile dan Scrum</p></article>
    </section>
  </main>
  <footer>
    <p>Muhammad Syifa Abdika_108052530009</p>
    <p>msyifaabdika.lab</p>
  </footer>
</body>
</html>
