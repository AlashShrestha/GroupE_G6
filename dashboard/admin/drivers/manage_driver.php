<?php
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
</style>
<div class="card card-outline card-info">
	<div class="card-header">
		<h3 class="card-title"><?php echo isset($id) ? "Update ": "Create New " ?> driver</h3>
	</div>
	<div class="card-body">
		<form action="" id="driver-form">
			<input type="hidden" name ="id" value="<?php echo isset($id) ? $id : '' ?>">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="license_id_no" class="control-label">License No.</label>
						<input type="text" maxlength="50" class="form-control form" required name="license_id_no" value="<?php echo isset($license_id_no) ? $license_id_no : '' ?>">
					</div>
					<div class="form-group">
						<label for="lastname" class="control-label">Last Name</label>
						<input type="text" class="form-control form" required name="lastname" value="<?php echo isset($lastname) ? $lastname : '' ?>">
					</div>
					<div class="form-group">
						<label for="firstname" class="control-label">First Name</label>
						<input type="text" class="form-control form" required name="firstname" value="<?php echo isset($firstname) ? $firstname : '' ?>">
					</div>
					<div class="form-group">
						<label for="middlename" class="control-label">Middle Name</label>
						<input type="text" class="form-control form" name="middlename" value="<?php echo isset($middlename) ? $middlename : '' ?>">
					</div>
					<div class="form-group">
						<label for="dob" class="control-label">DOB</label>
						<input type="date" class="form-control form" required name="dob" value="<?php echo isset($dob) ? date("Y-m-d",strtotime($dob)) : '' ?>">
					</div>
					<div class="form-group">
						<label for="present_address" class="control-label">Present Address</label>
						<textarea rows="3" class="form-control" style="resize:none" required name="present_address"><?php echo isset($present_address) ? $present_address : '' ?></textarea>
					</div>
					<div class="form-group">
						<label for="permanent_address" class="control-label">Permanent Address</label>
						<textarea rows="3" class="form-control" style="resize:none" required name="permanent_address"><?php echo isset($permanent_address) ? $permanent_address : '' ?></textarea>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="civil_status" class="control-label">Civil Status</label>
						<select name="civil_status" id="civil_status" class="custom-select select2">
							<option <?php echo (isset($civil_status) && $civil_status == 'Single') ? 'selected' : '' ?>>Single</option>
							<option <?php echo (isset($civil_status) && $civil_status == 'Married') ? 'selected' : '' ?>>Married</option>
							<option <?php echo (isset($civil_status) && $civil_status == 'Divorced') ? 'selected' : '' ?>>Divorced</option>
							<option <?php echo (isset($civil_status) && $civil_status == 'Windowed') ? 'selected' : '' ?>>Windowed</option>
						</select>
					</div>
					<div class="form-group">
						<label for="nationality" class="control-label">Nationality</label>
						<input type="text" class="form-control form" required name="nationality" value="<?php echo isset($nationality) ? $nationality : '' ?>">
					</div>
					<div class="form-group">
						<label for="contact" class="control-label">Contact Number</label>
						<input type="text" maxlength="13" class="form-control form" required name="contact" value="<?php echo isset($contact) ? $contact : '' ?>">
					</div>
					<div class="form-group">
						<label for="license_type" class="control-label">License Type</label>
						<select name="license_type" id="license_type" class="custom-select select2">
							<option <?php echo (isset($license_type) && $license_type == 'Student') ? 'selected' : '' ?>>Student</option>
							<option <?php echo (isset($license_type) && $license_type == 'Non-Professional') ? 'selected' : '' ?>>Non-Professional</option>
							<option <?php echo (isset($license_type) && $license_type == 'Professional') ? 'selected' : '' ?>>Professional</option>
						</select>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Photo</label>
						<div class="custom-file">
						<input type="hidden" name="image_path" value="<?php echo isset($image_path) ? $image_path : '' ?>">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
						<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
					<div class="form-group d-flex justify-content-center">
						<img align="center" src="<?php echo validate_image(isset($image_path) ? $image_path : '') ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
					</div>
				</div>
			</div>
			
		</form>
	</div>
	<div class="card-footer">
		<button class="btn btn-flat btn-primary" form="driver-form">Save</button>
		<a class="btn btn-flat btn-default" href="?page=drivers">Cancel</a>
	</div>
</div>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$(document).ready(function(){
		$('#driver-form').submit(function(e){
			e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_driver",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.href = "./?page=drivers";
					}else if(resp.status == 'failed' && !!resp.msg){
                        var el = $('<div>')
                            el.addClass("alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").animate({ scrollTop: _this.closest('.card').offset().top }, "fast");
                            end_loader()
                    }else{
						alert_toast("An error occured",'error');
						end_loader();
                        console.log(resp)
					}
				}
			})
		})
	})
</script>