<div id="page-content-wrapper">
<!-- Page content -->
<div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="header-title">
                            <h1>   আয় </h1>
                           
                            <ul class="link hidden-xs">
                               <!--  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                                <li><a href="<?php echo base_url()?>Page/add_income">  নতুন আয় সংযুক্তি  </a></li>
                            </ul>
                        </div>
                    </section>
                    
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- basic forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    
                                    <div class="card-content">
                                        <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        &nbsp;
                                        </div>
                                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <div id="div_print">
                                               <table class="table table-striped" width="802" height="354" border="1"  align="center" style="background:#FFF; border:1px solid #23374e; padding-left:10px; color:#000;">
                                               <tr>
                                                <td height="115" width="20%" align="right">
                                                    <img height="100" width="120" src="<?php echo base_url(); ?>assets/dist/img/logo-gp.png" alt="logo" style="float:right">
                                                </td>
                                                <td colspan="4" align="center" valign="top" width="50%">
                                                        <h2 style="text-align:center; margin-top: 25px;font-size: 25px;margin-bottom: 0px;">জেলা পরিষদ  , ফেনী</h2>
                                                        <p style="font-size:12px; text-align:center"> 
                                                            Website: www.zpfeni.gov.bd
                                                        </p>
                                                </td>
                                                <td align="right" width="20%">&nbsp;
                                                    
                                                </td>
                                                </tr>
                                              <tr style="background:#999; color:#FFF; height:25px;">
                                               <td height="33" colspan="2">&nbsp;</td>
                                               <td colspan="4">
                                              <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;">
                                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; আয়  </span></td>
                                            </tr>
                                           <!-- <tr>
                                              <td width="146">আইডি নাম্বার  </td> <td width="9"> : </td ><td width="258"><?php echo $income_complete_info->incomeid; ?></td>
                                              <td width="114">এন্ট্রি তারিখ</td> <td width="7"> : </td ><td width="228"><?php echo $income_complete_info->date;  ?></td>
                                            </tr> 
											-->

                                            <tr>
                                              <td>  প্রধান খাত  </td> <td> : </td ><td>
											   <?php
												      $main =  $income_complete_info->main_head;
												      $this->db->where('id',$main);
												      $sqlM = $this->db->get('main_head');
												      $sqlM = $sqlM->row();
												      echo $sqlM->headname;
												   ?>
											     </td>
                                              
                                              <td> উপ খাত  </td> <td> : </td ><td>
                                                    <?php 
                                                          $subH = $income_complete_info->sub_head;
                                                          $this->db->where('id',$subH);
                                                          $sqlM = $this->db->get('sub_head');
                                                          $sqlM = $sqlM->row();
                                                          echo $sqlM->sub_head;
                                                      ?>
                                                 </td>
                                            </tr>
                                            
                                           
                                            
                                            <tr>
                                              <td>ব্যাংকের নাম </td> <td> : </td ><td><?php 
												      $bank =  $income_complete_info->bank;
												      $this->db->where('id',$bank);
												      $sqlB = $this->db->get('bank_info');
												      $sqlB = $sqlB->row();
												      echo $sqlB->bank_name;?>, <?php  echo $income_complete_info->branch; ?></td>
                                              
                                              <td> হিসাব নাম্বার  </td> <td> : </td ><td><?php  echo $income_complete_info->account_no; ?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                              <td>গ্রহণ পদ্ধতি </td><td> : </td ><td><?php  echo $income_complete_info->payment_mode; ?></td>
                                              
                                              <td>চালান নাম্বার</td>  <td> : </td ><td><?php  echo $income_complete_info->challan; ?></td>
                                            </tr>
                                            
                                             <tr>
                                              <td> চেক নাম্বার</td>  <td> : </td ><td><?php  echo $income_complete_info->check_no; ?></td>
                                              
                                              <td> টাকার পরিমাণ  </td> <td> : </td ><td><?php echo $income_complete_info->amount;  ?></td>
                                            </tr>
                                            
                                            <tr>
                                               
                                              
                                              <td>প্রাপ্ত উৎস 	</td> <td> : </td ><td><?php  echo $income_complete_info->sources; ?></td>
                                              
                                              <td>উপজেলা </td> <td> : </td ><td>
											     <?php
											       $location = $income_complete_info->location;
												   
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
                                                   
                        
											  
											    ?></td>
                                            </tr>
                                             <tr>
                                              <td valign="top">বর্ণনা</td> <td valign="top"> : </td> 
                                              <td colspan="4" valign="top"><?php echo $income_complete_info->details;  ?></td>
                                            </tr>
                                            
                                            
                                          
                                          </table>
                                            </div>
                                             <br />
                                            <p style="text-align:center; margin-right:100px;">
           		                               <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value="প্রিন্ট">
                                            </p>
                                            <br />
                                            <h4> সংযুক্ত ফাইল সমূহ  </h4>
                                               <table class="table table-striped table-bordered">
                                            <thead>
                                              <tr>
                                              <th> ক্রমিক নং </th>
                                              <th> ফাইলের নাম  </th>
                                              <th> ফাইল দেখুন  </th>
                                              <th> ফাইল ডাউনলোড   </th>
                                            </tr>
                                             </thead>
                                             <tbody>
                                            <?php 
											   $arr =  $income_complete_info->file_info;
											   //$arr = json_decode($filein, true);
												//$i = 0;
												//foreach ($arr as $k=>$v){
												//$i++;
											?>
                                            <tr>
                                              <td valign="top"><?php  echo '1';?> </td> 
                                              <td valign="top"><?php echo $arr; ?> </td>  
                                              <td valign="top">
                                                 <a href="#" onclick="window.open('<?php echo base_url(); ?><?php echo $arr; ?>')">ফাইল দেখুন</a>
                                               
                                               </td>
                                               <td valign="top">
                                               <a href="<?php echo base_url(); ?><?php echo $arr; ?>" download> ফাইল ডাউনলোড</a> 
                                               
                                               </td>
                                               </tr>
                                               	
											<?php //} ?>
                                            </tbody>
                                         </table>   
                                               
                                          </div>
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