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

<!-- ./sidebar-wrapper -->
<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> ব্যয় রিপোর্ট </h1>
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
                                    <br><br>
                                    <h4 align="center"> <?php
                                                        if (isset($_POST['submit'])) {
                                                            $from  = $_POST['from'];
                                                            $today = $_POST['today'];
                                                        } else {
                                                            $from = date('Y-m-01');
                                                            $today = date('Y-m-d');
                                                        }

                                                        ?>
                                        <?php echo $from; ?> &nbsp; হইতে &nbsp;&nbsp; <?php echo $today; ?>
                                        &nbsp; পর্যন্ত </h4>
                                    <h3> ব্যয় </h3>
                                    <table class="table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> প্রধান খাত </th>
                                                <th> উপ খাত </th>
                                                <th> ব্যাংকের নাম</th>
                                                <th> হিসাব নাম্বার </th>
                                                <th> প্রদান পদ্ধতি </th>
                                                <th>এন্ট্রি তারিখ </th>
                                                <th> টাকার পরিমাণ</th>

                                            </tr>
                                        </thead>

                                        <?php

                                        $rec = $info['expenses'];
                                        $i = 0;
                                        $total = 0;
                                        foreach ($rec as $row) :
                                            $i++;
                                        ?>

                                            <tbody>
                                                <tr>
                                                    <td><?php echo $i; ?></td>

                                                    <td class="center">
                                                        <?php
                                                        $main =  $row->main_head;
                                                        $this->db->where('id', $main);
                                                        $sqlM = $this->db->get('main_head');
                                                        $sqlM = $sqlM->row();
                                                        echo $sqlM->headname;
                                                        ?>
                                                    </td>
                                                    <td class="center">
                                                        <?php
                                                        $sub =  $row->sub_head;
                                                        $this->db->where('id', $sub);
                                                        $sqlS = $this->db->get('sub_head');
                                                        $sqlS = $sqlS->row();
                                                        echo $sqlS->sub_head;
                                                        ?>
                                                    </td>

                                                    <td class="center">
                                                        <?php
                                                        $bank =  $row->bank;
                                                        $this->db->where('id', $bank);
                                                        $sqlB = $this->db->get('bank_info');
                                                        $sqlB = $sqlB->row();
                                                        echo $sqlB->bank_name;
                                                        ?>
                                                    </td>

                                                    <td class="center"><?php echo $row->account; ?></td>
                                                    <td class="center"><?php echo $row->payment_mode; ?></td>
                                                    <td class="center"><?php echo $row->pay_date; ?></td>
                                                    <td class="center">
                                                        <?php
                                                        $row->amount;
                                                        $grand = explode(",", $row->amount);
                                                        $totalamount = 0;
                                                        foreach ($grand as $subamount) {
                                                            $subamount;
                                                            $totalamount = $totalamount + $subamount;
                                                        }
                                                        echo $totalamount;
                                                        ?>
                                                    </td>

                                                </tr>
                                            </tbody>

                                        <?php
                                            $total = $total + $totalamount;
                                        endforeach;
                                        ?>
                                    </table>
                                    <table height="25" style="background:#549AB2; height:25px; margin-top:10px; color:#FFF; font-family:Tahoma, Geneva, sans-serif; font-size:18px">
                                        <tr>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td align="center"> <span style="text-align:right; float:right">
                                                    মোট : <?php $total;
                                                            echo BanglaConverter::total($total);
                                                            ?> টাকা </span></td>


                                        </tr>

                                    </table>
                                    <br>
                                    <h3>পি.আই.সি / ঠিকাদার বিল</h3>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> অর্থবছর </th>
                                                <th> উন্নয়ন নাম </th>
                                                <th> চুক্তিকৃত মূল্য</th>
                                                <th> বিলের ধরন</th>
                                                <th> এন্ট্রি তারিখ </th>
                                                <th> টাকার পরিমাণ </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                $this->db->where('status', 'approved');
                                                $this->db->order_by('id', 'DESC');
                                                $sql = $this->db->get('contractor_bill');

                                            $rec = $info['contractor_bill'];
                                            $i = 0;
                                            $bill_total = 0;
                                            foreach ($rec as $row) :
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row->session; ?></td>
                                                    <td class="center"><?php echo $row->project_name; ?></td>
                                                    <td class="center"><?php echo $row->contract_price; ?></td>
                                                    <td class="center"><?php echo $row->advance_price; ?></td>
                                                    <td class="center"><?php echo $row->add_date; ?></td>
                                                    <td class="center"><?php echo $totalbill =  $row->total_amount; ?></td>

                                                </tr>
                                            <?php
                                                $bill_total = $bill_total + $totalbill;
                                            endforeach;
                                            ?>


                                        </tbody>
                                    </table>
                                    <br>
                                    <table height="25" style="background:#549AB2; height:25px; margin-top:10px; color:#FFF; font-family:Tahoma, Geneva, sans-serif; font-size:18px">
                                        <tr>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td align="center"> <span style="text-align:right; float:right">
                                                    মোট : <?php $bill_total;
                                                            echo BanglaConverter::bill_total($bill_total);
                                                            ?> টাকা </span></td>


                                        </tr>

                                    </table>


                                    <table height="25" style="background:#333333; height:25px; margin-top:10px; color:#FFF; font-family:Tahoma, Geneva, sans-serif; font-size:18px">
                                        <tr>

                                            <td align="center">
                                                <p style="text-align:center;">
                                                    সর্বমোট :<?php
                                                                $grandTotal = $total + $bill_total;
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

    public static function total($total)
    {
        return str_replace(self::$en, self::$bn, $total);
    }


    public static function bill_total($bill_total)
    {
        return str_replace(self::$en, self::$bn, $bill_total);
    }

    public static function grandTotal($grandTotal)
    {
        return str_replace(self::$en, self::$bn, $grandTotal);
    }
}
?>

