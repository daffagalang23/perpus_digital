<h1 class="h3 mb-3">tambah peminjam</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <a href="?page=peminjaman" class="btn btn-primary">kembali</a>
            <hr>
            <form method="post">
            <?php 
             if(isset($_POST['statuspeminjaman'])){
             $id_buku = $_POST['id_buku'];
             $id_user = $_SESSION['user']['id_user'];
             $tanggal_peminjaman = $_POST['tanggalpeminjaman'];
             $status_peminjaman = $_POST['statuspeminjaman'];
             $tanggal_pengembalian = $_POST['tanggalpengembalian'];

             $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku,id_user,tanggalpeminjaman,statuspeminjaman,tanggalpengembalian) values 
             ('$id_buku','$id_user','$tanggal_peminjaman','$status_peminjaman','$tanggal_pengembalian')");

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
              <td width="200">tanggal peminjaman</td>
              <td width="1">:</td>
              <td><input class="form-control" type="date" name="tanggalpeminjaman" required></td>
            </tr>
            <tr>
              <td width="200">status peminjaman</td>
              <td width="1">:</td>
              <td>
              <select name="statuspeminjaman" class="form-select">
                     <option value="dipinjam">dipinjam</option>
                     <option value="dikembalikan">dikembalikan</option>
              </select required>
              </td>
            </tr>
            <tr>
              <td width="200">tanggal pengembalian</td>
              <td width="1">:</td>
              <td><input class="form-control" type="date" name="tanggalpengembalian"></td>
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