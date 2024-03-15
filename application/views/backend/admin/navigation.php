    <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> 
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                                </span> 
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                    <?php 
                    $key = $this->session->userdata('login_type') . '_id';
                    $image_path = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key). '.jpg';

                    if(!file_exists($image_path)){
                        $image_path = 'uploads/default.jpg';
                    }
                    
                    ?>
                        <a href="#" class="waves-effect"><img src="<?php echo base_url(). $image_path;?>" alt="user-img" class="img-circle"> 
                    
                        <span class="hide-menu">
                        
                    <?php 
                    $account_type   = $this->session->userdata('login_type');
                    $account_id     = $account_type.'_id';
                    $name = $this->crud_model->get_type_name_by_id($account_type, $this->session->userdata($account_id), 'name');
                    echo $name;
                    ?>
                    <span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>admin/manage_profile"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out-off"></i> Logout</a></li>
                        </ul>
                    </li>

                    <li class="<?php if($page_name == 'dashboard') echo 'active';?>"> 
                        <a href="<?php echo base_url();?>admin/dashboard" class="waves-effect">
                            <i class="ti-dashboard p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('dashboard');?></span>
                        </a> 
                    </li>
                
                    

                    <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Doctor');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'add_doctor'
                    || $page_name == 'list_doctor') echo 'active';?>>

                        <li class="<?php if($page_name == 'add_doctor') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/add_doctor">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Add Doctor');?></span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'list_doctor') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/list_doctor">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('List Doctor');?></span>
                            </a> 
                        </li>
                    </ul>
                </li>

                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Patient');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'add_patient' 
                        || $page_name == 'edit_patient' || $page_name == 'list_patient') echo 'active';?>>

                                <li class="<?php if($page_name == 'add_patient') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>patient/add_patient">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Add Patient');?></span>
                                    </a> 
                                </li>

                        

                                <li class="<?php if($page_name == 'list_patient') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>patient/list_patient">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('List Patient');?></span>
                                    </a> 
                                </li>

                        </ul>
                    </li>


                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-calendar p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Schedule');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'add_schedule' || $page_name == 'list_schedule') echo 'active';?>>

                                <li class="<?php if($page_name == 'add_schedule') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>admin/add_schedule">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Add Schedule');?></span>
                                    </a> 
                                </li>

                                <li class="<?php if($page_name == 'list_schedule') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>admin/list_schedule">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('List Schedule');?></span>
                                    </a> 
                                </li>
                        </ul>
                    </li>


                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-calendar p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Appointment');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'add_appointment' || $page_name == 'list_appointment') echo 'active';?>>

                                <li class="<?php if($page_name == 'add_appointment') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>admin/add_appointment">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Add Appointment');?></span>
                                    </a> 
                                </li>

                                <li class="<?php if($page_name == 'list_appointment') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>admin/list_appointment">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('List Appointment');?></span>
                                    </a> 
                                </li>
                        </ul>
                    </li>

                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-edit p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Medicine');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'manage_medicine' || $page_name == 'medicine_category' || $page_name == 'list_medicine') echo 'active';?>>
                                
                                <li class="<?php if($page_name == 'category') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>admin/medicine_category">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Medicine Category');?></span>
                                    </a> 
                                </li>

                                <li class="<?php if($page_name == 'manage_medicine') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>admin/manage_medicine">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('manage_medicine');?></span>
                                    </a> 
                                </li>

                            
                        </ul>
                    </li>


                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-edit p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Prescripton');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'add_prescripton' || $page_name == 'list_prescripton') echo 'active';?>>

                                <li class="<?php if($page_name == 'add_prescripton') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>prescription/add_prescription">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Add Prescription');?></span>
                                    </a> 
                                </li>

                                <li class="<?php if($page_name == 'list_prescripton') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>prescription/list_prescription">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('List Prescription');?></span>
                                    </a> 
                                </li>
                        </ul>
                    </li>

                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-credit-card p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Payment');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'add_invoice' || $page_name == 'list_invoice') echo 'active';?>>

                                <li class="<?php if($page_name == 'add_invoice') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>payment/add_invoice">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Add Invoice');?></span>
                                    </a> 
                                </li>

                                <li class="<?php if($page_name == 'list_invoice') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>payment/list_invoice">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('List Invoice');?></span>
                                    </a> 
                                </li>
                        </ul>
                    </li>


                

                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-plus p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Notification');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'notification') echo 'active';?>>

                                <li class="<?php if($page_name == 'notification') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>admin/notification">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('New Notification');?></span>
                                    </a> 
                                </li>
                        </ul>
                    </li>


                    <li> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-gears p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('System Setting');?> <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"<?php if($page_name == 'general_settings' || $page_name == 'backup_database' || $page_name == 'manage_language') echo 'active';?>>

                                <li class="<?php if($page_name == 'general_settings') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>setting/general_settings">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('General Setting');?></span>
                                    </a> 
                                </li>

                                <li class="<?php if($page_name == 'manage_language') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>setting/manage_language">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Manage Language');?></span>
                                    </a> 
                                </li>

                                <li class="<?php if($page_name == 'backup_database') echo 'active';?>"> 
                                    <a href="<?php echo base_url();?>setting/backup_database">
                                        <i class="fa fa-angle-double-right p-r-10"></i>
                                        <span class="hide-menu"><?php echo get_phrase('Backup Database');?></span>
                                    </a> 
                                </li>
                        </ul>
                    </li>


                    <li class="<?php if($page_name == 'change_profile') echo 'active';?>"> 
                        <a href="<?php echo base_url();?>admin/change_profile" class="waves-effect">
                            <i class="ti-user p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('Update Profile');?></span></a> 
                    </li>
            

                    <li> 
                        <a href="<?php echo base_url();?>login/logout" class="waves-effect">
                            <i class="fa fa-sign-out p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('Logout');?></span></a> 
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->