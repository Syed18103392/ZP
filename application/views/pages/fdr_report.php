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
                <h1> এফ ডি আর রিপোর্ট </h1>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">

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


                                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr style="font-size:12px;">
                                                <th> ক্রমিক নং </th>
                                                <th> ব্যাংক </th>
                                                <th> শাখা </th>
                                                <th> এফ ডি আর নং </th>
                                                <th> প্রারম্ভিক এফ ডি আর </th>
                                                <th> খোলার তারিখ </th>
                                                <th> বর্তমান এফ ডি আর </th>
                                                <th> খোলার তারিখ </th>
                                                <th> মেয়াদকাল </th>
                                                <th> মুনাফার হার </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $rec = $info;
                                            $i = 0;
                                            foreach ($rec as $row) :
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td class="center">
                                                        <?php
                                                        $bank =  $row->bank;
                                                        $this->db->where('id', $bank);
                                                        $sqlB = $this->db->get('bank_info');
                                                        $sqlB = $sqlB->row();
                                                        echo $sqlB->bank_name;
                                                        ?>
                                                    </td>
                                                    <td class="center"><?php echo $row->branch; ?></td>
                                                    <td class="center"><?php echo $row->fdr_number; ?></td>
                                                    <td class="center"><?php echo $row->start_fdr; ?></td>
                                                    <td class="center"><?php echo $row->start_date; ?></td>
                                                    <td class="center"><?php echo $row->present_fdr; ?></td>
                                                    <td class="center"><?php echo $row->present_date; ?></td>
                                                    <td class="center"><?php echo $row->duration; ?></td>
                                                    <td class="center"><?php echo $row->interst; ?></td>

                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>

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