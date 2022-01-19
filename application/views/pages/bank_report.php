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
                <h1> ব্যাংক রিপোর্ট </h1>
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



                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3 style="background:#549AB2; line-height:35px; color:#FFF"> ব্যাংক রিপোর্ট </h3>
                                    </h4>

                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং</th>
                                                <th> ব্যাংকের নাম </th>
                                                <th> শাখার নাম </th>
                                                <th> হিসাব নাম্বার </th>
                                                <th> প্রারম্ভিক স্থিতি </th>
                                                <th> স্থিতি ইন </th>
                                                <th> স্থিতি আউট </th>
                                                <th> বর্তমান স্থিতি </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $rec = $info['bank_info'];
                                            $i = 0;
                                            $totalA = 0;
                                            $totalB = 0;
                                            $totalC = 0;
                                            foreach ($rec as $row) :
                                                $i++;

                                            ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <?php $bankid = $row->id; ?>
                                                    <td class="center"><?php echo $bank       = $row->bank_name; ?></td>
                                                    <td class="center"><?php echo $branch     = $row->branch_name; ?></td>
                                                    <td class="center"><?php echo $account    = $row->account_no; ?></td>
                                                    <td class="center"><?php echo $openBalance = $row->opening_balance; ?></td>
                                                    <td style="text-align:right">
                                                        <?php


                                                        $this->db->where('bank', $bankid);
                                                        $this->db->where('account_no', $account);
                                                        $this->db->select('SUM(amount) AS amount', FALSE);
                                                        $query = $this->db->get('income');
                                                        $query = $query->row();
                                                        echo $incomeTA = $query->amount;
                                                        ?>
                                                    </td>

                                                    <td style="text-align:right">
                                                        <?php

                                                        $this->db->where('bank', $bankid);
                                                        $this->db->where('account', $account);
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
                                                            // echo $totalamount;
                                                            ?>

                                                        <?php
                                                            $totalexpenses  = $totalexpenses + $totalamount;
                                                        endforeach;
                                                        echo $totalexpenses;
                                                        ?>



                                                    </td>
                                                    <td style="text-align:right">
                                                       
                                                        <?php echo $grndtotl = ($openBalance + $incomeTA) - $totalexpenses;   ?>

                                                    </td>



                                                </tr>
                                            <?php
                                                $totalA = $totalA + $incomeTA;
                                                $totalB = $totalB + $totalexpenses;
                                                $totalC = $totalC + $grndtotl;
                                            endforeach;
                                            ?>
                                            <tr style="background:#555; color:#FFF">
                                                <td colspan="5" align="right">
                                                    <p style="font-weight:bold; text-align:right"> সর্বমোট টাকা </p>
                                                </td>
                                                <td style="text-align:right">
                                                    <?php $totalA;
                                                    echo BanglaConverter::totalA($totalA);
                                                    ?> </td>
                                                <td style="text-align:right"> <?php $totalB;
                                                                                echo BanglaConverter::totalB($totalB);
                                                                                ?> </td>
                                                <td style="text-align:right"> <?php $totalC;
                                                                                echo BanglaConverter::totalC($totalC);
                                                                                ?> </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>


                            </div>

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

    public static function totalA($totalA)
    {
        return str_replace(self::$en, self::$bn, $totalA);
    }


    public static function totalB($totalB)
    {
        return str_replace(self::$en, self::$bn, $totalB);
    }

    public static function totalC($totalC)
    {
        return str_replace(self::$en, self::$bn, $totalC);
    }
}
?>