<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- My style -->
  <link rel="stylesheet" href="style.css">
  <title>Administrator</title>
</head>
<body>
  
<div class="container">
  <div class="sidebar">
     <div class="header">
      <img src="cat.png" alt="">
     </div>
     <div class="main">
     <div class="list-item">
      <a href="">Admin</a>
     </div>
     <div class="list-item">
          <a href="">Produk</a>
         </div>
     <div class="list-item">
          <a href="">Pesanan</a>
        </div>
     </div>
  </div>
  <div class="main-content">
    <div class="nav">
      <div class="left-menu">
          <h1>WEB PKK</h1>
      <Span class="judul">Dashboard</Span>
    </div>
    <div class="right-menu">
      <a href=""><img src="logout.png" alt=""></a>
    </div>
  </div>
  <div class="content">
    <div class="box">
  <form action="" method="post">
    <div class="sick">
    <h1>Input Data Admin</h1>
    </div>
          <div class="tabel-box">
                <label for="">Nama : </label>
                <input type="text" name="nama" id="">
             </div>
             <div class="tabel-box">
                <label for="">Jenis Kelamin : </label>
                <input type="text" name="kelamin" id="">
             </div>
             <div class="tabel-box">
                <label for="">Alamat : </label>
                <input type="text" name="alamat" id="alamat">
             </div>
             <div class="tabel-box">
                <label for="">No_HP : </label>
                <input type="text" name="hp" id="">
             </div>
             <div class="tabel-box">
                <label for="">Email : </label>
                <input type="text" name="email" id="">
             </div>
                <button type="submit" name="submit">Simpan</button>
                <button type="submit" name="submit">Kembali</button>
    </form>
  </div>
  </div>
</div>
</body>
</html>