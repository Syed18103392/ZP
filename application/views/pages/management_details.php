<?php

$sql = $management_complete_info['management'];
$query = $management_complete_info['management_country_tour'];
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


<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1>পরিষদ সদস্য </h1>

                <ul class="link hidden-xs">
                    <!-- 
                                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> 
                                <li><a href="<?php echo base_url() ?>Page/view_management">সকল সদস্য সমুহ </a></li> -->
                    <li><a href="<?php echo base_url() ?>Page/view_management"> সদস্য সংযুক্তি </a></li>
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
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div id="div_print">
                                        <table class="table table-striped" width="822" height="291" border="1" align="center" style="background:#FFF; border:1px solid #23374e; padding-left:10px; color:#000;">
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

                                                <td colspan="6">
                                                    <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;">
                                                        পরিষদ সদস্য </span>
                                                </td>
                                            </tr>

                                            <tr style="height:85px;">
                                                <td height="33"> নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->name;  ?></td>
                                                <td height="33"> ছবি </td>
                                                <td> : </td>
                                                <td><?php $filein =  $sql->images;
                                                    $arr = json_decode($filein, true);
                                                    $i = 0;
                                                    foreach ($arr as $k => $v) {
                                                        $i++;
                                                    ?>
                                                        <img src="<?php echo base_url(); ?>uploads/management/images/<?php echo $sql->member_id; ?>/<?php echo $v; ?>" height="70px" width="auto">
                                                    <?php } ?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td height="28">পদবী </td>
                                                <td> : </td>
                                                <td><?php echo $sql->childen; ?></td>

                                                <td> পিতার নাম</td>
                                                <td> : </td>
                                                <td><?php echo $sql->father;  ?></td>
                                            </tr>
                                            <tr>
                                                <td height="28">মাতার নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->mother; ?></td>


                                                <td> স্বামী / স্ত্রীর নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->spouse; ?></td>
                                            </tr>
                                            <tr>
                                                <td> রক্তের গ্রুপ </td>
                                                <td>: </td>
                                                <td><?php echo $sql->blood; ?></td>

                                                <td height="28">জাতীয় পরিচয় পত্র </td>
                                                <td> : </td>
                                                <td><?php echo $sql->nid; ?></td>
                                            </tr>
                                            <tr>
                                                <td height="28"> জন্ম তারিখ </td>
                                                <td> : </td>
                                                <td><?php echo $sql->dob; ?></td>


                                                <td> ওয়ার্ড নং / গ্রাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->word_no; ?></td>
                                            </tr>
                                            <tr>
                                                <td> ইউনিয়ন </td>
                                                <td> : </td>
                                                <td><?php echo $sql->union_porishod; ?></td>

                                                <td height="28"> থানা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->thana; ?></td>
                                            </tr>
                                            <tr>
                                                <td> জেলা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->distict; ?></td>

                                                <td height="28"> শপথ গ্রহন তারিখ </td>
                                                <td> : </td>
                                                <td><?php echo $sql->join_date; ?></td>
                                            </tr>
                                            <tr>
                                                <td>শিক্ষাগত যোগ্যতা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->education; ?></td>

                                                <td>প্রথম মিটিং তারিখ</td>
                                                <td> : </td>
                                                <td><?php echo $sql->first_meeting; ?></td>
                                            </tr>
                                            <tr>
                                                <td height="28">মেয়াদ কাল</td>
                                                <td> : </td>
                                                <td><?php echo $sql->duration; ?></td>


                                                <td> ঠিকানা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->address; ?></td>

                                            </tr>
                                            <tr>
                                                <td>মোবাইল নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->mobile; ?></td>


                                                <td height="28"> ই-মেইল </td>
                                                <td> : </td>
                                                <td><?php echo $sql->email; ?></td>

                                            </tr>
                                        </table>


                                        <table class="table table-striped" width="780" height="120" border="1" align="center" style="background:#FFF; border:1px solid #23374e; padding-left:10px; color:#000;">

                                            <tr style="background:#999; color:#FFF; height:25px;">

                                                <td height="37" colspan="6">
                                                    <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;"> বিদেশ ভ্রমন তথ্য </span>
                                                </td>
                                            </tr>
                                            <?php
                                            foreach ($query->result() as $sqlQ2) {
                                            ?>
                                                <tr>
                                                    <td colspan="6"> - </td>
                                                </tr>
                                                <tr>
                                                    <td width="147" height="23"> তারিখ হইতে </td>
                                                    <td width="10"> : </td>
                                                    <td width="243"><?php echo $sqlQ2->from_date; ?></td>
                                                    <td width="138"> তারিখ পর্যন্ত </td>
                                                    <td width="10"> : </td>
                                                    <td width="192"><?php echo $sqlQ2->to_date; ?></td>
                                                </tr>
                                                <tr>
                                                    <td height="25"> দেশের নাম </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->country;  ?></td>
                                                    <td> উদ্দেশ্য </td>
                                                    <td> : </td>
                                                    <td><?php echo $sqlQ2->purose;  ?></td>
                                                </tr>
                                                <tr>
                                                    <td height="23">বর্ণনা</td>
                                                    <td> : </td>
                                                    <td colspan="4"><?php echo $sqlQ2->description; ?></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6"> - </td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <br />
                                    <p style="text-align:center">
                                        <input name="b_print" type="button" class="ipt" onClick="printdiv('div_print');" value="প্রিন্ট">
                                    </p>

                                    <br />
                                    <!-- <h4> সম্পত্তির ফাইল  </h4>
                                           <table class="table table-striped table-bordered">
                                            <thead>
                                             <tr>
                                              <th> ক্রমিক নং </th>
                                              <th> ফাইলের নাম  </th>
                                              <th> ফাইল দেখুন  </th>
                                              <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                             </thead>
                                             <tbody>
                                            <?php
                                            $filein =  $sql->images;
                                            $arr = json_decode($filein, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                            <tr>
                                              <td valign="top"><?php echo $i; ?> </td> 
                                              <td valign="top"><?php echo $v; ?> </td>  
                                              <td valign="top">
                                                 <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/management/images/<?php echo $sql->member_id; ?>/<?php echo $v; ?>')"> ফাইল দেখুন </a>
                                               
                                               </td>
                                               <td valign="top">
                                               <a href="<?php echo base_url(); ?>uploads/management/images/<?php echo $sql->member_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a> 
                                               
                                               </td>
                                               </tr>
                                               	
											<?php } ?>
                                            </tbody>
                                         </table>  
                                             -->
                                    <!-- <br />
                                              <h4> বিদেশ ভ্রমন ফাইল </h4>
                                            <table class="table table-striped table-bordered">
                                            <thead>
                                             <tr>
                                              <th> ক্রমিক নং </th>
                                              <th> ফাইলের নাম  </th>
                                              <th> ফাইল দেখুন  </th>
                                              <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                             </thead>
                                             <tbody>
                                            <?php
                                            $filein =  $sql->attach_files;
                                            $arr = json_decode($filein, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                            <tr>
                                              <td valign="top"><?php echo $i; ?> </td> 
                                              <td valign="top"><?php echo $v; ?> </td>  
                                              <td valign="top">
                                                 <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/management/Travel/<?php echo $sql->member_id; ?>/<?php echo $v; ?>')">ফাইল দেখুন </a>
                                               
                                               </td>
                                               <td valign="top">
                                               <a href="<?php echo base_url(); ?>uploads/management/Travel/<?php echo $sql->member_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড</a> 
                                               
                                               </td>
                                               </tr>
                                               	
											<?php } ?>
                                            </tbody>
                                         </table>   -->
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