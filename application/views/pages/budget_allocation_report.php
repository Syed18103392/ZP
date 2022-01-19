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
                <h1> বাজেট বরাদ্দ রিপোর্ট </h1>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="" method="post" style="background:#FFF" class="search">
                        <table align="center" style="max-height:40px; min-height:40px; max-width:350px;" order="1" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <select style="width:120px;" name="yearA">
                                        <option value="" disabled selected>বাজেট বরাদ্দ(অর্থ বছর)</option>
                                        <?php
                                        for ($y = 2010; $y <= 2070; $y++) {
                                        ?>
                                            <option><?php echo $y; ?>-<?php echo $y + 1; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>


                                <td valign="top">
                                    <input type="submit" value="Search" name="submit" style="height:30px; width:100px;">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <!-- bootstrap table -->
                </div>
            </div>

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
                                        <p style="text-align:center; font-weight:bold; margin-top:10px; text-decoration:underline"> বাজেট বরাদ্দ </p> <br />
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <?php
                                                if (isset($_POST['submit'])) {
                                                    $yearA = $_POST['yearA'];
                                                } else {
                                                    $year = date('Y');
                                                    $backA = $year - 1;
                                                    $backB = $year - 2;
                                                    $backC = $year - 3;
                                                    $yearA = $backA . '-' . $year;
                                                }
                                                ?>
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr style="font-size:14px">
                                                            <th style="width:90px;"> ক্রমিক নং</th>
                                                            <th> খাত </th>
                                                            <th> বাজেট বরাদ্দ </th>
                                                            <th> ব্যয় </th>
                                                            <th> অবশিষ্ট </th>
                                                        </tr>
                                                    </thead>

                                                    <?php
                                                    $this->db->order_by('id', 'ASC');
                                                    $this->db->where('budgetallc', $yearA);
                                                    $this->db->where('main_head', 71);
                                                    $sqlE = $this->db->get('budget');
                                                    $sqlE = $sqlE->result();
                                                    $i = 0;
                                                    $totalA = 0;
                                                    $totalB = 0;
                                                    $totalC = 0;
                                                    foreach ($sqlE as $rowE) :
                                                        $i++;
                                                    ?>

                                                        <tr style="font-size:14px">
                                                            <td style="width:90px;"><?php echo $i; ?></td>

                                                            <td class="center">
                                                                <?php
                                                                $subH = $rowE->sub_head;
                                                                $this->db->where('id', $subH);
                                                                $sqlM = $this->db->get('sub_head');
                                                                $sqlM = $sqlM->row();
                                                                echo $sqlM->sub_head;
                                                                ?>
                                                            </td>
                                                            <td> <?php echo $amountA = $rowE->budgetamount; ?></td>
                                                            <td> <?php

                                                                    //$this->db->where('pay_date >=', $from);
                                                                    //$this->db->where('pay_date <=', $today); 
                                                                    $this->db->where('sub_head', $subH);
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

                                                                ?></td>
                                                            <td> <?php echo $amountA - $totalexpenses; ?></td>
                                                        </tr>
                                                    <?php
                                                        $totalA = $totalA + $amountA;

                                                    endforeach;
                                                    ?>

                                                </table>
                                                <table>


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
