<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('List Appointment');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>

                                            <th><?php echo get_phrase('patient_name');?></th>
                                            <th><?php echo get_phrase('Diagnose');?></th>
                                            <th><?php echo get_phrase('Date Created');?></th>											
                                            <th><?php echo get_phrase('status');?></th>
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                    <?php $get_all_appointments = $this->appointment_model->select_all_appointment();
                                            foreach($get_all_appointments as $key => $appointment){?>
                                        <tr>
                            
                                            <td><?php echo $appointment['patient_name'];?></td>
                                            <td><?php echo html_entity_decode($appointment['diagnose']);?></td>
                                            <td><?php echo date('d M Y', $appointment['date_created']);?></td>
											<td>
											<span class="label label-<?php if($appointment['status'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($appointment['status'] == '1'):?>
                                            <?php echo 'Active';?>
                                            <?php endif;?>
                                            <?php if($appointment['status'] == '2'):?>
                                            <?php echo 'Inactive';?>
                                            <?php endif;?>
                                            
                                            </span>
											</td>
                                            <td>
												<a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/add_appointment/delete/<?php echo $appointment['appointment_id'];?>');">
												<button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i> </button>
												</a>

                             					<a href="<?php echo base_url();?>admin/edit_appointment/<?php echo $appointment['appointment_id'];?>">
												<button type="button" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-edit"></i> </button>
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

