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
	
	<script src="jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
    <script src="process.js"></script> <!-- Load file process.js -->
</head>
<body>	
	<div class="login">	
		<img src=".core/.assets/img/logo.png">
		<div class="form_login">
			<span class="dua" style="width:800px; border-radius:10px;">
				<h3>
					Masukan Nomor Resi
				</h3>
				<form class="form_login_register" action="search" id="search_mini_form" method="get">
					<div class="input-group">
						<span class="input-group-addon password"><i class="fa fa-lock" style="margin:0px 2.5px;"></i></span>
						<input type="text" class="form-control password" placeholder="No. Resi" name="no_resi" required>	
					</div>
					<button type="submit" class="btn btn_login">Tracking</button>
				</form>
			</span>
		</div>
	</div>
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