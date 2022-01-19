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
                <h1> ভূমি রেকর্ড সমূহ </h1>
                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>Recoad/new_land_record">নতুন ভূমি রেকর্ড সংযুক্তি </a></li>
                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#FFF;">
                    <center>
                        <form action="" method="post" style="background:#FFF ; width:450px;" class="search">
                            <table align="center" style="max-height:40px; min-height:40px;" order="1" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <select class="icons" name="thana">
                                            <option value=""> চিহ্নিত করুন </option>
                                            <option value="ফেনী সদর">ফেনী সদর </option>
                                            <option value="দাগনভূঁঞা"> দাগনভূঁঞা </option>
                                            <option value="সোনাগাজী"> সোনাগাজী </option>
                                            <option value="ফুলগাজী"> ফুলগাজী </option>
                                            <option value="পরশুরাম"> পরশুরাম </option>
                                            <option value="ছাগলনাইয়া"> ছাগলনাইয়া </option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="icons" name="land_type" id="land_type">
                                            <option value="" disabled selected> জরিপের ধরন </option>
                                            <option>সি, এস</option>
                                            <option>আর, এস</option>
                                            <option>এস, এ</option>
                                            <option>দিয়ারা </option>
                                            <option>হাল</option>
                                            <option>এস, আর, আর</option>
                                            <option>এম, আর, আর</option>
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
                                    <h3>ভূমি রেকর্ড রিপোর্ট </h3>

                                    <table class="table table-bordered table-striped" style="font-size:14px">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> উপজেলা </th>
                                                <th> মৌজার নাম </th>
                                                <th> জে-এল নাম্বার</th>
                                                <th> জরিপ </th>
                                                <th> খতিয়ান নং </th>
                                                <th> কার্যক্রিয়া </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_POST['submit'])) {
                                                $thana = $_POST['thana'];
                                                $land_type = $_POST['land_type'];

                                                $this->db->where('thana', $thana);
                                                $this->db->where('land_type', $land_type);
                                                $this->db->order_by('id', 'DESC');
                                                $sql = $this->db->get('land_recoad');
                                                $rec = $sql->result();
                                            } else {

                                                $this->db->order_by('id', 'DESC');
                                                $sql = $this->db->get('land_recoad');
                                                $rec = $sql->result();
                                            }
                                            $i = 0;
                                            foreach ($rec as $row) :
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td class="center"><?php $location = $row->thana;
                                                                        if ($location == 'ফেনী সদর') {
                                                                            echo "ফেনী সদর";
                                                                        } elseif ($location == 'দাগনভূঁঞা') {
                                                                            echo "দাগনভূঁঞা";
                                                                        } elseif ($location == 'সোনাগাজী') {
                                                                            echo "সোনাগাজী";
                                                                        } elseif ($location == 'ফুলগাজী') {
                                                                            echo "ফুলগাজী";
                                                                        } elseif ($location == 'পরশুরাম'
                                                                        ) {
                                                                            echo "পরশুরাম";
                                                                        } elseif ($location == 'ছাগলনাইয়া'
                                                                        ) {
                                                                            echo "ছাগলনাইয়া";
                                                                        } else {
                                                                            echo "";
                                                                        };
                                                                        ?>
                                                    </td>
                                                    <td class="center"><?php echo $row->moja_name; ?></td>
                                                    <td class="center"><?php echo $row->jal_number; ?></td>
                                                    <td class="center">
                                                        <?php echo $land_type = $row->land_type;

                                                        ?>
                                                    </td>

                                                    <td class="center"><?php echo $row->kotian; ?></td>
                                                    <td>
                                                        <a title="Details" href="<?php echo base_url('view-land-recoad/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Details">বিস্তারিত </button> </a>

                                                    </td>
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
