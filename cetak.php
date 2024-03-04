<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "koneksi.php";
  ?>
<table border="1" width="100%" cellpadding="8" cellspacing="0">
    <tr>
        <th colspan="9">
        <h2 style="margin:0;">laporan peminjaman buku</h2></th>
    </tr>
      <tr>
        <th>NO</th>
        <th>nama</th>
        <th>buku</th>
        <th>tanggal peminjaman</th>
        <th>status peminjaman</th>
        <th>tanggal pengembalian</th>
      </tr>
              <?php 
              $i = 1;
              $query = mysqli_query($koneksi, "SELECT * FROM peminjaman
              LEFT JOIN user ON user.id_user = peminjaman.id_user 
              LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                <td>
                    <?php echo $i;?></td>
                    <td><?php echo $data['namalengkap'];?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['tanggalpeminjaman'];?></td>
                    <td><?php echo $data['statuspeminjaman'];?></td>
                    <td><?php echo $data['tanggalpengembalian'];?></td>
                </tr>
                <?php
                $i++;
              }
              ?>
            </table>
            <script type="text/javascript">
                window.print();
            </script>