<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> ভূমি রেকর্ড </h1>

                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>/Recoad/new_land_record">নতুন ভূমি রেকর্ড সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('land_recoad_controller/add_land_recoad'); ?>" method="post">
                                    <h2 class="text-center"> ভূমি রেকর্ড সংযুক্তি ফর্ম </h2>
                                    <fieldset>

                                        <input type="hidden" name="land_rec_id" required value="<?php echo time(); ?>">

                                        <!-- ./Text input-->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> উপজেলা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <select class="icons" name="thana">
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
                                                    <input type="text" name="moja_number" placeholder="মৌজার  নাম">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> জে-এল নাম্বার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" name="jal_number" placeholder="জে-এল নাম্বার">
                                                </div>
                                            </div>
                                        </div>





                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> জরিপ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <select class="icons" name="land_type" id="land_type" onchange="getInfo()">
                                                        <option value="" disabled selected> জরিপ </option>
                                                        <option>সি, এস</option>
                                                        <option>আর, এস</option>
                                                        <option>এস, এ</option>
                                                        <option>দিয়ারা </option>
                                                        <option>হাল</option>
                                                        <option>এস, আর, আর</option>
                                                        <option>এম, আর, আর</option>
                                                        <option value="other"> অন্যান্য </option>
                                                    </select>
                                                    <input type="text" name="land_others" id="show" placeholder=" অন্যান্য জরিপ">
                                                </div>
                                            </div>
                                        </div>







                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> খতিয়ান নং </label>
                                            <div class="col-md-1"><strong> : * </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" name="khotian" required placeholder="খতিয়ান নং">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> : *</strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" required placeholder="এন্ট্রি  তারিখ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <div class="input-field" id="fileml">

                                                </div>
                                                <br />
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                            </div>
                                        </div>


                                        <div class="form-group">

                                            <div class="col-md-10 col-md-offset-1">
                                                <table id="itemTable" style="background:#FFF; color:#549AB2;">
                                                    <thead>
                                                        <tr>
                                                            <th> দাগ নং </th>
                                                            <th> জমির শ্রেণি </th>
                                                            <th> হিস্যা </th>
                                                            <th> একর </th>
                                                            <th> শতক </th>

                                                            <th> মন্তব্য </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="items_table"></tbody>
                                                    <tr>
                                                        <td><input type="button" id="addRow" value="Add" /> <input type="button" id="delTr" value="Delete" /></td>

                                                    </tr>
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


            '<td><input type="text" name="dag[]" style="width:100px" class="form-control" placeholder="দাগ নং " /></td>' +
            '<td><input type="text" name="land_class[]" style="width:100px;height:35px" class="form-control" placeholder="জমির শ্রেণি "> </td>' +
            '<td><input type="text" name="recoad[]" style="width:100px" class="form-control"  placeholder="হিস্যা" /></td>' +
            '<td><input type="text" name="akok[]" style="width:100px" class="form-control" placeholder="একক " /></td>' +
            '<td><input type="text" name="shotok[]" style="width:100px" class="form-control"  placeholder="শতক" /></td>' +
            '<td><textarea name="comments[]" style="width:250px; max-height:60px;" class="form-control"  placeholder="মন্তব্য " /></textarea></td>' +
            '<td>&nbsp;</td>' +


            '</tr>';
        $("#items_table").append(itemRow);
    }
    addItem(); //call function on load to add the first item



    function fileml() {
        var fileml = '<input type="file" name="userFiles[]" multiple>';
        $("#fileml").append(fileml);
    }
    fileml();
</script>


<script type="text/javascript">
    $('#delTr').click(function() {

        $('#items_table tr:last').remove();
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