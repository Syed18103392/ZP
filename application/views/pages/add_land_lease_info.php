<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1>ভূমি ইজারা </h1>
                <?php
                $su = $this->session->userdata('status');
                if (isset($su)) { ?>
                    <div style="width:50%" class="alert alert-success alert-dismissable fade in z-depth-1">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $su; ?></strong>
                    </div>
                <?php

                    $this->session->unset_userdata('status');
                }

                ?>
                <ul class="link hidden-xs">
                    <!-- <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Recoad/new_land_lease"> নতুন ভূমি ইজারা সংযুক্তি </a></li>
                </ul>
            </div>
        </section>
        <!-- page section -->
        <form enctype="multipart/form-data" action="<?php echo site_url('land_lease_info_controller/add_land_lease_info'); ?>" method="post" class="col s12 m-t-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">

                            <div class="card-content">
                                <div class="row">

                                    <h2 style="background:#549ab2; text-align:center; height:30px; line-height:30px; color:#FFF"> সাধারন তথ্য </h2>



                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <select class="icons" name="title" id="title" onchange="getInfo()" required>
                                            <option value="" disabled selected>&nbsp; &nbsp; ইজারার ধরন </option>
                                            <option value="নতুন ইজারা"> নতুন ইজারা </option>
                                            <option value="ইজারা নবায়ন"> ইজারা নবায়ন </option>
                                            <option value="নাম পরিবর্তন">নাম পরিবর্তন </option>
                                            <option value="others"> অন্যান্য </option>
                                        </select>
                                        <input type="text" name="title_other" id="show" placeholder="ইজারার ধরণ">
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <select class="icons" name="thana_name" required>
                                            <option value="" disabled selected> চিহ্নিত করুন </option>
                                            <option value="ফেনী সদর">ফেনী সদর </option>
                                            <option value="দাগনভূঁঞা"> দাগনভূঁঞা </option>
                                            <option value="সোনাগাজী"> সোনাগাজী </option>
                                            <option value="ফুলগাজী"> ফুলগাজী </option>
                                            <option value="পরশুরাম"> পরশুরাম </option>
                                            <option value="ছাগলনাইয়া"> ছাগলনাইয়া </option>

                                        </select>

                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="number" name="leseid" class="validate" value="<?php echo time(); ?>">
                                        <label for="icon_prefix">আইডি নাম্বার </label>
                                    </div>



                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="applicationid" class="validate">
                                        <label for="icon_prefix"> আবেদনের ক্রমিক নং </label>
                                    </div>
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="memono">
                                        <label> মেমো নাম্বার </label>
                                    </div>




                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="name">
                                        <label> আবেদনকারীর নাম </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="father" class="validate">
                                        <label for="icon_prefix">আবেদনকারীর পিতা / মাতার নাম </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="address">
                                        <label> ঠিকানা </label>
                                    </div>



                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="occu" class="validate">
                                        <label for="icon_prefix"> পেশা </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="phone">
                                        <label> মোবাইল নাম্বার </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="nid_number">
                                        <label> জাতীয় পরিচয় পত্রের নাম্বার </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="email" class="validate">
                                        <label for="icon_prefix"> নথি নাম্বার </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="add_date" class="validate tcal">
                                        <label for="icon_prefix"> এন্ট্রি তারিখ </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        জাতীয় পরিচয় পত্র <input id="icon_prefix" type="file" name="nidfile[]" multiple class="validate">
                                    </div>
                                    <div class="input-field form-input col s6">
                                        ছবি সংযুক্তি <input id="icon_prefix" type="file" name="picfile[]" multiple class="validate">
                                    </div>

                                </div>


                                <div class="row">

                                    <h2 style="background:#549ab2; text-align:center; height:30px; line-height:30px; color:#FFF">ইজারাকৃত ভূমির বিবরণ </h2>
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="jlno" class="validate">
                                        <label for="icon_prefix"> জে এল নং </label>
                                    </div>





                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="roadname">
                                        <label> রাস্তার নাম </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="road_number" class="validate">
                                        <label for="icon_prefix"> মৌজার নাম </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="cs_kotian">
                                        <label> সি এস খতিয়ান নাম্বার </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="cs_dag" class="validate">
                                        <label for="icon_prefix"> সি এস দাগ নাম্বার </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="rs_kotian">
                                        <label> আর এস খতিয়ান নাম্বার </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="rs_dag" class="validate">
                                        <label for="icon_prefix">আর এস দাগ নাম্বার </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="bs_kotian">
                                        <label> বি এস খতিয়ান নাম্বার </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="bs_dag" class="validate">
                                        <label for="icon_prefix"> বি এস দাগ নাম্বার </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="land_area">
                                        <label>ভূমির পরিমাণ </label>
                                    </div>



                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="land_type" class="validate">
                                        <label for="icon_prefix"> ভূমির শ্রেনী </label>
                                    </div>




                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="structure_land">
                                        <label> ভূমির কাঠামো অবস্থান </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="occupancy">
                                        <label> বর্তমান দখলদার </label>
                                    </div>
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="details" class="validate">
                                        <label for="icon_prefix">ভূমির বর্ণনা </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="purpose_lease" class="validate">
                                        <label for="icon_prefix"> লিজের উদ্দেশ্য</label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="occupancy_details" class="validate">
                                        <label for="icon_prefix"> লিজের বর্ণনা </label>
                                    </div>

                                    <div class="input-field form-input col s12" style="min-height:200px;">
                                        <h2>চৌ-হদ্দী </h2>

                                        <table id="itemTable" style="background:#FFF; color:#549AB2; text-align:center">
                                            <thead>
                                                <tr>
                                                    <th>পূর্ব </th>
                                                    <th>পশ্চিম</th>
                                                    <th>উত্তর </th>
                                                    <th>দক্ষিণ</th>

                                                </tr>
                                            </thead>
                                            <tbody id="items_table"></tbody>

                                            <tr>
                                                <td><input type="button" id="addRow" value="Add" />
                                                    <input type="button" id="delTr" value="Delete" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="input-field form-input col s6">
                                        সর্বশেষ ভাড়ার রশিদ <input id="icon_prefix" type="file" name="rent_receit[]" multiple class="validate">
                                    </div>
                                    <div class="input-field form-input col s6">
                                        &nbsp;
                                    </div>
                                    <div class="input-field form-input col s6">
                                        ফাইল অনুমোদন<input id="icon_prefix" type="file" name="approval_file[]" multiple class="validate">
                                    </div>

                                    <div class="input-field form-input col s6">
                                        চুক্তিপত্র <input id="icon_prefix" type="file" name="agreement_file[]" multiple class="validate">
                                    </div>
                                    <div class="input-field form-input col s6">
                                        সার্ভেয়ার প্রতিবেদন
                                        <!-- <input id="icon_prefix" type="file"  name="serveyor[]" multiple class="validate"> -->

                                        <div id="fileml">

                                        </div>
                                        <br />
                                        <input type="button" id="addfile" value="Add More File" /> <input type="button" id="delfile" value="Delete" />
                                    </div>

                                    <div class="input-field form-input col s6">
                                        ভূমির নকশা
                                        <!-- <input id="icon_prefix" type="file"  name="sketch_map[]" multiple class="validate"> -->

                                        <div id="fileml2">

                                        </div>
                                        <br />
                                        <input type="button" id="addfile2" value="Add More File" /> <input type="button" id="delfile2" value="Delete" />
                                    </div>


                                </div>



                                <div class="row">

                                    <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">ইজারার ভাড়ার হিসাব </h2>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate tcal" name="from_date" placeholder="তারিখ হইতে">
                                        <label> </label>
                                    </div>
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate tcal" name="to_date" placeholder="তারিখ পর্যন্ত">
                                        <label> </label>
                                    </div>


                                    <div class="input-field form-input col s12" style="min-height:200px;">

                                        <table id="itemTable2" style="background:#FFF; color:#549AB2; text-align:center">
                                            <thead>
                                                <tr>
                                                    <th>ভূমির পরিমান </th>
                                                    <th>ভাড়া (প্রতি বর্গফুট )</th>
                                                    <th> বছর</th>
                                                    <th>মোট টাকা </th>
                                                    <th>জরিমানা %</th>
                                                    <th> বছর</th>
                                                    <th>ভ্যাট ও আয় কর %</th>
                                                    <th>সর্বমোট টাকা</th>



                                                </tr>
                                            </thead>
                                            <tbody id="items_table2"></tbody>

                                            <tr>
                                                <td><input type="button" id="addRow2" value="Add" />
                                                    <input type="button" id="delTr2" value="Delete" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input type="text" class="validate" id="land_areaR" name="land_areaR">
                                                    <label> মোট ভূমির পরিমান  </label>
                                                </div> 


                                                 <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input  type="text" id="rent_per" name="rent_per" class="validate">
                                                    <label for="icon_prefix"> ভাড়া (প্রতি বর্গফুট ) </label>
                                                </div>
                                                  
                                                 <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input type="text" class="validate" name="total_amount" id="total_amount">
                                                    <label> মোট টাকা </label>
                                                </div>


                                                 <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input  type="text" name="fine_comesion" id="fine_comesion" class="validate" 
                                                    style="width:100px; border:1px solid #000"> %
                                                    <input type="text" name="fine_amount" id="fine_amount" class="validate" 
                                                    style="width:150px; border:1px solid #000"> টাকা 
                                                    <label for="icon_prefix"> জরিমানা </label>
                                                </div>
                                                
                                                 <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                     <input type="text" name="vat_comesion" id="vat_comesion" class="validate" 
                                                    style="width:100px; border:1px solid #000"> %
                                                    <input type="text" name="vat_amount" id="vat_amount" class="validate" 
                                                    style="width:150px; border:1px solid #000"> টাকা
                                                    <label> ভ্যাট </label>
                                                </div>


                                                 <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input type="text" name="tax_comesion" id="tax_comesion" class="validate" 
                                                    style="width:100px; border:1px solid #000"> %
                                                    <input type="text" name="tax_amount" id="tax_amount" class="validate" 
                                                    style="width:150px; border:1px solid #000"> টাকা
                                                    <label for="icon_prefix">আয় কর </label>
                                                </div>
                                                
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input type="text" class="validate" name="grand_total" id="grand_total">
                                                    <label> সর্বমোট টাকা </label>
                                                </div>
 -->
                                    <div class="input-field form-input col s6">
                                        সর্বশেষ ভাড়ার রসিদ <input id="icon_prefix" type="file" name="last_rant_clif[]" multiple class="validate">
                                    </div>

                                    <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"></label>
                                        <div class="col-md-5">
                                            <button type="submit" name="submit" class="btn btn-success">তথ্য সংরক্ষণ <span class="glyphicon glyphicon-send"></span></button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./bootstrap forms -->
            </div>
            <!-- ./cotainer -->
        </form>

    </div>
    <!-- ./page-content -->
</div>
<!-- ./page-content-wrapper -->
</div>
<!-- ./page-wrapper -->


<script type="text/javascript">
    $('#addRow').click(function() {
        addItem();
    });
    $('#addRow2').click(function() {
        addItem2();
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


            '<td><input type="text" name="east[]" style="width:200px;" class="form-control" placeholder="পূর্ব" /></td>' +
            '<td><input type="text" name="west[]" style="width:200px;" class="form-control" placeholder="পশ্চিম" /></td>' +
            '<td><input type="text" name="south[]" style="width:200px;" class="form-control"  placeholder="উত্তর" /></td>' +
            '<td><input type="text" name="north[]" style="width:200px;height:35px;" class="form-control" placeholder="দক্ষিণ"> </td>' +
            '<td>&nbsp;</td>' +


            '</tr>';
        $("#items_table").append(itemRow);
    }
    addItem(); //call function on load to add the first item


    function addItem2() {
        var itemRow2 =
            '<tr class="tab_row">' +


            '<td><input type="text" name="land_areaR[]" style="width:100px;" class="form-control land_areaR" placeholder="" /></td>' +
            '<td><input type="text" name="rent_per[]" style="width:100px;" class="form-control rent_per" placeholder="" /></td>' +
            '<td><input type="text" name="year[]" style="width:100px;" class="form-control year"  placeholder="" /></td>' +
            '<td><input type="text" name="total_amount[]" style="width:100px;height:35px;" class="form-control total_amount" placeholder=""> </td>' +
            '<td><input type="text" name="fine_comesion[]" style="width:100px;height:35px;" class="form-control fine_comesion" placeholder=""> </td>' +
            '<td><input type="text" name="fine_comesion_yr[]" style="width:100px;height:35px;" class="form-control fine_comesion_yr" placeholder=""> <p class="fine_amount" style="display: none;"></p></td>' +
            '<td><input type="text" name="vat_tax_comesion[]" style="width:100px;height:35px;" class="form-control vat_tax_comesion" placeholder=""> <span class="vat_amount" style="display: none;"></span></td>' +
            '<td><input type="text" name="grand_total[]" style="width:100px;height:35px;" class="form-control grand_total" placeholder=""> </td>' +
            '<td>&nbsp;</td>' +


            '</tr>';
        $("#items_table2").append(itemRow2);

        //calc
        $(".land_areaR").bind('keyup', function(e) {
            var land_areaR = $(this).val();

            var rent_per = $(this).closest(".tab_row").find(".rent_per").val();
            var year = $(this).closest(".tab_row").find(".year").val();
            var total = (parseInt(land_areaR) ? parseInt(land_areaR) : 1) * (parseInt(rent_per) ? parseInt(rent_per) : 1) * (parseInt(year) ? parseInt(year) : 1);
            $(this).closest(".tab_row").find(".total_amount").val(total);


            //total calc		
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);



        });
        $(".rent_per").bind('keyup', function(e) {
            var rent_per = $(this).val();

            var land_areaR = $(this).closest(".tab_row").find(".land_areaR").val();
            var year = $(this).closest(".tab_row").find(".year").val();
            var total = (parseInt(land_areaR) ? parseInt(land_areaR) : 1) * (parseInt(rent_per) ? parseInt(rent_per) : 1) * (parseInt(year) ? parseInt(year) : 1);
            $(this).closest(".tab_row").find(".total_amount").val(total);


            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);



        });

        $(".year").bind('keyup', function(e) {
            var year = $(this).val();

            var rent_per = $(this).closest(".tab_row").find(".rent_per").val();
            var land_areaR = $(this).closest(".tab_row").find(".land_areaR").val();
            var total = (parseInt(land_areaR) ? parseInt(land_areaR) : 1) * (parseInt(rent_per) ? parseInt(rent_per) : 1) * (parseInt(year) ? parseInt(year) : 1);
            $(this).closest(".tab_row").find(".total_amount").val(total);


            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);



        });


        $(".fine_comesion").bind('keyup', function(e) {
            //fine calc
            var fine_comesion = $(this).val();
            //alert(val);
            var fine_comesion_yr = $(this).closest(".tab_row").find(".fine_comesion_yr").val();
            var total = $(this).closest(".tab_row").find(".total_amount").val();
            var parc = (parseInt(fine_comesion) ? parseInt(fine_comesion) : 1) * total * (parseInt(fine_comesion_yr) ? parseInt(fine_comesion_yr) : 1);
            var sec = parc / 100;
            $(this).closest(".tab_row").find(".fine_amount").text(sec);

            //total calc		
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);
        });
        $(".fine_comesion_yr").bind('keyup', function(e) {
            //fine calc
            var fine_comesion_yr = $(this).val();
            //alert(val);
            var fine_comesion = $(this).closest(".tab_row").find(".fine_comesion").val();
            var total = $(this).closest(".tab_row").find(".total_amount").val();
            var parc = (parseInt(fine_comesion) ? parseInt(fine_comesion) : 1) * total * (parseInt(fine_comesion_yr) ? parseInt(fine_comesion_yr) : 1);
            var sec = parc / 100;
            $(this).closest(".tab_row").find(".fine_amount").text(sec);

            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);
        });

        $(".vat_tax_comesion").bind('keyup', function(e) {
            var val = $(this).val();
            var totalbill = $(this).closest(".tab_row").find(".total_amount").val();
            var vatp = (parseInt(val) ? parseInt(val) : 1) * (parseInt(totalbill) ? parseInt(totalbill) : 1);
            var vatamount = vatp / 100;
            $(this).closest(".tab_row").find(".vat_amount").text(vatamount);


            //total calc		
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (totalbill * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);
        });
    }
    addItem2();

    $('#delTr').click(function() {
        $('#items_table tr:last').remove();
        calculateTotals();
    });
    $('#delTr2').click(function() {
        $('#items_table2 tr:last').remove();
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
    function getInfo() {
        var val = document.getElementById("title").value;
        if (val == 'others') {
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
<!-- End Theme label Script-->
<script type="text/javascript">
    $(document).ready(function(e) {
        //calc
        $(".land_areaR").bind('keyup', function(e) {
            var land_areaR = $(this).val();

            var rent_per = $(this).closest(".tab_row").find(".rent_per").val();
            var year = $(this).closest(".tab_row").find(".year").val();
            var total = (parseInt(land_areaR) ? parseInt(land_areaR) : 1) * (parseInt(rent_per) ? parseInt(rent_per) : 1) * (parseInt(year) ? parseInt(year) : 1);
            $(this).closest(".tab_row").find(".total_amount").val(total);


            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);



        });
        $(".rent_per").bind('keyup', function(e) {
            var rent_per = $(this).val();

            var land_areaR = $(this).closest(".tab_row").find(".land_areaR").val();
            var year = $(this).closest(".tab_row").find(".year").val();
            var total = (parseInt(land_areaR) ? parseInt(land_areaR) : 1) * (parseInt(rent_per) ? parseInt(rent_per) : 1) * (parseInt(year) ? parseInt(year) : 1);
            $(this).closest(".tab_row").find(".total_amount").val(total);


            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);



        });

        $(".year").bind('keyup', function(e) {
            var year = $(this).val();

            var rent_per = $(this).closest(".tab_row").find(".rent_per").val();
            var land_areaR = $(this).closest(".tab_row").find(".land_areaR").val();
            var total = (parseInt(land_areaR) ? parseInt(land_areaR) : 1) * (parseInt(rent_per) ? parseInt(rent_per) : 1) * (parseInt(year) ? parseInt(year) : 1);
            $(this).closest(".tab_row").find(".total_amount").val(total);


            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);



        });


        $(".fine_comesion").bind('keyup', function(e) {
            //fine calc
            var fine_comesion = $(this).val();
            //alert(val);
            var fine_comesion_yr = $(this).closest(".tab_row").find(".fine_comesion_yr").val();
            var total = $(this).closest(".tab_row").find(".total_amount").val();
            var parc = (parseInt(fine_comesion) ? parseInt(fine_comesion) : 1) * total * (parseInt(fine_comesion_yr) ? parseInt(fine_comesion_yr) : 1);
            var sec = parc / 100;
            $(this).closest(".tab_row").find(".fine_amount").text(sec);

            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);
        });
        $(".fine_comesion_yr").bind('keyup', function(e) {
            //fine calc
            var fine_comesion_yr = $(this).val();
            //alert(val);
            var fine_comesion = $(this).closest(".tab_row").find(".fine_comesion").val();
            var total = $(this).closest(".tab_row").find(".total_amount").val();
            var parc = (parseInt(fine_comesion) ? parseInt(fine_comesion) : 1) * total * (parseInt(fine_comesion_yr) ? parseInt(fine_comesion_yr) : 1);
            var sec = parc / 100;
            $(this).closest(".tab_row").find(".fine_amount").text(sec);

            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (total * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);
        });

        $(".vat_tax_comesion").bind('keyup', function(e) {
            var val = $(this).val();
            var totalbill = $(this).closest(".tab_row").find(".total_amount").val();
            var vatp = (parseInt(val) ? parseInt(val) : 1) * (parseInt(totalbill) ? parseInt(totalbill) : 1);
            var vatamount = vatp / 100;
            $(this).closest(".tab_row").find(".vat_amount").text(vatamount);


            //total calc        
            var secqurity = $(this).closest(".tab_row").find(".fine_amount").text();
            var vat_amount = $(this).closest(".tab_row").find(".vat_amount").text();

            var total_calcualte = (secqurity * 1) + (vat_amount * 1);

            var netbill = (totalbill * 1) + (total_calcualte * 1);

            $(this).closest(".tab_row").find(".grand_total").val(netbill);
        });
    });



    //multifile

    $('#addfile').click(function() {
        fileml();
    });
    $('#delfile').click(function() {

        $('#fileml input:last-child').remove();
    });

    function fileml() {
        var fileml = '<input type="file" name="serveyor[]" multiple>';
        $("#fileml").append(fileml);
    }
    fileml();


    $('#addfile2').click(function() {
        fileml2();
    });
    $('#delfile2').click(function() {

        $('#fileml2 input:last-child').remove();
    });

    function fileml2() {
        var fileml2 = '<input type="file" name="sketch_map[]" multiple>';
        $("#fileml2").append(fileml2);
    }
    fileml2();
</script>