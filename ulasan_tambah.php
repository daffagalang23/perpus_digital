<h1 class="h3 mb-3">tambah ulasan</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=ulasan" class="btn btn-primary">kembali</a>
            <hr>
            <form method="post">
            <?php 
             if(isset($_POST['ulasan'])){
             $id_buku = $_POST['id_buku'];
             $id_user = $_SESSION['user']['id_user'];
             $ulasan = $_POST['ulasan'];
             $rating = $_POST['rating'];

             $query = mysqli_query($koneksi, "INSERT INTO ulasanbuku(id_buku,id_user,ulasan,rating) values 
             ('$id_buku','$id_user','$ulasan','$rating')");

            if($query){
            echo '<script>alert("tambah data berhasil")</script>';
            }else{
            echo '<script>alert("tambah data gagal")</script>';
            }
         }
     ?>
            <table class="table">
            <tr>
                        <td width="200">buku</td>
                        <td width="1">:</td>
                        <td>
                            <select class="form-control" name="id_buku">
                                <?php
                                $b =  mysqli_query($koneksi, "SELECT*FROM buku");
                                while ($buku = mysqli_fetch_array($b)) {
                                ?>
                                <option value="<?php echo $buku['id_buku'];?>"><?php echo $buku['judul']; ?></option>
                                <?php 
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
            <tr>
              <td width="200">ulasan</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="ulasan" required></td>
            </tr>
            <tr>
              <td width="200">rating</td>
              <td width="1">:</td>
              <td><input class="form-control" type="number" name="rating" required></td>
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