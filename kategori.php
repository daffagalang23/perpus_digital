<h1 class="h3 mb-3">data kategori</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=kategori_tambah" class="btn btn-primary">+ tambah data</a>
            <hr>
            <table class="table">
              <tr>
                <th>No</th>
                <th>nama kategori</th>
                <th>Aksi</th>
              </tr>
              <?php 
              $i = 1;
              $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $data['namakategori'];?></td>
                    <td>
                        <a href="?page=kategori_ubah&id=<?php echo $data['id_kategori'];?>" class="btn btn-warning">ubah<a>
                        <a onclick="return confirm('apakah anda yakin untuk menghapus');" href="?page=kategori_hapus&id=<?php echo $data['id_kategori'];?>" class="btn btn-danger">hapus<a>
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