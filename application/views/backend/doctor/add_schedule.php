<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('add_shedule');?>
				<a href="<?php echo base_url();?>admin/list_schedule" 
                     class="btn btn-orange btn-xs"><i class="fa fa-link"></i>&nbsp;<?php echo get_phrase('list_shedules');?>
                 </a>
			</div>
				<div class="panel-wrapper collapse in" aria-expanded="true">
				<div class="panel-body">
					<?php echo form_open(base_url() . 'admin/add_schedule/create' , 
					array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					



					<input name="department_id" value="<?php echo $this->db->get_where('doctor', array('doctor_id' => $this->session->userdata('doctor_id')))->row()->department_id;?>" type="hidden">
					<input name="doctor_id" value="<?php echo $this->session->userdata('doctor_id');?>" type="hidden">

						
		
								
						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('shedule_date');?>*</span></label>
								<div class="col-md-12">
									<input class="form-control " name="avail_day" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input" required>
								</div>
						</div>
								
						
								
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group clockpicker">
                                    <input class="form-control" id="single-input" name="start_time" value="" placeholder="Start date" required>
										 <span class="input-group-btn">
										 <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-success"><?php echo get_phrase('start_time');?></button>
										</span> 

								</div>
							</div>
						</div>
								
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group clockpicker">
									<input class="form-control" id="single-input" name="end_time" value="" placeholder="End date" required>
									<span class="input-group-btn">
										<button type="button" id="check-minutes" class="btn waves-effect waves-light btn-success"><?php echo get_phrase('end_time');?></button>
									</span> 

                             	</div>
							</div>
                       	</div>
								
						<div class="col-md-12">
							<div class="form-group">
								<div class="input-group clockpicker">
                                	<input class="form-control" id="single-input" name="per_patient_time" value="" placeholder="Time for each patient" required>
                                	<span class="input-group-btn">
                  					<button type="button" id="check-minutes" class="btn waves-effect waves-light btn-success"><?php echo get_phrase('per_patient_time');?></button>
                  					</span> 

                                </div>
							</div>
						</div>
								
								
						<hr>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="radio" class="check" id="square-radio-1" name="status" value="1" data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('active');?></label>        
                                  	<input type="radio" class="check" id="square-radio-2" name="status" value="2" checked data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('inactive');?></label>
							</div>
						</div>
								 
						<hr>
                                             
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
                        <button type="reset" class="btn btn-inverse waves-effect waves-light"><?php echo get_phrase('reset');?></button>
                    <?php echo form_close();?>                
                        </div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
 function get_department_doctors(department_id){
	 $.ajax({
		 url: '<?php echo base_url();?>admin/get_department_doctor/' + department_id,
		 success: function(response){
			jQuery('#doctor_selector_holder').html(response);
		 }
	 });
 }

</script>
                    
      