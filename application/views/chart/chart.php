<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div>&nbsp;</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
				<!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>               
            </div>
            <!-- /.row -->
</div>
        <!-- /#page-wrapper -->
		
	</div>
	
	<!-- jQuery -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('vendor/metisMenu/metisMenu.min.js'); ?>"></script>

   	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('vendor/raphael/raphael.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/morrisjs/morris.min.js'); ?>"></script>
    <script>
	Morris.Bar({
        element: 'morris-bar-chart',
        data: [<?php echo $data_graph ?>],
        xkey:'year',
		ykeys:['profit', 'purchase', 'sale'],
		labels:['Profit', 'Purchase', 'Sale'],
        hideHover: 'auto',
        resize: true
    });
	</script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('dist/js/sb-admin-2.js') ?>"></script>