		
<?php $doctor_info = $this->db->get_where('doctor', array('doctor_id' => $this->session->userdata('doctor_id')))->result_array();
        foreach ($doctor_info as $key => $doctor):
?>
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading"> <?php echo get_phrase('My Profile');?></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
        
						
                        <?php echo form_open(base_url() . 'doctor/change_profile/update_info/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
    
                            <div class="form-group"> 
                                <div class="col-sm-12">
                                    <input type='file' class="form-control" value="" name="userfile" onChange="readURL(this);" />
                                    <img id="blah" src="<?php echo $this->crud_model->get_image_url('doctor', $doctor['doctor_id']);?>" alt="" height="200" width="200"/>
                                </div>
                            </div>	
                                                
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('full_name');?>*</span>
                                    <div class="col-md-12">
                                        <input type="text" name="name" value="<?php echo $doctor['name'];?>" class="form-control form-control-line">
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('email');?>*</span>
                                    <div class="col-md-12">
                                        <input type="email" name="email" value="<?php echo $doctor['email'];?>"  class="form-control form-control-line" id="example-email">
                                    </div>
                            </div>
                                        
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('phone_number');?>*</span>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" value="<?php echo $doctor['phone'];?>" class="form-control form-control-line">
                                    </div>
                            </div>
                                            
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('address');?>*</span>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="address"><?php echo $doctor['address'];?></textarea>
                                    </div>
                            </div>
                                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success btn-block btn-rounded btn-sm"><i class="fa fa-save"></i> <?php echo get_phrase('change');?></button>
                                </div>
                            </div>
                        <?php echo form_close();?>
		
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach;?>

    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading"> <?php echo get_phrase('Login Details');?></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
								
                        <?php echo form_open(base_url() . 'doctor/change_profile/change_password/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>	
									
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('new_password');?>*</span>
                                    <div class="col-md-12">
                                        <input type="password" name="new_password" class="form-control form-control-line" id="example-email" required>
                                    </div>
                            </div>
										
							<div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('confirm_new_password');?>*</span>
                                    <div class="col-md-12">
                                        <input type="password" name="confirm_new_password" class="form-control form-control-line" id="example-email" required>
                                    </div>
                            </div>

                                
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success btn-block btn-rounded btn-sm"><i class="fa fa-save"></i> <?php echo get_phrase('change');?></button>
                                </div>
                            </div>
                        <?php echo form_close();?>					
								
                    </div>
                </div>
            </div>
        </div>
    </div>

