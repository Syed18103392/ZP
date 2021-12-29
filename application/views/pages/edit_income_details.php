            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> আয় </h1>
                           
                            <ul class="link hidden-xs">
                                <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li>-->
                                <li><a href="<?php echo base_url()?>income_list">সকল আয়  সমূহ </a></li>
                            </ul>
                        </div>
                    </section>
                    <?php 
					  
					  
					?>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- basic forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    
                                    <div class="card-content">
                                        <div class="row">
                                          <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('income_controller/update_income'); ?>" method="post">
                                            <h2 class="text-center"> আয়ের তথ্য হালনাগাদ   </h2>
											 <input type="hidden" name="incomeid" required  value="<?php echo $single_post_data['info']->incomeid; ?>"> 
                                            <fieldset>
                                              
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">প্রধান খাত  </label>
                                                    <div class="col-md-1"><strong> : *</strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                         
                                                            <select class="icons" name="mainhead" id="main_head">
                                                                <!-- <option value='<?php //echo $single_post_data['info']->main_head ?>' ><?php //echo $single_post_data['info']->headname; ?></option> -->
                                                                <?php 
																  $this->db->order_by('id','ASC');
																  $this->db->where('headtype','Income');
																  $sql = $this->db->get('main_head');
																  $rec = $sql->result();
																  $s=0;
																  foreach($rec as $row):
																  $s ++;
                                                                  if($row->id== $single_post_data['info']->main_head){
																?>
                                                                <option value="<?php echo $row->id; ?>" selected ><?php echo $row->headname; ?></option>
                                                                <?php 
                                                                  }
                                                                  else{
                                                                ?>
                                                                 <option value="<?php echo $row->id; ?>"><?php echo $row->headname; ?></option>
                                                                <?php 
                                                                  }
                                                            endforeach; ?>
                                                              
                                                            </select>
														
                                                           

                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> উপ খাত   </label>
                                                    <div class="col-md-1"><strong> : </strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field" id="sub_head" >
                                                         
                                                          <select class="icons" name="subhead" >
                                                                <option value="<?php echo $single_post_data['sub_head_id'] ?>"><?php echo $single_post_data['info']->sub_head; ?></option>
                                                            </select>
                                                           

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">উপজেলা / ঠিকানা  </label>
                                                    <div class="col-md-1"><strong> : </strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                         
                                                          <select class="icons" name="location" id="location"  onchange="locatio()">
                                                                <option value="" disabled selected><?php 
																        $location = $single_post_data['info']->location;
																		if($location == 'ফেনী সদর'){
                                                                            echo "ফেনী সদর";
                                                                           }elseif($location == 'দাগনভূঁঞা'){
                                                                           echo "দাগনভূঁঞা";
                                                                           }elseif($location == 'সোনাগাজী'){
                                                                           echo "সোনাগাজী";
                                                                           }elseif($location == 'ফুলগাজী'){
                                                                           echo "ফুলগাজী";
                                                                           }elseif($location == 'পরশুরাম'){
                                                                           echo "পরশুরাম";
                                                                           }elseif($location == 'ছাগলনাইয়া'){
                                                                           echo "ছাগলনাইয়া";
                                                                           }else{
                                                                           echo "";
                                                                           }
															     ?></option>
                                                                    <option value=""> চিহ্নিত করুন    </option>
                                                                    <option value="ফেনী সদর">ফেনী সদর  </option>
                                                                    <option value="দাগনভূঁঞা"> দাগনভূঁঞা  </option>
                                                                    <option value="সোনাগাজী"> সোনাগাজী </option>
                                                                    <option value="ফুলগাজী"> ফুলগাজী   </option> 
                                                                    <option value="পরশুরাম"> পরশুরাম </option>
                                                                    <option value="ছাগলনাইয়া"> ছাগলনাইয়া </option>

                                                                <option value="others"> অন্যান্য  </option>
                                                            </select>
                                                            <input type="text" name="locations_others" id="showO">  
                                                        </div>
                                                    </div>
                                                </div>

                                                


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> ব্যাংকের নাম  </label>
                                                    <div class="col-md-1"><strong> : *</strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <select class="icons" name="bank">
                                                               <?php if ($single_post_data['info']->bank !=null){ ?>
                                                                <option value="<?php echo $single_post_data['info']->bank; ?>"> <?php echo $single_post_data['info']->bank_name; ?></option>
                                                                <?php
                                                                 }
                                                                else{ ?>
                                                                        <option value="">  চিহ্নিত করুন  </option>
                                                                <?php 
                                                                }

                                                                 ?>
                                                                <?php 
																  $this->db->order_by('id','ASC');
																  $sql = $this->db->get('bank_info');
																  $rec = $sql->result();
																  $s=0;
																  foreach($rec as $row):
																  $s ++;
																?>
                                                                <option value="<?php echo $row->id; ?>"><?php echo $row->bank_name; ?></option>
                                                                
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                   <!--  <label class="col-md-1 control-label"> 
                                                    <a href="<?php echo base_url()?>Page/new_bank">অন্যান্য  </a>
                                                   </label> -->
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> শাখার নাম ও ঠিকানা  </label>
                                                    <div class="col-md-1"><strong> : *</strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="text" name="bank_branch"  value="<?php echo $single_post_data['info']->branch; ?>"> 
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> হিসাব নাম্বার </label>
                                                    <div class="col-md-1"><strong> : *</strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="number" name="accountno"  value="<?php echo $single_post_data['info']->account_no; ?>"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> গ্রহণ পদ্ধতি </label>
                                                    <div class="col-md-1"><strong> : </strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                          <select class="icons" name="paymentmode" id="paymentmode" onchange="getInfo()">
                                                                <option><?php echo $single_post_data['info']->payment_mode; ?></option>
                                                                 <option> নগদ  </option>
                                                                 <option> চেক  </option>
                                                                 <option>  পে অর্ডার  </option>
																 <option> ব্যাংক হিসাবে জমা   </option>
                                                                 <option value="others"> অন্যান্য  </option>
                                                                 
                                                            </select>
                                                             <input type="text" name="other_pay_method" id="show" placeholder="গ্রহণ পদ্ধতি ">  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> চেক নাম্বার </label>
                                                    <div class="col-md-1"><strong> : </strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="text" name="check_number" value="<?php echo $single_post_data['info']->check_no; ?>">   
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> চালান নাম্বার </label>
                                                    <div class="col-md-1"><strong> :</strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="text" name="challen" value="<?php echo $single_post_data['info']->challan; ?>">  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> প্রাপ্ত উৎস  </label>
                                                    <div class="col-md-1"><strong> :</strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="text" name="soruces" value="<?php echo $single_post_data['info']->sources; ?>">  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label"> টাকার পরিমাণ   </label>
                                                    <div class="col-md-1"><strong> : *</strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="number" name="amount" value="<?php echo $single_post_data['info']->amount; ?>">  
                                                        </div>
                                                    </div>
                                                </div>
												
												<div class="form-group">
                                                    <label class="col-md-2 control-label"> এন্ট্রি তারিখ  </label>
                                                    <div class="col-md-1"><strong> : *</strong></div>
                                                    <div class="col-md-6"> 
                                                        <div class="input-field">
                                                           <input type="text" class="tcal" name="date" value="<?php echo $single_post_data['info']->date; ?>">  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label"> বর্ণনা  </label>
                                                    <div class="col-md-1"><strong> : </strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <textarea style="height:250px" name="details"><?php echo $single_post_data['info']->details; ?></textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label"> সংযুক্ত ফাইল  </label>
                                                    <div class="col-md-1"><strong> : </strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="file" name="userFiles" multiple>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                                </div>
                                               
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-6">
                                                        <button type="submit" name="submit" class="btn btn-success"> তথ্য সংরক্ষণ <span class="glyphicon glyphicon-send"></span></button>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    &nbsp; 
                                                </div>

                                            </fieldset>
                                        </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ./basic forms -->
                            
                        </div>
                        <!-- ./bootstrap forms -->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>
            <!-- ./page-content -->
        </div>
        <!-- ./page-content-wrapper -->
<script type="text/javascript">
	function getInfo(){
		var val = document.getElementById("paymentmode").value;
		if(val == 'others'){
			$("#show").fadeIn(500);	
		} else {
			$("#show").fadeOut(500);	
		}
	}        
</script>    
<script type="text/javascript">
	function locatio(){
		var val = document.getElementById("location").value;
		if(val == 'others'){
			$("#showO").fadeIn(500);	
		} else {
			$("#showO").fadeOut(500);	
		}
	}        
</script>    


    
 <style type="text/css">
	#show{
		display:none;	
	}
  #showO{
		display:none;	
	}

</style>       