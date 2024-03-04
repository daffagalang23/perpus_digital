<h1 class="h3 mb-3">tambah data kategori</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=kategori" class="btn btn-primary">kembali</a>
            <hr>
            <form method="post">
            <?php 
             if(isset($_POST['namakategori'])){
             $nama_kategori = $_POST['namakategori'];

             $query = mysqli_query($koneksi, "INSERT INTO kategoribuku(namakategori) values('$nama_kategori')");

            if($query){
            echo '<script>alert("tambah data berhasil")</script>';
            }else{
            echo '<script>alert("tambah data gagal")</script>';
            }
            }
?>
            <table class="table">
            <tr>
              <td width="200">Nama kategori</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="namakategori" required></td>
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