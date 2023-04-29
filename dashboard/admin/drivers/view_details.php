<?php
require_once('../../config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `drivers_list` where id = '{$_GET['id']}' ");
    $qry2 = $conn->query("SELECT * from `drivers_meta` where driver_id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
	if($qry2->num_rows > 0){
        while($row = $qry2->fetch_assoc()){
            	${$row['meta_field']}=$row['meta_value'];
        }
    }
}
?>
<style>
	img#cimg{
		height: 25vh;
		width: 15vw;
		object-fit: scale-down;
		object-position: center center;
	}
    p,label{
        margin-bottom:5px;
    }
    #uni_modal .modal-footer{
        display:none !important;
    }
    
</style>
<div class="container-fluid">
    <div class="w-100 d-flex justify-content-end mb-2">
        <button class="btn btn-flat btn-sm btn-default bg-lightblue" type="button" id="print"><i class="fa fa-print"></i> Print</button>
        <button class="btn btn-flat btn-sm btn-default bg-black" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
    </div>
    <div class="border border-dark px-2 py-2" id="print_out">
        <table class="table">
            <tr class='boder-0'>
                <td width="80%" class='boder-0 align-bottom'>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex w-max-100">
                                <label class="float-left w-auto whitespace-nowrap">License ID:</label>
                                <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $license_id_no ?></b></p>
                            </div>
                            <div class="d-flex w-max-100">
                                <label class="float-left w-auto whitespace-nowrap">License Type:</label>
                                <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $license_type ?></b></p>
                            </div>
                            <div class="d-flex w-max-100">
                                <label class="float-left w-auto whitespace-nowrap">Name:</label>
                                <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $name ?></b></p>
                            </div>
                            <div class="row justify-content-between  w-max-100">
                                <div class="col-6 d-flex w-max-100">
                                    <label class="float-left w-auto whitespace-nowrap">DOB: </label>
                                    <p class="col-md-auto border-bottom px-2 border-dark w-100"><b><?php echo date("M d, Y",strtotime($dob)) ?></b></p>
                                </div>
                                <div class="col-6 d-flex w-max-100">
                                    <label class="float-left w-auto whitespace-nowrap">Contact No.: </label>
                                    <p class="col-md-auto border-bottom px-2 border-dark w-100"><b><?php echo $contact ?></b></p>
                                </div>
                            </div>
                            <div class="row justify-content-between  w-max-100">
                                <div class="col-6 d-flex w-max-100">
                                    <label class="float-left w-auto whitespace-nowrap">Civil Status: </label>
                                    <p class="col-md-auto border-bottom px-2 border-dark w-100"><b><?php echo $civil_status ?></b></p>
                                </div>
                                <div class="col-6 d-flex w-max-100">
                                    <label class="float-left w-auto whitespace-nowrap">Nationality: </label>
                                    <p class="col-md-auto border-bottom px-2 border-dark w-100"><b><?php echo $nationality ?></b></p>
                                </div>
                            </div>
                            <div class="d-flex w-max-100">
                                <label class="float-left w-auto whitespace-nowrap">Present Address:</label>
                                <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $present_address ?></b></p>
                            </div>
                            <div class="d-flex w-max-100">
                                <label class="float-left w-auto whitespace-nowrap">Permanent Address:</label>
                                <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $permanent_address ?></b></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td width="20%">
                    <div class="w-100 d-flex align-items-center justify-content-center">
                        <img src="<?php echo validate_image($image_path) ?>" alt="Driver's ID" class="img-thumnail" id="cimg">
                    </div>
                </td>
            </tr>
        </table>
        <hr class='bg-dark border-dark'>
        <h4 class="text-center"><b>Offense Records</b></h4>
        <table class='table table-stripped px-4'>
            <thead>
                <tr>
                    <th>DateTime</th>
                    <th>Offense</th>
                    <th>Fine</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $olist = $conn->query("SELECT i.*,o.code,o.name FROM `offense_items` i inner join `offenses` o on i.offense_id = o.id where i.driver_offense_id in (SELECT id FROM `offense_list` where driver_id = '{$driver_id}') order by unix_timestamp(i.date_created) asc  ");
                if($conn->error){
                    echo $conn->error ."\n";
                }
                while($row = $olist->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo date("M d, Y H:i A",strtotime($date_created)) ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td class="text-right"><?php echo number_format($row['fine'],2) ?></td>
                    <td><?php echo ($row['status'] == 1) ? "Paid" : 'Pending' ?></td>
                </tr>
                <?php endwhile; ?>
                <?php if($olist->num_rows <= 0): ?>
                <tr>
                    <th class="text-center" colspan="4">No Record.</th>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(function(){
        $('#print').click(function(){
            start_loader()
            var _h = $('head').clone()
            var _p = $('#print_out').clone();
            var _el = $('<div>')
            _el.append(_h)
            _el.append('<style>html, body, .wrapper {min-height: unset !important;}</style>')
            _p.prepend('<div class="d-flex mb-3 w-100 align-items-center justify-content-center">'+
            '<img class="mx-4" src="<?php echo validate_image($_settings->info('logo')) ?>" width="50px" height="50px"/>'+
            '<div class="px-2">'+
            '<h3 class="text-center"><?php echo $_settings->info('name') ?></h3>'+
            '<h3 class="text-center">Driver\'s Information and Traffic Offense Records</h3>'+
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