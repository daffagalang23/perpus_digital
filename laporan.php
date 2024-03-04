<h1 class="h3 mb-3">Generate laporan</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
          <a href="cetak.php" class="btn btn-primary">cetak data</a>
            <hr>
            <table class="table">
              <tr>
                <th>No</th>
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
                    <td><?php echo $i;?></td>
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
          </div>
       </div>
       </div>
</div>