<?php
$sql = $single_post_data;
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
                <h1> নিবন্ধন ফাইল হালনাগাদ</h1>

                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>/Register/new_register"> নিবন্ধন ফাইল সংযুক্তি</a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('all_register_controller/update_all_register'); ?>" method="post">
                                    <input type="hidden" name="rid" value="<?php echo $sql->id; ?>">
                                    <h2 class="text-center"> নিবন্ধন ফাইল ফর্ম </h2>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> আইডি</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="register_id" value="<?php echo  $sql->register_id; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিষয় </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="subject" value="<?php echo  $sql->subject; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> খোলার তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="opening_date" class="tcal" value="<?php echo  $sql->opening_date; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বন্ধের তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="ending_date" class="tcal" value="<?php echo  $sql->close_date; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> শাখা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="section" value="<?php echo  $sql->sector; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মোট পৃষ্ঠা সংখ্যা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="total_page" value="<?php echo  $sql->total_page; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সিইও কর্তৃক সত্যায়িত তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="ceo_date" value="<?php echo  $sql->attend_ceo; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বর্ণনা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <textarea style="height:250px" name="details"><?php echo  $sql->details; ?></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="userFiles[]" multiple value="<?php echo  $sql->file_upload; ?>">
                                                    <input type="hidden" name="userFiles2" value='<?php echo $sql->file_upload; ?>'>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
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
        var val = document.getElementById("paymentmode").value;
        if (val == 'others') {
            $("#show").fadeIn(500);
        } else {
            $("#show").fadeOut(500);
        }
    }
</script>
<style type="text/css">
    #show {
        display: none;
    }
</style>

<style type="text/css">
    #control-label {
        text-align: left;
    }
</style>