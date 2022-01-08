<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> নিরীক্ষা </h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Recoad/new_audit"> নিরীক্ষা সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('audit_info_controller/add_audit_info'); ?>" method="post">
                                    <h2 class="text-center"> নিরীক্ষা সংযুক্তি ফর্ম </h2>

                                    <input type="hidden" name="auditid" required value="<?php echo time(); ?>">
                                    <fieldset>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> অর্থ বছর </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <select class="icons" name="session">
                                                        <option value=""> চিহ্নিত করুন </option>
                                                        <?php
                                                        for ($i = 1970; $i < 2100; $i++) { ?>

                                                            <option> <?php echo $i; ?>-<?php echo $i + 1; ?></option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> নিরীক্ষা শুরুর তারিখ </label>
                                            <div class="col-md-1"><strong>:</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="fromdate" class="tcal">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> নিরীক্ষা শেষের তারিখ </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="todate" class="tcal">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> মোট অনুচ্ছেদ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="total_para">
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label"> মোট আপত্তিকৃত অর্থ </label>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="total_para_money">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> অগ্রিম অনুচ্ছেদ </label>
                                            <div class="col-md-1"><strong>:</strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="advances_para">
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label">আপত্তিকৃত অর্থ </label>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="advances_para_money">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> সাধারণ অনুচ্ছেদ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="general_para">
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label">আপত্তিকৃত অর্থ </label>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="general_para_money">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="bsr_reply">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> বি এস আর জবাব প্রদানের তারিখ (অগ্রিম) </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="bsr_date" class="tcal">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> বি এস আর ফাইল সংযুক্তি (অগ্রিম)</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="file" name="bsr_file[]" multiple>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="advance_para_reply">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">বি এস আর জবাব প্রদানের তারিখ (সাধারণ)</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="adv_para_date" class="tcal">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">বি এস আর ফাইল সংযুক্তি (সাধারণ)</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="file" name="adv_para_file[]" multiple>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> নিষ্পত্তিকৃত আপত্তি (অগ্রিম) </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="audit_finished">
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label">নিষ্পত্তিকৃত অর্থ </label>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="audit_finished_money">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> নিষ্পত্তিকৃত আপত্তি (সাধারণ) </label>
                                            <div class="col-md-1"><strong>:</strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="audit_fin_amount">
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label">নিষ্পত্তিকৃত অর্থ </label>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="audit_fin_amount_money">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">অনিষ্পন্ন আপত্তি (অগ্রিম)</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="audit_pending">
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label">অনিষ্পন্ন অর্থ </label>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="audit_pending_money">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">অনিষ্পন্ন আপত্তি (সাধারণ)</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="aud_pae_amount">
                                                </div>
                                            </div>
                                            <label class="col-md-2 control-label">অনিষ্পন্ন অর্থ </label>
                                            <div class="col-md-2">
                                                <div class="input-field">
                                                    <input type="text" name="aud_pae_amount_money">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">অবশিষ্ট আপত্তিকৃত অর্থ</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="total_pae_amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo date('d-m-Y'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <!-- <div class="input-field">
                                                           <input type="file" name="img[]" multiple>  

                                                        </div> -->

                                                <div class="input-field" id="fileml">

                                                </div>
                                                <br />
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
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

    function fileml() {
        var fileml = '<input type="file" name="img[]" multiple>';
        $("#fileml").append(fileml);
    }
    fileml();
</script>