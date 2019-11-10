<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        include"conf/koneksi.php";
        $tampil=mysqli_query($con, "Select * from barang");
    ?>
<div class="">
    <div class="">
  <h2>Toko Keluarga</h2>
  <p>Data Produk</p>            
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $no=1;
        while($r=mysqli_fetch_array($tampil)){
            echo "<tr>
                    <td>$no</td>
                    <td>$r[kd_barang]</td>
                    <td>$r[nama]</td>";

                    $datakategori=mysqli_query($con,"Select * from kategori where id_kategori='$r[id_kategori]'");
                    $r2=mysqli_fetch_array($datakategori);


                   echo " <td>$r2[nama_kategori]</td>
                    <td>$r[deskripsi]</td>
                    <td>
                    <button type='button' class='btn-primary'>Edit</button>
                    <button type='button' class='btn-danger mt-2'>Hapus</button>
                    </td>
                </tr>";
                $no++;
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>