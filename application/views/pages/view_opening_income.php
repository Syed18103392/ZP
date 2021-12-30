
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        <div class="header-title">
                            <h1>   প্রারম্ভিক  স্থিতি </h1>
                             <?php 
								$su = $this->session->userdata('status');
								if(isset($su)) { ?>
                                    <div style="width:50%" class="alert alert-success alert-dismissable fade in z-depth-1">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $su; ?></strong> 
                                    </div>
    								<?php
                                    
                                    $this->session->unset_userdata('status');
                                    
								     }
								    
									?>
									
										   
                            <ul class="link hidden-xs">
                               
                                <li><a href="<?php echo base_url()?>new_opening_amount">নতুন প্রারম্ভিক স্থিতি সংযুক্তি </a></li>
                               
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
                                                     <th> ক্রমিক নং </th>
													 <th>  স্থিতির ধরণ  </th>
                                                       <th> অর্থ বছর </th>
                                                       <th> প্রারম্ভিক স্থিতির মাস  </th> 
                                                       <th>   প্রারম্ভিক স্থিতি </th>
                                                       <th> এন্ট্রি তারিখ  </th>
                                                       <th> কার্যক্রিয়া</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
											
													$rec = $opening_amount_info;
													$i=0;
													foreach ($rec as $row):
													$i++;
					
													?>
                                               
                                                <tr>
                                                 <td><?php echo $i; ?></td>
                                                 <td class="center"><?php $type =  $row->type; if($type == '01'){echo "রাজস্ব";}else{echo "এ ডি পি";} ?></td>
                                                 <td class="center"><?php echo $row->session; ?></td>
                                                 <td class="center"><?php echo $row->month; ?></td>
                                                 
												 <td class="center"><?php echo $row->opening_amount; ?></td>
												 <td class="center"><?php echo $row->entry_date; ?></td>
                                                 
                                                <td>
                                                <?php 
												 $status = $row->status; 
												
												 if($status == 'Panding'){ ?>
                                                 <a title="Approved" 
                                                 href="<?php echo base_url('approve-opening-income/'.$row->id); ?>">
                                                  <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved"> অনুমোদিত </button></a> <?php
												   }else{ }
												   ?>
                                                   
                                                 <a title="Delete" href="<?php echo base_url('delete-opening-income/'.$row->id); ?>" onClick="return confirm('Are you sure?');"><button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i> বন্ধ  </button></a>
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
 
        <script>
             "use strict";
            $(document).ready(function () {
                function dtable() {
                    $('#dataTableExample1').DataTable({
                        "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                        "lengthMenu": [
                            [6, 25, 50, -1],
                            [6, 25, 50, "All"]
                        ],
                        "iDisplayLength": 6
                    });
                }
                return (dtable());
            });
        </script>
    </body>
</html>
