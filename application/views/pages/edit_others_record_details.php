<?php

$sql = $single_post_data['info'];


$main =  $sql->main_head;
$this->db->where('id', $main);
$sqlMa = $this->db->get('main_head');
$sqlMa = $sqlMa->row();

$sub =  $sql->sub_head;
$this->db->where('id', $sub);
$sqlsub = $this->db->get('sub_head');
$sqlsub = $sqlsub->row();



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
                <h1> অন্যান্য রেকর্ড </h1>

                <ul class="link hidden-xs">
                    <!--  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="<?php echo base_url() ?>Recoad/others_recoad">সকল রেকর্ড সমূহ </a></li>
                                -->
                    <li><a href="<?php echo base_url() ?>add-new-others-record"> অন্যান্য রেকর্ড সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('others_record_controller/update_others_record'); ?>" method="post">

                                    <input type="hidden" name="rec_id" value="<?php echo $sql->id; ?>">
                                    <input type="hidden" name="recordid" required value="<?php echo $sql->racordid; ?>">

                                    <h2 class="text-center"> অন্যান্য রেকর্ড সংযুক্তি</h2>
                                    <fieldset>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> অর্থবছর </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="session">
                                                        <option value="" disabled selected> চিহ্নিত করুন </option>
                                                        <?php
                                                        for ($i = 1970; $i < 2100; $i++) { ?>
                                                            <option><?php echo $i; ?>-<?php echo $i + 1; ?> </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> প্রধান খাত </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="mainhead">
                                                        <option value="<?php echo $main; ?>"> <?php echo $main =  $sqlMa->headname; ?> </option>
                                                        <?php
                                                        $this->db->order_by('id', 'DESC');
                                                        $sqlM = $this->db->get('main_head');
                                                        $rec = $sqlM->result();
                                                        $s = 0;
                                                        foreach ($rec as $row) :
                                                            $s++;
                                                        ?>
                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->headname; ?></option><?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> উপ খাত </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="subhead">
                                                        <option value="<?php echo $sub; ?>"> <?php echo   $sqlsub->sub_head; ?> </option> <?php
                                                                                                                                            $this->db->order_by('id', 'DESC');
                                                                                                                                            $sqlS = $this->db->get('sub_head');
                                                                                                                                            $rec = $sqlS->result();
                                                                                                                                            $s = 0;
                                                                                                                                            foreach ($rec as $row) :
                                                                                                                                                $s++;
                                                                                                                                            ?>
                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->sub_head; ?></option>

                                                        <?php endforeach; ?>
                                                    </select>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">কাজের ধরন </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="types_work" required value="<?php echo $sql->types_work;  ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">কাজের শুরুর বছর </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">

                                                    <select class="icons" name="starting_year">
                                                        <option selected> <?php echo $sql->start_year; ?> </option>
                                                        <?php
                                                        for ($i = 2000; $i < 2070; $i++) { ?>
                                                            <option> <?php echo $i; ?> </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">কাজ সমাপ্তির বছর </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">

                                                    <select class="icons" name="comp_year">
                                                        <option> <?php echo $sql->end_year; ?> </option>
                                                        <?php
                                                        for ($i = 2000; $i < 2070; $i++) { ?>

                                                            <option> <?php echo $i; ?> </option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বাস্তবায়নকৃত প্রতিষ্ঠান </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="implementation" required value="<?php echo $sql->work_company; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ঠিকানা </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="address" required value="<?php echo $sql->address; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> আলোকচিত্র </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="photograph" required value="<?php echo $sql->photo_graph; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> মোবাইল নম্বর </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="mobile" required value="<?php echo $sql->mobile; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ই-মেইল </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="email" required value="<?php echo $sql->email; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বর্ণনা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <textarea style="height:250px" name="details"><?php echo $sql->details; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo $sql->date; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <!--
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label"> সংযুক্ত ফাইল  </label>
                                                    <div class="col-md-1"><strong> : </strong></div>
                                                    <div class="col-md-6">
                                                        <div class="input-field">
                                                           <input type="file" name="img">  
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
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
<style type="text/css">
    #control-label {
        text-align: left;
    }
</style>
