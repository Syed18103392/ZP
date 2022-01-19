<?php
$land = $single_post_data['info'];
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
                <h1> তথ্য হালনাগাদ </h1>

                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Recoad/new_land_record_infoW"> মালিকানাধীন ভূমি সংযুক্তি </a></li>
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
                            <div class="row" style="background:#FFFFFF">
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Personalrecoard/pesonal_land_edit'); ?>" method="post" style="background:#FFFFFF">
                                    <h2 class="text-center"> জেলা পরিষদ এর মালিকানাধীন ভূমি সংক্রান্ত তথ্য</h2>
                                    <fieldset>

                                        <input type="hidden" name="id" required value="<?php echo $land->khotian_no; ?>">

                                        <input type="hidden" name="land_rec_id" required value="<?php echo time(); ?>">

                                        <!-- ./Text input-->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> উপজেলা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <select class="icons" name="thana">
                                                        <option><?php echo $land->thana_name; ?></option>
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
                                            <label class="col-md-2 control-label"> মৌজার নাম </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" name="moja_number" required value="<?php echo $land->moja_name; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সি এস খতিয়ান নং </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="number" name="cs_kotian" required value="<?php echo $land->khotian_no; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo $land->add_date; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <!--  <div class="input-field">
                                                           <input type="file" name="userFiles[]" multiple> 
                                                           <input type="hidden" name="userFiles2" value='<?php echo $land->userFiles; ?>'> 
                                                        </div> -->

                                                <div class="input-field" id="fileml">

                                                </div>
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                                <br /><br />
                                            </div>
                                        </div>


                                        <div class="form-group" style="background:#FFFFFF">

                                            <div class="col-md-12">
                                                <h3 style="background:#549AB2;text-align: center; color:#FFFFFF; padding-left:20px; line-height:30px;margin-top: 20px"> সি.এস </h3>
                                                <table id="itemTable" style="background:#FFFFFF">
                                                    <thead>
                                                        <tr>
                                                            <th>খতিয়ান নং </th>
                                                            <th>দাগ নং </th>
                                                            <th>জমির পরিমান (একর)</th>
                                                            <th>শ্রেণী </th>
                                                        </tr>
                                                        <?php
                                                        $this->db->where('cs_kotian_no', $id);
                                                        $sqlE = $this->db->get('person_land_cs');
                                                        $recE = $sqlE->result();
                                                        $e = 0;
                                                        foreach ($recE as $rowE) {
                                                            $e++;
                                                        ?>
                                                            <tr>
                                                                <input type="hidden" name="csi[]" value="<?php echo $rowE->id; ?>" />
                                                                <td valign="top"><input type="text" name="cs_khotian[]" value="<?php echo $rowE->kotian_no; ?>" /> </td>
                                                                <td valign="top"><input type="text" name="cs_dag[]" value="<?php echo $rowE->dag_no; ?>" /> </td>
                                                                <td valign="top"><input type="text" name="cs_land[]" value="<?php echo $rowE->land_quan; ?>" /></td>
                                                                <td valign="top"><input type="text" name="cs_class[]" value="<?php echo $rowE->class; ?>" /></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </thead>
                                                </table>
                                            </div>


                                            <div class="col-md-12">
                                                <h3 style="background:#549AB2;text-align: center; color:#FFFFFF; padding-left:20px; line-height:30px;"> এস.এ / দিয়ারা </h3>
                                                <table id="itemTableL" style="background:#FFFFFF; color:#26a69a;">
                                                    <thead>
                                                        <tr>
                                                            <th>খতিয়ান নং </th>
                                                            <th>দাগ নং </th>
                                                            <th>জমির পরিমান (একর)</th>
                                                            <th>শ্রেণী </th>
                                                        </tr>
                                                        <?php
                                                        $this->db->where('cs_kotian_no', $id);
                                                        $sqlE = $this->db->get('person_land_sa');
                                                        $recE = $sqlE->result();
                                                        $e = 0;
                                                        foreach ($recE as $rowE) {
                                                            $e++;
                                                        ?>
                                                            <tr>
                                                                <input type="hidden" name="sai[]" value="<?php echo $rowE->id; ?>" />
                                                                <td valign="top"><input type="text" name="sa_khotian[]" value="<?php echo $rowE->kotian_no; ?>" /> </td>
                                                                <td valign="top"><input type="text" name="sa_dag[]" value="<?php echo $rowE->dag_no; ?>" /> </td>
                                                                <td valign="top"><input type="text" name="sa_land[]" value="<?php echo $rowE->land_quan; ?>" /></td>
                                                                <td valign="top"><input type="text" name="sa_class[]" value="<?php echo $rowE->class; ?>" /></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </thead>
                                                </table>
                                            </div>


                                            <div class="col-md-12">
                                                <h3 style="background:#549AB2;text-align: center; color:#FFFFFF; padding-left:20px; line-height:30px;"> আর.এস </h3>
                                                <table id="itemTableR" style="background:#FFF; color:#26a69a;">
                                                    <thead>
                                                        <tr>
                                                            <th>খতিয়ান নং </th>
                                                            <th>দাগ নং </th>
                                                            <th>জমির পরিমান (একর)</th>
                                                            <th>শ্রেণী </th>
                                                        </tr>
                                                        <?php
                                                        $this->db->where('cs_kotian_no', $id);
                                                        $sqlE = $this->db->get('person_land_rs');
                                                        $recE = $sqlE->result();
                                                        $e = 0;
                                                        foreach ($recE as $rowE) {
                                                            $e++;
                                                        ?>
                                                            <tr>
                                                                <input type="hidden" name="rsi[]" value="<?php echo $rowE->id; ?>" />
                                                                <td valign="top"><input type="text" name="rs_khotian[]" value="<?php echo $rowE->kotian_no; ?>" /> </td>
                                                                <td valign="top"><input type="text" name="rs_dag[]" value="<?php echo $rowE->dag_no; ?>" /> </td>
                                                                <td valign="top"><input type="text" name="rs_land[]" value="<?php echo $rowE->land_quan; ?>" /></td>
                                                                <td valign="top"><input type="text" name="rs_class[]" value="<?php echo $rowE->class; ?>" /></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </thead>
                                                </table>
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
<style type="text/css">
    #control-label {
        text-align: left;
    }
</style>

<script type="text/javascript">
    function getInfo() {
        var val = document.getElementById("land_type").value;
        if (val == 'other') {
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

<script type="text/javascript">
    $('#addRow').click(function() {
        addItem();
    });

    $('#addRowL').click(function() {
        addItemL();
    });

    $('#addRowR').click(function() {
        addItemR();
    });



    $('#items_table').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });

    $('#items_tableL').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });


    $('#items_tableR').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });


    $('#taxPercentage').change(function() {
        calculateTotals(); // user changed tax percentage, recalculate everything
    });

    function calculateTotals() {

        // get all of the various input typs from the rows 
        // each will be any array of elements
        var nameElements = $('.row-name');
        var descElements = $('.row-desc');
        var quantityElements = $('.row-quantity');
        var taxElements = $('.row-tax');
        var priceElements = $('.row-price');
        // var totalElements = $('.row-total');

        // get the bottom table elements
        var taxPercentageElement = $('#taxPercentage');
        var subtotalElement = $('#subtotal');
        var totalTaxElement = $('#totalTax');
        var grandtotalElement = $('#grandtotal');

        var subtotal = 0;
        var taxTotal = 0;
        var grandtotal = 0;
        $(quantityElements).each(function(i, e) {

            // get all the elements for the current row
            var nameElement = $('.row-name:eq(' + i + ')');
            var quantityElement = $('.row-quantity:eq(' + i + ')');
            var taxElement = $('.row-tax:eq(' + i + ')');
            var priceElement = $('.row-price:eq(' + i + ')');
            var totalElement = $('.row-total:eq(' + i + ')');

            // get the needed values from this row
            var qty = quantityElement.val().trim().replace(/[^0-9$.,]/g, ''); // filter out non digits like letters
            qty = qty == '' ? 0 : qty; // if blank default to 0
            quantityElement.val(qty); // set the value back, in case we had to remove soemthing
            var price = priceElement.val().trim().replace(/[^0-9$.,]/g, '');
            price = price == '' ? 0 : price; // if blank default to 0
            priceElement.val(price); // set the value back, in case we had to remove soemthing

            // get/set row tax and total
            // also add to our totals for later
            var rowPrice = (price * 1000) * qty
            subtotal = subtotal + rowPrice;
            var tax = taxPercentageElement.val() * rowPrice;
            // taxElement.val((tax / 1000).toFixed(2));
            taxTotal = taxTotal + tax;
            var total = rowPrice + tax
            totalElement.val((total / 1000).toFixed(2));
            grandtotal = grandtotal + total;
        });

        // set the bottom table values
        subtotalElement.val((subtotal / 1000));
        totalTaxElement.val((taxTotal / 1000).toFixed(2));
        grandtotalElement.val((grandtotal / 1000).toFixed(2));
    }

    function addItem() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="cs_khotian[]" style="width:150px" class="form-control" placeholder="খতিয়ান নং"  required /></td>' +
            '<td><input type="text" name="cs_dag[]" style="width:150px;height:35px" class="form-control" placeholder="দাগ নং" required>  </td>' +
            '<td><input type="text" name="cs_land[]" style="width:150px" class="form-control"  placeholder="জমির পরিমান"  required/></td>' +
            '<td><input type="text" name="cs_class[]" style="width:150px" class="form-control" placeholder="শ্রেণী"  required/></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_table").append(itemRow);
    }
    addItem(); 

    function addItemL() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="sa_khotian[]" style="width:150px" class="form-control" placeholder="খতিয়ান নং" required /></td>' +
            '<td><input type="text" name="sa_dag[]" style="width:150px;height:35px" class="form-control" placeholder="দাগ নং" required> </td>' +
            '<td><input type="text" name="sa_land[]" style="width:150px" class="form-control"  placeholder="জমির পরিমান" required /></td>' +
            '<td><input type="text" name="sa_class[]" style="width:150px" class="form-control" placeholder="শ্রেণী" required /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tableL").append(itemRow);
    }
    addItemL(); //call function on load to add the first item


    function addItemR() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="rs_khotian[]" style="width:150px" class="form-control" placeholder="খতিয়ান নং"  required/></td>' +
            '<td><input type="text" name="rs_dag[]" style="width:150px;height:35px" class="form-control" placeholder="দাগ নং" required> </td>' +
            '<td><input type="text" name="rs_land[]" style="width:150px" class="form-control"  placeholder="জমির পরিমান" required /></td>' +
            '<td><input type="text" name="rs_class[]" style="width:150px" class="form-control" placeholder="শ্রেণী" required/></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tableR").append(itemRow);
    }
    addItemR(); //call function on load to add the first item
</script>


<script type="text/javascript">
    $('#delTr').click(function() {

        $('#items_table tr:last').remove();
        calculateTotals();
    });


    $(document).ready(function(e) {
        $("#discount").bind('keyup', function(e) {
            var val = $(this).val();
            var subto = $("#subtotal").val();

            var main_amt = subto - val;

            $("#grandtotal").val(main_amt);
        });

    });
</script>

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
        $files = json_decode($sqlR->userFiles);
        ?>
        var fileml2 = '<?php foreach ($files as $file) { ?><input type="file" value="<?php echo $file; ?>" name="userFiles[]" multiple style="display:none"><input type="text" name="userFiles[]" value="<?php echo $file; ?>" readonly style="border:none;margin-bottom:0px"><?php  } ?>';


        $("#fileml").append(fileml2);
    }
    fileml2();

    function fileml() {
        var fileml = '<input type="file" name="userFiles[]" multiple>';
        $("#fileml").append(fileml);
    }
</script>