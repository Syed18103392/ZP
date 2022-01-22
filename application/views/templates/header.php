 <?php
// error_reporting(0);
 $userid = $this->session->userdata('user_type');



// ?>


<!DOCTYPE html>

<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>ZP</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dist/img/logo-gp.png">

        <link href="<?php echo base_url(); ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />

        <!-- materialize css -->

        <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.min.css" rel="stylesheet">

        <!-- Bootstrap css-->

        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Animation Css -->

        <link href="<?php echo base_url(); ?>assets/plugins/animate/animate.css" rel="stylesheet" />

        <!-- Material Icons CSS -->

      <!--  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
 
        <!-- Font Awesome -->

        <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Monthly css -->

        <link href="<?php echo base_url(); ?>assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css" />

        <!-- simplebar scroll css -->

        <link href="<?php echo base_url(); ?>assets/plugins/simplebar/dist/simplebar.css" rel="stylesheet" type="text/css" />

        <!-- mCustomScrollbar css -->

        <link href="<?php echo base_url(); ?>assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

        <!-- custom CSS -->

        <link href="<?php echo base_url(); ?>assets/dist/css/stylematerial.css" rel="stylesheet">

		<!-- custom CSS -->

		 <link href="<?php echo base_url(); ?>assets/dist/css/tcal.css" rel="stylesheet">

         

          <link href="<?php echo base_url(); ?>assets/dist/css/custom.css" rel="stylesheet">

         <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">  -->
            <link rel="stylesheet" type="text/css" media="print" href="<?php echo base_url(); ?>assets/dist/css/print.css" />

        <!-- For Calender --> 

         <link href="<?php echo base_url(); ?>cssP/tcal.css" rel="stylesheet"> 
<!-- jQuery -->

<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>

<!-- jquery-ui -->

<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>

          
         <script src="<?php echo base_url(); ?>jsP/tcal.js" type="text/javascript"></script>


         <style>

		
		  </style>

    </head>



    <body>

        <div id="wrapper">

            <!--navbar top-->

            <nav class="navbar navbar-inverse navbar-fixed-top">

                <!-- Logo -->

                <a class="navbar-brand pull-left admin-logo" href="<?php echo base_url(); ?>">

                    <img src="<?php echo base_url(); ?>assets/dist/img/logo-gp.png" alt="logo"><span> জেলা পরিষদ  </span>

                </a>

                <a id="menu-toggle">

                    <i class="material-icons">apps</i>


                </a>

                <div class="navbar-custom-menu hidden-xs">

     

                    <ul class="navbar navbar-right">

                        <!--Notification-->
                        
                        <!-- <li class="dropdown">

                            <a class='dropdown-button user-pro' href='#' data-activates='dropdown-user' style="padding:0">
                                 <i class="material-icons">settings</i>
                                <span>সেটআপ</span>

                            </a> -->

                            <ul id='dropdown-user' class='dropdown-content'>
                            <?php if($userid == 'super' || $userid == 'sub' || $userid == 'accounts' ){ ?>		
                                 <li><a href="<?php echo base_url()?>Page/main_head"> প্রধান খাত  </a></li> 
                                    <li><a href="<?php echo base_url()?>Page/sub_head"> উপ খাত </a></li>
                                    <li><a href="<?php echo base_url()?>Page/bank_info"> ব্যাংক  </a></li>
                                    <li><a href="<?php echo base_url()?>Stock/catagory"> পণ্য শ্রেণী  </a></li>
                                    <li><a href="<?php echo base_url()?>Stock/product"> পণ্য সমূহ  </a></li>
                                    <!-- <li><a href="<?php echo base_url()?>Page/add_user"> নতুন ইউজার  </a></li>
                                    <li><a href="<?php echo base_url()?>Page/view_user">  সকল ইউজার  </a></li>
                                    -->
                             <?php }else{} ?>
                            </ul>
                        </li>

                        <!-- /.user profile -->
                        <li class="dropdown">
                          <a class='' href='<?php base_url()?>logout' style="padding:0">
                           <i class="material-icons">power_settings_new</i>
                           <span>লগআউট</span>
                          </a>
                        </li>

                    </ul>

                </div>

            </nav>