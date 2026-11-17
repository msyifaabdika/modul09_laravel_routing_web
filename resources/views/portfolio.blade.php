<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio | Muhammad Syifa Abdika - msyifaabdika.lab</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <header class="site-header">
    <a class="brand" href="{{ url('/web-statis') }}">msyifaabdika<span>.lab</span></a>
    <nav>
    <ul>
      <li><a href="{{ url('/web-statis') }}">Beranda</a></li>
      <li><a href="{{ url('/web-statis/about') }}">Tentang</a></li>
      <li><a href="{{ url('/web-statis/portfolio') }}" class="active">Portofolio</a></li>
      <li><a href="{{ url('/web-statis/contact') }}">Kontak</a></li>
    </ul>
    </nav>
  </header>
  <main>
    <section>
      <h1>Portofolio</h1>
      <p class="lead">Proyek, pencapaian dan tugas kuliah yang telah saya kerjakan.</p>
    </section>
    <section class="grid-3">
      <article class="card project">
        <span class="tag">Jaringan</span>
        <h3>Integrated Web &amp; DNS Server</h3>
        <p>Membangun Nginx dan BIND pada satu VM Rocky Linux, lalu mengakses
        situs memakai domain lokal dari host Windows tanpa alamat IP.</p>
      </article>
      <article class="card project">
        <span class="tag">Kompetisi</span>
        <h3>Bisnis dan Poster</h3>
        <p>Berpengalaman mengikuti lomba bisnis sehingga mendapat juara serta berpengalaman mendesain poster.</p>
      </article>
      <article class="card project">
        <span class="tag">Design Thinking</span>
        <h3>Tugas Besar</h3>
        <p>Membuat UI/UX dan laporan proposal mengenai aplikasi layanan cuci dan servis kendaraan untuk orang yang sibuk.</p>
      </article>
    </section>
  </main>
  <footer>
    <p>Muhammad Syifa Abdika_108052530009</p>
    <p>msyifaabdika.lab</p>
  </footer>
</body>
</html>
