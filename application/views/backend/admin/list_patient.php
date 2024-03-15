<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('List Patient');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>

                                        <th><?php echo get_phrase('Image');?></th>
                                            <th><?php echo get_phrase('Name');?></th>
                                            <th><?php echo get_phrase('Sex');?></th>
                                            <th><?php echo get_phrase('Email');?></th>
                                            <th><?php echo get_phrase('Number');?></th>
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                            <?php 
                   
                                                $sql = "SELECT * FROM patient order by patient_id desc LIMIT 5";
                                                $array_select = $this->db->query($sql)->result_array();
                                                foreach ($array_select as $key => $patient):?>
                                                                    <tr>
                                                                        <td><img src="<?php echo $this->crud_model->get_image_url('patient', $patient['patient_id']);?>" class="img-circle" height="30px" width="30px"></td>
                                                                        <td><?php echo $patient['name'];?></td>
                                                                        <td><?php echo $patient['sex'];?></td>
                                                                        <td><?php echo $patient['email'];?></td>
                                                                        <td><?php echo $patient['phone'];?></td>
                                                                        <td>
                                                                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>patient/add_patient/delete/<?php echo $patient['patient_id'];?>');">
                                                                            <button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i> </button>
                                                                            </a>

                                                                            <a href="<?php echo base_url();?>patient/edit_patient/<?php echo $patient['patient_id'];?>">
                                                                            <button type="button" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-edit"></i> </button>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                            <?php endforeach;?>
                                    </tbody>
                                    </table>
			        </div>
		        </div>
	        </div>
        </div>
</div>