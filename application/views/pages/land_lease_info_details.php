<?php
$sql = $land_lease_info_complete_info['land_lease_info'];
$query = $land_lease_info_complete_info['landlease_rent_cal'];
?>
<script language="javascript">
    function printdiv(printpage) {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>
<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1>ভূমি ইজারা </h1>

                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Recoad/new_land_lease"> ভূমি ইজারা সংযুক্তি </a></li>
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
                                        <table width="844" class="table table-striped" border="1" align="center" style="background:#FFF; border:1px solid #23374e; padding-left:10px; color:#000;">
                                            <tr>
                                                <td height="115" width="20%" align="right">
                                                    <img height="100" width="120" src="<?php echo base_url(); ?>assets/dist/img/logo-gp.png" alt="logo" style="float:right">
                                                </td>
                                                <td colspan="4" align="center" valign="top" width="50%">
                                                    <h2 style="text-align:center; margin-top: 25px;font-size: 25px;margin-bottom: 0px;">জেলা পরিষদ , ফেনী</h2>
                                                    <p style="font-size:12px; text-align:center">
                                                        Website: www.zpfeni.gov.bd
                                                    </p>
                                                </td>
                                                <td align="right" width="20%">&nbsp;

                                                </td>
                                            </tr>

                                            <tr style="background:#999; color:#FFF; height:25px;">
                                                <td height="33" colspan="3"> &nbsp; <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;">
                                                        ভূমি ইজারার সাধারন তথ্য </span></td>
                                                <td colspan="3">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="154"> ইজারার ধরণ </td>
                                                <td width="10"> : </td>
                                                <td width="202"><?php echo $sql->lease_type; ?></td>

                                                <td width="209">উপজেলা </td>
                                                <td width="7"> : </td>
                                                <td width="222">

                                                    <?php
                                                    $location = $sql->location;
                                                    if ($location == 'ফেনী সদর') {
                                                        echo "ফেনী সদর";
                                                    } elseif ($location == 'দাগনভূঁঞা') {
                                                        echo "দাগনভূঁঞা";
                                                    } elseif ($location == 'সোনাগাজী') {
                                                        echo "সোনাগাজী";
                                                    } elseif ($location == 'ফুলগাজী') {
                                                        echo "ফুলগাজী";
                                                    } elseif ($location == 'পরশুরাম') {
                                                        echo "পরশুরাম";
                                                    } elseif ($location == 'ছাগলনাইয়া') {
                                                        echo "ছাগলনাইয়া";
                                                    } else {
                                                        echo "";
                                                    }

                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> আবেদনের ক্রমিক নং </td>
                                                <td> : </td>
                                                <td><?php echo $sql->idnumber;  ?></td>
                                                <td> আবেদনকারী নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->name; ?></td>
                                            </tr>


                                            <tr>
                                                <td> পিতা/মাতার নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->father; ?></td>
                                                <td> ঠিকানা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->address; ?></td>
                                            </tr>


                                            <tr>
                                                <td> পেশা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->occupation; ?></td>
                                                <td> মোবাইল নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->phone; ?></td>
                                            </tr>

                                            <tr>
                                                <td> জাতীয় পরিচয় পত্রের নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->nid; ?></td>
                                                <td> নথি নাম্বার</td>
                                                <td> : </td>
                                                <td><?php echo $sql->email; ?></td>
                                            </tr>


                                            <tr style="background:#999; color:#FFF; height:20px;">
                                                <td height="25" colspan="3"> &nbsp; <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;">
                                                        বিবরণ </span></td>
                                                <td colspan="3">
                                                </td>
                                            </tr>


                                            <tr>
                                                <td> জে এল নং </td>
                                                <td> : </td>
                                                <td><?php echo $sql->moja_number; ?></td>
                                                <td> রাস্তার নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->road_name; ?></td>
                                            </tr>



                                            <tr>
                                                <td> সি এস খতিয়ান নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->cs_kotian; ?></td>
                                                <td> সি এস দাগ নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->cs_dag; ?></td>
                                            </tr>


                                            <tr>
                                                <td> আর এস খতিয়ান নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->rs_kotian; ?></td>
                                                <td>আর এস দাগ নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->rs_dag; ?></td>
                                            </tr>


                                            <tr>
                                                <td> বি এস খতিয়ান নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->bs_kotian; ?></td>
                                                <td> বি এস দাগ নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->bs_dag; ?></td>
                                            </tr>


                                            <tr>
                                                <td> ভূমির পরিমাণ </td>
                                                <td> : </td>
                                                <td><?php echo $sql->land_area; ?></td>
                                                <td> ভূমির শ্রেনী </td>
                                                <td> : </td>
                                                <td><?php echo $sql->land_type; ?></td>
                                            </tr>


                                            <tr>
                                                <td> পূর্ব </td>
                                                <td> : </td>
                                                <td><?php echo $sql->east; ?></td>
                                                <td> দক্ষিণ </td>
                                                <td> : </td>
                                                <td><?php echo $sql->south; ?></td>
                                            </tr>

                                            <tr>
                                                <td> পশ্চিম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->west; ?></td>
                                                <td> উত্তর </td>
                                                <td> : </td>
                                                <td><?php echo $sql->north; ?></td>
                                            </tr>

                                            <tr>
                                                <td> ভূমি অবকাঠামো </td>
                                                <td> : </td>
                                                <td><?php echo $sql->land_structure; ?></td>
                                                <td> লিজের বর্ণনা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->occupancy_details; ?></td>
                                            </tr>


                                            <tr>
                                                <td> লিজের উদ্দেশ্ </td>
                                                <td> : </td>
                                                <td colspan="4"><?php echo $sql->purpose_lease; ?></td>
                                            </tr>

                                            <tr style="background:#999; color:#FFF; height:20px;">
                                                <td height="33" colspan="3"> &nbsp; <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;">
                                                        ভাড়ার হিসাব </span></td>
                                                <td colspan="3">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td> তারিখ হইতে </td>
                                                <td> : </td>
                                                <td><?php echo $sql->from_date; ?></td>
                                                <td> এখন পর্যন্ত </td>
                                                <td> : </td>
                                                <td><?php echo $sql->to_dateR; ?></td>
                                            </tr>
                                            <?php
                                            $grand_total=0;
                                            foreach ($query->result() as $sqlQ2) {
                                                $grand_total += $sqlQ2->grand_total;
                                            ?>
                                                <tr>
                                                    <td colspan="6"> - </td>
                                                </tr>
                                                <tr>
                                                    <td> ভূমির পরিমান </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->land_areaR; ?></td>
                                                    <td> ভাড়া (প্রতি বর্গফুট ) </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->rent_per; ?></td>
                                                </tr>

                                                <tr>
                                                    <td> বছর </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->year; ?></td>
                                                    <td> মোট টাকা </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->total_amount; ?></td>
                                                </tr>

                                                <tr>
                                                    <td> জরিমানা (শতাংশ) </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->fine_comesion; ?></td>
                                                    <td> জরিমানার বছর</td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->fine_comesion_yr; ?></td>
                                                </tr>

                                                <tr>
                                                    <td> ভ্যাট আয় কর (শতাংশ) </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->vat_tax_comesion; ?></td>
                                                    <td> ভ্যাট (টাকার পরিমাণ)</td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->vat_tax_comesion; ?></td>
                                                </tr>



                                                <tr>
                                                    <td> সর্বমোট টাকা </td>
                                                    <td> : </td>
                                                    <td colspan="4"><?php echo $sqlQ2->grand_total; ?></td>

                                                </tr>
                                                <tr>
                                                    <td colspan="6"> - </td>
                                                </tr>
                                            <?php } ?>
                                            <tr style="background:#000; color:#FFF;">
                                                <td> সর্বমোট টাকা </td>
                                                <td> : </td>
                                                <td colspan="4"><?php echo $grand_total; ?></td>

                                            </tr>
                                            <tr>
                                        </table>
                                        <div>
                                            <br />
                                            <p class="simple_text"> বার্ষিক ভাড়া / ইজারা ফি প্রতি বর্গফুট পৌর এলাকার ( ভিতরে / বাইরে) ____ / ____ টাকা হারে বাণিজ্যিক / অকৃষি / আবাসিক /
                                                কৃষি / মৎস্য চাষ / অন্যান্য এর জন্য ____ / ____ / _________ হইতে _____ / _____ / ________ পর্যন্ত এক বছর এর জন্য নিম্ন লিখিত শর্তে ইজারা
                                                মনজুর করা হল ।
                                            </p>

                                            <br>
                                            <h2 align="center"> শর্তাবলি </h2>
                                            <p class="simple_text"> ০১। মেয়াদ শেষ হওয়ার ০১ মাস পূর্বে নতুন ইজারার জন্য আবেদন করিতে হইবে । ইজারা দেওয়া / না দেওয়া জেলা পরিষদ এর এখতিয়ার।
                                                ইজারার মেয়াদ শেষ হওয়ার পর আবেদন করলে যদি তার অনুকুলে নতুন ইজারা প্রদানের সিদ্দান্ত হয় সে ক্ষেত্রে প্রতি বছর বকেয়া ভাড়ায় সাথে শতকরা ২০ টাকা হারে
                                                জরিমানা প্রদান করতে হবে । ইজারা শুধু মাত্র ০১(এক) বৎসর এর জন্য কার্যকর হইবে । ইজারার মেয়াদ শেষ হওয়া মাত্র জমি ইজারাদারের দখল মুক্ত হইয়াছে বলিয়া গণ্য হইবে ।
                                                পরবর্তী বছরের জন্য জমির ইজারা প্রাপ্তির কোন অধিকার বর্তাইবে না ।

                                            </p>
                                            <br />
                                            <p class="simple_text"> ০২। উক্ত ইজারার বলে উত্তরাধিকার / ওয়ারিশান দাবী করার কোন অধিকার থাকিবে না ।</p><br />
                                            <p class="simple_text"> ০৩। ইজারাকৃত ভুমিতে কোন পাকা / আধাপাকা অবকাঠামো / স্থাপনা নির্মাণ করা চলিবে না । </p><br />
                                            <p class="simple_text"> ০৪। ইজারাকৃত ভূমির শ্রেণী পরিবর্তন / হস্তান্তর / সাবলীজ প্রদান করা যাবে না । এরূপ করা হলে সাথে সাথেই ইজারা বাতিল বলে গণ্য হবে । </p><br />

                                            <p class="simple_text">০৫। জেলা পরিষদের বা জনস্বার্থের প্রয়োজনে যে কোন সময় বিনা নোটিশে ইজারা বাতিল করা যাইবে এবং ইজারাকৃত ভূমির পরিমাণ বাড়ানো /
                                                কমানোর সর্বময় ক্ষমতা জেলা পরিষদ সংরক্ষণ করেন । </p><br />
                                            <p class="simple_text"> ০৬। খালের বা ডোবার / নালার জায়গায় ইজারাকৃত ভূমিতে কোন অবস্থায় পানি চলাচলের বিঘ্ন তৈরি করিতে পারিবেন না । এ সব জায়গায় কোন মাটি ভরাট করা
                                                যাইবে না । অনুরূপ কিছু করা হলে সাথে সাথে ইজারা বাতিল বলিয়া গণ্য হইবে । </p> <br />

                                            <p class="simple_text"> ০৭। জনস্বার্থের / সড়ক বর্ধন করার প্রয়োজন হইলে সড়কের পাশে ইজারাকৃত ভূমির ইজারা স্বয়ংক্রিয় বাতিল বলিয়া গণ্য হইবে ।
                                            </p><br />

                                            <p class="simple_text"> ০৮। উল্লেখিত শর্তে আগামী ০৭ (সাত) দিনের মধ্যে ৩০০ টাকার নন জুডিশিয়াল স্ট্যাম্পে ভাড়া / ইজারা চুক্তি সম্পাদন পূর্বক ভাড়া পরিশোধ করিতে হইবে ।
                                                নতুবা ইজারা বাতিল বলে গণ্য হবে । </p><br />



                                            <p class="simple_text">
                                                ০৯। মৎস্য চাষ এর জন্য ডোবা / নালার ভাড়া কৃত ভূমিতে কোন অবস্থায় পানি চলাচলের বাধা তৈরি করা যাইবে না । এ সব জায়গায় কোন মাটি ভরাট
                                                করা যাইবে না । অনুরূপ কিছু প্রয়াস পাইলে সাথে সাথে ইজারা বাতিল বলিয়া গণ্য হইবে ।

                                            </p><br />

                                            <p class="simple_text"> ১০। ভাড়া কৃত ভূমির পরিমাণ বাড়ানো / কমানোর সর্বময় ক্ষমতা জেলা পরিষদ সংরক্ষণ করেন । </p><br />

                                            <p class="simple_text"> ১১। নির্ধারিত ভাড়ার উপর বিধি মোতাবেক সরকারি পাওনা (ভ্যাট / আয়কর / অন্যান্য) পরিশোধ করিতে হইবে । </p> <br />



                                            <p class="simple_text"> ১২। উপরোক্ত যে কোন শর্ত ভঙ্গ করিলে ইজারা বাতিল বলিয়া গণ্য হইবে এবং তাহার বিরুদ্ধে প্রয়োজনীয় আইনানুগ বাবস্থা গ্রহন করা হইবে । </p>

                                            <br /><br /><br /><br />
                                            <span style="float:right; margin-right:10px;"> প্রধান নির্বাহী কর্মকর্তা </span>
                                            <br /><span style="float:right;"> জেলা পরিষদ, ফেনী &nbsp;&nbsp; </span>
                                            <br /><br />
                                        </div>


                                    </div>
                                    <p style="text-align:center">
                                        <input name="b_print" type="button" class="ipt" onClick="printdiv('div_print');" value="প্রিন্ট">
                                    </p>
                                    </p>


                                    <h4 style="margin-top:25px;"> আবেদনকারীর জাতীয় পরিচয় পত্র </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileA =  $sql->nid_file;
                                            $arr = json_decode($fileA, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/NID/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')">ফাইল দেখুন</a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/NID/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>

                                    <h4 style="margin-top:25px;"> আবেদনকারীর ছবি </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileA =  $sql->picfile;
                                            $arr = json_decode($fileA, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/NID/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')">ফাইল দেখুন</a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/NID/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>




                                    <h4 style="margin-top:25px;"> সর্বশেষ লিজ রসিদ </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileA =  $sql->rent_receit;
                                            $arr = json_decode($fileA, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/rent_receit/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')">ফাইল দেখুন</a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/rent_receit/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>

                                    <h4 style="margin-top:25px;"> সার্ভেয়ার প্রতিবেদন </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileB =  $sql->serveyor;
                                            $arr = json_decode($fileB, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/serveyor/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')">ফাইল দেখুন</a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/serveyor/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>


                                    <h4 style="margin-top:25px;"> জমির নকশা </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileC =  $sql->sketch_map;
                                            $arr = json_decode($fileC, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/sketch_map/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')"> ফাইল দেখুন </a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/sketch_map/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>


                                    <h4 style="margin-top:25px;"> ফাইল অনুমোদন </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileD =  $sql->approval_file;
                                            $arr = json_decode($fileD, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/approval_file/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')"> ফাইল দেখুন </a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/approval_file/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download>ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>


                                    <h4 style="margin-top:25px;"> চুক্তিপত্র </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileE =  $sql->agreement_file;
                                            $arr = json_decode($fileE, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/agreement_file/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')">ফাইল দেখুন </a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/agreement_file/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>


                                    <h4 style="margin-top:25px;">সর্বশেষ ভাড়ার রসিদ</h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileF =  $sql->last_rant_clif;
                                            $arr = json_decode($fileF, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_lease/LAST_RANT/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>')">ফাইল দেখুন </a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_lease/LAST_RANT/<?php echo $sql->lease_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
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
<!-- ./page-content-wrapper -->
<style type="text/css">
    #control-label {
        text-align: left;
    }

    p {
        text-align: justify;
        font-size: 14px;
        font-family: Tahoma, Geneva, sans-serif;
    }
</style>