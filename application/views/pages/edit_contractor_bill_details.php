<?php

$sqlC = $single_post_data['info'];

$contractorid =   $sqlC->contractor_id;

// $this->db->where('contractor_id', $contractorid);
// $sqlCon = $this->db->get('contractor_ledger');
// $sqlCon = $sqlCon->row();


// $projectid = $sqlC->project_name;
// $this->db->where('projectid', $projectid);
// $sqlpro = $this->db->get('project_tender');
// $sqlpro = $sqlpro->row();

?>

<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> পি.আই.সি / ঠিকাদার বিল </h1>
                <?php
                $su = $this->session->userdata('status');
                if (isset($su)) { ?>
                    <div style="width:50%" class="alert alert-success alert-dismissable fade in z-depth-1">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $su; ?></strong>
                    </div>
                <?php
                }

                $this->session->unset_userdata('status');
                ?>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Page/new_contractor_bill"> নতুন পি.আই.সি / ঠিকাদার সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('contractor_bill_controller/update_contractor_bill'); ?>" method="post">

                                    <input type="hidden" name="bid" value="<?php echo $sqlC->id; ?>">
                                    <input type="hidden" name="billid" required value="<?php echo $sqlC->bill_id; ?>">
                                    <h2 class="text-center"> ঠিকাদার বিল সংযুক্তি ফর্ম </h2>
                                    <fieldset>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">পি আই সি / ঠিকাদার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="contractor_name" required value="<?php echo $sqlC->contractor_id; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> অর্থ বছর </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons " name="session">
                                                        <option selected><?php echo $sqlC->session; ?></option>
                                                        <?php
                                                        for ($i = 2010; $i < 2070; $i++) { ?>

                                                            <option><?php echo $i; ?>-<?php echo $i + 1; ?> </option>
                                                        <?php
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> প্রকল্পের নাম </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">

                                                    <input type="text" name="projectname" required value="<?php echo $sqlC->project_name; ?>">


                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="projectid" required value="<?php echo $sqlC->project_id; ?>">



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> প্রক্কলিত মূল্য </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="contract_price" required value="<?php echo $sqlC->contract_price; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিলের ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="advance_paid" required value="<?php echo $sqlC->advance_price; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিল পরিমান </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="bill_amount" id="bill_amount" required value="<?php echo $sqlC->bill_amount; ?>">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> দরপত্র জামানত </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="perfor_parc" id="perfor_parc" required value="<?php echo $sqlC->perfor_comi; ?>">
                                                </div>
                                            </div>




                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="performance" id="performance" required value="<?php echo $sqlC->perfor_amout; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ভ্যাট </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="vat_parc" id="vat_parc" required value="<?php echo $sqlC->vat_comi; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="vat_amount" id="vat_amount" required value="<?php echo $sqlC->vat_amount; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> আয় কর </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="income_parc" id="income_parc" required value="<?php echo $sqlC->income_comi; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="income_tax" id="income_tax" required value="<?php echo $sqlC->income_amount; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সর্বমোট টাকা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="amount" id="amount" value="<?php echo $sqlC->total_amount; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিস্তারিত বর্ণনা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <textarea style="height:250px" name="details"><?php echo $sqlC->details; ?></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="userFiles">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="date" class="tcal" value="<?php echo $sqlC->add_date; ?>">
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
        <!-- ./cotainer -->

    </div>
    <!-- ./page-content -->
</div>
<!-- ./page-content-wrapper -->
</div>
<!-- ./page-wrapper -->




<script type="text/javascript">
    $(document).ready(function(e) {
        $("#perfor_parc").bind('keyup', function(e) {
            var val = $(this).val();
            var bill = $("#bill_amount").val();
            var parc = val * bill;
            var sec = parc / 100;
            $("#performance").val(sec);
        });

        $("#vat_parc").bind('keyup', function(e) {
            var val = $(this).val();
            var bill = $("#bill_amount").val();
            var vatp = val * bill;
            var vatamount = vatp / 100;
            $("#vat_amount").val(vatamount);
        });


        $("#income_parc").bind('keyup', function(e) {
            var val = $(this).val();
            var bill = $("#bill_amount").val();
            var inc = val * bill;
            var incomeT = inc / 100;

            var secqurity = $("#performance").val();
            var vat_amount = $("#vat_amount").val();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1) + (incomeT * 1);

            var netbill = (bill * 1) - (total_calcualte * 1);

            $("#income_tax").val(incomeT);
            $("#amount").val(netbill);
        });
    });
</script>