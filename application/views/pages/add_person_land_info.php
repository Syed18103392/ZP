<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> জেলা পরিষদ এর মালিকানাধীন ভূমি সংক্রান্ত তথ্য </h1>

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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('person_land_info_controller/add_person_land_info'); ?>" method="post" style="background:#FFFFFF">
                                    <h2 class="text-center"> জেলা পরিষদ এর মালিকানাধীন ভূমি সংক্রান্ত তথ্য</h2>
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
                                                    <input type="text" name="moja_number" required placeholder="মৌজার  নাম">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সি এস খতিয়ান নং </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="number" name="cs_kotian" required placeholder="সি এস খতিয়ান নং">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> এন্ট্রি তারিখ </label>
                                            <div class="col-md-1"><strong> :</strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" placeholder="এন্ট্রি  তারিখ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-6">
                                                <!-- <div class="input-field">
                                                           <input type="file" name="userFiles[]" multiple>  
                                                        </div> -->

                                                <div class="input-field" id="fileml">

                                                </div>
                                                <br />
                                                <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                            </div>
                                        </div>
                                        <br /><br />

                                        <div class="form-group" style="background:#FFFFFF">

                                            <div class="col-md-12">
                                                <h2 class="text-center" style="color:#fff"> সি.এস </h2>
                                                <table id="itemTable" style="background:#FFFFFF">
                                                    <thead>
                                                        <tr>
                                                            <th> খতিয়ান নং </th>
                                                            <th> দাগ নং </th>
                                                            <th> জমির পরিমান (একর)</th>
                                                            <th> শ্রেণী </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="items_table"></tbody>
                                                    <tr>
                                                        <td><input type="button" id="addRow" value="Add" /> <input type="button" id="delTr" value="Delete" /></td>

                                                    </tr>
                                                </table>
                                            </div>


                                            <div class="col-md-12">
                                                <h2 class="text-center" style="color:#fff"> এস.এ / দিয়ারা </h2>
                                                <table id="itemTableL" style="background:#FFFFFF; color:#26a69a;">
                                                    <thead>
                                                        <tr>
                                                            <th> খতিয়ান নং </th>
                                                            <th> দাগ নং </th>
                                                            <th> জমির পরিমান (একর)</th>
                                                            <th> শ্রেণী </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="items_tableL"></tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="button" id="addRowL" value="Add" />
                                                            <input type="button" id="delTrL" value="Delete" />
                                                        </td>

                                                    </tr>
                                                </table>
                                            </div>


                                            <div class="col-md-12">
                                                <h2 class="text-center" style="color:#fff"> আর.এস </h2>
                                                <table id="itemTableR" style="background:#FFF; color:#26a69a;">
                                                    <thead>
                                                        <tr>
                                                            <th> খতিয়ান নং </th>
                                                            <th> দাগ নং </th>
                                                            <th> জমির পরিমান (একর)</th>
                                                            <th> শ্রেণী </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="items_tableR"></tbody>
                                                    <tr>
                                                        <td><input type="button" id="addRowR" value="Add" /> <input type="button" id="delTrR" value="Delete" /></td>

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
    addItem(); //call function on load to add the first item


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

    $('#delTrL').click(function() {

        $('#items_tableL tr:last').remove();
        calculateTotals();
    });

    $('#delTrR').click(function() {

        $('#items_tableR tr:last').remove();
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

    function fileml() {
        var fileml = '<input type="file" name="userFiles[]" multiple>';
        $("#fileml").append(fileml);
    }
    fileml();
</script>