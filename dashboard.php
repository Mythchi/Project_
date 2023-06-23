<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keluarga Kami</title>
  <style>
    /* Gaya CSS untuk tata letak dan desain halaman */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #555;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }

    main {
      margin: 20px;
      text-align: center;
    }

    h1 {
      color: #333;
    }

    p {
      color: #555;
    }

    .family-member {
      display: flex;
      margin-bottom: 20px;
    }

    .family-member img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-right: 20px;
    }

    .family-member h3 {
      margin: 0;
    }

    .family-member p {
      margin: 0;
    }
  </style>
</head>
<body>
  <header>
    <h1>Keluarga Kami</h1>
    <nav>
      <a href="#">Beranda</a>
      <a href="index.php?page=document">Dokumen</a>
      <a href="diary.php">Diary</a>
      <a href="index.php?page=album">Album</a>
    </nav>
  </header>

  <main>
    <div>
      <img src="path_to_main_image.jpg" alt="Foto Keluarga" style="width: 500px; height: auto;">
      <p>Tulisan di bawah foto</p>
    </div>

    <div id="dokumen" style="display: none;">
      <!-- Gambar-gambar dokumen penting -->
      <img src="path_to_document1.jpg" alt="Dokumen 1" style="width: 300px; height: auto;">
      <img src="path_to_document2.jpg" alt="Dokumen 2" style="width: 300px; height: auto;">
    </div>

    <div id="diary" style="display: none;">
      <!-- Tulisan diary -->
      <p>Tulisan diary akan muncul di sini</p>
    </div>

    <div id="album" style="display: none;">
      <!-- Gambar-gambar foto keluarga -->
      <img src="path_to_photo1.jpg" alt="Foto Keluarga 1" style="width: 300px; height: auto;">
      <img src="path_to_photo2.jpg" alt="Foto Keluarga 2" style="width: 300px; height: auto;">
    </div>

  </main>

  <script>
    // Fungsi untuk menampilkan konten terkait saat submenu diklik
    function showContent(id) {
      var content = document.getElementById(id);
      var others = document.querySelectorAll
    }

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>