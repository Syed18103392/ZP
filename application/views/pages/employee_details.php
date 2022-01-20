<?php
$sql = $employee_complete_info;
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
                <h1> জেলা পরিষদ কর্মকর্তা / কর্মচারীর তথ্য </h1>

                <ul class="link hidden-xs">
                    <!--  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Home</a></li> 
                                <li><a href="<?php echo base_url() ?>Personal/view_personal_data">সকল কর্মচারী তথ্য
 সমুহ </a></li> -->
                    <li><a href="<?php echo base_url() ?>Personal/new_personal_data"> কর্মচারী সংযুক্তি </a></li>
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
                                        <table class="table table-striped" height="291" border="1" align="center" style="background:#FFF; border:1px solid #23374e; padding-left:10px; color:#000;">
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
                                                        কর্মকর্তা / কর্মচারীর তথ্য </span>
                                                </td>
                                            </tr>
                                            <?php $personid =  $sql->person_id; ?>

                                            <tr style="height:85px;">
                                                <td height="33"> নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->name;  ?></td>
                                                <td height="33"> ছবি </td>
                                                <td> : </td>
                                                <td>

                                                    <?php $filein =  $sql->images;
                                                    $arr = json_decode($filein, true);
                                                    $i = 0;
                                                    foreach ($arr as $k => $v) {
                                                        $i++;
                                                    ?>
                                                        <img src="<?php echo base_url(); ?>uploads/Person/<?php echo $sql->person_id; ?>/<?php echo $v; ?>" height="70px" width="auto">
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
                                                <td><?php echo $sql->potni; ?></td>
                                            </tr>
                                            <tr>
                                                <td height="28"> জাতীয় পরিচয় পত্র </td>
                                                <td> : </td>
                                                <td><?php echo $sql->nid; ?></td>

                                                <td> নিজ জেলা </td>
                                                <td>: </td>
                                                <td><?php echo $sql->district; ?></td>
                                            </tr>
                                            <tr>
                                                <td height="28"> জন্ম তারিখ </td>
                                                <td> : </td>
                                                <td><?php echo $sql->dob; ?></td>

                                                <td> বৈবাহিক অবস্থা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->marital_status; ?></td>
                                            </tr>
                                            <tr>
                                                <td> বর্তমান ঠিকানা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->present_address; ?></td>

                                                <td height="28"> স্থায়ী ঠিকানা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->permanent_address; ?></td>
                                            </tr>
                                            <tr>
                                                <td> মোবাইল নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->mobile; ?></td>

                                                <td height="28">ই-মেইল আইডি</td>
                                                <td> : </td>
                                                <td colspan="4"><?php echo $sql->email; ?></td>

                                            </tr>

                                        </table>

                                        <h4 style="margin-top:20px;"> <strong> শিক্ষাগত যোগ্যতা </strong></h4>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> পরীক্ষার নাম </th>
                                                    <th> বিষয় / বিভাগ </th>
                                                    <th> শিক্ষা প্রতিষ্ঠান </th>
                                                    <th> বোর্ড / বিশ্ববিদ্যালয় </th>
                                                    <th> পাশের বছর </th>
                                                    <th> ফলাফল</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $this->db->where('person_id', $personid);
                                                $sqlE = $this->db->get('person_edu');
                                                $recE = $sqlE->result();
                                                $e = 0;
                                                foreach ($recE as $rowE) {
                                                    $e++;
                                                ?>
                                                    <tr>
                                                        <td valign="top"><?php echo $rowE->exam_name; ?> </td>
                                                        <td valign="top"><?php echo $rowE->subject; ?> </td>
                                                        <td valign="top"><?php echo $rowE->institute; ?></td>
                                                        <td valign="top"><?php echo $rowE->board; ?></td>
                                                        <td valign="top"><?php echo $rowE->pass_year; ?></td>
                                                        <td valign="top"><?php echo $rowE->result; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>


                                        <h4 style="margin-top:20px;"> <strong> চাকুরীর তথ্য </strong></h4>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> পদবী</th>
                                                    <th> যোগদান তারিখ </th>
                                                    <th> স্থায়ী করার তারিখ </th>
                                                    <th> এল পি আর তারিখ </th>
                                                    <th> ঠিকানা </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $this->db->where('person_id', $personid);
                                                $sqlE = $this->db->get('person_job');
                                                $recE = $sqlE->result();
                                                $e = 0;
                                                foreach ($recE as $rowE) {
                                                    $e++;
                                                ?>
                                                    <tr>
                                                        <td valign="top"><?php echo $rowE->job_post; ?> </td>
                                                        <td valign="top"><?php echo $rowE->join_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->confirm_date; ?> </td>
                                                        <td valign="top"><?php echo $rowE->lpr_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->address; ?></td>
                                                        <td valign="top"><?php echo $rowE->details; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>


                                        <h4 style="margin-top:20px;"> <strong> প্রশিক্ষণ তথ্য </strong></h4>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>কোর্সের নাম </th>
                                                    <th> প্রতিষ্ঠান</th>
                                                    <th> সময়কাল</th>
                                                    <th> শুরুর তারিখ </th>
                                                    <th> শেষ তারিখ </th>
                                                    <th> ঠিকানা </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $this->db->where('person_id', $personid);
                                                $sqlE = $this->db->get('person_tranning');
                                                $recE = $sqlE->result();
                                                $e = 0;
                                                foreach ($recE as $rowE) {
                                                    $e++;
                                                ?>
                                                    <tr>
                                                        <td valign="top"><?php echo $rowE->course; ?> </td>
                                                        <td valign="top"><?php echo $rowE->institute; ?> </td>
                                                        <td valign="top"><?php echo $rowE->duration; ?></td>
                                                        <td valign="top"><?php echo $rowE->start_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->end_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->address; ?></td>
                                                        <td valign="top"><?php echo $rowE->details; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>


                                        <h4 style="margin-top:20px;"> <strong> ছুটির তথ্য </strong></h4>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> ছুটির ধরণ </th>
                                                    <th> সময়কাল </th>
                                                    <th> ছুটি শুরুর তারিখ </th>
                                                    <th> ছুটি শেষ তারিখ</th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $this->db->where('person_id', $personid);
                                                $sqlE = $this->db->get('person_leave');
                                                $recE = $sqlE->result();
                                                $e = 0;
                                                foreach ($recE as $rowE) {
                                                    $e++;
                                                ?>
                                                    <tr>
                                                        <td valign="top"><?php echo $rowE->leave_type; ?> </td>
                                                        <td valign="top"><?php echo $rowE->leave_time; ?> </td>
                                                        <td valign="top"><?php echo $rowE->start_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->end_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->details; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>

                                        <h4 style="margin-top:20px;"> <strong> পদোন্নতি বিবরণ </strong></h4>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> পদবী </th>
                                                    <th> বেতন স্কেল </th>
                                                    <th> পদোন্নতি তারিখ </th>
                                                    <th> পূর্বের পদ </th>
                                                    <th> জি ও তারিখ </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $this->db->where('perosn_id', $personid);
                                                $sqlE = $this->db->get('person_pomoson');
                                                $recE = $sqlE->result();
                                                $e = 0;
                                                foreach ($recE as $rowE) {
                                                    $e++;
                                                ?>
                                                    <tr>
                                                        <td valign="top"><?php echo $rowE->post; ?> </td>
                                                        <td valign="top"><?php echo $rowE->pay_scal; ?> </td>
                                                        <td valign="top"><?php echo $rowE->promotion_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->promo_type; ?></td>
                                                        <td valign="top"><?php echo $rowE->go_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->details; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>


                                        <h4 style="margin-top:20px;"> <strong>শৃঙ্খলামূলক ব্যবস্থা / অপরাধমূলক প্রসিকিউশন
                                            </strong></h4>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> ধরণ </th>
                                                    <th> বর্ণনা </th>
                                                    <th> বর্তমান অবস্থা </th>
                                                    <th>আদেশ / সিদ্দান্ত </th>
                                                    <th> চূড়ান্ত বিচার </th>
                                                    <th> মন্তব্য</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $this->db->where('person_id', $personid);
                                                $sqlE = $this->db->get('person_crime');
                                                $recE = $sqlE->result();
                                                $e = 0;
                                                foreach ($recE as $rowE) {
                                                    $e++;
                                                ?>
                                                    <tr>
                                                        <td valign="top"><?php echo $rowE->crime_type; ?> </td>
                                                        <td valign="top"><?php echo $rowE->details; ?> </td>
                                                        <td valign="top"><?php echo $rowE->present; ?></td>
                                                        <td valign="top"><?php echo $rowE->judment; ?></td>
                                                        <td valign="top"><?php echo $rowE->final_judment; ?></td>
                                                        <td valign="top"><?php echo $rowE->comment; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>


                                        <h4 style="margin-top:20px;"> <strong>পোস্টিং রেকর্ড </strong></h4>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>পদবী </th>
                                                    <th> সংস্থা </th>
                                                    <th> ঠিকানা </th>
                                                    <th> যোগদান তারিখ </th>
                                                    <th> অব্যাহতির তারিখ </th>
                                                    <th> বেতন কাঠামো </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $this->db->where('person_id', $personid);
                                                $sqlE = $this->db->get('person_posting');
                                                $recE = $sqlE->result();
                                                $e = 0;
                                                foreach ($recE as $rowE) {
                                                    $e++;
                                                ?>
                                                    <tr>
                                                        <td valign="top"><?php echo $rowE->post; ?> </td>
                                                        <td valign="top"><?php echo $rowE->organization; ?> </td>
                                                        <td valign="top"><?php echo $rowE->address; ?></td>
                                                        <td valign="top"><?php echo $rowE->start_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->end_date; ?></td>
                                                        <td valign="top"><?php echo $rowE->pay_scal; ?></td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>


                                    </div>
                                    <p style="text-align:center; margin-top:20px;">
                                        <input name="b_print" type="button" class="ipt" onClick="printdiv('div_print');" value="প্রিন্ট">
                                    </p>





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