<h1 class="h3 mb-3">ubah ulasan</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=ulasan" class="btn btn-primary">kembali</a>
            <hr>
            <form method="post">
            <?php 
             $id = $_GET['id'];
             if(isset($_POST['ulasan'])){
             $id_buku = $_POST['id_buku'];
             $id_user = $_SESSION['user']['id_user'];
             $ulasan = $_POST['ulasan'];
             $rating = $_POST['rating'];

             $query = mysqli_query($koneksi, "UPDATE ulasanbuku SET id_buku='$id_buku',
              ulasan='$ulasan', rating='$rating' WHERE id_ulasan=$id");

            if($query){
            echo '<script>alert("ubah data berhasil")</script>';
            }else{
            echo '<script>alert("ubah data gagal")</script>';
            }
         }
         $query = mysqli_query($koneksi,"SELECT * FROM ulasanbuku WHERE id_ulasan=$id");
         $data = mysqli_fetch_array($query);
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
                                <option <?php if($data['id_buku'] == $buku['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku'];?>">
                                <?php echo $buku['judul']; ?></option>
                                <?php 
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
            <tr>
              <td width="200">ulasan</td>
              <td width="1">:</td>
              <td><input class="form-control" type="text" name="ulasan" value="<?php echo $data['ulasan']; ?>"></td>
            </tr>
            <tr>
              <td width="200">rating</td>
              <td width="1">:</td>
              <td><input class="form-control" type="number" name="rating" value="<?php echo $data['rating']; ?>"></td>
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