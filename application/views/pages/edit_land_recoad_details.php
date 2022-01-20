<?php
$sqlR = $single_post_data['info'];

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
                <h1> ভূমি রেকর্ড</h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Recoad/new_land_record">নতুন ভূমি রেকর্ড সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('land_recoad_controller/update_land_recoad'); ?>" method="post">
                                    <h2 class="text-center"> ভূমি রেকর্ড ফর্ম </h2>
                                    <fieldset>
                                        <input type="hidden" name="land_rec_id" required readonly="readonly" value="<?php echo $landid = $sqlR->record_id; ?>">



                                        <!-- ./Text input-->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> উপজেলা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-8">
                                                <div class="input-field">
                                                    <select class="icons" name="thana">
                                                        <?php echo  $location = $sqlR->thana; ?>
                                                        <option value="<?php echo  $location; ?>"> <?php
                                                                                                    if ($location == 'ফেনী সদর') {
                                                                                                        echo "ফেনী সদর";
                                                                                                    } elseif ($location == 'দাগনভূঁঞা') {
                                                                                                        echo "দাগনভূঁঞা";
                                                                                                    } elseif ($location == 'সোনাগাজী') {
                                                                                                        echo "সোনাগাজী";
                                                                                                    } elseif ($location == 'ফুলগাজী') {
                                                                                                        echo "ফুলগাজী";
                                                                                                    } elseif ($location == 'পরশুরাম') {
                                                                                                        echo "পরশুরাম";
                                                                                                    } elseif ($location == 'ছাগলনাইয়া') {
                                                                                                        echo "ছাগলনাইয়া";
                                                                                                    } else {
                                                                                                        echo "";
                                                                                                    } 
                                                         
                                                         ?> </option>
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
                                            <label class="col-md-2 control-label"> মোজার নাম </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-8">
                                                <div class="input-field">
                                                    <input type="text" name="moja_number" value="<?php echo $sqlR->moja_name; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> জে-এল নাম্বার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" name="jal_number" value="<?php echo $sqlR->jal_number; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">জরিপ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-8">
                                                <div class="input-field">
                                                    <select class="icons" name="land_type" id="land_type" onchange="getInfo()">
                                                        <option value="<?php echo $sqlR->land_type; ?>"> <?php echo  $sqlR->land_type; ?> </option>
                                                        <option> সি, এস </option>
                                                        <option> আর, এস </option>
                                                        <option> এস, এ </option>
                                                        <option> দিয়ারা </option>
                                                        <option> হাল </option>
                                                        <option> এস, আর, আর </option>
                                                        <option> এম, আর, আর </option>
                                                        <option value="other"> অন্যান্য </option>
                                                    </select>
                                                    <input type="text" name="land_others" id="show" value="<?php echo $sqlR->land_type; ?>">

                                                </div>
                                            </div>
                                        </div>







                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> খতিয়ান নং </label>
                                            <div class="col-md-1"><strong> : * </strong></div>
                                            <div class="col-md-8">
                                                <div class="input-field">
                                                    <input type="text" name="khotian" required value="<?php echo $sqlR->kotian; ?>">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> তারিখ </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-8">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" required value="<?php echo date('d-m-Y'); ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-8">
                                                <div class="input-field" id="fileml">

                                                </div>
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                                <br /><br />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <table width="826" class="table table-border table-striped" border="1" align="center" style="margin-left:20px; height:30px;">
                                                    <tr style="background:#CCC">
                                                        <td width="125"> দাগ নং</td>
                                                        <td width="110">জমির শ্রেণি</td>
                                                        <td width="156"> হিস্যা </td>
                                                        <td width="95"> একর </td>
                                                        <td width="99">শতক </td>
                                                        <td width="155">মন্তব্য </td>
                                                    </tr>
                                                    <?php
                                                    $this->db->where('receoad_id', $landid);
                                                    $sqlR = $this->db->get('land_recoad_details');
                                                    $rec = $sqlR->result();
                                                    $r = 0;
                                                    $totalakor = 0;
                                                    $totalshotok = 0;
                                                    foreach ($rec as $row) {
                                                        $r++;
                                                    ?>

                                                        <tr style="padding-left:10px;">
                                                            <input type="hidden" name="rid[]" value="<?php echo $row->id; ?>" />
                                                            <td> <input type="text" name="dag[]" value="<?php echo $row->dag_no; ?>" /> </td>
                                                            <td> <input type="text" name="land_class[]" value="<?php echo $row->land_type; ?>" /> </td>
                                                            <td> <input type="text" name="recoad[]" value="<?php echo $row->land_recoard; ?>"> </td>
                                                            <td> <input type="text" name="akok[]" value="<?php echo $akok = $row->land_akok; ?>" /> </td>
                                                            <td> <input type="text" name="shotok[]" value="<?php echo $shotok = $row->land_shotok; ?>" /> </td>

                                                            <td> <input type="text" name="comments[]" value="<?php echo $row->comments; ?>" /> </td>
                                                        </tr>

                                                    <?php

                                                        $totalakor = $totalakor + (int)$akok;
                                                        $totalshotok = $totalshotok + (int)$shotok;
                                                    }
                                                    ?>
                                                </table>





                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-8">
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
    $('#addfile').click(function() {
        fileml();
    });
    $('#items_table').on('keyup', '.update', function() {
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


            '<td><input type="text" name="dag[]" style="width:100px" class="form-control" placeholder="জমির দাগ নং " /></td>' +
            '<td><input type="text" name="land_class[]" style="width:100px;height:35px" class="form-control" placeholder="জমির শ্রেণি "> </td>' +
            '<td><input type="text" name="akok[]" style="width:100px" class="form-control" placeholder="একক " /></td>' +
            '<td><input type="text" name="shotok[]" style="width:100px" class="form-control"  placeholder="শতক" /></td>' +
            '<td><input type="text" name="recoad[]" style="width:250px" class="form-control"  placeholder=" রেকর্ড " /></td>' +
            '<td><input type="text" name="comments[]" style="width:250px" class="form-control"  placeholder="মন্তব্য " /></td>' +
            '<td>&nbsp;</td>' +


            '</tr>';
        $("#items_table").append(itemRow);
    }
    addItem(); //call function on load to add the first item




    function fileml2() {
        <?php
        $sqlR = $single_post_data['info'];
        $files = json_decode($sqlR->add_file);
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


<script type="text/javascript">
    $('#delTr').click(function() {

        $('#itemTable tr:last').remove();
        calculateTotals();
    });
    $('#delfile').click(function() {

        $('#fileml input:last-child').remove();
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