
          <!-- Page content -->
          <div id="page-content-wrapper">
              <div class="page-content">
                  <!-- Content Header (Page header) -->
                  <section class="content-header z-depth-1">
                      <div class="header-icon">
                          <i class="fa fa-table"></i>
                      </div>
                      <div class="header-title">
                          <h1>	অনিষ্পন্ন আয় সমূহ  </h1>
                          <?php 
                              $status = $this->session->userdata('status');
                              if(isset($status)) { ?>
                                  <div style="width:50%" class="alert alert-success alert-dismissable fade in z-depth-1">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong><?php echo $status; ?></strong> 
                                  </div>
                                  <?php
                                  $this->session->unset_userdata('status');
                                    }
                                  
                              ?>
                             
                          <ul class="link hidden-xs">
                              <!-- <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> -->
                              <li><a href="<?php echo base_url()?>Page/add_income"> নতুন অনিষ্পন্ন আয় সংযুক্তি </a></li>
                             
                          </ul>
                      </div>
                  </section>
                  <!-- page section -->
                  <div class="container-fluid">
                      <div class="row">
                        
                          <!-- bootstrap table -->
                          
                          <!-- ./bootstrap table -->
                          <!-- bootstrap table -->
                          
                          <!-- ./bootstrap table -->
                          <!-- data table -->
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="card">
                                  
                                  <div class="card-content">
                                      <div class="table-responsive">
                                        <div id="printableArea">	
                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                              <thead>
                                                  <tr>
                                                    <th> ক্রমিক নং  </th>
                                                    <th>  প্রধান খাত </th>
                                                    <th> উপ খাত </th>
                                                    <th> ব্যাংকের নাম  </th>
                                                    <th> হিসাব নাম্বার </th>
                                                    <th> টাকার পরিমাণ </th>
                                                    <th>  কার্যক্রিয়া  </th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  
                                                  $rec = $list_of_income_record;
                                                  $i=0;
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
                                                    echo $sqlM->headname;
                                                 ?>
                                               </td>
                                               <td class="center">
                                                 <?php 
                                                        $subH = $row->sub_head;
                                                        if($subH != null){
                                                            $this->db->where('id',$subH);
                                                            $sqlM = $this->db->get('sub_head');
                                                            $sqlM = $sqlM->row();
                                                            echo $sqlM->sub_head;
                                                        }
                                                        
                                                    ?>
                                               </td>
                                               
                                               <td class="center">
                                               <?php 
                                                    $bank =  $row->bank;
                                                    $this->db->where('id',$bank);
                                                    $sqlB = $this->db->get('bank_info');
                                                    $sqlB = $sqlB->row();
                                                    if($sqlB !=null) {
                                                        echo $sqlB->bank_name;
                                                    }
                                                    
                                                 ?>
                                               </td>
                                               <td class="center"><?php echo $row->account_no; ?></td>
                                               <td class="center"><?php echo $row->amount; ?></td>
                                              <td>
                                              <a title="Approved" 
                                                  href="<?php echo base_url('details_income/'.$row->id); ?>">
                                                  <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved">বিস্তারিত </button>
                                                </a>

                                                <?php if($userid == 'super' || $userid == 'sub' || $userid == 'accounts' ){ ?>	
                                                <a title="Approved" 
                                                  href="<?php echo base_url('income_status/'.$row->id); ?>">
                                                  <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved">অনুমোদন</button>
                                                </a>
                                                
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
                                               endforeach;
                                             ?>
                                                  
                                                 
                                              </tbody>
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
      
 
