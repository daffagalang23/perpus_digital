<h1 class="h3 mb-3">ulasan buku</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=ulasan_tambah" class="btn btn-primary">+ tambah data</a>
            <hr>
            <table class="table">
              <tr>
                <th>No</th>
                <th>nama</th>
                <th>buku</th>
                <th>ulasan</th>
                <th>rating</th>
                <th>Aksi</th>
              </tr>
              <?php 
              $i = 1;
              $query = mysqli_query($koneksi, "SELECT * FROM ulasanbuku 
              LEFT JOIN user ON user.id_user = ulasanbuku.id_user 
              LEFT JOIN buku ON buku.id_buku = ulasanbuku.id_buku");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $data['namalengkap'];?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['ulasan'];?></td>
                    <td><?php echo $data['rating'];?></td>
                    <td>
                        <a href="?page=ulasan_ubah&id=<?php echo $data['id_ulasan'];?>" class="btn btn-warning">ubah<a>
                        <a onclick="return confirm('apakah anda yakin untuk menghapus');" href="?page=ulasan_hapus&id=<?php echo $data['id_ulasan'];?>" class="btn btn-danger">hapus<a>
                    </td>
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