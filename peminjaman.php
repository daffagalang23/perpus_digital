<h1 class="h3 mb-3">peminjaman</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=peminjaman_tambah" class="btn btn-primary">+ tambah data</a>
            <hr>
            <table class="table">
              <tr>
                <th>No</th>
                <th>nama peminjam</th>
                <th>judul</th>
                <th>tanggal peminjaman</th>
                <th>status peminjaman</th>
                <th>tanggal pengembalian</th>
                <th>Aksi</th>
              </tr>
              <?php 
              $i = 1;
              $query = mysqli_query($koneksi, "SELECT * FROM peminjaman 
              LEFT JOIN user ON user.id_user = peminjaman.id_user 
              LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user']);
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $data['namalengkap'];?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['tanggalpeminjaman'];?></td>
                    <td><?php echo $data['statuspeminjaman'];?></td>
                    <td><?php echo $data['tanggalpengembalian'];?></td>
                    <td>
                    <?php 
                    if($data['statuspeminjaman'] != 'dikembalikan'){
                    ?>
                        <a href="?page=peminjaman_ubah&id=<?php echo $data['id_peminjaman'];?>" class="btn btn-warning">ubah<a>
                        <a onclick="return confirm('apakah anda yakin untuk menghapus');" href="?page=peminjaman_hapus&id=<?php echo $data['id_peminjaman'];?>" class="btn btn-danger">hapus<a>
                    </td>
                    <?php 
                      }
                     ?>
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