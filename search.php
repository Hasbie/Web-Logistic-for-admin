<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tracking Resi | Kilat Xpress</title>
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
			<span class="dua" style="width:800px; border-radius:10px;">				
				<?php 
					include 'config.php';
					if(isset($_GET['no_resi'])){
					$no_resi = $_GET['no_resi'];
					echo "
						<h3>
							Data Terupdate Tracking Resi: ".$no_resi."
						</h3>
					";
				}
				?>
				<?php 
				include 'config.php';
				 if(isset($_GET['no_resi'])){
				  $no_resi = $_GET['no_resi'];
				  $data = mysqli_query($koneksi,"select * from tracking_resi where no_resi like '%".$no_resi."%'");    
				 }
				 else
				 {
					$data = mysqli_query($koneksi,"select * from tracking_resi");
				 }				 
				while($d = mysqli_fetch_array($data)){
			?>		
			<p>
				<br>
				<?php echo $d['waktu'];?>	
				<br>
				<span style="text-transform:uppercase;"><?php echo $d['keterangan'];?></span>
			</p>
			<?php 
			}
			?>	
			</span>
		</div>
	</div>
</body>
</html>