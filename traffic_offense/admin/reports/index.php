<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
$date_start = isset($_GET['date_start']) ? $_GET['date_start'] : date("Y-m-d",strtotime(date('Y-m-d').' -3 days'));
$date_end = isset($_GET['date_end']) ? $_GET['date_end'] : date("Y-m-d");
?>
<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Reports</h3>
		<!-- <div class="card-tools">
			<a href="?page=offenses/manage_record" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span>  Create New</a>
		</div> -->
	</div>
	<div class="card-body">
		<div class="">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="date_start" class="control-label">Date Start</label>
                    <input type="date" class="form-control" id="date_start" value="<?php echo date("Y-m-d",strtotime($date_start)) ?>">
                </div>
            </div>
            <div class="col-4">
            <div class="form-group">
                    <label for="date_end" class="control-label">Date End</label>
                    <input type="date" class="form-control" id="date_end" value="<?php echo date("Y-m-d",strtotime($date_end)) ?>">
                </div>
            </div>
            <div class="col-2 row align-items-end pb-1">
                <div class="w-100">
                    <div class="form-group d-flex justify-content-between align-middle">
                        <button class="btn btn-flat btn-default bg-lightblue" type="button" id="filter"><i class="fa fa-filter"></i> Filter</button>
                        <button class="btn btn-flat btn-success" type="button" id="print"><i class="fa fa-print"></i> Print</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="print_out">
			<table class="table table-hover table-stripped">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="5%">
					<col width="10%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>DateTime</th>
						<th>Ticket No.</th>
						<th>License ID</th>
						<th>Officer</th>
						<th>Status</th>
						<th>Total Fine</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
						$qry = $conn->query("SELECT r.*,d.license_id_no FROM `offense_list` r inner join `drivers_list` d on r.driver_id = d.id where date(r.date_created) between '{$date_start}' and '{$date_end}' order by unix_timestamp(r.date_created) desc ");
						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td><?php echo date("Y-m-d H:i A",strtotime($row['date_created'])) ?></td>
							<td><?php echo $row['ticket_no'] ?></td>
							<td><?php echo $row['license_id_no'] ?></td>
							<td><?php echo $row['officer_name'] ?></td>
							<td class="text-center">
                    <?php if($row['status'] == 1): ?>
                        <span class="badge badge-success">Paid</span>
                    <?php else: ?>
                        <span class="badge badge-secondary">Pending</span>
                    <?php endif; ?>
                </td>
              <td class="text-right"><?php echo number_format($row['total_amount']) ?></td>
						</tr>
					<?php endwhile; ?>
					<?php if($qry->num_rows <=0 ): ?>
                        <tr>
                            <th class="text-center" colspan='7'> No Records.</th>
                        </tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
        $('#filter').click(function(){
            location.replace("./?page=reports&date_start="+($('#date_start').val())+"&date_end="+($('#date_end').val()));
        })

        $('#print').click(function(){
            start_loader()
            var _h = $('head').clone()
            var _p = $('#print_out').clone();
            var _el = $('<div>')
            _el.append(_h)
            _el.append('<style>html, body, .wrapper {min-height: unset !important;}</style>')
            var rdate = "";
            if('<?php echo $date_start ?>' == '<?php echo $date_end ?>')
                rdate = "<?php echo date("M d, Y",strtotime($date_start)) ?>";
            else
                rdate = "<?php echo date("M d, Y",strtotime($date_start)) ?> - <?php echo date("M d, Y",strtotime($date_end)) ?>";
            _p.prepend('<div class="d-flex mb-3 w-100 align-items-center justify-content-center">'+
            '<img class="mx-4" src="<?php echo validate_image($_settings->info('logo')) ?>" width="50px" height="50px"/>'+
            '<div class="px-2">'+
            '<h3 class="text-center"><?php echo $_settings->info('name') ?></h3>'+
            '<h3 class="text-center">Traffic Offense Reports</h3>'+
            '<h4 class="text-center">as of</h4>'+
            '<h4 class="text-center">'+rdate+'</h4>'+
            '</div>'+
            '</div><hr/>');
            _el.append(_p)
            var nw = window.open("","_blank","width=1200,height=1200")
                nw.document.write(_el.html())
                nw.document.close()
                setTimeout(() => {
                    nw.print()
                    setTimeout(() => {
                        nw.close()
                        end_loader()
                    }, 300);
                }, 500);
        })
	})
	
</script>