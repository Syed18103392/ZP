            <!-- Page content -->
            <?php $userid = $this->session->userdata('user_type'); ?>
            <div id="page-content-wrapper">

                <div class="page-content">

                    <!-- Content Header (Page header) -->

                    <section class="content-header">

                        <div class="header-icon">

                            <i class="fa fa-tachometer"></i>

                        </div>

                        <div class="header-title">

                            <h1> ড্যাশবোর্ড </h1>

                            <!--  <small>Current User Type : <?php echo $userid; ?> </small> -->

                            <ul class="link hidden-xs">

                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>হোম</a></li>

                            </ul>

                        </div>

                    </section>

                    <!-- page section -->

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-4">
                                    <a href="<?php echo base_url() ?>view-managements">
                                        <div class="panel-body list-box">s

                                            <div class="cardbox-icon">
                                                <i class="material-icons">person_outline</i>
                                            </div>
                                            <div class="card-details">
                                                <p>জেলা পরিষদ
                                                    <br />Zilla Porishad
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php if ($userid == 'super' || $userid == 'land' || $userid == 'engineer') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-8">
                                        <a href="<?php echo base_url() ?>record-land-record_info">
                                            <div class="panel-body list-box">

                                                <div class="cardbox-icon">

                                                    <i class="material-icons">golf_course</i>
                                                </div>
                                                <div class="card-details">
                                                    <p> মালিকানাধীন জমির তথ্য
                                                        <br /> Land Information
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($userid == 'super' || $userid == 'marketT' || $userid == 'engineer') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-11">
                                        <a href="<?php echo base_url() ?>record-tranning-info">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">
                                                    <i class="material-icons">desktop_windows</i>
                                                </div>
                                                <div class="card-details">
                                                    <p> প্রশিক্ষণ
                                                        <br /> Training
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($userid == 'super' || $userid == 'marketT' || $userid == 'engineer' || $userid == 'accounts') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-4">
                                        <a href="<?php echo base_url() ?>view-all-registers">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">

                                                    <i class="material-icons">library_books</i>
                                                </div>
                                                <div class="card-details">
                                                    <p>নিবন্ধন
                                                        <br /> Register
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-1">
                                    <a href="<?php echo base_url() ?>Personal/view_personal_data">
                                        <div class="panel-body list-box">
                                            <div class="cardbox-icon">

                                                <i class="material-icons">supervisor_account </i>
                                            </div>
                                            <div class="card-details">
                                                <p> কর্মকর্তা ও কর্মচারী
                                                    <br /> Employee
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php if ($userid == 'super' || $userid == 'engineer' || $userid == 'accounts') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-6">
                                        <a href="<?php echo base_url() ?>Page/budget_allocation">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">

                                                    <i class="hvr-buzz-out fa fa-database"></i>
                                                </div>
                                                <div class="card-details">
                                                    <p>বাজেট
                                                        <br /> Budget
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-7">
                                    <a href="<?php echo base_url() ?>Stock/view_stock">
                                        <div class="panel-body list-box">
                                            <div class="cardbox-icon">

                                                <i class="material-icons">storage</i>
                                            </div>
                                            <div class="card-details">
                                                <p>স্টক
                                                    <br /> Stock
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php if ($userid == 'super' || $userid == 'marketT' || $userid == 'engineer' || $userid == 'accounts') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-1">
                                        <a href="<?php echo base_url() ?>record-case-info">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">
                                                    <i class="hvr-buzz-out fa fa-file-text"></i>
                                                </div>
                                                <div class="card-details">
                                                    <p> মামলা
                                                        <br /> Case
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-3">
                                    <a href="<?php echo base_url() ?>record-project-tender">
                                        <div class="panel-body list-box">
                                            <div class="cardbox-icon">
                                                <i class="hvr-buzz-out fa fa-bar-chart-o"></i>
                                            </div>
                                            <div class="card-details">
                                                <p> প্রকল্প
                                                    <br /> Project
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php if ($userid == 'super' || $userid == 'accounts') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-12">
                                        <a href="<?php echo base_url() ?>record-audit-info">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">
                                                    <i class="material-icons">border_color</i>
                                                </div>
                                                <div class="card-details">
                                                    <p> অডিট
                                                        <br /> Audit
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($userid == 'super' || $userid == 'marketT') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-2">
                                        <a href="<?php echo base_url() ?>Page/despass">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">

                                                    <i class="material-icons">email</i>
                                                </div>
                                                <div class="card-details">
                                                    <p> ডেসপাস
                                                        <br /> Despass
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($userid == 'super' || $userid == 'accounts') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-3">
                                        <a href="<?php echo base_url() ?>record-fdr-info">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">
                                                    <i class="material-icons">money</i>
                                                </div>
                                                <div class="card-details">
                                                    <p>এফ-ডি-আর
                                                        <br /> FDR
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($userid == 'super' || $userid == 'land' || $userid == 'engineer') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-1">
                                        <a href="<?php echo base_url() ?>record-land-recoad">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">
                                                    <i class="material-icons">landscape</i>
                                                </div>
                                                <div class="card-details">
                                                    <p> ভুমি রেকর্ড
                                                        <br /> Land Record
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <!--  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-6">
                                   <a href="<?php echo base_url() ?>Recoad/tender">  
                                    <div class="panel-body list-box">
                                        <div class="cardbox-icon">
                                            
											<i class="material-icons"> library_books</i>
                                        </div>
                                        <div class="card-details">
                                             <p> দরপত্র    
                                            <br/> Tenders</p>
                                        </div>
                                    </div>
                                   </a> 
                                </div>
                            </div> -->
                            <?php if ($userid == 'super' || $userid == 'engineer') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-8">
                                        <a href="<?php echo base_url() ?>Page/contractor_ledger">
                                            <div class="panel-body list-box">

                                                <div class="cardbox-icon">

                                                    <i class="hvr-buzz-out fa fa-male"></i>
                                                </div>
                                                <div class="card-details">
                                                    <p> ঠিকাদারি লাইসেন্স
                                                        <br /> Contracting license
                                                    </p>
                                                </div>




                                            </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-7">
                                    <a href="<?php echo base_url() ?>Page/receive">
                                        <div class="panel-body list-box">
                                            <div class="cardbox-icon">
                                                <i class="material-icons">receipt</i>
                                            </div>
                                            <div class="card-details">
                                                <p> ডাক গ্রহন
                                                    <br /> Receive
                                                </p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-1">
                                    <a href="<?php echo base_url() ?>Miscell/view_miscell">
                                        <div class="panel-body list-box">
                                            <div class="cardbox-icon">
                                                <i class="material-icons">style</i>
                                            </div>
                                            <div class="card-details">
                                                <p>বিবিধ
                                                    <br /> Miscellaneous
                                                </p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!--   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-1">
                                  <a href="<?php echo base_url() ?>Rent_roshid/view_rentroshid">  
                                    <div class="panel-body list-box">
                                        <div class="cardbox-icon">
                                            <i class="material-icons">style</i>
                                        </div>
                                        <div class="card-details">
                                            <p>বরাদ্দ ভাড়ার রশিদ   
                                            <br/> Allotted Rent Receipt</p> 
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <?php if ($userid == 'super' || $userid == 'land' || $userid == 'engineer') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-4">
                                        <a href="<?php echo base_url() ?>record-land-lease">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">
                                                    <i class="hvr-buzz-out fa fa-map-signs"></i>
                                                </div>
                                                <div class="card-details">
                                                    <p> ভূমি ইজারা
                                                        <br /> Land Lease
                                                    </p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-6">
                                    <a href="<?php echo base_url() ?>Rent_roshid/view_rentroshid">
                                        <div class="panel-body list-box">
                                            <div class="cardbox-icon">

                                                <i class="material-icons"> library_books</i>
                                            </div>
                                            <div class="card-details">
                                                <p>বরাদ্দ ভাড়ার রশিদ
                                                    <br /> Allotted Rent Receipt
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php if ($userid == 'super' || $userid == 'marketT' || $userid == 'engineer' || $userid == 'accounts') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-11">
                                        <a href="<?php echo base_url() ?>Guard/view_guard_file">
                                            <div class="panel-body list-box">
                                                <div class="cardbox-icon">
                                                    <i class="material-icons">library_books</i>
                                                </div>
                                                <div class="card-details">
                                                    <p> গার্ড ফাইল
                                                        <br /> Guard File
                                                    </p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($userid == 'super') { ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="panel cardbox bg-4">
                                        <?php if ($userid == 'super' || $userid == 'sub') { ?>
                                            <a href="<?php echo base_url() ?>Page/view_user">
                                            <?php } else { ?>
                                                <a href="<?php echo base_url() ?>">

                                                <?php  } ?>
                                                <div class="panel-body list-box">
                                                    <div class="cardbox-icon">
                                                        <i class="hvr-buzz-out fa fa-user-circle-o"></i>
                                                    </div>
                                                    <div class="card-details">
                                                        <p> ইউজার
                                                            <br /> User
                                                        </p>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>
                    </div>

                    <!-- ./cotainer -->

                </div>

                <!-- ./page-content -->

            </div>

            <!-- ./page-content-wrapper -->