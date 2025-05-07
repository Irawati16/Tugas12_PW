<?php
error_reporting(0);
  include "header.php";
?>
        <h1>Method GET</h1>
          <a href="latihan6.php?nama=fikri">NAMA</a> |
          <a href="latihan6.php?nama=fikri&jurusan=TI">JURUSAN</a>
          <?php
             $nama = $_GET['nama'];
             $jurusan = $_GET['jurusan'];
             echo "<h2>NAMA: ". $nama."</h2>";
             echo "<h2>JURUSAN: ". $jurusan."</h2>";

            ?>
<?php
  include "footer.php";
  ?>