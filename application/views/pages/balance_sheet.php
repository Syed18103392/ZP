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
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> ব্যালেন্স শীট ( রাজস্ব )</h1>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="table-responsive">
                                <div id="div_print">
                                    <table>
                                        <thead>
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
                                        </thead>
                                    </table>

                                    <h4 align="center">
                                        <p style="text-align:center; font-weight:bold; margin-top:10px; text-decoration:underline"> ব্যালেন্স শীট </p>


                                    </h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <h3 style="background:#549AB2; line-height:25px; color:#FFF"> আয় খাত </h3>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr align="center">
                                                        <th align="center" style="width:90px; text-align:center">
                                                            <center> ক্রমিক নং </center>
                                                        </th>
                                                        <th align="center" style="text-align:center">
                                                            <center> খাতের নাম </center>
                                                        </th>
                                                        <th align="center" style="width:120px; text-align:center">
                                                            <center>
                                                                টাকার পরিমাণ </center>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    $this->db->order_by('id', 'ASC');
                                                   
                                                    // only counting & showing the রাজস্ব আয়
                                                    $this->db->where('main_head', 11);
                                                    $sql = $this->db->get('sub_head');
                                                    $rec = $sql->result();
                                                    $i = 0;
                                                    $incometotal = 0;
                                                    foreach ($rec as $row) :
                                                        $i++;

                                                    ?>

                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td align="left"><?php echo $row->sub_head; ?></td>
                                                            <td class="center">
                                                                <?php
                                                                $headid = $row->id;
                                                                // print_r($headid);
                                                                $this->db->where('sub_head', $headid);
                                                                $this->db->where('status', 'approved');
                                                                $this->db->select('SUM(amount) AS amount', FALSE);

                                                                $query = $this->db->get('income');
                                                                $query = $query->row();
                                                                $incomeTA = $query->amount;
                                                                // print_r($query);
                                                                echo $incomeTA;
                                                                ?>

                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $incometotal = $incometotal + $incomeTA;
                                                    endforeach;
                                                    $i;
                                                    ?>
                                                </tbody>

                                                <tbody>

                                                    <tr>
                                                        <td><?php echo $land = $i + 1;  ?></td>
                                                        <td align="left"> <strong> প্রারম্ভিক স্থিতি </strong></td>
                                                        <td class="center">
                                                            <?php

                                                            $this->db->where('type', '01');
                                                            $this->db->select('SUM(opening_amount) AS opening_amount', FALSE);
                                                            $query = $this->db->get('opening_balance');

                                                            $query = $query->row();
                                                            echo $incomeTO = $query->opening_amount;
                                                            ?>

                                                        </td>
                                                    </tr>


                                                </tbody>


                                                <tr style="background:#549AB2; color:#FFF">
                                                    <td colspan="2" align="right">
                                                        <p style="float:right"> সর্বমোট আয় </p>
                                                    </td>
                                                    <td class="center">
                                                        <?php $incomeBalance =  $incometotal + $incomeTO;

                                                        echo BanglaConverter::incomeBalance($incomeBalance);
                                                        ?></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <h3 style="background:#549AB2; line-height:25px; color:#FFF"> ব্যয় খাত </h3>
                                            <table width="218" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr align="center">
                                                        <th align="center" style="width:90px; text-align:center">
                                                            <center> ক্রমিক নং </center>
                                                        </th>
                                                        <th align="center" style="text-align:center">
                                                            <center> খাতের নাম </center>
                                                        </th>
                                                        <th align="center" style="width:120px; text-align:center">
                                                            <center>
                                                                টাকার পরিমাণ </center>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    $this->db->order_by('id', 'ASC');
                                                    $this->db->where('main_head', 71);
                                                    $sql = $this->db->get('sub_head');
                                                    $rec = $sql->result();
                                                    $CC = 0;
                                                    $totalEX = 0;
                                                    foreach ($rec as $row) :
                                                        $CC++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $CC; ?></td>
                                                            <td align="left"><?php echo $row->sub_head; ?></td>
                                                            <td class="center">
                                                                <?php


                                                                $headid = $row->id;

                                                                $this->db->where('sub_head', $headid);
                                                                $this->db->where('status', 'approved');
                                                                $query = $this->db->get('expenses');
                                                                $rec = $query->result();
                                                                $AA = 0;
                                                                $totalexpenses = 0;
                                                                foreach ($rec as $row) :
                                                                    $AA++;
                                                                ?>
                                                                    <?php
                                                                    $row->amount;
                                                                    $grand = explode(",", $row->amount);
                                                                    $totalamount = 0;
                                                                    foreach ($grand as $subamount) {
                                                                        $subamount;
                                                                        $totalamount = $totalamount + $subamount;
                                                                    }
                                                                    //echo $totalamount;
                                                                    ?>

                                                                <?php
                                                                    $totalexpenses  = $totalexpenses + $totalamount;
                                                                endforeach;
                                                                echo $totalexpenses;
                                                                ?>

                                                            </td>
                                                        </tr>

                                                    <?php
                                                        $totalEX = $totalEX + $totalexpenses;
                                                    endforeach;

                                                    ?>
                                                </tbody>
                                                <tr style="background:#549AB2; color:#FFF">
                                                    <td colspan="2" align="right">
                                                        <p style="float:right"> সর্বমোট ব্যয় </p>
                                                    </td>
                                                    <td class="center"> <?php
                                                                        //echo $totalEX;
                                                                        $epenseBalance = $totalEX;
                                                                        echo BanglaConverter::epenseBalance($epenseBalance);
                                                                        ?> </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <table height="25" style="background:#555; height:25px; margin-top:10px; color:#FFF; font-family:Tahoma, Geneva, sans-serif; font-size:18px">
                                        <tr>
                                            <td align="center" style="text-align:center">
                                                <p style="text-align:center"> সমাপনী স্থিতি :
                                                    <?php
                                                    $grandTotal = $incomeBalance - $epenseBalance;

                                                    echo BanglaConverter::grandTotal($grandTotal);
                                                    ?> টাকা </p>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="text-align:center; height:25px; font-size:16px;"><input name="b_print" type="button" class="ipt" onClick="printdiv('div_print');" value="প্রিন্ট"> </p>
                </div>
                <!-- ./data table -->
            </div>
            <!-- ./row -->
        </div>
        <!-- ./cotainer -->

    </div>
    <!-- ./page-content -->
</div>
<!-- ./page-content-wrapper -->
</div>
<!-- ./page-wrapper -->

<?php

class BanglaConverter
{
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

    public static function incomeBalance($incomeBalance)
    {
        return str_replace(self::$en, self::$bn, $incomeBalance);
    }


    public static function epenseBalance($epenseBalance)
    {
        return str_replace(self::$en, self::$bn, $epenseBalance);
    }

    public static function grandTotal($grandTotal)
    {
        return str_replace(self::$en, self::$bn, $grandTotal);
    }
}
?>