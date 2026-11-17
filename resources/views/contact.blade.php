<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak | Muhammad Syifa Abdika - msyifaabdika.lab</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <header class="site-header">
    <a class="brand" href="{{ url('/web-statis') }}">msyifaabdika<span>.lab</span></a>
    <nav>
    <ul>
      <li><a href="{{ url('/web-statis') }}">Beranda</a></li>
      <li><a href="{{ url('/web-statis/about') }}">Tentang</a></li>
      <li><a href="{{ url('/web-statis/portfolio') }}">Portofolio</a></li>
      <li><a href="{{ url('/web-statis/contact') }}" class="active">Kontak</a></li>
    </ul>
    </nav>
  </header>
  <main>
    <section>
      <h1>Kontak</h1>
      <p class="lead">Silakan hubungi saya melalui kanal berikut.</p>
    </section>
    <section class="grid-2">
      <article class="card">
        <h3>Email Kampus</h3>
        <p>muhammadsyifaa@student.telkomuniversity.ac.id</p>
      </article>
      <article class="card">
        <h3>GitHub / LinkedIn</h3>
        <p>https://github.com/msyifaabdika &middot; https://www.linkedin.com/in/muhammad-syifa-abdika-19507138b/</p>
      </article>
    </section>
    <section>
      <button id="copy-btn" class="btn" type="button">Salin identitas</button>
      <span id="copy-msg" class="note"></span>
    </section>
  </main>
  <footer>
    <p>Muhammad Syifa Abdika_108052530009</p>
    <p>msyifaabdika.lab</p>
  </footer>
</body>
</html>
