<?php
require_once('../../config.php');
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT r.*,d.license_id_no, d.name as driver from `offense_list` r inner join `drivers_list` d on r.driver_id = d.id where r.id = '{$_GET['id']}' ");
    if($conn->error){
        echo $conn->error ."\n";
        echo "SELECT r.*,d.license_id_no, d.name as driver from `offense_list` r inner join `drivers_list` on r.driver_id = d.id where r.id = '{$_GET['id']}' ";
    }
    $qry2 = $conn->query("SELECT i.*,o.code,o.name from `offense_items` i inner join `offenses` o on i.offense_id = o.id where i.driver_offense_id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
    $offense_arr = array();
	if($qry2->num_rows > 0){
        while($row = $qry2->fetch_assoc()){
            $offense_arr[]=$row;
        }
    }
}
?>
<div class="container-fluid">
    <div class="w-100 d-flex justify-content-end mb-2">
        <button class="btn btn-flat btn-sm btn-default bg-lightblue" type="button" id="print"><i class="fa fa-print"></i> Print</button>
        <button class="btn btn-flat btn-sm btn-default bg-black" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
    </div>
    <div class="border border-dark px-2 py-2" id="print_out">
        
    <style>
        img#cimg{
            height: 100%;
            width: 100%;
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
    
        <table class="table boder-0">
            <tr class='boder-0'>
                <td width="80%" class='boder-0 align-bottom'>
                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-between  w-max-100">
                                <div class="col-6 d-flex w-max-100">
                                    <label class="float-left w-auto whitespace-nowrap">Ticken No: </label>
                                    <p class="col-md-auto border-bottom px-2 border-dark w-100"><b><?php echo $ticket_no ?></b></p>
                                </div>
                                <div class="col-6 d-flex w-max-100">
                                    <label class="float-left w-auto whitespace-nowrap">DateTime.: </label>
                                    <p class="col-md-auto border-bottom px-2 border-dark w-100"><b><?php echo date("M d, Y h:i A",strtotime($date_created)) ?></b></p>
                                </div>
                            </div>
                            <div class="d-flex w-max-100">
                                <label class="float-left w-auto whitespace-nowrap">License ID:</label>
                                <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $license_id_no ?></b></p>
                            </div>
                            <div class="d-flex w-max-100">
                                <label class="float-left w-auto whitespace-nowrap">Driver's Name:</label>
                                <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $driver ?></b></p>
                            </div>
                        </div>
                    </div>
                </td>
                <td width="20%" class="border-3 border-dark">
                    <div class="w-100 d-flex align-items-center justify-content-center">
                        <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="<?php $_settings->info('short_name') ?>" class="img-thumnail" id="cimg">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <div class="d-flex w-max-100">
                        <label class="float-left w-auto whitespace-nowrap">Officer ID:</label>
                        <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $officer_id ?></b></p>
                    </div>
                    <div class="d-flex w-max-100">
                        <label class="float-left w-auto whitespace-nowrap">Officer's Name:</label>
                        <p class="col-md-auto border-bottom border-dark w-100"><b><?php echo $officer_name ?></b></p>
                    </div>
                    <hr>
                    <div class="d-flex w-max-100">
                        <label class="float-left w-auto whitespace-nowrap">Ticket Status:</label>
                        <p class=" border-bottom border-dark px-4"><b><?php echo ($status == 1) ? "Paid" : "" ?></b></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr class='bg-dark border-dark'>
        <h4 class="text-center"><b>Offense List</b></h4>
        <table class='table table-stripped px-4'>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Offense</th>
                    <th>Fine</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($offense_arr as $row):
                ?>
                <tr>
                    <th><?php echo $row['code'] ?></th>
                    <th><?php echo $row['name'] ?></th>
                    <th class='text-right'><?php echo number_format($row['fine'],2) ?></th>
                </tr>
                <?php endforeach; ?>
                <?php if(count($offense_arr) <= 0): ?>
                <tr>
                    <th class="text-center" colspan="3">No Record.</th>
                </tr>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class='text-center' colspan="2">Total</th>
                    <th class="text-right"><?php echo number_format($total_amount,2) ?></th>
                </tr>
            </tfoot>
        </table>
        <hr class="bg-dark border-dark">
        <b>Remarks:</b>
        <p><?php echo $remarks ?></p>
    </div>
</div>

<script>
    $(function(){
        $('#print').click(function(){
            start_loader()
            var _h = $('head').clone()
            var _p = $('#print_out').clone();
            var _el = $('<div>')
            _p.prepend('<div class="d-flex mb-3 w-100 align-items-center justify-content-center">'+
            '<div class="px-2">'+
            '<h5 class="text-center"><?php echo $_settings->info('name') ?></h5>'+
            '<h5 class="text-center">Traffic Offense Ticket</h5>'+
            '</div>'+
            '</div><hr/>');
            _el.append(_h)
            _el.append('<style>html, body, .wrapper {min-height: unset !important;}#print_out{width:50% !important;}</style>')
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