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
                <h1> প্রকল্পের রিপোর্ট </h1>
                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Report/complete_project"> বাস্তবায়িত প্রকল্প </a></li>
                    <li><a href="<?php echo base_url() ?>Report/running_project"> বাস্তবায়িত চলমান প্রকল্প</a></li>
                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#FFF;">
                    <center>
                        <form action="" method="post" style="background:#FFF ; width:350px;" class="search">
                            <table align="center" style="max-height:40px; min-height:40px;" order="1" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <select class="icons" name="implemet" style="width:150px;">
                                            <option>প্রকল্প </option>
                                            <option>দরপত্র</option>
                                        </select>
                                    </td>

                                    <td>
                                        <select class="icons" name="session" style="width:150px;">
                                            <option value="" disabled selected> অর্থ বছর </option>
                                            <?php
                                            for ($i = 2010; $i < 2070; $i++) { ?>
                                                <option><?php echo $i; ?>-<?php echo $i + 1; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </td>

                                    <td valign="top">
                                        <input type="submit" value="Search" name="submit">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
            </div>
            <!-- ./bootstrap table -->
            <!-- data table -->
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
                                    <h3>বাস্তবায়িত / বাস্তবায়নকৃত প্রকল্প সমূহ </h3>

                                    <table class="table table-bordered table-striped" style="font-size:12px">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"> ক্রমিক নং </th>
                                                <th style="width:130px;"> প্রকল্পের নাম </th>
                                                <th style="width:90px;"> অর্থ বছর </th>
                                                <th> বাস্তবায়নের ধরণ </th>
                                                <th style="width:110px;"> বরাদ্দকৃত অর্থ / প্রাক্কলিত মূল্য </th>
                                                <th style="width:80px;"> চুক্তি মূল্য </th>
                                                <th style="width:80px;"> কাজ শুরুর তারিখ </th>
                                                <th> ১ম কিস্তি বিল </th>
                                                <th> চূড়ান্ত বিল</th>
                                                <th> মোট বিল </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $session = $_POST['session'];
                                                $project = $_POST['implemet'];
                                            } else {
                                                $sessionA = date('Y');
                                                $sessionB = $sessionA - 1;
                                                $session = $sessionB . '-' . $sessionA;
                                                $project = 'প্রকল্প';
                                            }
                                            $this->db->order_by('id', 'ASC');
                                            $this->db->where('session', $session);
                                            $this->db->where('implemention', $project);
                                            $sql = $this->db->get('project_tender');
                                            $rec = $sql->result();
                                            $i = 0;
                                            $firsttotal = 0;
                                            $secenttotal = 0;
                                            $total_grand = 0;
                                            foreach ($rec as $row) :
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row->project_name; ?></td>
                                                    <td><?php echo $row->session; ?></td>
                                                    <td><?php echo $row->implemention; ?></td>
                                                    <td><?php echo $row->estimiting_cost;;  ?> </td>
                                                    <td><?php echo $row->contract_bill; ?></td>
                                                    <td><?php echo $row->start_year; ?></td>
                                                    <td><?php echo $first = $row->first_bill; ?></td>
                                                    <td><?php echo $secend = $row->secend_bill;  ?> </td>
                                                    <td><?php echo $amount =  $first +  $secend;  ?> </td>
                                                </tr>
                                            <?php
                                                $firsttotal = $firsttotal + $first;
                                                $secenttotal = $secenttotal + $secend;
                                                $total_grand = $total_grand + $amount;
                                            endforeach;
                                            ?>
                                            <tr style="background:#333; color:#FFFFFF;font-size: 15px;">
                                                <td colspan="7" align="right"> সর্ব মোট </td>
                                                <td><?php echo $firsttotal; ?></td>
                                                <td><?php echo $secenttotal; ?></td>
                                                <td><?php echo $total_grand;  ?> </td>
                                            </tr>

                                        </tbody>
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