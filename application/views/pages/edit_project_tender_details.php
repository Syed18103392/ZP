<?php
$sqlP = $single_post_data['info'];
?>

<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> জেলা পরিষদ প্রকল্প </h1>
                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Recoad/new_project"> প্রকল্প সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('project_tender_controller/update_project_tender'); ?>" method="post">

                                    <input type="hidden" name="id" value="<?php echo $sqlP->id; ?>" />
                                    <input type="hidden" name="pid" value="<?php echo $sqlP->projectid; ?>">
                                    <input type="hidden" name="title" value="<?php echo $sqlP->type; ?>">
                                    <input type="hidden" name="others" />

                                    <h2 class="text-center"> প্রকল্পের ফর্ম </h2>
                                    <fieldset>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> অর্থ বছর </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="session">
                                                        <option><?php echo $sqlP->session; ?></option>
                                                        <?php
                                                        for ($i = 2010; $i < 2070; $i++) { ?>
                                                            <option><?php echo $i; ?>-<?php echo $i + 1; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">বাজেটের ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="budget_type" id="budget_type" onchange="getInfoA()">
                                                        <option><?php echo $sqlP->budget_type; ?></option>
                                                        <option>এ ডি পি </option>
                                                        <option>এ ডি পি (বিশেষ) </option>
                                                        <option>রাজস্ব </option>
                                                        <option>প্রকল্প </option>
                                                        <option> প্রকল্প (বিশেষ)</option>
                                                        <option value="others"> অন্যান্য </option>
                                                    </select>
                                                    <input type="text" name="budget_type_others" id="showA" style="display:none" placeholder="বাজেটের ধরন">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বাস্তবায়ন ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="implemet" id="implemet" onchange="getInfoB()">
                                                        <?php if ($sqlP->implemention == 'others') { ?>
                                                            <option value="others">অন্যান্য </option>
                                                        <?php } else { ?>
                                                            <option><?php echo $sqlP->implemention; ?></option>
                                                        <?php } ?>
                                                        <option>প্রকল্প </option>
                                                        <option>দরপত্র</option>
                                                        <option>কোটেশান </option>
                                                        <option>ডি পি এম </option>
                                                        <option>পিআইসি</option>
                                                        <option value="others">অন্যান্য </option>
                                                    </select>

                                                    <?php if ($sqlP->implemention == 'others') { ?>
                                                        <input type="text" name="implement_others" id="showB" style="display:block;" value="<?php echo $sqlP->imple_others; ?>">
                                                    <?php } else { ?>
                                                        <input type="text" name="implement_others" id="showB" style="display:none" placeholder="বাস্তবায়ন ধরন">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> উপজেলা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="thana">
                                                        <option><?php echo $sqlP->thana; ?></option>
                                                        <option value=""> চিহ্নিত করুন </option>
                                                        <option value="ফেনী সদর">ফেনী সদর </option>
                                                        <option value="দাগনভূঁঞা"> দাগনভূঁঞা </option>
                                                        <option value="সোনাগাজী"> সোনাগাজী </option>
                                                        <option value="ফুলগাজী"> ফুলগাজী </option>
                                                        <option value="পরশুরাম"> পরশুরাম </option>
                                                        <option value="ছাগলনাইয়া"> ছাগলনাইয়া </option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> আইডি নং </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="project_id" value="<?php echo $sqlP->project_id; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> প্রকল্পের নাম </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="project_name" value="<?php echo $sqlP->project_name; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বরাদ্দকৃত অর্থ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="estimated_cost" value="<?php echo $sqlP->estimiting_cost; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">চুক্তি মূল্য </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="contract_bill" value="<?php echo $sqlP->contract_bill; ?>">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-2 control-label">১ম কিস্তি/চলতি বিল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="first_bill" value="<?php echo $sqlP->first_bill; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">চূড়ান্ত বিল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="secend_bill" value="<?php echo $sqlP->secend_bill; ?>">
                                                </div>
                                            </div>
                                        </div>





                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> কাজ শুরুর তারিখ </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="startyear" class='tcal' value="<?php echo $sqlP->start_year; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> আবেদন </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="applications[]" multiple value="<?php echo $sqlP->applications; ?>">
                                                    <input type="hidden" name="applications2" value='<?php echo $sqlP->applications; ?>'>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> অনুমোদন পত্র </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="approval_paper[]" multiple value="<?php echo $sqlP->approval; ?>">
                                                    <input type="hidden" name="approval_paper2" value='<?php echo $sqlP->approval; ?>'>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> কমিটি / ঠিকাদারের নাম ও ঠিকানা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <textarea name="contractor_name" value="<?php echo $sqlP->contractor_name; ?>"><?php echo $sqlP->contractor_name; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মোবাইল নাম্বার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="contactNumber" value="<?php echo $sqlP->contact_number; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ছবি </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="images[]" multiple value="<?php echo $sqlP->person_img; ?>">
                                                    <input type="hidden" name="images2" value='<?php echo $sqlP->person_img; ?>'>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">জাতীয় পরিচয়পত্র </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="nid[]" multiple value="<?php echo $sqlP->nid; ?>">
                                                    <input type="hidden" name="nid2" value='<?php echo $sqlP->nid; ?>'>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> কাজের চুক্তিপত্র </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="agrementPaper[]" multiple value="<?php echo $sqlP->workAgreement; ?>">
                                                    <input type="hidden" name="agrementPaper2" value='<?php echo $sqlP->workAgreement; ?>'>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">কাগজপত্র </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <!-- <div class="input-field">
                                                          <input type="file" name="document[]" multiple="" value="<?php echo $sqlP->document; ?>" id="files"> 
                                                          <div id="selectedFiles"></div>
                                                          <input type="hidden" name="document2" value='<?php echo $sqlP->document; ?>'>
                                                        </div>
 -->

                                                <div class="input-field" id="fileml">

                                                </div>
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                                <br /><br />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> অনুমোদন নোট </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="approvalNote[]" multiple value="<?php echo $sqlP->approvalNote; ?>">
                                                    <input type="hidden" name="approvalNote2" value='<?php echo $sqlP->approvalNote; ?>'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo $sqlP->add_date; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> কাজ সমাপ্তি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="finishedYear" class="tcal" value="<?php echo $sqlP->finishedyear; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-6">
                                                <button type="submit" name="submit" class="btn btn-success"> তথ্য সংরক্ষণ <span class="glyphicon glyphicon-send"></span></button>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            &nbsp;
                                        </div>

                                    </fieldset>
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
<script type="text/javascript">
    function getInfo() {
        var val = document.getElementById("title").value;
        if (val == 'others') {
            $("#show").fadeIn(500);
        } else {
            $("#show").fadeOut(500);
        }
    }

    function getInfoA() {
        var val = document.getElementById("budget_type").value;
        if (val == 'others') {
            $("#showA").fadeIn(500);
        } else {
            $("#showA").fadeOut(500);
        }
    }

    function getInfoB() {
        var val = document.getElementById("implemet").value;
        if (val == 'others') {
            $("#showB").fadeIn(500);
        } else {
            $("#showB").fadeOut(500);
        }
    }
</script>
<style type="text/css">
    #show {
        display: none;
    }

    #showA {
        display: none;
    }

    #showB {
        display: none;
    }
</style>


<style type="text/css">
    #control-label {
        text-align: left;
    }
</style>

<!-- Start Core Plugins-->


<script type="text/javascript">
    $('#addfile').click(function() {
        fileml();
    });
    $('#delfile').click(function() {
        $('#fileml input:last-child').remove();
    });

    function fileml() {
        var fileml = '<input type="file" name="document[]" multiple>';
        $("#fileml").append(fileml);
    }

    function fileml2() {
        <?php
        $files = json_decode($single_post_data['info']->document);
        ?>
        var fileml2 = '<?php foreach ($files as $file) { ?><input type="file" value="<?php echo $file; ?>" name="document[]" multiple style="display:none"><input type="text" name="document[]" value="<?php echo $file; ?>" readonly style="border:none;margin-bottom:0px"><?php  } ?>';


        $("#fileml").append(fileml2);
    }

    fileml2();
</script>