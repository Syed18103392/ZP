<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZP</title>

    <!-- Favicon and touch icons -->

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dist/img/logo.png">

    <!-- Start Global Mandatory Style

         =====================================================================-->

    <!-- Material Icons CSS -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Animation Css -->

    <link href="<?php echo base_url(); ?>assets/plugins/animate/animate.css" rel="stylesheet" />

    <!-- materialize css -->

    <link href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.min.css" rel="stylesheet">

    <!-- custom CSS -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>assets/dist/css/stylematerial.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/login.css" rel="stylesheet">

         
</head>



<body class="sign-section">
    <div class="login_top">
      <div class="login_top_container">
         <div class="left-logo">
          <img src="<?php echo base_url(); ?>assets/dist/img/logo-gp.png" alt="">
         </div>
         <div class="header-text">
          <span class="name">জেলা পরিষদ </span>  <br>
          <span class="name-soft">Zilla Parishad </span> 
         </div>
         <div class="right-logo">
          <img src="<?php echo base_url(); ?>assets/dist/img/rightlogo.png" alt="">
         </div>
      </div>
    </div>
    <div class="login_page">
      <div class="login_area">
        
        

    <div class="login_head_area">
      <h1>জেলা পরিষদ ম্যানেজমেন্ট </h1>
    </div>
    <div class="login_content">
      <div class="container sign-cont animated zoomIn">

        <div class="row sign-row">

          <!--   <div class="sign-title">


                <h2 class="teal-text"><i class="material-icons" style="font-size:30px;">lock</i>

                <span style="margin-bottom:19px;"> জেলা পরিষদ বাবস্থাপনা  </span></h2>

            </div> -->

            <form action="<?php echo base_url('Admins/login'); ?>" method="post" class="col s12" id="reg-form">

                <div class="row sign-row">

                     <div class="input-field col s12">

                    

                      <select name="user_type" id="user_type">

                             <option value="" disabled selected> ইউজার </option>
                            <option value="super"> এডমিন </option>
                            <option value="sub"> সাব এডমিন </option>
                            <option value="accounts">অ্যাকাউন্ট সেকশন </option>
                            <option value="office"> অফিস সেকশন  </option>
                            <option value="recoad"> রেকর্ড সেকশন </option>
                            <option value="engineer"> প্রকৌশলী সেকশন  </option>
                            <option value="land"> জমি লিজ সেকশন </option>
                            <option value="computer"> কম্পিউটার অপারেটর  </option>
                            <option value="marketT"> মার্কেট ও  প্রশিক্ষণ সেকশন </option>
                      </select>
                        </div>

                </div>
                <div class="row sign-row">
                    <div class="input-field col s12">
                        <input name="username" id="username" type="text" required>
                        <label for="username">ইউজার আইডি </label>
                    </div>
                </div>

                <div class="row sign-row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password"> পাসওয়ার্ড </label>
                    </div>
                </div>


                <div class="row sign-row">
                    
                    <div class="input-field col s6">
                        <button class="btn btn-large btn-register waves-effect waves-light green" type="submit" id="sub" name="sub"> লগইন                      </button>
                    </div>
                    <div class="input-field col s6">
                            <button class="btn btn-large btn-register waves-effect waves-light green" type="reset" id="sub" name="sub">বাতিল </button>
                    
                    </div>
                </div>

                

                <!--  <div class="row sign-row">

                  <div class="col s6">

                     <p>Developed By:<a href="http://cslsystems.com.bd">&nbsp;


                     <span style="margin-bottom:10px;"> CSL SYSTEMS  </span></a>   </p></div>

                     <div class="col s6">

                     <p style="text-align:right; font-size:14px; font-weight:bold; margin-top:20px;">

                       

                     </p>

                  

                  </div>

                 </div> -->

                

                 

                

            </form>
            
                <?php 
                    $status= $this->session->userdata('status');
                    if ($status) {
                        echo "<p class='alert alert-danger' role='alert'>";
                        echo $status;
                        echo "</p>";
                    } 
                ?>





        </div>

       

    </div>
	</div>
        <div class="login_footer">
           Developed by <a href="http://cslsystems.com.bd/">CSL SYSTEMS</a>
        </div>
      </div>
    </div>

    <!-- Start Core Plugins

         =====================================================================-->

    <!-- jQuery -->

    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>

    <!-- materialize  -->

    <script src="<?php echo base_url(); ?>assets/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>

    <!-- End Core Plugins

         =====================================================================-->

    <script>

        $(document).ready(function() {

            $('select').material_select();

        });

    </script>

</body>





<!-- Mirrored from materialadmin.thememinister.com/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Oct 2017 08:27:29 GMT -->

</html>