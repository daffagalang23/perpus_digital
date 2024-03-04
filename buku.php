<h1 class="h3 mb-3">data buku</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=buku_tambah" class="btn btn-primary">+ tambah data</a>
            <hr>
            <table class="table">
              <tr>
                <th>No</th>
                <th>judul</th>
                <th>kategori</th>
                <th>penulis</th>
                <th>penerbit</th>
                <th>tahun terbit</th>
                <th>deskripsi</th>
                <th>jumlah stok</th>
                <th>Aksi</th>
              </tr>
              <?php 
              $i = 1;
              $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategoribuku ON kategoribuku.id_kategori = buku.id_kategori");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['namakategori'];?></td>
                    <td><?php echo $data['penulis'];?></td>
                    <td><?php echo $data['penerbit'];?></td>
                    <td><?php echo $data['tahunterbit'];?></td>
                    <td><?php echo $data['deskripsi'];?></td>
                    <td><?php echo $data['jumlah_buku'];?></td>
                    <td>
                        <a href="?page=buku_ubah&id=<?php echo $data['id_buku'];?>" class="btn btn-warning">ubah<a>
                        <a onclick="return confirm('apakah anda yakin untuk menghapus');" href="?page=buku_hapus&id=<?php echo $data['id_buku'];?>" class="btn btn-danger">hapus<a>
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