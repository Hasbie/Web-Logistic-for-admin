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
	<script src=".core/.assets/bower_components/select2/dist/js/select2.full.min.js"></script>
	
<script>
  $(function () {
    $eventSelect_SD = $('.select2_SD').select2();
    $eventSelect_RG = $('.select2_RG').select2();
    
    $eventSelect_SD.on("select2:select", function(e){
        var ukuran   	= "SD_" + $("[name='ukuran']").val();
        var kota_agen   = $("[name='kota_agen']").val();
        var tujuan   	= e.params.data.text;

        $.ajax({
            url : ".core/.data/.act/proses_data_ongkir.php",
            method  : "POST",
            data    : { "ukuran" : ukuran, "kota_agen" : kota_agen, "tujuan" : tujuan },
            success   : function( response )
            {
                $("[id='biaya_pengiriman']").val( response );
				$("[id='biaya_pengiriman_2']").val( response );
            }
        })
    });
	
	 $eventSelect_RG.on("select2:select", function(e){
        var ukuran   	= "RG_" + $("[name='ukuran']").val();
        var kota_agen   = $("[name='kota_agen']").val();
        var tujuan   	= e.params.data.text;

        $.ajax({
            url : ".core/.data/.act/proses_data_ongkir.php",
            method  : "POST",
            data    : { "ukuran" : ukuran, "kota_agen" : kota_agen, "tujuan" : tujuan },
            success   : function( response )
            {
                $("[id='biaya_pengiriman']").val( response );
				$("[id='biaya_pengiriman_2']").val( response );
            }
        })
    });
	
	$("[name='ukuran']").on("change", function(e){
		if( $eventSelect_SD.val() != null ){
			var ukuran   	= "SD_" + $("[name='ukuran']").val();
			var kota_agen   = $("[name='kota_agen']").val();
			var tujuan   	= $eventSelect_SD.val();

			$.ajax({
				url : ".core/.data/.act/proses_data_ongkir.php",
				method  : "POST",
				data    : { "ukuran" : ukuran, "kota_agen" : kota_agen, "tujuan" : tujuan },
				success   : function( response )
				{
					$("[id='biaya_pengiriman']").val( response );
					$("[id='biaya_pengiriman_2']").val( response );
				}
			})
		}
		
		if( $eventSelect_RG.val() != null ){
			var ukuran   	= "RG_" + $("[name='ukuran']").val();
			var kota_agen   = $("[name='kota_agen']").val();
			var tujuan   	= $eventSelect_RG.val();

			$.ajax({
				url : ".core/.data/.act/proses_data_ongkir.php",
				method  : "POST",
				data    : { "ukuran" : ukuran, "kota_agen" : kota_agen, "tujuan" : tujuan },
				success   : function( response )
				{
					$("[id='biaya_pengiriman']").val( response );
					$("[id='biaya_pengiriman_2']").val( response );
				}
			})
		}
	});
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepickekr()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
    <script>
    $(function () {
        $('#data_resi').DataTable()
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