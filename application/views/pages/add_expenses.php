<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> ব্যয় </h1>
                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>add_expenses"> নতুন ব্যয় সংযুক্তি </a></li>
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
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('expenses_controller/add_expenses'); ?>" method="post">
                                    <h2 class="text-center"> ব্যয় সংযুক্তি ফর্ম </h2>
                                    <fieldset>
                                        <input type="hidden" name="expensesid" value="<?php echo time(); ?>">
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> প্রধান খাত </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">

                                                    <select class="icons" name="mainhead" id="main_head">
                                                        <option value=""> খাত নির্বাচন করুন </option>
                                                        <?php
                                                        
                                                        $rec = $main_head_values;
                                                        $s = 0;
                                                        foreach ($rec as $row) :
                                                            $s++;
                                                        ?>
                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->headname; ?></option>

                                                        <?php endforeach; ?>
                                                    </select>


                                                </div>
                                            </div>
                                            <!--  <label class="col-md-1 control-label"> 
                                                    <a href="<?php echo base_url() ?>Page/new_head"> অন্যান্য  </a>
                                                   </label> -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> উপ খাত </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field" id="sub_head">

                                                    <select class="icons" name="subhead" >
                                                                <option value="" disabled selected> খাত নির্বাচন করুন </option>
                                                            </select>
                                                    
                                                </div>
                                            </div>
                                            <!-- <label class="col-md-1 control-label"> 
                                                    <a href="<?php echo base_url() ?>Page/new_sub_head">অন্যান্য  </a>
                                                   </label> -->
                                        </div>
                                        <!-- ./Text input-->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">প্রকল্পের ধরন </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">

                                                    <select class="icons" name="projecttype" id="projecttype" onchange="getInfo()">
                                                        <option value="">প্রকল্পের ধরন</option>
                                                        <option value="pic"> পি আই সি </option>
                                                        <option value="dpm"> ডি পি এম </option>
                                                        <option value="tender">দরপত্র</option>
                                                        <option value="quat"> কোটেশান </option>
                                                        <option value="others"> অন্যান্য </option>
                                                    </select>
                                                    <input type="text" name="others_projecttype" id="show" placeholder="উন্নয়নের ধরন">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">প্রকল্পের নাম </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" name="projectname">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> ব্যাংকের নাম </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <select class="icons" name="bank">
                                                        <option value=""> চিহ্নিত করুন </option>
                                                        <?php
                                                       
                                                        $rec = $banks_info;
                                                        $s = 0;
                                                        foreach ($rec as $row) :
                                                            $s++;
                                                        ?>
                                                            <option value="<?php echo $row->id; ?>"><?php echo $row->bank_name; ?></option>

                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--   <label class="col-md-1 control-label"> 
                                                    <a href="<?php echo base_url() ?>Page/new_bank">অন্যান্য  </a>
                                                   </label> -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> শাখার নাম ও ঠিকানা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" name="bank_branch">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> হিসাব নাম্বার </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" name="accountno">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> পরিশোধ পদ্ধতি </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <select  required class="icons" name="paymentmode" id="paymentmode" onchange="getInfoA()">
                                                        <option value="" disabled selected>চিহ্নিত করুন</option>
                                                        <option>নগদ</option>
                                                        <option>চেক</option>
                                                        <option>পে-অর্ডার </option>
                                                        <option value="others"> অন্যান্য </option>
                                                    </select>
                                                    <input type="text" name="other_pay_method" id="showP" placeholder="গ্রহণ পদ্ধতি ">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> পরিশোধের তারিখ </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="text" class="tcal" name="date" value="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                            </div>
                                        </div>





                                        <div class="form-group">

                                            <div class="col-md-8 col-md-offset-1">
                                                <table id="itemTable" style="background:#FFF; color:#549AB2; text-align:center">
                                                    <thead>
                                                        <tr>
                                                            <th>ভাউচার নাম্বার </th>
                                                            <th> চেক নাম্বার </th>
                                                            <th> টাকার পরিমাণ</th>
                                                            <th>গ্রহনকারী </th>

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
                                            <label class="col-md-2 control-label"> বর্ণনা </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <textarea style="height:250px" name="details"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> সংযুক্ত ফাইল </label>
                                            <div class="col-md-1"><strong> : </strong></div>
                                            <div class="col-md-7">
                                                <div class="input-field">
                                                    <input type="file" name="userFiles" multiple>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                        </div>
                                        <br>
                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-7">
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


<script type="text/javascript">
    function getInfo() {
        var val = document.getElementById("projecttype").value;
        if (val == 'others') {
            $("#show").fadeIn(500);
        } else {
            $("#show").fadeOut(500);
        }
    }

    function getInfoA() {
        var val = document.getElementById("paymentmode").value;
        if (val == 'others') {
            $("#showP").fadeIn(500);
        } else {
            $("#showP").fadeOut(500);
        }
    }
</script>
<style type="text/css">
    #show {
        display: none;
    }

    #showP {
        display: none;
    }
</style>

<style type="text/css">
    #control-label {
        text-align: left;
    }
</style>

<script type="text/javascript">
    jQuery('#addRow').click(function() {
        addItem();
    });
    jQuery('#items_table').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });
    jQuery('#taxPercentage').change(function() {
        calculateTotals(); // user changed tax percentage, recalculate everything
    });

    function calculateTotals() {

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
        jQuery(quantityElements).each(function(i, e) {

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
            '<td><input type="text" name="voucher[]" style="width:150px;" class="form-control" placeholder="ভাউচার নাম্বার" /></td>' +
            '<td><input type="text" name="challan[]" style="width:150px;height:35px;" class="form-control" placeholder="চালান নাম্বার "  /> </td>' +
            '<td><input type="number" name="amount[]" style="width:200px;" class="form-control" placeholder="টাকার  পরিমাণ"  /></td>' +
            '<td><input type="text" name="payto[]" style="width:200px;" class="form-control"  placeholder="গ্রহনকারী"  /></td>' +
            '<td>&nbsp;</td>' +

            '</tr>';
        jQuery("#items_table").append(itemRow);
    }
    addItem(); //call function on load to add the first item
</script>


<script type="text/javascript">
    jQuery('#delTr').click(function() {

        jQuery('#items_table tr:last').remove();
        calculateTotals();
    });


    $(document).ready(function(e) {
        jQuery("#discount").bind('keyup', function(e) {
            var val = $(this).val();
            var subto = $("#subtotal").val();

            var main_amt = subto - val;

            jQuery("#grandtotal").val(main_amt);
        });

    });
</script>