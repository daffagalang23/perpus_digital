<h1 class="h3 mb-3">ubah data buku</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=buku" class="btn btn-primary">kembali</a>
            <hr>
            <form method="post">
            <?php 
            $id = $_GET['id'];
             if(isset($_POST['judul'])){
             $judul = $_POST['judul'];
             $id_kategori = $_POST['id_kategori'];
             $penulis = $_POST['penulis'];
             $penerbit = $_POST['penerbit'];
             $tahun_terbit = $_POST['tahunterbit'];
             $deskripsi = $_POST['deskripsi'];

             $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', id_kategori='$id_kategori', penulis='$penulis', 
             penerbit='$penerbit', tahunterbit='$tahun_terbit', deskripsi='$deskripsi' WHERE id_buku=$id");

            if($query){
            echo '<script>alert("ubah data berhasil")</script>';
            }else{
            echo '<script>alert("ubah data gagal")</script>';
            }
         }
         $query = mysqli_query($koneksi,"SELECT*FROM buku WHERE id_buku=$id");
         $data = mysqli_fetch_array($query);
     ?>
            <table class="table">
            <tr>
              <td width="200">judul</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
            </tr>
            <tr>
                   <td width="200">kategori</td>
                   <td width="1">:</td>
                   <td>
                    <select class="form-select" name="id_kategori">
                       <?php
                        $kat =  mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                        while ($kategori = mysqli_fetch_array($kat)) {
                        ?>
                      <option <?php if($data['id_kategori'] == $kategori['id_kategori']) echo 'selected'; ?> value="<?php echo $kategori['id_kategori'];?>">
                      <?php echo $kategori['namakategori']; ?></option>
                     <?php 
                          }
                      ?>
                     </select>
                    </td>
                  </tr>
            <tr>
              <td width="200">penulis</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="penulis" value="<?php echo $data['penulis']; ?>"></td>
            </tr>
            <tr>
              <td width="200">penerbit</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>"></td>
            </tr>
            <tr>
              <td width="200">tahun terbit</td>
              <td width="1">:</td>
              <td><input class="form-control" type="number" name="tahunterbit" value="<?php echo $data['tahunterbit']; ?>"></td>
            </tr>
            <tr>
              <td width="200">deskripsi</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>"></td>
            </tr>
            <tr>
                 <td></td>
                 <td></td>
                 <td><button class="btn btn-success" type="submit">simpan</button></td>
                 <td><button class="btn btn-warning" type="reset">reset</button></td>
          </tr>
            </table>
            </form>
          </div>
       </div>
       </div>
</div>