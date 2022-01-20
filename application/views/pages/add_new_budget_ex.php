<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1>ব্যয়ের বাজেট বরাদ্দ </h1>
                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Page/new_budget_ex"> ব্যয়ের বাজেট সংযুক্তি </a></li>
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
                                <form action="<?php echo site_url('budget_controller/add_new_budget_ex'); ?>" method="post">
                                    <h2 class="text-center"> ব্যয়ের বাজেট বরাদ্দ ফর্ম </h2>
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr style="text-align:center; font-weight:bold">
                                            <td>
                                                <center>ব্যয়ের খাত সমূহ </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <select name="yearA" style="display: none !important;">
                                                        <option value="">অর্থ বছর</option>
                                                        <?php
                                                        for ($y = 2019; $y <= 2030; $y++) {
                                                        ?>
                                                            <option><?php echo $y; ?>-<?php echo $y + 1; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    বাজেট
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <select name="yearB" style="display: none !important;">
                                                        <option value="">অর্থ বছর</option>
                                                        <?php
                                                        for ($y = 2019; $y <= 2030; $y++) {
                                                        ?>
                                                            <option><?php echo $y; ?>-<?php echo $y + 1; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    পূর্ববর্তী বছরের <br /> সংশোধিত বাজেট
                                                </center>
                                            </td>
                                            <td>
                                                <center>
                                                    <select name="yearC" style="display: none !important;">
                                                        <option value="">অর্থ বছর</option>
                                                        <?php
                                                        for ($y = 2019; $y <= 2030; $y++) {
                                                        ?>
                                                            <option><?php echo $y; ?>-<?php echo $y + 1; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    বিগত অর্থ বৎসরের পূর্ববর্তী <br /> বৎসরের প্রকৃত বাজেট
                                                </center>
                                            </td>
                                            <td>
                                                <center> মন্তব্য </center>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>১ম অংশ চলিত হিসাব </td>
                                            <td><input type="text" name="budget_A" /></td>
                                            <td><input type="text" name="currention_A" /></td>
                                            <td><input type="text" name="last_A" /></td>
                                            <td><input type="text" name="comment_A" /></td>
                                        </tr>

                                        <tr>
                                            <td>ক। সাধারণ সংস্থাপন ব্যয় </td>
                                            <td><input type="text" name="budget_B" /></td>
                                            <td><input type="text" name="currention_B" /></td>
                                            <td><input type="text" name="last_B" /></td>
                                            <td><input type="text" name="comment_B" /></td>
                                        </tr>

                                        <tr>
                                            <td>১) চেয়ারম্যান ও সদস্যগনের সম্মানি ভাতা </td>
                                            <td><input type="text" name="budget_C" /></td>
                                            <td><input type="text" name="currention_C" /></td>
                                            <td><input type="text" name="last_C" /></td>
                                            <td><input type="text" name="comment_C" /></td>
                                        </tr>

                                        <tr>
                                            <td>২) জেলা পরিষদের প্রেষণে নিয়োজিত কর্মকর্তা/ কর্মচারীদের বেতন ভাতা </td>
                                            <td><input type="text" name="budget_D" /></td>
                                            <td><input type="text" name="currention_D" /></td>
                                            <td><input type="text" name="last_D" /></td>
                                            <td><input type="text" name="comment_D" /></td>
                                        </tr>

                                        <tr>
                                            <td>৩) জেলা পরিষদের কর্মকর্তা/ কর্মচারীদের বেতন ভাতা </td>
                                            <td><input type="text" name="budget_E" /></td>
                                            <td><input type="text" name="currention_E" /></td>
                                            <td><input type="text" name="last_E" /></td>
                                            <td><input type="text" name="comment_E" /></td>
                                        </tr>

                                        <tr>
                                            <td> ৪। জেলা পরিষদের কর্মচারীদের অবসর-উত্তর ছুটিকালীন বেতন/ এককালীন মঞ্জুরী ও আনুতোষিক </td>
                                            <td><input type="text" name="budget_F" /></td>
                                            <td><input type="text" name="currention_F" /></td>
                                            <td><input type="text" name="last_F" /></td>
                                            <td><input type="text" name="comment_F" /></td>
                                        </tr>

                                        <tr>
                                            <td> ৫)জেলা পরিষদের কর্মচারীদের ভবিষ্য তহবিলে প্রদেয় চাঁদা </td>
                                            <td><input type="text" name="budget_G" /></td>
                                            <td><input type="text" name="currention_G" /></td>
                                            <td><input type="text" name="last_G" /></td>
                                            <td><input type="text" name="comment_G" /></td>
                                        </tr>

                                        <tr>
                                            <td> ৬) রাকর্মকর্তা/কর্মচারীদের উৎসব ভাতা, শান্তি বিনোদন ভাতা, নববর্ষ ভাতা </td>
                                            <td><input type="text" name="budget_H" /></td>
                                            <td><input type="text" name="currention_H" /></td>
                                            <td><input type="text" name="last_H" /></td>
                                            <td><input type="text" name="comment_H" /></td>
                                        </tr>

                                        <tr>
                                            <td>৭) অন্যান্য ভাতা </td>
                                            <td><input type="text" name="budget_I" /></td>
                                            <td><input type="text" name="currention_I" /></td>
                                            <td><input type="text" name="last_I" /></td>
                                            <td><input type="text" name="comment_I" /></td>
                                        </tr>

                                        <tr>
                                            <td>খ। অন্যান্য সংস্থাপন ব্যয়</td>
                                            <td><input type="text" name="budget_J" /></td>
                                            <td><input type="text" name="currention_J" /></td>
                                            <td><input type="text" name="last_J" /></td>
                                            <td><input type="text" name="comment_J" /></td>
                                        </tr>

                                        <tr>
                                            <td>১) কর্মকর্তা/কর্মচারীদের ভ্রমন ভাতা </td>
                                            <td><input type="text" name="budget_K" /></td>
                                            <td><input type="text" name="currention_K" /></td>
                                            <td><input type="text" name="last_K" /></td>
                                            <td><input type="text" name="comment_K" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২) গাড়ী চালক ও চতুর্থ শ্রেণীর কর্মচারীদের পোশাক/ছাতা/ জুতা ইত্যাদি সরবরাহ </td>
                                            <td><input type="text" name="budget_L" /></td>
                                            <td><input type="text" name="currention_L" /></td>
                                            <td><input type="text" name="last_L" /></td>
                                            <td><input type="text" name="comment_L" /></td>
                                        </tr>

                                        <tr>
                                            <td>৩) জেলা পরিষদের কর্মকর্তা/কর্মচারীদের আকস্কিক মৃত্যুতে সাহায্য প্রদান </td>
                                            <td><input type="text" name="budget_M" /></td>
                                            <td><input type="text" name="currention_M" /></td>
                                            <td><input type="text" name="last_M" /></td>
                                            <td><input type="text" name="comment_M" /></td>
                                        </tr>

                                        <tr>
                                            <td>৪) যানবাহন/জীপগাড়ী মেরামত </td>
                                            <td><input type="text" name="budget_N" /></td>
                                            <td><input type="text" name="currention_N" /></td>
                                            <td><input type="text" name="last_N" /></td>
                                            <td><input type="text" name="comment_N" /></td>
                                        </tr>

                                        <tr>
                                            <td>৫) যানবাহন জ্বালানী </td>
                                            <td><input type="text" name="budget_O" /></td>
                                            <td><input type="text" name="currention_O" /></td>
                                            <td><input type="text" name="last_O" /></td>
                                            <td><input type="text" name="comment_O" /></td>
                                        </tr>

                                        <tr>
                                            <td>৬) টেলিফোন বিল ও ইন্টারনেট সংযোগ ও বিল </td>
                                            <td><input type="text" name="budget_P" /></td>
                                            <td><input type="text" name="currention_P" /></td>
                                            <td><input type="text" name="last_P" /></td>
                                            <td><input type="text" name="comment_P" /></td>
                                        </tr>

                                        <tr>
                                            <td>৭) পৌর কর </td>
                                            <td><input type="text" name="budget_Q" /></td>
                                            <td><input type="text" name="currention_Q" /></td>
                                            <td><input type="text" name="last_Q" /></td>
                                            <td><input type="text" name="comment_Q" /></td>
                                        </tr>


                                        <tr>
                                            <td>৮) ভূমি উন্নয়ন কর </td>
                                            <td><input type="text" name="budget_R" /></td>
                                            <td><input type="text" name="currention_R" /></td>
                                            <td><input type="text" name="last_R" /></td>
                                            <td><input type="text" name="comment_R" /></td>
                                        </tr>


                                        <tr>
                                            <td>৯) বিদ্যুৎ/পানি ইত্যাদির বিল </td>
                                            <td><input type="text" name="budget_S" /></td>
                                            <td><input type="text" name="currention_S" /></td>
                                            <td><input type="text" name="last_S" /></td>
                                            <td><input type="text" name="comment_S" /></td>
                                        </tr>


                                        <tr>
                                            <td> ১০)বৈদ্যুতিক সরঞ্জামাদি ক্রয়/মেরামত </td>
                                            <td><input type="text" name="budget_T" /></td>
                                            <td><input type="text" name="currention_T" /></td>
                                            <td><input type="text" name="last_T" /></td>
                                            <td><input type="text" name="comment_T" /></td>
                                        </tr>

                                        <tr>
                                            <td>১১) গ্যাস বিল, গ্যাস লাইন স্থাপনা/মেরামত ও আনুষঙ্গিক </td>
                                            <td><input type="text" name="budget_U" /></td>
                                            <td><input type="text" name="currention_U" /></td>
                                            <td><input type="text" name="last_U" /></td>
                                            <td><input type="text" name="comment_U" /></td>
                                        </tr>


                                        <tr>
                                            <td>১২) মনোহারী দ্রব্যাদি ক্রয় </td>
                                            <td><input type="text" name="budget_V" /></td>
                                            <td><input type="text" name="currention_V" /></td>
                                            <td><input type="text" name="last_V" /></td>
                                            <td><input type="text" name="comment_V" /></td>
                                        </tr>



                                        <tr>
                                            <td>১৩)ডাকটিকেট ক্রয়/চিঠি প্রেরণ </td>
                                            <td><input type="text" name="budget_W" /></td>
                                            <td><input type="text" name="currention_W" /></td>
                                            <td><input type="text" name="last_W" /></td>
                                            <td><input type="text" name="comment_W" /></td>
                                        </tr>



                                        <tr>
                                            <td>১৪) বিভিন্ন রেজিষ্টার/বই প্রস্তুত/ফরম ইত্যাদি ছাপানো ও বাঁধানো ব্যয় </td>
                                            <td><input type="text" name="budget_X" /></td>
                                            <td><input type="text" name="currention_X" /></td>
                                            <td><input type="text" name="last_X" /></td>
                                            <td><input type="text" name="comment_X" /></td>
                                        </tr>


                                        <tr>
                                            <td>১৫) দৈনিক সংবাদপত্র /ম্যাগাজিন/বই প্রস্তুক ইত্যাদি ক্রয় </td>
                                            <td><input type="text" name="budget_Y" /></td>
                                            <td><input type="text" name="currention_Y" /></td>
                                            <td><input type="text" name="last_Y" /></td>
                                            <td><input type="text" name="comment_Y" /></td>
                                        </tr>



                                        <tr>
                                            <td>১৬) বিভিন্ন সভা/সমিতি/অনুষ্ঠানে আপ্যায়ন ব্যয় </td>
                                            <td><input type="text" name="budget_Z" /></td>
                                            <td><input type="text" name="currention_Z" /></td>
                                            <td><input type="text" name="last_Z" /></td>
                                            <td><input type="text" name="comment_Z" /></td>
                                        </tr>


                                        <tr>
                                            <td>১৭) কম্পিউটর ক্রয়/মেরামত রক্ষণাবেক্ষন ইত্যাদি </td>
                                            <td><input type="text" name="budget_aa" /></td>
                                            <td><input type="text" name="currention_aa" /></td>
                                            <td><input type="text" name="last_aa" /></td>
                                            <td><input type="text" name="comment_aa" /></td>
                                        </tr>


                                        <tr>
                                            <td>১৮) ইন্টারকম ক্রয়/মেরামত রক্ষনাবেক্ষন ইত্যাদি </td>
                                            <td><input type="text" name="budget_bb" /></td>
                                            <td><input type="text" name="currention_bb" /></td>
                                            <td><input type="text" name="last_bb" /></td>
                                            <td><input type="text" name="comment_bb" /></td>
                                        </tr>

                                        <tr>
                                            <td>১৯) ফটোস্ট্যাট মেশিন ও ফ্যাক্স মেশিন ক্রয়/মেরামত রক্ষনাবেক্ষন ইত্যাদি </td>
                                            <td><input type="text" name="budget_cc" /></td>
                                            <td><input type="text" name="currention_cc" /></td>
                                            <td><input type="text" name="last_cc" /></td>
                                            <td><input type="text" name="comment_cc" /></td>
                                        </tr>


                                        <tr>
                                            <td>২০) ডিজিটাল ডুপ্লিকেটিং মেশিন ক্রয়/মেরামতক </td>
                                            <td><input type="text" name="budget_dd" /></td>
                                            <td><input type="text" name="currention_dd" /></td>
                                            <td><input type="text" name="last_dd" /></td>
                                            <td><input type="text" name="comment_dd" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২১) প্রকৌশল বিভাগের যন্ত্রপাতি অন্যান্য দ্রব্যাদি ক্রয় </td>
                                            <td><input type="text" name="budget_ee" /></td>
                                            <td><input type="text" name="currention_ee" /></td>
                                            <td><input type="text" name="last_ee" /></td>
                                            <td><input type="text" name="comment_ee" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২২) রোড রোলার ক্রয়/মেরামত রক্ষনাবেক্ষন ইত্যাদি </td>
                                            <td><input type="text" name="budget_ff" /></td>
                                            <td><input type="text" name="currention_ff" /></td>
                                            <td><input type="text" name="last_ff" /></td>
                                            <td><input type="text" name="comment_ff" /></td>
                                        </tr>



                                        <tr>
                                            <td> ২৩) যানবাহন (জীব, পিকআপ, মাইক্রোবাস ইত্যাদি) ক্রয় </td>
                                            <td><input type="text" name="budget_gg" /></td>
                                            <td><input type="text" name="currention_gg" /></td>
                                            <td><input type="text" name="last_gg" /></td>
                                            <td><input type="text" name="comment_gg" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২৪) মোটর সাইকেল ক্রয়/মেরামত </td>
                                            <td><input type="text" name="budget_hh" /></td>
                                            <td><input type="text" name="currention_hh" /></td>
                                            <td><input type="text" name="last_hh" /></td>
                                            <td><input type="text" name="comment_hh" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২৫) অফিস ও ডাকবাংলোর জন্য ক্রোকারিজ দ্রব্যাদি ক্রয় </td>
                                            <td><input type="text" name="budget_ii" /></td>
                                            <td><input type="text" name="currention_ii" /></td>
                                            <td><input type="text" name="last_ii" /></td>
                                            <td><input type="text" name="comment_ii" /></td>
                                        </tr>



                                        <tr>
                                            <td> ২৬) মামলা মোকদ্দমা ব্যয় এবং আইন উপদেষ্টার সম্মানি ভাতা </td>
                                            <td><input type="text" name="budget_jj" /></td>
                                            <td><input type="text" name="currention_jj" /></td>
                                            <td><input type="text" name="last_jj" /></td>
                                            <td><input type="text" name="comment_jj" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২৭) টেন্ডার নোটিশ/কোটেশন/পত্রিকায় বিজ্ঞাপন বাবদ ব্যয় </td>
                                            <td><input type="text" name="budget_kk" /></td>
                                            <td><input type="text" name="currention_kk" /></td>
                                            <td><input type="text" name="last_kk" /></td>
                                            <td><input type="text" name="comment_kk" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২৮) বিভিন্ন জাতীয় অনুষ্টান উদযাপন উপলক্ষে ব্যয় </td>
                                            <td><input type="text" name="budget_ll" /></td>
                                            <td><input type="text" name="currention_ll" /></td>
                                            <td><input type="text" name="last_ll" /></td>
                                            <td><input type="text" name="comment_ll" /></td>
                                        </tr>

                                        <tr>
                                            <td>২৯) জেলা পরিষদের কর্মচারীগনের কল্যান তহিবল </td>
                                            <td><input type="text" name="budget_mm" /></td>
                                            <td><input type="text" name="currention_mm" /></td>
                                            <td><input type="text" name="last_mm" /></td>
                                            <td><input type="text" name="comment_mm" /></td>
                                        </tr>

                                        <tr>
                                            <td>৩০) জেলা পরিষদের কর্মকর্তা/কর্মচারীদের পোষ্যদের শিক্ষা অনুদান </td>
                                            <td><input type="text" name="budget_nn" /></td>
                                            <td><input type="text" name="currention_nn" /></td>
                                            <td><input type="text" name="last_nn" /></td>
                                            <td><input type="text" name="comment_nn" /></td>
                                        </tr>


                                        <tr>
                                            <td>৩১) জেলা পরিষদের কর্মকর্তা/কর্মচারীদের পোষ্যদের চিকিৎসা অনুদান </td>
                                            <td><input type="text" name="budget_oo" /></td>
                                            <td><input type="text" name="currention_oo" /></td>
                                            <td><input type="text" name="last_oo" /></td>
                                            <td><input type="text" name="comment_oo" /></td>
                                        </tr>



                                        <tr>
                                            <td>৩২) ত্রাণ তহিবল </td>
                                            <td><input type="text" name="budget_pp" /></td>
                                            <td><input type="text" name="currention_pp" /></td>
                                            <td><input type="text" name="last_pp" /></td>
                                            <td><input type="text" name="comment_pp" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৩৩) মুক্তিযোদ্ধা/মুক্তিযোদ্ধা পরিবারবর্গের জন্য বিভিন্ন কর্মসূচী বাবদ ব্যয় </td>
                                            <td><input type="text" name="budget_qq" /></td>
                                            <td><input type="text" name="currention_qq" /></td>
                                            <td><input type="text" name="last_qq" /></td>
                                            <td><input type="text" name="comment_qq" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৩৪) বিভিন্ন প্রশিক্ষন কর্মসূচী বাবদ ব্যয় </td>
                                            <td><input type="text" name="budget_rr" /></td>
                                            <td><input type="text" name="currention_rr" /></td>
                                            <td><input type="text" name="last_rr" /></td>
                                            <td><input type="text" name="comment_rr" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৩৫) জেলা পরিষদের সম্পত্তি রক্ষনাবেক্ষণ বাবদ ব্যয় </td>
                                            <td><input type="text" name="budget_ss" /></td>
                                            <td><input type="text" name="currention_ss" /></td>
                                            <td><input type="text" name="last_ss" /></td>
                                            <td><input type="text" name="comment_ss" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৩৬) খেয়াঘাট/পুকুর মেরামত/সংস্কার বাবদ ক্রয় </td>
                                            <td><input type="text" name="budget_tt" /></td>
                                            <td><input type="text" name="currention_tt" /></td>
                                            <td><input type="text" name="last_tt" /></td>
                                            <td><input type="text" name="comment_tt" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৩৭) পরিষ্কার পরিচ্ছন্নতা কার্যক্রম </td>
                                            <td><input type="text" name="budget_uu" /></td>
                                            <td><input type="text" name="currention_uu" /></td>
                                            <td><input type="text" name="last_uu" /></td>
                                            <td><input type="text" name="comment_uu" /></td>
                                        </tr>

                                        <tr>
                                            <td>৩৮) তাৎক্ষণিক ব্যয় </td>
                                            <td><input type="text" name="budget_vv" /></td>
                                            <td><input type="text" name="currention_vv" /></td>
                                            <td><input type="text" name="last_vv" /></td>
                                            <td><input type="text" name="comment_vv" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৩৯) অপ্রত্যাশিত ব্যয় </td>
                                            <td><input type="text" name="budget_ww" /></td>
                                            <td><input type="text" name="currention_ww" /></td>
                                            <td><input type="text" name="last_ww" /></td>
                                            <td><input type="text" name="comment_ww" /></td>
                                        </tr>

                                        <tr>
                                            <td>৪০) অফিসার্স ডরমেটরী ভবন রক্ষনাবেক্ষন </td>
                                            <td><input type="text" name="budget_xx" /></td>
                                            <td><input type="text" name="currention_xx" /></td>
                                            <td><input type="text" name="last_xx" /></td>
                                            <td><input type="text" name="comment_xx" /></td>
                                        </tr>

                                        <tr>
                                            <td> ৪১) কর্মকর্তা/কর্মচারীগনের বাসভবন মেরামত/সংস্কার </td>
                                            <td><input type="text" name="budget_yy" /></td>
                                            <td><input type="text" name="currention_yy" /></td>
                                            <td><input type="text" name="last_yy" /></td>
                                            <td><input type="text" name="comment_yy" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৪২) জেলা পরিষদের মিলনায়তন সংস্কার ও আসবাবপত্র ক্রয় </td>
                                            <td><input type="text" name="budget_zz" /></td>
                                            <td><input type="text" name="currention_zz" /></td>
                                            <td><input type="text" name="last_zz" /></td>
                                            <td><input type="text" name="comment_zz" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৪৩) জেলা পরিষদের অফিস সম্প্রসারণ/পুন:নির্মাণ/সংস্কার ও আসবাবপত্র ক্রয় </td>
                                            <td><input type="text" name="budget_aaa" /></td>
                                            <td><input type="text" name="currention_aaa" /></td>
                                            <td><input type="text" name="last_aaa" /></td>
                                            <td><input type="text" name="comment_aaa" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৪৪) জেলা পরিষদের ডাকবাংলো/ অডিটরিয়াম সংস্কার/ পুন:নির্মাণ/রক্ষনাবেক্ষন </td>
                                            <td><input type="text" name="budget_bbb" /></td>
                                            <td><input type="text" name="currention_bbb" /></td>
                                            <td><input type="text" name="last_bbb" /></td>
                                            <td><input type="text" name="comment_bbb" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৪৫)জেলা পরিষদের লাইব্রেরী উন্নয়ন ও বই- প্রস্তুক ক্রয় </td>
                                            <td><input type="text" name="budget_ccc" /></td>
                                            <td><input type="text" name="currention_ccc" /></td>
                                            <td><input type="text" name="last_ccc" /></td>
                                            <td><input type="text" name="comment_ccc" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৪৬) জেলা পরিষদের গাড়ী রেজিস্ট্রেশন/নবায়ন/বীমা ব্যয় </td>
                                            <td><input type="text" name="budget_ddd" /></td>
                                            <td><input type="text" name="currention_ddd" /></td>
                                            <td><input type="text" name="last_ddd" /></td>
                                            <td><input type="text" name="comment_ddd" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৪৭)নিজস্ব প্রতিষ্ঠন পরিচালনায় ব্যয় </td>
                                            <td><input type="text" name="budget_eee" /></td>
                                            <td><input type="text" name="currention_eee" /></td>
                                            <td><input type="text" name="last_eee" /></td>
                                            <td><input type="text" name="comment_eee" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৪৮)বিভিন্ন সভা/দরপত্র মূল্যানয়/নিয়োগ কমিটির সদস্যগনের সম্মানি </td>
                                            <td><input type="text" name="budget_fff" /></td>
                                            <td><input type="text" name="currention_fff" /></td>
                                            <td><input type="text" name="last_fff" /></td>
                                            <td><input type="text" name="comment_fff" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৪৯)তথ্য ও যোগাযোগ প্রযুক্তি </td>
                                            <td><input type="text" name="budget_ggg" /></td>
                                            <td><input type="text" name="currention_ggg" /></td>
                                            <td><input type="text" name="last_ggg" /></td>
                                            <td><input type="text" name="comment_ggg" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৫০)ধোলাই ব্যয় </td>
                                            <td><input type="text" name="budget_gggA" /></td>
                                            <td><input type="text" name="currention_gggA" /></td>
                                            <td><input type="text" name="last_gggA" /></td>
                                            <td><input type="text" name="comment_gggA" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৫১)অন্যান্য ব্যয় </td>
                                            <td><input type="text" name="budget_hhh" /></td>
                                            <td><input type="text" name="currention_hhh" /></td>
                                            <td><input type="text" name="last_hhh" /></td>
                                            <td><input type="text" name="comment_hhh" /></td>
                                        </tr>


                                        <tr>
                                            <td> মোট </td>
                                            <td><input type="text" name="budget_iii" /></td>
                                            <td><input type="text" name="currention_iii" /></td>
                                            <td><input type="text" name="last_iii" /></td>
                                            <td><input type="text" name="comment_iii" /></td>
                                        </tr>


                                        <tr>
                                            <td> গ। সরকারি অনুদান দ্বারা উন্নয়ন </td>
                                            <td><input type="text" name="budget_jjj" /></td>
                                            <td><input type="text" name="currention_jjj" /></td>
                                            <td><input type="text" name="last_jjj" /></td>
                                            <td><input type="text" name="comment_jjj" /></td>
                                        </tr>


                                        <tr>
                                            <td> ১। বার্ষিক উন্নয়ন কর্মসূচী (এ ডি পি) এ ডি পি এর সাধারণ বরাদ্দ </td>
                                            <td><input type="text" name="budget_kkk" /></td>
                                            <td><input type="text" name="currention_kkk" /></td>
                                            <td><input type="text" name="last_kkk" /></td>
                                            <td><input type="text" name="comment_kkk" /></td>
                                        </tr>


                                        <tr>
                                            <td>২) বার্ষিক উন্নয়ন কর্মসূচী (এ ডি পি) এ ডি পি এর বিশেষ বরাদ্দ </td>
                                            <td><input type="text" name="budget_lll" /></td>
                                            <td><input type="text" name="currention_lll" /></td>
                                            <td><input type="text" name="last_lll" /></td>
                                            <td><input type="text" name="comment_lll" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৩) অন্যান্য (অনুন্নয়ন ব্যয়)</td>
                                            <td><input type="text" name="budget_mmm" /></td>
                                            <td><input type="text" name="currention_mmm" /></td>
                                            <td><input type="text" name="last_mmm" /></td>
                                            <td><input type="text" name="comment_mmm" /></td>
                                        </tr>


                                        <tr>
                                            <td> মোট ঃ (নিজস্ব তহবিল ও সরকারি অনুদান) - (ক+খ+গ) </td>
                                            <td><input type="text" name="budget_nnn" /></td>
                                            <td><input type="text" name="currention_nnn" /></td>
                                            <td><input type="text" name="last_nnn" /></td>
                                            <td><input type="text" name="comment_nnn" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২য় অংশ মুল্ধন হিসাব </td>
                                            <td><input type="text" name="budget_ppp" /></td>
                                            <td><input type="text" name="currention_ppp" /></td>
                                            <td><input type="text" name="last_ppp" /></td>
                                            <td><input type="text" name="comment_ppp" /></td>
                                        </tr>


                                        <tr>
                                            <td>১) কর্মচারীদের গৃহ নির্মাণ/মেরামত ঋণ </td>
                                            <td><input type="text" name="budget_qqq" /></td>
                                            <td><input type="text" name="currention_qqq" /></td>
                                            <td><input type="text" name="last_qqq" /></td>
                                            <td><input type="text" name="comment_qqq" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২) কর্মচারীদের মোটরসাইকেল/ বাইসাইকেল ক্রয় বাবদ ঋণ </td>
                                            <td><input type="text" name="budget_rrr" /></td>
                                            <td><input type="text" name="currention_rrr" /></td>
                                            <td><input type="text" name="last_rrr" /></td>
                                            <td><input type="text" name="comment_rrr" /></td>
                                        </tr>

                                        <tr>
                                            <td> ৩) জামানত ফেরত </td>
                                            <td><input type="text" name="budget_sss" /></td>
                                            <td><input type="text" name="currention_sss" /></td>
                                            <td><input type="text" name="last_sss" /></td>
                                            <td><input type="text" name="comment_sss" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৪)ভ্যাট </td>
                                            <td><input type="text" name="budget_ttt" /></td>
                                            <td><input type="text" name="currention_ttt" /></td>
                                            <td><input type="text" name="last_ttt" /></td>
                                            <td><input type="text" name="comment_ttt" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৫) আয়কর </td>
                                            <td><input type="text" name="budget_uuu" /></td>
                                            <td><input type="text" name="currention_uuu" /></td>
                                            <td><input type="text" name="last_uuu" /></td>
                                            <td><input type="text" name="comment_uuu" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৬) বিগত বৎসরের অসমাপ্ত প্রকল্পের ব্যয়( নিজস্ব ও এডিপি) </td>
                                            <td><input type="text" name="budget_vvv" /></td>
                                            <td><input type="text" name="currention_vvv" /></td>
                                            <td><input type="text" name="last_vvv" /></td>
                                            <td><input type="text" name="comment_vvv" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৭) অন্যান্য (ব্যাংক কর্তন) </td>
                                            <td><input type="text" name="budget_www" /></td>
                                            <td><input type="text" name="currention_www" /></td>
                                            <td><input type="text" name="last_www" /></td>
                                            <td><input type="text" name="comment_www" /></td>
                                        </tr>



                                        <tr>
                                            <td> মোট ঃ ২য় অংশ (১ থেকে ৭ এর যোগফল ) </td>
                                            <td><input type="text" name="budget_xxx" /></td>
                                            <td><input type="text" name="currention_xxx" /></td>
                                            <td><input type="text" name="last_xxx" /></td>
                                            <td><input type="text" name="comment_xxx" /></td>
                                        </tr>


                                        <tr>
                                            <td> মোট ব্যয়(১ম অংশ + ২য় অংশ ) </td>
                                            <td><input type="text" name="budget_yyy" /></td>
                                            <td><input type="text" name="currention_yyy" /></td>
                                            <td><input type="text" name="last_yyy" /></td>
                                            <td><input type="text" name="comment_yyy" /></td>
                                        </tr>


                                        <tr>
                                            <td> পূর্ববর্তী বৎসরের জের </td>
                                            <td><input type="text" name="budget_zzz" /></td>
                                            <td><input type="text" name="currention_zzz" /></td>
                                            <td><input type="text" name="last_zzz" /></td>
                                            <td><input type="text" name="comment_zzz" /></td>
                                        </tr>


                                        <tr>
                                            <td> সর্বমোট (১ম অংশ + ২য় অংশ + পূর্ববর্তী বৎসরের জের) </td>
                                            <td><input type="text" name="budget_total" /></td>
                                            <td><input type="text" name="currention_total" /></td>
                                            <td><input type="text" name="last_total" /></td>
                                            <td><input type="text" name="comment_total" /></td>
                                        </tr>


                                        <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                        <tr>
                                            <td colspan="5">
                                                <center>
                                                    <button type="submit" name="submit" class="btn btn-success">তথ্য সংরক্ষণ <span class="glyphicon glyphicon-send"></span></button>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>



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


<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #section-to-print,
        #section-to-print * {
            visibility: visible;
        }

        #section-to-print {
            position: absolute;
            left: 0;
            top: 0;
        }

    }

    control-label,
    label {
        text-align: left;
        float: left;
    }
</style>



<style type="text/css">
    #show {
        display: none;
    }
</style>

<script type="text/javascript">
    function getInfo() {
        var val = document.getElementById("mainhead").value;
        if (val == 'others') {
            $("#show").fadeIn(500);
        } else {
            $("#show").fadeOut(500);
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function(e) {

        $('#typeM').on('change', function() {
            var typename = $(this).val();
            if (typename == '') {
                $('#mainhead').prop('disabled', true);
            } else {
                $.ajax({
                    alert(typename);
                    url: "<?php echo base_url(); ?>Others/getMainHead/" + typename + "",
                    type: "GET",
                    data: {
                        'mainhead': typename
                    },
                    success: function(data) {
                        //alert('ok');
                        $('#mainhead').prop('disabled', false);
                        $('#mainhead').html(data);
                    },
                    error: function() {
                        $('#mainhead').prop('disabled', true);
                        alert('Error occur...!!');
                    }
                });
            }
        });




    });
</script>



<script>
    "use strict";
    $(function() {
        $('select').material_select();
        Materialize.updateTextFields();
        // autocomplete
        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'https://placehold.it/250x250'
            },
            limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
            onAutocomplete: function(val) {
                // Callback function when value is autcompleted.
            },
            minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
        });

        //datepicker
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>
<script>
    $(function() {
        $("#mainhead").change(function(event) {
            event.preventDefault();
            var main_head = $("#mainhead").val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>Functions/getMainHead",
                data: {
                    main_head: main_head
                },
                success: function(response) {
                    //alert(response);
                    $("#sub_head .icons").html(response);
                },
                error: function() {
                    alert("Invalide!");
                }
            });
        });
    });

    // In your Javascript (external .js resource or <script> tag)
</script>