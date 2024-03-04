<h1 class="h3 mb-3">koleksi pribadi</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
          <div class="card-body">
            <hr>
            <table class="table">
              <tr>
                <th>No</th>
                <th>user</th>
                <th>buku</th>
              </tr>
              <?php 
              $i = 1;
              $query = mysqli_query($koneksi, "SELECT * FROM koleksipribadi 
              LEFT JOIN user ON user.id_user = koleksipribadi.id_user 
              LEFT JOIN buku ON buku.id_buku = koleksipribadi.id_buku");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $data['namalengkap'];?></td>
                    <td><?php echo $data['judul'];?></td>
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