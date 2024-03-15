<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"><?php echo get_phrase('add_doctor');?>
            </div>
				<div class="panel-body">    
					    
                        <?php echo form_open(base_url() . 'admin/add_doctor/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

	
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('name');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="name" class="form-control m-r-10" placeholder="enter your name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('date_of_birth');?>*</span></label>
                                <div class="col-md-12">
                                    <input class="form-control m-r-10" name="date_of_birth" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('place_of_birth');?></span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="place_of_birth" class="form-control m-r-10" placeholder="enter place of birth">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('id_card');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="id_card" class="form-control m-r-10" placeholder="eg national ID card, International Passport, Voters card " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12"><?php echo get_phrase('gender');?>*</label>
                                    <div class="col-sm-12">
                                        <select class=" form-control" name="gender" data-style="btn-primary btn-outline" required>
                                            <option data-tokens=""><?php echo get_phrase('select_gender');?></option>
                                            <option data-tokens="Male"><?php echo get_phrase('male');?></option>
                                            <option data-tokens="Female"><?php echo get_phrase('female');?></option>
                                            <option data-tokens="Others"><?php echo get_phrase('others');?></option>
                                        </select>
                                    </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('mother_tongue');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="mother_tongue" class="form-control m-r-10" placeholder="enter your mother tongue" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12"><?php echo get_phrase('marital_status');?>*</label>
                                    <div class="col-sm-12">
                                        <select class=" form-control" name="marital_status" data-style="btn-primary btn-outline" required>
                                            <option data-tokens=""><?php echo get_phrase('select_marital_status');?></option>
                                            <option data-tokens="Married"><?php echo get_phrase('married');?></option>
                                            <option data-tokens="Single"><?php echo get_phrase('single');?></option>
                                            <option data-tokens="Divorced"><?php echo get_phrase('divorced');?></option>
                                            <option data-tokens="Engaged"><?php echo get_phrase('engaged');?></option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('religion');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="religion" class="form-control m-r-10" placeholder="enter your religion here" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('blood_group');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="blood_group" class="form-control m-r-10" placeholder="enter your blood group" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('address');?>*</label>
                                <div class="col-md-12">
                                    <textarea class="form-control m-r-10" rows="5" name="address" placeholder="Enter Address ..." required></textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('city');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="city" class="form-control m-r-10" placeholder="enter your city" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('qualifications');?></span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="qualification" class="form-control m-r-10" placeholder="enter your Qualifications">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('state');?></span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="state" class="form-control m-r-10" placeholder="enter your state" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('nationality');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="nationality" class="form-control m-r-10" placeholder="enter your nationality" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('biography');?>*</label>
                                    <div class="col-md-12">
                                        <textarea id="mymce" name="biography"><div id="collapseExample" class="m-t-15 collapse show">
                                            <div class="well"> 
                                            <p class="m-t-30"><strong>MY PROFILE</strong></p>
                                            <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p> 
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <h4 class="m-t-30">Education</h4> 
                                            <hr />
                                            <ul>
                                            <li>M.B.B.S from AIIMS</li>
                                            <li>M.B.B.S from AIIMS</li>
                                            <li>M.D from AIIMS</li>
                                            <li>D.N.B AIIMS</li>
                                            <li>M.S from AIIMS</li>
                                            <li>D.N.B from AIIMS</li>
                                            </ul>
                                            <h4 class="m-t-30">Experience</h4>
                                            <hr />
                                            <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Excepteur sint occaecat cupidatat non proident.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Excepteur sint occaecat cupidatat non proident.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Excepteur sint occaecat cupidatat non proident.</li>
                                            </ul>
                                            <h4 class="m-t-30">Accomplishments</h4>
                                            <hr />
                                            <ul>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Excepteur sint occaecat cupidatat non proident.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Excepteur sint occaecat cupidatat non proident.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Excepteur sint occaecat cupidatat non proident.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            </ul>
                                            <h4 class="m-t-30">Skill Set</h4>
                                            <hr />
                                            <h5>Wordpress <span class="pull-right">80%</span></h5>
                                            <h5>HTML 5 <span class="pull-right">90%</span></h5>
                                            <h5>jQuery <span class="pull-right">50%</span></h5>
                                            <h5>Photoshop <span class="pull-right">70%</span></h5>
                                            </div>
                                            </div>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12" for="example-text"><?php echo get_phrase('document');?></label>
                                        <div class="col-sm-12">
                                            <input type="file" name="file_name" data-label="<i class='glyphicon glyphicon-file'></i> Browse" />
                                        </div>
                                </div>



                                <div class="form-group"> 
                                    <label class="col-sm-12"><?php echo get_phrase('browse_image');?>*</label>        
                                        <div class="col-sm-12">
                                            <input type='file' class="form-control" name="userfile" onChange="readURL(this);" /required>
                                            <img id="blah" src="#" alt="" height="200" width="200"/>
                                        </div>
                                </div>	

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="white-box">
                                            <h3 class="box-title"><?php echo get_phrase('account_information');?></h3>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-12" for="example-email"><?php echo get_phrase('email');?>*</span></label>
                                                    <div class="col-md-12">
                                                        <input type="email" id="example-email" name="email" class="form-control m-r-10" placeholder="enter your email" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-12" for="example-phone"><?php echo get_phrase('phone');?>*</span></label>
                                                    <div class="col-md-12">
                                                        <input type="text" id="example-phone" name="phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999" required>
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-phone"><?php echo get_phrase('mobile_no');?></span></label>
                                                <div class="col-md-12">
                                                    <input type="text" id="example-phone" name="mobile_no" class="form-control" placeholder="enter your mobile number" data-mask="(999) 999-9999" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="pwd"><?php echo get_phrase('password');?>*</span></label>
                                                <div class="col-md-12">
                                                    <input type="password" id="pwd" name="password" class="form-control" placeholder="enter your password" required>
                                                </div>
                                            </div>

                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="white-box">
                                        <h3 class="box-title"><?php echo get_phrase('social_information');?></h3>

                                        <div class="form-group">
                                            <label class="col-md-12" for="furl"><?php echo get_phrase('facebook');?>*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" id="furl" name="facebook" placeholder = "facebook" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="turl"><?php echo get_phrase('twitter');?>*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" id="turl" name="twitter" class="form-control" placeholder = "twitter" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="gurl"><?php echo get_phrase('google_plus');?></span></label>
                                            <div class="col-md-12">
                                                <input type="text" id="gurl" name="google_plus" class="form-control" placeholder = "google plus">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="inurl"><?php echo get_phrase('linkedin');?></span></label>
                                            <div class="col-md-12">
                                                <input type="text" id="inurl" name="linkedin" class="form-control" placeholder = "Linkedin">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        <button type="submit" class="btn btn-success btn-sm btn-rounded btn-block waves-effect waves-light m-r-10"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
                        <?php echo form_close();?>        
									
									
            </div>
        </div>
    </div>
</div>