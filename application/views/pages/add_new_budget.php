<!-- ./sidebar-wrapper -->
<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> আয়ের বাজেট বরাদ্দ </h1>
                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Page/new_budget"> নতুন বাজেট সংযুক্তি </a></li>
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
                                <form action="<?php echo site_url('budget_controller/add_new_budget_summary'); ?>" method="post" enctype="multipart/form-data">
                                    <h2 class="text-center"> বাজেট বরাদ্দ ফর্ম </h2>





                                    <table class="table table-bordered table-striped table-hover">
                                        <tr style="text-align:center; font-weight:bold">
                                            <td> আয়ের খাত সমূহ </td>
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
                                            <td>ক। বিভিন্ন খাতের নিজস্ব তহবিল </td>
                                            <td><input type="text" name="budget_B" /></td>
                                            <td><input type="text" name="currention_B" /></td>
                                            <td><input type="text" name="last_B" /></td>
                                            <td><input type="text" name="comment_B" /></td>
                                        </tr>

                                        <tr>
                                            <td>১। স্থানীয় কর ঃ </td>
                                            <td><input type="text" name="budget_C" /></td>
                                            <td><input type="text" name="currention_C" /></td>
                                            <td><input type="text" name="last_C" /></td>
                                            <td><input type="text" name="comment_C" /></td>
                                        </tr>

                                        <tr>
                                            <td>ক ) স্থাবর সম্পত্তি হস্তান্তর কর </td>
                                            <td><input type="text" name="budget_D" /></td>
                                            <td><input type="text" name="currention_D" /></td>
                                            <td><input type="text" name="last_D" /></td>
                                            <td><input type="text" name="comment_D" /></td>
                                        </tr>

                                        <tr>
                                            <td>খ ) অন্যান্য কর </td>
                                            <td><input type="text" name="budget_E" /></td>
                                            <td><input type="text" name="currention_E" /></td>
                                            <td><input type="text" name="last_E" /></td>
                                            <td><input type="text" name="comment_E" /></td>
                                        </tr>

                                        <tr>
                                            <td> ২। মাসুল (টোল ) </td>
                                            <td><input type="text" name="budget_F" /></td>
                                            <td><input type="text" name="currention_F" /></td>
                                            <td><input type="text" name="last_F" /></td>
                                            <td><input type="text" name="comment_F" /></td>
                                        </tr>

                                        <tr>
                                            <td> ক)ফেরীঘাট / খেয়াঘাট / আন্ত জেলা খেয়াঘাট ইজারা বাবদ </td>
                                            <td><input type="text" name="budget_G" /></td>
                                            <td><input type="text" name="currention_G" /></td>
                                            <td><input type="text" name="last_G" /></td>
                                            <td><input type="text" name="comment_G" /></td>
                                        </tr>

                                        <tr>
                                            <td> খ ) রাস্তা / ব্রিজের মাসুল (টোল বাবদ) </td>
                                            <td><input type="text" name="budget_H" /></td>
                                            <td><input type="text" name="currention_H" /></td>
                                            <td><input type="text" name="last_H" /></td>
                                            <td><input type="text" name="comment_H" /></td>
                                        </tr>

                                        <tr>
                                            <td>৩। ফি </td>
                                            <td><input type="text" name="budget_I" /></td>
                                            <td><input type="text" name="currention_I" /></td>
                                            <td><input type="text" name="last_I" /></td>
                                            <td><input type="text" name="comment_I" /></td>
                                        </tr>

                                        <tr>
                                            <td>ক) ঠিকাদার তালিকাভুক্তি ও নবায়ন ফি </td>
                                            <td><input type="text" name="budget_J" /></td>
                                            <td><input type="text" name="currention_J" /></td>
                                            <td><input type="text" name="last_J" /></td>
                                            <td><input type="text" name="comment_J" /></td>
                                        </tr>

                                        <tr>
                                            <td>খ ) জনগনের ব্যবহার্য/সম্পাদিত কাজের জন্য ধার্যকৃত ফি </td>
                                            <td><input type="text" name="budget_K" /></td>
                                            <td><input type="text" name="currention_K" /></td>
                                            <td><input type="text" name="last_K" /></td>
                                            <td><input type="text" name="comment_K" /></td>
                                        </tr>


                                        <tr>
                                            <td> গ ) অন্যান্য ফি </td>
                                            <td><input type="text" name="budget_L" /></td>
                                            <td><input type="text" name="currention_L" /></td>
                                            <td><input type="text" name="last_L" /></td>
                                            <td><input type="text" name="comment_L" /></td>
                                        </tr>

                                        <tr>
                                            <td>৪। সম্পত্তি হতে প্রাপ্ত আয় </td>
                                            <td><input type="text" name="budget_M" /></td>
                                            <td><input type="text" name="currention_M" /></td>
                                            <td><input type="text" name="last_M" /></td>
                                            <td><input type="text" name="comment_M" /></td>
                                        </tr>

                                        <tr>
                                            <td>ক) জমি ইজারা বাবদ আয় </td>
                                            <td><input type="text" name="budget_N" /></td>
                                            <td><input type="text" name="currention_N" /></td>
                                            <td><input type="text" name="last_N" /></td>
                                            <td><input type="text" name="comment_N" /></td>
                                        </tr>

                                        <tr>
                                            <td>খ) পুকুর ইজারা বাবদ আয় </td>
                                            <td><input type="text" name="budget_O" /></td>
                                            <td><input type="text" name="currention_O" /></td>
                                            <td><input type="text" name="last_O" /></td>
                                            <td><input type="text" name="comment_O" /></td>
                                        </tr>

                                        <tr>
                                            <td>গ) ডাকবাংলো হতে প্রাপ্ত আয় </td>
                                            <td><input type="text" name="budget_P" /></td>
                                            <td><input type="text" name="currention_P" /></td>
                                            <td><input type="text" name="last_P" /></td>
                                            <td><input type="text" name="comment_P" /></td>
                                        </tr>

                                        <tr>
                                            <td>ঘ) অডিটরিয়াম/মিলনায়তন ভাড়া বাবদ আয় </td>
                                            <td><input type="text" name="budget_Q" /></td>
                                            <td><input type="text" name="currention_Q" /></td>
                                            <td><input type="text" name="last_Q" /></td>
                                            <td><input type="text" name="comment_Q" /></td>
                                        </tr>


                                        <tr>
                                            <td>ঙ) মার্কেট/দোকান/যাত্রী ছাউনি/গোডাউন হতে আয় </td>
                                            <td><input type="text" name="budget_R" /></td>
                                            <td><input type="text" name="currention_R" /></td>
                                            <td><input type="text" name="last_R" /></td>
                                            <td><input type="text" name="comment_R" /></td>
                                        </tr>


                                        <tr>
                                            <td>চ) দোকান ভাড়া সেলামী </td>
                                            <td><input type="text" name="budget_S" /></td>
                                            <td><input type="text" name="currention_S" /></td>
                                            <td><input type="text" name="last_S" /></td>
                                            <td><input type="text" name="comment_S" /></td>
                                        </tr>


                                        <tr>
                                            <td> ছ) পার্ক/পিকনিক সেন্টার হতে আয় </td>
                                            <td><input type="text" name="budget_T" /></td>
                                            <td><input type="text" name="currention_T" /></td>
                                            <td><input type="text" name="last_T" /></td>
                                            <td><input type="text" name="comment_T" /></td>
                                        </tr>

                                        <tr>
                                            <td>জ) বাস টার্মিনাল হতে আয় </td>
                                            <td><input type="text" name="budget_U" /></td>
                                            <td><input type="text" name="currention_U" /></td>
                                            <td><input type="text" name="last_U" /></td>
                                            <td><input type="text" name="comment_U" /></td>
                                        </tr>


                                        <tr>
                                            <td>ঝ) আবাসিক এলাকা </td>
                                            <td><input type="text" name="budget_V" /></td>
                                            <td><input type="text" name="currention_V" /></td>
                                            <td><input type="text" name="last_V" /></td>
                                            <td><input type="text" name="comment_V" /></td>
                                        </tr>



                                        <tr>
                                            <td>ঞ) শিক্ষা/কারিগরী প্রতিষ্ঠান হতে আয় </td>
                                            <td><input type="text" name="budget_W" /></td>
                                            <td><input type="text" name="currention_W" /></td>
                                            <td><input type="text" name="last_W" /></td>
                                            <td><input type="text" name="comment_W" /></td>
                                        </tr>



                                        <tr>
                                            <td>ট) অন্যান্য সম্পত্তি/ভবন ভাড়া বাবদ আয় </td>
                                            <td><input type="text" name="budget_X" /></td>
                                            <td><input type="text" name="currention_X" /></td>
                                            <td><input type="text" name="last_X" /></td>
                                            <td><input type="text" name="comment_X" /></td>
                                        </tr>


                                        <tr>
                                            <td>ঠ) রোড রোলের/অন্যান্য যন্ত্রপাতি হতে প্রাপ্ত আয় </td>
                                            <td><input type="text" name="budget_Y" /></td>
                                            <td><input type="text" name="currention_Y" /></td>
                                            <td><input type="text" name="last_Y" /></td>
                                            <td><input type="text" name="comment_Y" /></td>
                                        </tr>



                                        <tr>
                                            <td>ড) পরিত্যক্ত দালান কোঠা/যানবাহন/যন্ত্রপাতি/ মালামাল/গাছপালা ইত্যাদি বিক্রয় বাবদ আয় </td>
                                            <td><input type="text" name="budget_Z" /></td>
                                            <td><input type="text" name="currention_Z" /></td>
                                            <td><input type="text" name="last_Z" /></td>
                                            <td><input type="text" name="comment_Z" /></td>
                                        </tr>


                                        <tr>
                                            <td>ঢ) দরপত্র ফরম ও অন্যান্য ফরম বিক্রয় </td>
                                            <td><input type="text" name="budget_aa" /></td>
                                            <td><input type="text" name="currention_aa" /></td>
                                            <td><input type="text" name="last_aa" /></td>
                                            <td><input type="text" name="comment_aa" /></td>
                                        </tr>


                                        <tr>
                                            <td>ণ) অন্যান্য অপ্রত্যাশিত প্রাপ্তি/বিবিধ আয় </td>
                                            <td><input type="text" name="budget_bb" /></td>
                                            <td><input type="text" name="currention_bb" /></td>
                                            <td><input type="text" name="last_bb" /></td>
                                            <td><input type="text" name="comment_bb" /></td>
                                        </tr>

                                        <tr>
                                            <td>৫। কোন স্থানীয় কর্তৃপক্ষ বা অন্য কোন প্রতিষ্ঠান বা ব্যক্তি কর্তৃক প্রদত্ত অনুদান </td>
                                            <td><input type="text" name="budget_cc" /></td>
                                            <td><input type="text" name="currention_cc" /></td>
                                            <td><input type="text" name="last_cc" /></td>
                                            <td><input type="text" name="comment_cc" /></td>
                                        </tr>


                                        <tr>
                                            <td>৬। অর্থ বিনিয়োগ হতে আয় ( ব্যাংকে জমাকৃত টাকার উপর সুদ) </td>
                                            <td><input type="text" name="budget_dd" /></td>
                                            <td><input type="text" name="currention_dd" /></td>
                                            <td><input type="text" name="last_dd" /></td>
                                            <td><input type="text" name="comment_dd" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৭। বিবিধ </td>
                                            <td><input type="text" name="budget_ee" /></td>
                                            <td><input type="text" name="currention_ee" /></td>
                                            <td><input type="text" name="last_ee" /></td>
                                            <td><input type="text" name="comment_ee" /></td>
                                        </tr>


                                        <tr>
                                            <td> মোট আয় (বিভিন্ন খাতের নিজস্ব তহবিল )</td>
                                            <td><input type="text" name="budget_ff" /></td>
                                            <td><input type="text" name="currention_ff" /></td>
                                            <td><input type="text" name="last_ff" /></td>
                                            <td><input type="text" name="comment_ff" /></td>
                                        </tr>



                                        <tr>
                                            <td> খ) সরকারি অনুদান </td>
                                            <td><input type="text" name="budget_gg" /></td>
                                            <td><input type="text" name="currention_gg" /></td>
                                            <td><input type="text" name="last_gg" /></td>
                                            <td><input type="text" name="comment_gg" /></td>
                                        </tr>


                                        <tr>
                                            <td> ১। বিভিন্ন প্রকল্প বাস্তবায়নে সরকারি সাধারন মঞ্জুরী </td>
                                            <td><input type="text" name="budget_hh" /></td>
                                            <td><input type="text" name="currention_hh" /></td>
                                            <td><input type="text" name="last_hh" /></td>
                                            <td><input type="text" name="comment_hh" /></td>
                                        </tr>


                                        <tr>
                                            <td> ২। বিভিন্ন প্রকল্প বাস্তবায়নে সরকারি বিশেষ মঞ্জুরী </td>
                                            <td><input type="text" name="budget_ii" /></td>
                                            <td><input type="text" name="currention_ii" /></td>
                                            <td><input type="text" name="last_ii" /></td>
                                            <td><input type="text" name="comment_ii" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৩। বেতন ভাতা খাতে মঞ্জুরী </td>
                                            <td><input type="text" name="budget_jj" /></td>
                                            <td><input type="text" name="currention_jj" /></td>
                                            <td><input type="text" name="last_jj" /></td>
                                            <td><input type="text" name="comment_jj" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৪। অন্যান্য মঞ্জুরী </td>
                                            <td><input type="text" name="budget_kk" /></td>
                                            <td><input type="text" name="currention_kk" /></td>
                                            <td><input type="text" name="last_kk" /></td>
                                            <td><input type="text" name="comment_kk" /></td>
                                        </tr>


                                        <tr>
                                            <td> সরকারি মোট অনুদান </td>
                                            <td><input type="text" name="budget_ll" /></td>
                                            <td><input type="text" name="currention_ll" /></td>
                                            <td><input type="text" name="last_ll" /></td>
                                            <td><input type="text" name="comment_ll" /></td>
                                        </tr>

                                        <tr>
                                            <td> মোট ( ক + খ) </td>
                                            <td><input type="text" name="budget_mm" /></td>
                                            <td><input type="text" name="currention_mm" /></td>
                                            <td><input type="text" name="last_mm" /></td>
                                            <td><input type="text" name="comment_mm" /></td>
                                        </tr>


                                        <tr>
                                            <td>২য় অংশ - মুল্ধন হিসাব </td>
                                            <td><input type="text" name="budget_nn" /></td>
                                            <td><input type="text" name="currention_nn" /></td>
                                            <td><input type="text" name="last_nn" /></td>
                                            <td><input type="text" name="comment_nn" /></td>
                                        </tr>


                                        <tr>
                                            <td>১। গচ্ছিত তহিবল </td>
                                            <td><input type="text" name="budget_oo" /></td>
                                            <td><input type="text" name="currention_oo" /></td>
                                            <td><input type="text" name="last_oo" /></td>
                                            <td><input type="text" name="comment_oo" /></td>
                                        </tr>



                                        <tr>
                                            <td>২। জামানত প্রাপ্তি </td>
                                            <td><input type="text" name="budget_pp" /></td>
                                            <td><input type="text" name="currention_pp" /></td>
                                            <td><input type="text" name="last_pp" /></td>
                                            <td><input type="text" name="comment_pp" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৩। অগ্রিম সমন্বয় </td>
                                            <td><input type="text" name="budget_qq" /></td>
                                            <td><input type="text" name="currention_qq" /></td>
                                            <td><input type="text" name="last_qq" /></td>
                                            <td><input type="text" name="comment_qq" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৪। ভ্যাট </td>
                                            <td><input type="text" name="budget_rr" /></td>
                                            <td><input type="text" name="currention_rr" /></td>
                                            <td><input type="text" name="last_rr" /></td>
                                            <td><input type="text" name="comment_rr" /></td>
                                        </tr>



                                        <tr>
                                            <td> ৫। আয়কর </td>
                                            <td><input type="text" name="budget_ss" /></td>
                                            <td><input type="text" name="currention_ss" /></td>
                                            <td><input type="text" name="last_ss" /></td>
                                            <td><input type="text" name="comment_ss" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৬। স্থাপনা নিমার্ণে সেলামী </td>
                                            <td><input type="text" name="budget_tt" /></td>
                                            <td><input type="text" name="currention_tt" /></td>
                                            <td><input type="text" name="last_tt" /></td>
                                            <td><input type="text" name="comment_tt" /></td>
                                        </tr>


                                        <tr>
                                            <td> ৭। অন্যান্য </td>
                                            <td><input type="text" name="budget_uu" /></td>
                                            <td><input type="text" name="currention_uu" /></td>
                                            <td><input type="text" name="last_uu" /></td>
                                            <td><input type="text" name="comment_uu" /></td>
                                        </tr>

                                        <tr>
                                            <td>মোট (১ হইতে ৭ এর যোগফল ) </td>
                                            <td><input type="text" name="budget_vv" /></td>
                                            <td><input type="text" name="currention_vv" /></td>
                                            <td><input type="text" name="last_vv" /></td>
                                            <td><input type="text" name="comment_vv" /></td>
                                        </tr>


                                        <tr>
                                            <td> মোট আয় (১ম অংশ + ২য় অংশ ) </td>
                                            <td><input type="text" name="budget_ww" /></td>
                                            <td><input type="text" name="currention_ww" /></td>
                                            <td><input type="text" name="last_ww" /></td>
                                            <td><input type="text" name="comment_ww" /></td>
                                        </tr>

                                        <tr>
                                            <td> পূর্ববর্তী বৎসরের জের </td>
                                            <td><input type="text" name="budget_xx" /></td>
                                            <td><input type="text" name="currention_xx" /></td>
                                            <td><input type="text" name="last_xx" /></td>
                                            <td><input type="text" name="comment_xx" /></td>
                                        </tr>

                                        <tr>
                                            <td> সর্ব মোট আয় (১ম অংশ + ২য় অংশ + পূর্ববর্তী বৎসরের জের ) </td>
                                            <td><input type="text" name="budget_yy" /></td>
                                            <td><input type="text" name="currention_yy" /></td>
                                            <td><input type="text" name="last_yy" /></td>
                                            <td><input type="text" name="comment_yy" /></td>
                                        </tr>

                                        <tr>
                                            <td colspan="5">
                                                <center>
                                                    <button type="submit" name="submit" class="btn btn-success">তথ্য সংরক্ষণ <span class="glyphicon glyphicon-send"></span></button>
                                                </center>
                                            </td>
                                        </tr>

                                    </table>

                                    <input type="hidden" name="uid" value="<?php echo $userid; ?>">

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

</script>