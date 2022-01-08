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
                <h1> মামলা</h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Recoad/new_case"> মামলা সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('case_info_controller/update_case_info'); ?>" method="post">
                                    <h2 class="text-center"> মামলা হালনাগাদ </h2>

                                    <input type="hidden" name="caid" value="<?php echo $sql->id; ?>">
                                    <input type="hidden" name="caseid" value="<?php echo $sql->case_id; ?>">

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মামলার শ্রেণী </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="category" value="<?php echo $sql->category; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মামলার ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="type" value="<?php echo $sql->type; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">মামলার নং</label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="number" value="<?php echo $sql->number; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মামলার শুরুর বছর </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="fillingY" value="<?php echo $sql->filling_year; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মামলা শেষের বছর </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="disposalY" value="<?php echo $sql->dis_year; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বাদী </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="petitioners" value="<?php echo $sql->petitioners; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিবাদী </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="respondents" value="<?php echo $sql->respondant; ?>">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মামলার অবস্থা </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="status" value="<?php echo $sql->status; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিস্তারিত বর্ণনা </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <textarea name="details" style="height:250px"><?php echo $sql->details; ?></textarea>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo $sql->add_date; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ফাইল সংযুক্ত </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <!--  <div class="input-field">
                                                           <input type="file" name="case_file[]" multiple> 
                                                           <input type="hidden" name="case_file2" value='<?php echo $sql->document; ?>'> 
                                                        </div>
 -->
                                                <div class="input-field" id="fileml">

                                                </div>
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                                <br /><br />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-6">
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

    function fileml2() {
        <?php
        
        $sqlR = $single_post_data['info'];
        $files = json_decode($sqlR->document);
        ?>
        var fileml2 = '<?php foreach ($files as $file) { ?><input type="file" value="<?php echo $file; ?>" name="case_file[]" multiple style="display:none"><input type="text" name="case_file[]" value="<?php echo $file; ?>" readonly style="border:none;margin-bottom:0px"><?php  } ?>';


        $("#fileml").append(fileml2);
    }
    fileml2();

    function fileml() {
        var fileml = '<input type="file" name="case_file[]" multiple>';
        $("#fileml").append(fileml);
    }
</script>