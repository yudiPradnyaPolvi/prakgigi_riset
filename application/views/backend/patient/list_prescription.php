<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('List Prescription');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('department');?></th>
                                            <th><?php echo get_phrase('Doctor Name');?></th>
                                            <th><?php echo get_phrase('patient_name');?></th>
                                            <th><?php echo get_phrase('Date Created');?></th>											
                                            <th><?php echo get_phrase('status');?></th>
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                    <?php 
                                            $patient_info = $this->session->userdata('patient_id');
                                            $get_all_prescriptions = $this->db->get_where('prescription', array('patient_id' => $patient_info))->result_array();
                                            foreach($get_all_prescriptions as $key => $prescription){?>
                                        <tr>
                                 
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('department', $prescription['department_id']);?></td>
                                            <td>
                                            <?php echo $this->crud_model->get_type_name_by_id ('doctor', $prescription['doctor_id']);?>
                                            </td>
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('patient', $prescription['patient_id']);?></td>
                                            <td><?php echo date('d M Y', $prescription['date_created']);?></td>
											<td>
											<span class="label label-<?php if($prescription['prescription_type'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($prescription['prescription_type'] == '1'):?>
                                            <?php echo 'New Prescription';?>
                                            <?php endif;?>
                                            <?php if($prescription['prescription_type'] == '2'):?>
                                            <?php echo 'Old Prescription';?>
                                            <?php endif;?>
                                            
                                            </span>
											</td>
                                            <td>
												
                                            <a href="<?php echo base_url();?>prescription/view_prescription/<?php echo $prescription['prescription_id'];?>">
												<button type="button" class="btn btn-info btn-rounded btn-sm"><i class="fa fa-print"></i> View Prescription</button>
											</a>

                             				
                                            </td>
             							</tr>
                                    <?php } ?>
									</tbody>
					

							</table>
			</div>
		</div>
	</div>
</div>

