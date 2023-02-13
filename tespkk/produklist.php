<?php
  $koneksi = mysqli_connect("localhost","root","","project");
?>
<?php
  $hasil = mysqli_query($koneksi,"SELECT*FROM produk");
?>
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
      <table border ="1">
          <tr>
              <td>No</td>
              <td>Nama Produk</td>
              <td>Jenis Produk</td>
              <td>Harga Produk</td>
              <td>Stok</td>
              <td>Tanggal Exp</td>
              <td>Poto</td>
              <td>Aksi</td>
          </tr>
  <div class="content">
              <?php

          foreach ($hasil as $ya){
        ?>
      <div class="list-produk">
        <tr>
        <td><?= $ya["no"];?></td>
        <td><?= $ya["nama_produk"];?></td>
        <td><?= $ya["jenis_produk"];?></td>
        <td><?= $ya["harga_produk"];?></td>
        <td><?= $ya["stok"];?></td>
        <td><?= $ya["tnggal_exp"];?></td>
        <td><img src="<?=$ya["poto"]?>" width="100"></td>
        <td><a href="<?php echo $ya['id']; ?>">edit</a>|
        <a href="<?php echo $ya['id']; ?>">hapus</a></td>
      </div>
      <?php
              }
      ?>
  </div>
</div>
</tr>
</table>
</body>
</html>