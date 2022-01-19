<?php
$sql = $land_recoad_complete_info;

?>
<script language="javascript">
    function printdiv(printpage) {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>
<style>
    .land_lease td {
        text-align: center !important;
    }
</style>

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

                    <li><a href="<?php echo base_url() ?>record-land-recoad"> ভূমি রেকর্ড সংযুক্তি </a></li>
                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    &nbsp;
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div id="div_print">
                                        <table width="825" class="table table-striped" border="1" align="center" style="background:#FFF; border:1px solid #23374e; padding-left:10px; color:#000;text-align:center">
                                            <tr>
                                                <td height="115" width="20%" align="right">
                                                    <img height="100" width="120" src="<?php echo base_url(); ?>assets/dist/img/logo-gp.png" alt="logo" style="float:right">
                                                </td>
                                                <td colspan="4" align="center" valign="top" width="50%">
                                                    <h2 style="text-align:center; margin-top: 25px;font-size: 25px;margin-bottom: 0px;">জেলা পরিষদ , ফেনী</h2>
                                                    <p style="font-size:12px; text-align:center">
                                                        Website: www.zpfeni.gov.bd
                                                    </p>
                                                </td>
                                                <td align="right" width="20%">&nbsp;

                                                </td>
                                            </tr>
                                            <tr style="background:#999; color:#FFF; height:25px;">
                                                <td height="33" colspan="2">&nbsp;</td>
                                                <td colspan="4">
                                                    <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;">
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ভূমির রেকর্ড </span>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td width="142"> উপজেলা </td>
                                                <td width="7"> : </td>
                                                <td width="219">
                                                    <?php

                                                    $landid = $sql->record_id;

                                                    $location = $sql->thana;

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

                                                    ?>
                                                </td>
                                                <td> মৌজার নাম</td>
                                                <td> : </td>
                                                <td><?php echo $sql->moja_name;  ?></td>

                                            </tr>



                                            <tr>
                                                <td>জে-এল নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->jal_number;  ?></td>
                                                <td height="30"> জরিপ </td>
                                                <td> : </td>
                                                <td>
                                                    <?php echo  $land_type = $sql->land_type; ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td height="24"> খতিয়ান নং </td>
                                                <td> : </td>
                                                <td><?php echo $sql->kotian;  ?></td>
                                                <td> এন্ট্রি তারিখ </td>
                                                <td> : </td>
                                                <td><?php echo $sql->add_date; ?></td>
                                            </tr>

                                        </table>

                                        <h4 style="margin-top:25px;"><strong> জমির হিসাব </strong></h4>
                                        <table width="826" class="table table-border table-striped land_lease" align="center" style="background:#FFF; margin-top:20px; padding-left:10px; color:#000;border:1px solid #777" cellspacing="0" cellpadding="0">



                                            <tr style="background:#CCC; max-height:70px;">
                                                <td width="100" style="padding-top: 30px;border: 1px solid #777;text-align:center">
                                                    <center>দাগ নং</center>
                                                    </center>
                                                </td>
                                                <td width="100" style="padding-top: 30px;border: 1px solid #777;text-align:center">
                                                    <center>জমির শ্রেণি</center>
                                                </td>
                                                <td width="100" style="padding-top: 30px;border: 1px solid #777;text-align:center">
                                                    <center> হিস্যা </center>
                                                </td>
                                                <td colspan="2" valign="top" style="padding-top: 15px;border: 1px solid #777;text-align:center">
                                                    <table width="235" style="max-height:70px; margin:0 auto">
                                                        <tr style="max-height:30px;">
                                                            <td colspan="2" style="text-align:center" valign="top" style="padding-top: 30px;border: 1px solid #777;text-align:center">
                                                                <center> জমির পরিমান </center>
                                                            </td>
                                                        </tr>
                                                        <tr style="max-height:20px;">
                                                            <td width="105">
                                                                <center> একর</center>
                                                            </td>
                                                            <td width="114">
                                                                <center>শতক</center>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                                <!--
												 <td width="109"> একর </td>
                                                 <td width="120">শতক </td>
                                                  -->
                                                <td width="330" style="padding-top: 30px;border: 1px solid #777;text-align:center">
                                                    <center>মন্তব্য</center>
                                                </td>
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
                                                    <td>
                                                        <center>&nbsp; <?php echo $row->dag_no; ?></center>
                                                    </td>
                                                    <td width="125">
                                                        <center> <?php echo $row->land_type; ?></center>
                                                    </td>
                                                    <td width="117">
                                                        <center> <?php echo $row->land_recoard; ?></center>
                                                    </td>
                                                    <td>
                                                        <center> <?php echo $akok = $row->land_akok; ?></center>
                                                    </td>
                                                    <td width="123">
                                                        <center> <?php echo $shotok = $row->land_shotok; ?></center>
                                                    </td>
                                                    <td width="197">
                                                        <center> <?php echo $row->comments; ?> </center>
                                                    </td>
                                                </tr>
                                            <?php

                                                $totalakor = $totalakor + (int)$akok;
                                                $totalshotok = $totalshotok + (int)$shotok;
                                            }
                                            ?>

                                            <tr>
                                                <td colspan="6">&nbsp; </td>
                                            </tr>
                                            <tr style="background:#000; height:25px; color:#FFF; margin-top:20px;">
                                                <td colspan="3"> সর্বমোট </td>
                                                <td width="132"> <?php echo $totalakor; ?> </td>

                                                <td width="123"> <?php echo $totalshotok; ?></td>
                                                <td colspan="2">&nbsp; </td>
                                            </tr>



                                        </table>
                                    </div>

                                    <p style="text-align:center; margin-top:10px; margin-right:100px;">
                                        <input name="b_print" type="button" class="ipt" onClick="printdiv('div_print');" value="প্রিন্ট">
                                    </p>

                                    <h4 style="margin-top:25px;"> সংযুক্ত ফাইল </h4>

                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $fileA =  $sql->add_file;
                                            $arr = json_decode($fileA, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/Land_Record/<?php echo $sql->record_id; ?>/<?php echo $v; ?>')"> ফাইল দেখুন </a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/Land_Record/<?php echo $sql->record_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>


                                </div>
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
    $('#addRow').click(function() {
        addItem();
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

            '<td><input type="text" name="challan[]" style="width:200px;height:35px" class="form-control" placeholder="Challan Number"> </td>' +
            '<td><input type="text" name="voucher[]" style="width:200px" class="form-control" placeholder="Voucher" /></td>' +
            '<td><input type="text" name="amount[]" style="width:200px" class="form-control" placeholder="Amount" /></td>' +
            '<td><input type="text" name="payto[]" style="width:200px" class="form-control"  placeholder="Pay To" /></td>' +
            '<td>&nbsp;</td>' +


            '</tr>';
        $("#items_table").append(itemRow);
    }
    addItem(); //call function on load to add the first item
</script>


<script type="text/javascript">
    $('#delTr').click(function() {

        $('#itemTable tr:last').remove();
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