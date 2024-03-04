<?php 
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>registrasi</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Silahkan registrasi terlebih dahulu</h1>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
                                <?php 
             if(isset($_POST['alamat'])){
             $nama_lengkap = $_POST['namalengkap'];
             $email = $_POST['email'];
             $alamat = $_POST['alamat'];
             $username = $_POST['username'];
             $password = md5($_POST['password']);
             $level = $_POST['level'];

             $insert = mysqli_query($koneksi, "INSERT INTO user(namalengkap,email,alamat,username,password,level) values 
             ('$nama_lengkap','$email','$alamat','$username','$password','$level')");

            if($insert){
            echo '<script>alert("registrasi anda berhasil")</script>';
            }else{
            echo '<script>alert("gagal registrasi")</script>';
            }
         }
     ?>
		<form method="post">
           <div class="mb-3">
                <label class="form-label">nama lengkap</label>
                     <input class="form-control form-control-lg" type="text" name="namalengkap" placeholder="masukan nama lengkap" required/>
              </div>
              <div class="mb-3">
                <label class="form-label">email</label>
                    <input class="form-control form-control-lg" type="text" name="email" placeholder="masukan email" required/>
               </div>
               <div class="mb-3">
                 <label class="form-label">alamat</label>
                    <input class="form-control form-control-lg" type="text" name="alamat" placeholder="masukan alamat" required/>
                </div>
                 <div class="mb-3">
                <label class="form-label">username</label>
                     <input class="form-control form-control-lg" type="text" name="username" placeholder="masukan username" required/>
                </div>
                <div class="mb-3">
                   <label class="form-label">Password</label>
                       <input class="form-control form-control-lg" type="password" name="password" placeholder="masukan password" required/>
                 </div>
                 <div class="mb-3">
                   <label class="form-label">level</label>
                   <select name="level" class="form-select">
                                <option value="peminjam">Peminjam</option>
                                <option value="admin">Admin</option>
                     </select required>
                 </div>
                 <div class="text-center mt-3">
                 <button class="btn btn-success" type="submit">simpan</button><br>
                 kalau sudah punya akun silahkan <a href="login.php">login</a>
                   </div>
                 </form>
                </div>
             </div>
          </div>

          </div>
        </div>
    </div>
 </div>
</main>

	<script src="js/app.js"></script>

</body>

</html>