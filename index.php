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
          <a class="navbar-brand" href="./">Belajar CRUD With PHP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">Tampil Data Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./TambahData/tambahData.html">Tambah Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./EditData/editData.html">Edit Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./HapusData/hapusData.html">Hapus Barang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <body>
    <div class="container">
      <center>
        <h2>Tampilan Data Barang</h2>
        <hr>
    <table class="table table-striped">
    <tr><th>NO<th>KODEBRG<th>NAMA BARANG<th>HARGA<th>STOK<th>TOTAL<th>DISKON10%
    <?php
    
    $conn   = mysqli_connect("localhost","root","","IF6");
    $sql    = "SELECT * FROM barang";
    $hasil  = mysqli_query($conn,$sql);
    $row    = mysqli_fetch_row($hasil);
    $n      = 1;
    $totalHarga = 0;
    
    do
    {
        list($kodebrg,$namabarang,$harga,$stok) = $row;
        $total = $harga * $stok;
        $diskon = $total * 0.1;
        $totalHarga = $total + $totalHarga;
        echo "<tr><td>$n<td>$kodebrg<td>$namabarang<td>$harga<td>$stok<td>$total<td>$diskon";
        $n++;
    }
    while($row = mysqli_fetch_row($hasil));
    
    echo "<tr><td colspan=5>TOTAL<td>$totalHarga";
    
    ?>
    </table>
    <hr>
      <footer className="text-center fw-bold m-5">
      <span>Copyright© 2022 Fajar Wahyu Gumelar</span>
      </footer>
    </div>

  </body>
  </center>
</html>