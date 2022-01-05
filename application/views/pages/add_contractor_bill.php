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
                    <!-- <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Page/new_contractor_bill"> নতুন পি.আই.সি / ঠিকাদার বিল সংযুক্তি </a></li>

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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('contractor_bill_controller/add_contractor_bill'); ?>" method="post">
                                    <h2 class="text-center"> পি.আই.সি / ঠিকাদার বিল সংযুক্তি ফর্ম </h2>
                                    <input type="hidden" name="billid" required value="<?php echo time(); ?>">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিলের ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="bill_type">
                                                        <option value=""> বিলের ধরন চিহ্নিত করুন </option>
                                                        <option value="01"> পি আই সি </option>
                                                        <option value="02"> ঠিকাদার বিল </option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">পি আই সি / ঠিকাদার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="contractor_name" required placeholder="পি আই সি / ঠিকাদার  নাম">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> অর্থ বছর </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <select class="icons" name="session">
                                                        <option value="" disabled selected> চিহ্নিত করুন </option>
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
                                                    <input type="text" name="developmentname" required placeholder="প্রকল্পের নাম">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="projectid">



                                        <div class="form-group">
                                            <label class="col-md-2 control-label">প্রক্কলিত মূল্য </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="contract_price" placeholder="প্রক্কলিত মূল্য ">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিলের ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="advance_paid" placeholder=" বিলের ধরন">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিলের পরিমান </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="bill_amount" id="bill_amount" required placeholder="বিল পরিমান">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> দরপত্র জামানত </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="perfor_parc" id="perfor_parc" required placeholder="%">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="number" name="performance" id="performance" readonly required placeholder=" দরপত্র জামানত">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ভ্যাট </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="vat_parc" id="vat_parc" required placeholder="%">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="number" name="vat_amount" id="vat_amount" readonly required placeholder=" ভ্যাট পেমেন্ট">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> আয় কর </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="text" name="income_parc" id="income_parc" required placeholder="%">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="input-field">
                                                    <input type="number" name="income_tax" id="income_tax" readonly required placeholder="আয় কর">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সর্বমোট টাকা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="number" name="amount" id="amount" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> বিস্তারিত বর্ণনা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <textarea style="height:250px" name="details"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="file" name="userFiles" multiple>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo date('Y-m-d'); ?>">
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
                                                <button type="submit" name="submit" class="btn btn-success">তথ্য সংরক্ষণ <span class="glyphicon glyphicon-send"></span></button>
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

<!-- End Theme label Script-->
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