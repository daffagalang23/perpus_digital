<h1 class="h3 mb-3">tambah data buku</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=buku" class="btn btn-primary">kembali</a>
            <hr>
            <form method="post">
            <?php 
             if(isset($_POST['judul'])){
             $judul = $_POST['judul'];
             $id_kategori = $_POST['id_kategori'];
             $penulis = $_POST['penulis'];
             $penerbit = $_POST['penerbit'];
             $tahun_terbit = $_POST['tahunterbit'];
             $deskripsi = $_POST['deskripsi'];
             $jumlah_buku = $_POST['jumlah_buku'];

             $query = mysqli_query($koneksi, "INSERT INTO buku(judul,id_kategori,penulis,penerbit,tahunterbit,deskripsi,jumlah_buku) values ('$judul',
            '$id_kategori','$penulis','$penerbit','$tahun_terbit','$deskripsi','$jumlah_buku')");

            if($query){
            echo '<script>alert("tambah data berhasil")</script>';
            }else{
            echo '<script>alert("tambah data gagal")</script>';
            }
         }
     ?>
            <table class="table">
            <tr>
              <td width="200">judul</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="judul" required></td>
            </tr>
            <tr>
                   <td width="200">kategori</td>
                   <td width="1">:</td>
                   <td>
                      <select class="form-control" name="id_kategori">
                        <?php
                           $kat =  mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                           while ($kategori = mysqli_fetch_array($kat)) {
                        ?>
                       <option value="<?php echo $kategori['id_kategori'];?>"><?php echo $kategori['namakategori']; ?></option>
                       <?php 
                           }
                        ?>
                      </select>
                  </td>
               </tr>
            <tr>
              <td width="200">penulis</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="penulis" required></td>
            </tr>
            <tr>
              <td width="200">penerbit</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="penerbit" required></td>
            </tr>
            <tr>
              <td width="200">tahun terbit</td>
              <td width="1">:</td>
              <td><input class="form-control" type="number" name="tahunterbit" required></td>
            </tr>
            <tr>
              <td width="200">deskripsi</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="deskripsi" required></td>
            </tr>
            <tr>
              <td width="200">jumlah stok</td>
              <td width="1">:</td>
              <td><input class="form-control" type="number" name="jumlah_buku" required></td>
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