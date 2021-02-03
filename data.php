	<?php include ".core/.system/head.php";?>
	<?php include ".core/.system/menu.php";?>

	<?php
		$pages_dir = '.core/.data';
		if(!empty($_GET['value'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			
			$p = $_GET['value'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo '				';
			}
		} else {
			include($pages_dir.'/dashboard.php');
		}
	?>
	
	<?php include ".core/.system/footer.php";?>
	</div>
    <!-- ./wrapper -->

    <script src=".core/.assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src=".core/.assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src=".core/.assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src=".core/.assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src=".core/.assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src=".core/.assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src=".core/.assets/dist/js/adminlte.min.js"></script>
    <script src=".core/.assets/dist/js/demo.js"></script>
    <script>
    $(function () {
        $('#data').DataTable()
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
    </script>
</body>
</html>