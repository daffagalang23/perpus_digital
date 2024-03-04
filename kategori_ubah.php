<h1 class="h3 mb-3">ubah data kategori</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=kategori" class="btn btn-primary">kembali</a>
            <hr>
            <form method="post">
            <?php 
              $id = $_GET['id'];
             if(isset($_POST['namakategori'])){
             $nama_kategori = $_POST['namakategori'];

             $query = mysqli_query($koneksi, "UPDATE kategoribuku SET namakategori='$nama_kategori' WHERE id_kategori = $id");

            if($query){
            echo '<script>alert("ubah data berhasil")</script>';
            }else{
            echo '<script>alert("ubah data gagal")</script>';
            }
        }
        $query = mysqli_query($koneksi,"SELECT*FROM kategoribuku WHERE id_kategori=$id");
        $data = mysqli_fetch_array($query);
    ?>
            <table class="table">
            <tr>
              <td width="200">Nama kategori</td>
              <td width="1">:</td>
              <td><input class="form-control" value="<?php echo $data['namakategori']; ?>" type="text" name="namakategori"></td>
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