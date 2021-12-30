            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        <div class="header-title">
                            <h1>আয় সমূহ  </h1>
                               
                            
                            
                            <?php 
								$su = $this->session->userdata('status');
								if(isset($su)) { ?>
                                    <div style="width:50%" class="alert alert-success alert-dismissable fade in z-depth-1">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $su; ?></strong> 
                                    </div>
    								<?php

								      }
                                      $this->session->unset_userdata('status');
								    
								?>
                               
                            
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    
                                    <div class="card-content">
                                        <div class="table-responsive">
                                          <div id="printableArea">	
                                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                     <th>  ক্রমিক নং  </th>
                                                      <th>  প্রধান খাত </th>
                                                      <th> উপ খাত </th>
                                                      <th> ব্যাংকের নাম  </th>
                                                      <th> হিসাব নাম্বার </th>
                                                      <th> চেক  নাম্বার </th>
													  <th>  চালান নাম্বার </th>
                                                      <th> টাকার পরিমাণ </th>
													  <th>  কার্যক্রিয়া  </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
													if(isset($_POST['submit'])){
													 
													$from  = $_POST['from']; 
													$today = $_POST['today'];  
													
													
													$this->db->where('date >=', $from);
					 				                $this->db->where('date <=', $today);
													$this->db->where('status','approved');
													$this->db->order_by('id','DESC');
													$sql= $this->db->get('income');
													}
                                                    else{
                                                        $rec = $list_of_income_record;
													}
													
													
													$i=0;
													$total = 0;
													foreach ($rec as $row):
													$i++;
													?>
                                                <tr>
                                                 <td><?php echo $i; ?></td>
                                               
                                                 <td class="center">
                                                   <?php 
												      $main =  $row->main_head;
												      $this->db->where('id',$main);
												      $sqlM = $this->db->get('main_head');
												      $sqlM = $sqlM->row();
                                                      if($sqlM != null){
                                                        echo $sqlM->headname;
                                                      }
												   ?>
                                                 </td>
                                                 <td class="center">
                                                   <?php 
                                                          $subH = $row->sub_head;
                                                          $this->db->where('id',$subH);
                                                          $sqlM = $this->db->get('sub_head');
                                                          $sqlM = $sqlM->row();
                                                          if($sqlM != null){
                                                            echo $sqlM->sub_head;
                                                          }
                                                      ?>
                                                 </td>
                                                 
                                                 <td class="center">
                                                 <?php 
												      $bank =  $row->bank;
                                                      if($bank != null){
												      $this->db->where('id',$bank);
												      $sqlB = $this->db->get('bank_info');
												      $sqlB = $sqlB->row();
												      echo $sqlB->bank_name;
                                                      }
												   ?>
                                                 </td>
                                                 
                                                 <td class="center"><?php echo $row->account_no; ?></td>
												 <td class="center"><?php echo $row->check_no; ?></td>
                                                 <td class="center"><?php echo $row->challan; ?></td>
                                                 <td class="center"><?php echo $amount =  $row->amount; ?></td>
                                                  <td>
                                                  <a title="Details" 
                                                    href="<?php echo base_url('details_income/'.$row->id); ?>">
                                                    <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved">বিস্তারিত </button>
                                                  </a>
												  
												   <?php if($userid == 'super' || $userid == 'sub' || $userid == 'accounts' ){ ?>	
												   <a title="Edit"  href="<?php echo base_url('edit-income/'.$row->id); ?>">
                                                          <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">
                                                           সংস্কার </button>
                                                   </a>
												   
												    <a title="Delete" href="<?php echo base_url('delete-income/'.$row->id); ?>" 
                                                         onClick="return confirm('Are you sure Delete This Option?');">                 
                                                      <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete ">
                                                      বন্ধ </button>
                                                  </a>
												   <?php }else {} ?>
												  
                                                  </td>
                                                  </tr>
												  <?php
                                                     $total = $total + $amount;
                                                     endforeach;
                                                   ?>
                                                    
                                                   
                                                </tbody>
                                            </table>
                                            <table style="background:#555; color:#FFF; font-family:Tahoma, Geneva, sans-serif; font-size:18px">
                                              <tr>
                                              <td>&nbsp;  </td>
                                               <td>&nbsp;  </td>
                                              <td>&nbsp;  </td>
                                              <td>&nbsp;  </td>
                                              <td>&nbsp;  </td>
                                              <td>&nbsp;  </td>
                                              <td>&nbsp;  </td>
                                               <td align="center"> <span style="text-align:center">
                                                   সর্বমোট : <?php  $total;
												   
												   echo BanglaConverter::total($total);
												    ?> টাকা  </span></td>
                                                <td>&nbsp;  </td>
                                                
                                              </tr>
                                             
                                            </table>
                                            
                                          </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./data table -->
                        </div>
                        <!-- ./row -->
                    </div>
                    <!-- ./cotainer -->

                </div>
                <!-- ./page-content -->
            </div>
            <!-- ./page-content-wrapper -->
        </div>
        <!-- ./page-wrapper -->
       

        <?php
 class BanglaConverter {
		public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
		public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
		
		   public static function total($total) {
			return str_replace(self::$en, self::$bn, $total);
		   }
	}
 ?>

         <script src="<?php echo base_url(); ?>assets/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="<?php echo base_url(); ?>assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="<?php echo base_url(); ?>assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- dataTables js -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
       
        <!-- End Core Plugins-->
        <!-- Start Theme label Script
             =====================================================================-->
        <!-- main js -->
        <script src="<?php echo base_url(); ?>assets/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script
             =====================================================================-->


