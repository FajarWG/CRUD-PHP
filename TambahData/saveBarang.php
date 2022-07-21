<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD with PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../">Belajar CRUD With PHP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../">Tampil Data Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./tambahData.html">Tambah Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../EditData/editData.html">Edit Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../HapusData/hapusData.html">Hapus Barang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <body>
    <center>
    <div class="container">
        <h2>Data Telah Ditambahkan</h2>
        <hr>
        <table class="table table-striped">
        <?php
            $kodebrg = $_POST['kodebrg'];
            $namabarang = $_POST['namabarang'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];

            echo "<tr><td>KODE BARANG <td>$kodebrg";
            echo "<tr><td>NAMA BARANG <td>$namabarang";
            echo "<tr><td>HARGA <td>$harga";
            echo "<tr><td>STOK <td>$stok";

            $conn   = mysqli_connect("localhost","root","","IF6");
            $sql    = "INSERT INTO barang values ('$kodebrg','$namabarang','$harga','$stok','')";
            $hasil  = mysqli_query($conn,$sql);

            echo "</table><hr>";
        ?>  
    </div>

  </body>
  </center>
</html>