<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> প্রকল্প </h1>
                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Recoad/new_project">নতুন প্রকল্প সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('project_tender_controller/add_project_tender'); ?>" method="post">
                                    <h2 class="text-center">প্রকল্প ফর্ম </h2>
                                    <fieldset>
                                        <input type="hidden" name="pid" required value="<?php echo time(); ?>">


                                        <input type="hidden" name="title" id="title">
                                        <input type="hidden" name="others" id="others">



                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> অর্থ বছর </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="session">
                                                        <option value="" disabled selected> চিহ্নিত করুন </option>
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
                                            <label class="col-md-3 control-label">বাজেটের ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="budget_type" id="budget_type" onchange="getInfoA()">
                                                        <option value="" disabled selected> চিহ্নিত করুন </option>
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
                                            <label class="col-md-3 control-label"> বাস্তবায়ন ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="implemet" id="implemet" onchange="getInfoB()">
                                                        <option value="" disabled selected> চিহ্নিত করুন </option>
                                                        <option>প্রকল্প </option>
                                                        <option>দরপত্র</option>
                                                        <option>কোটেশান </option>
                                                        <option>পিআইসি </option>

                                                        <option value="others">অন্যান্য </option>
                                                    </select>
                                                    <input type="text" name="implement_others" id="showB" style="display:none" placeholder="বাস্তবায়ন ধরন">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> উপজেলা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="thana">

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
                                            <label class="col-md-3 control-label"> আইডি নং</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="project_id" placeholder="প্রকল্পের আইডি">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> প্রকল্পের নাম </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="project_name" placeholder="প্রকল্পের নাম">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> বরাদ্দকৃত অর্থ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="estimated_cost" placeholder="বরাদ্দকৃত অর্থ ">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label">চুক্তি মূল্য </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="contract_bill" placeholder="চুক্তি মূল্য">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-3 control-label">১ম কিস্তি/চলতি বিল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="first_bill" placeholder=" ১ম কিস্তি বিল">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">চূড়ান্ত বিল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="secend_bill" placeholder="চূড়ান্ত বিল">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> কাজ শুরুর তারিখ </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="startyear" class='tcal'>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> আবেদন </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="applications[]" multiple>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> অনুমোদন পত্র </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="approval_paper[]" multiple>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> কমিটি / ঠিকাদারের নাম ও ঠিকানা </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <textarea name="contractor_name"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> মোবাইল নাম্বার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="contactNumber">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> ছবি </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="images[]" multiple>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">জাতীয় পরিচয়পত্র </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="nid[]" multiple>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> কাজের চুক্তিপত্র </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="agrementPaper[]" multiple>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label">কাগজপত্র </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <!-- <div class="input-field">
                                                          <input type="file" name="document[]" multiple> 
                                                        </div> -->

                                                <div class="input-field" id="fileml">

                                                </div>
                                                <br />
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                            </div>


                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> অনুমোদন নোট </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="approvalNote[]" multiple>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo date('d-m-Y'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> কাজ সমাপ্তি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="finishedYear" class="tcal">
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
    fileml();
</script>