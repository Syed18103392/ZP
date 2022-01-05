<?php
$sql = $single_post_data['info'];
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
                <h1> প্রশিক্ষণ </h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Recoad/new_training"> নতুন প্রশিক্ষণ সংযুক্তি </a></li>
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
                            <div class="row" style="background:#FFF; color:#000;">
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('tranning_info_controller/update_tranning_info'); ?>" method="post" style="background:#FFF; color:#000;">

                                    <input type="hidden" name="tid" value="<?php echo $sql->id; ?>">
                                    <input type="hidden" name="trainingid" value="<?php echo $sql->tranning_id; ?>">

                                    <h2 class="text-center"> প্রশিক্ষণ সংযুক্তি ফর্ম </h2>
                                    <fieldset>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> প্রশিক্ষণের ধরন </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <select class="icons" name="type" id="type" required onchange="getInfo()">
                                                        <option selected><?php echo $sql->traning_type; ?> </option>
                                                        <option value="Driver"> ড্রাইভিং </option>
                                                        <option value="sewing"> সেলাই </option>
                                                        <option value="Computer"> কম্পিউটার </option>
                                                        <option value="others"> অন্যান্য </option>

                                                    </select>
                                                    <input type="text" name="other" id="show" value="<?php echo $sql->type_others; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> প্রশিক্ষণের সময়কাল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="from_date" class="tcal" placeholder="হইতে " value="<?php echo $sql->from_date; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-1"><strong> হতে </strong></div>

                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="to_date" class="tcal" placeholder="পর্যন্ত" value="<?php echo $sql->to_date; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> ব্যাচ নং</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="batch_no" placeholder="ব্যাচ নং" value="<?php echo $sql->batch_no; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> প্রশিক্ষণার্থীর নাম </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="name" required value="<?php echo $sql->name; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label">পিতা / মাতা / স্বামীর নাম </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="parrents" required value="<?php echo $sql->parrents; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> ঠিকানা </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="address" required value="<?php echo $sql->address; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> পেশা </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="occupation" value="<?php echo $sql->occupation; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> জন্ম তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="dob" class="tcal" value="<?php echo $sql->dob; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> বয়স </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="age" value="<?php echo $sql->age; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">জাতীয় পরিচয় পত্র / জন্ম সনদ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="nid" value="<?php echo $sql->nid; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> মোবাইল নাম্বার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="contact" value="<?php echo $sql->mobile; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> শিক্ষাগত যোগ্যতা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <select class="icons" name="education">
                                                        <option selected><?php echo $sql->education; ?> </option>
                                                        <option>অষ্টম শ্রেণি </option>
                                                        <option>এস.এস.সি </option>
                                                        <option>এইস.এস.সি </option>
                                                        <option>ডিগ্রী </option>
                                                        <option>মাস্টার্স </option>
                                                        <option>বি.বি.এ</option>
                                                        <option>এম.বি.এ </option>
                                                        <option>বি.কম </option>
                                                        <option> টেকনিক্যাল </option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>






                                        <div class="form-group">
                                            <label class="col-md-3 control-label">এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo $sql->add_date; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> বিস্তারিত বর্ণনা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <textarea name="details" style="height:250px"><?php echo $sql->details; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <!-- <div class="input-field">
                                                           <input type="file" name="traifile[]"> 
                                                           <input type="hidden" name="traifile2" value='<?php echo $sql->add_file; ?>'> 
                                                        </div> -->

                                                <div class="input-field" id="fileml">

                                                </div>
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                                <br /><br />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                        </div>

                                        <div class="form-group">
                                            &nbsp;
                                        </div>


                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>
                                            <div class="col-md-5">
                                                <button type="submit" name="submit" class="btn btn-success"> তথ্য হালনাগাদ <span class="glyphicon glyphicon-send"></span></button>
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

<script type="text/javascript">
    function getInfo() {
        var val = document.getElementById("type").value;
        if (val == 'others') {
            $("#show").fadeIn(500);
        } else {
            $("#show").fadeOut(500);
        }
    }

    function getInfoA() {
        var val = document.getElementById("feedomfight").value;
        if (val == 'others') {
            $("#showA").fadeIn(500);
        } else {
            $("#showA").fadeOut(500);
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
</style>


<style type="text/css">
    #control-label {
        text-align: left;
    }
</style>


<script type="text/javascript">
    $('#addfile').click(function() {
        fileml();
    });
    $('#delfile').click(function() {

        $('#fileml input:last-child').remove();
    });

    function fileml2() {
        <?php
       
        $sqlR = $single_post_data['info'];
        $files = json_decode($sqlR->add_file);
        ?>
        var fileml2 = '<?php foreach ($files as $file) { ?><input type="file" value="<?php echo $file; ?>" name="traifile[]" multiple style="display:none"><input type="text" name="traifile[]" value="<?php echo $file; ?>" readonly style="border:none;margin-bottom:0px"><?php  } ?>';


        $("#fileml").append(fileml2);
    }
    fileml2();

    function fileml() {
        var fileml = '<input type="file" name="traifile[]" multiple>';
        $("#fileml").append(fileml);
    }
</script>
