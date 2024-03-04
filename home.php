<h1 class="h3 mb-3">dashboard</h1>

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<?php 
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"))
                            ?>
													</div>
													<div class="col-auto">
													</div>
												</div>
												<h1 class="mt-1 mb-3">Total buku</h1>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
                          <?php 
                            echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM peminjaman"))
                            ?>
													</div>
													<div class="col-auto">
													</div>
												</div>
												<h1 class="mt-1 mb-3">Total peminjam</h1>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
                          <?php 
                           echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasanbuku"))
                            ?>
													</div>
													<div class="col-auto">
													</div>
												</div>
												<h1 class="mt-1 mb-3">Total ulsan</h1>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
                          <?php 
                          echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"))
                          ?>
													</div>

													<div class="col-auto">
													</div>
												</div>
												<h1 class="mt-1 mb-3">Total user</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
        </div>
                  
          <a href="?page=koleksi" class="btn btn-primary">koleksi pribadi</a><br><br>
          <h3 class="card-title-mb-0">selamat datang apa adanya</h3>      
        </div>
          <div class="card-body">
            
            <table class="table">
            <?php
              if(isset($_SESSION['user']['level']))
                ?>
              <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['namalengkap'];?></td>
              </tr>
              <tr>
                <td width="200">Level user</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['level'];?></td>
              </tr>
             
              <tr>
                <td width="200">Tanggal login</td>
                <td width="1">:</td>
                <td><?php echo date('d-m-y H:i:s');?></td>
              </tr>
            </table>
          </div>
       </div>
       </div>
   </div>