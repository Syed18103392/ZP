<?php
$sqlF = $single_post_data['info'];
$bid = $sqlF->bank;
//get the bank name form the bank id
$this->db->where('id', $bid);
$sqlB = $this->db->get('bank_info');
$sqlB = $sqlB->row();
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
                <h1> এফ ডি আর </h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Recoad/new_fdr"> এফ ডি আর সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('fdr_info_controller/update_fdr_info'); ?>" method="post">
                                    <h2 class="text-center"> এফ ডি আর সংযুক্তি ফর্ম </h2>

                                    <input type="hidden" name="fdid" value="<?php echo  $sqlF->id; ?>">
                                    <input type="hidden" name="fdrid" required value="<?php echo $sqlF->fdr_id; ?>">
                                    <fieldset>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ব্যাংকের নাম </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <select class="icons" name="bank" required>
                                                        <option value="<?php echo $sqlF->bank; ?>" selected><?php echo $sqlB->bank_name; ?> </option>
                                                        <?php
                                                    
                                                        $rec = $bank_info;
                                                        $s = 0;
                                                        foreach ($rec as $row) :
                                                            $s++;
                                                        ?>
                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->bank_name; ?></option>

                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> শাখার নাম </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="branch" required value="<?php echo $sqlF->branch; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> এফ ডি আর নং </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="fdrnumber" required value="<?php echo $sqlF->fdr_number; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">পারম্ভিক এফ ডি আর </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="start_fdr" required value="<?php echo $sqlF->start_fdr; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> খোলার তারিখ </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="start_date" class="tcal" value="<?php echo $sqlF->start_date; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বর্তমান এফ ডি আর </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="present_fdr" required value="<?php echo $sqlF->present_fdr; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> খোলার তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="present_date" class="tcal" value="<?php echo $sqlF->present_date; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মেয়াদকাল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="duration" value="<?php echo $sqlF->duration; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মুনাফার হার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" name="interst" value="<?php echo $sqlF->interst; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo $sqlF->add_date; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-5">
                                                <!-- <div class="input-field">
                                                           <input type="file" name="fdrfile[]" multiple> 
                                                           <input type="hidden" name="fdrfile2" value='<?php echo $sqlF->fdr_file; ?>'> 
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
        $files = json_decode($sqlR->fdr_file);
        ?>
        var fileml2 = '<?php foreach ($files as $file) { ?><input type="file" value="<?php echo $file; ?>" name="fdrfile[]" multiple style="display:none"><input type="text" name="fdrfile[]" value="<?php echo $file; ?>" readonly style="border:none;margin-bottom:0px"><?php  } ?>';


        $("#fileml").append(fileml2);
    }
    fileml2();

    function fileml() {
        var fileml = '<input type="file" name="fdrfile[]" multiple>';
        $("#fileml").append(fileml);
    }
</script>