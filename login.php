<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Kurir | Kilat Xpress</title>
	<link rel="icon" href=".core/.assets/img/favicon.png">
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href=".core/.assets/css/login.css">
	<link rel="stylesheet" href=".core/.assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href=".core/.assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href=".core/.assets/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href=".core/.assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href=".core/.assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href=".core/.assets/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href=".core/.assets/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href=".core/.assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href=".core/.assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href=".core/.assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>	
	<div class="login">	
		<img src=".core/.assets/img/logo.png">
		<div class="form_login">
			<span class="satu">
				<h3>
					Kurir Kilat Xpress
				</h3>
				<p>   					
					Selamat Datang Kurir Kilat Xpress!
					<br>
					Pastikan Anda mendapatkan update informasi terbaru Kurir kilat melalui website resmi kami.
				</p>
				<a href="kurir" class="btn btn_register" style="display:none;">
					Login Kurir Kilat Xpress
				</a>
			</span>
			<span class="dua">
				<h3>
					Login Kurir
				</h3>
				<form class="form_login_register" method="post" action="" role="form">
					<div class="input-group">
						<span class="input-group-addon username"><i class="fa fa-user-circle"></i></span>
						<input type="text" class="form-control username" placeholder="Username" name="username" required style="text-transform:uppercase;">
					</div>
					<div class="input-group">
						<span class="input-group-addon password"><i class="fa fa-lock" style="margin:0px 2.5px;"></i></span>
						<input type="password" class="form-control password" placeholder="Password" name="password" required>
					</div>
					<button type="submit" class="btn btn_login">Login Kurir</button>
				</form>
			</span>
			<span class="tiga">
				<h3>
					Kontak Kami
				</h3>
				<p>
					Jl. Mojogedang - Jambangan Km 01, Ds Mojogedang RT 04 RW 02.
					<br>
					Karanganyar - Surakarta.
					<br>
					<br>
					Hubungi : +62 823-2704-5845
					<br>
					Email : kilatxpress@gmail.com
				</p>
			</span>
		</div>
	</div>	
	<?php 
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$user	= $_POST['username'];
			$pass	= $_POST['password'];
			if($user=='' || $pass==''){
				//Silent
			}else{
				include "config.php";
				$sqlLogin = mysqli_query($koneksi, "SELECT * FROM user_manager WHERE username='$user' AND password='$pass' AND tipe_akun='Akun Kurir'");
				$jml=mysqli_num_rows($sqlLogin);
				$d=mysqli_fetch_array($sqlLogin);
				if($jml > 0){
					session_start();
					$_SESSION['login']		= TRUE;
					$_SESSION['id']			= $d['id'];
					$_SESSION['username']	= $d['username'];
					$_SESSION['tipe_akun']	= $d['tipe_akun'];
					
					header('Location: data?value=dashboard');
				}else{
				?>
					<div class="" id="alert" role="alert" data-backdrop="static" data-keyboard="false">
					<?php
						echo "
							<div class='modal-dialog alert_konten'>
								<div class='modal-content'>
									<div class='modal-body alert'>
										<a href='' class='modal_close' data-dismiss='modal' aria-label='close'>
											<i class='fa fa-times'></i>
										</a>
										<h4>
											<i class='icon fa fa-warning'></i> 
											Login Salah
										</h4>
										<p>
											Mohon maaf username atau password yang Anda inputkan <strong>SALAH</strong>. Silahkan ulangi dengan inputan data yang benar!
										</p>
									</div>
								</div>
							</div>
						";
					?>
					</div>
				<?php
				}
			}
		}
	?>
	<style>
		input { 
				text-transform: uppercase;
			}
			::-webkit-input-placeholder { /* WebKit browsers */
				text-transform: none;
			}
			:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
				text-transform: none;
			}
			::-moz-placeholder { /* Mozilla Firefox 19+ */
				text-transform: none;
			}
			:-ms-input-placeholder { /* Internet Explorer 10+ */
				text-transform: none;
			}
			::placeholder { /* Recent browsers */
				text-transform: none;
			}
	</style>
	<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
		$(this).remove(); 
		});
	}, 3000);
	</script>
    <script src=".core/.assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src=".core/.assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src=".core/.assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src=".core/.assets/bower_components/raphael/raphael.min.js"></script>
	<script src=".core/.assets/bower_components/morris.js/morris.min.js"></script>
	<script src=".core/.assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src=".core/.assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src=".core/.assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src=".core/.assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<script src=".core/.assets/bower_components/moment/min/moment.min.js"></script>
	<script src=".core/.assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src=".core/.assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src=".core/.assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src=".core/.assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src=".core/.assets/bower_components/fastclick/lib/fastclick.js"></script>
	<script src=".core/.assets/dist/js/adminlte.min.js"></script>
	<script src=".core/.assets/dist/js/pages/dashboard.js"></script>
	<script src=".core/.assets/dist/js/demo.js"></script>
</body>
</html>