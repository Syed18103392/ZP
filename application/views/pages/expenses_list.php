<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> ব্যয় সমূহ </h1>

                <?php
                $su = $this->session->userdata('status');
                if (isset($su)) { ?>
                    <div style="width:50%" class="alert alert-success alert-dismissable fade in z-depth-1">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $su; ?></strong>
                    </div>
                <?php
                    $this->session->unset_userdata('status');
                }
                ?>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>add_expenses">নতুন ব্যয় সংযুক্তি </a></li>

                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">

                <!-- bootstrap table -->

                <!-- ./bootstrap table -->
                <!-- bootstrap table -->

                <!-- ./bootstrap table -->
                <!-- data table -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="table-responsive">
                                <div id="printableArea">
                                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>

                                                <th> প্রধান খাত </th>
                                                <th> উপ খাত </th>
                                                <th> ব্যাংকের নাম</th>
                                                <th> হিসাব নাম্বার </th>
                                                <th> পরিশোধ পদ্ধতি</th>
                                                <th> পরিশোধের তারিখ</th>
                                                <th>টাকার পরিমাণ </th>
                                                <th> কার্যক্রিয়া </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_POST['submit'])) {

                                                $from  = $_POST['from'];
                                                $today = $_POST['today'];


                                                $this->db->where('pay_date >=', $from);
                                                $this->db->where('pay_date <=', $today);
                                                $this->db->where('status', 'approved');
                                                $this->db->order_by('id', 'DESC');
                                                $sql = $this->db->get('expenses');
                                            } else {
                                                $from = date('Y-m-01');
                                                $today = date('Y-m-d');

                                                $this->db->where('pay_date >=', $from);
                                                $this->db->where('pay_date <=', $today);
                                                $this->db->where('status', 'approved');
                                                $this->db->order_by('id', 'DESC');
                                                $sql = $this->db->get('expenses');
                                            }

                                            $rec = $list_of_expenses_record;
                                            $i = 0;
                                            $totalexpenses = 0;
                                            foreach ($rec as $row) :
                                                $i++;
                                            ?>
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
                                                        $subH = $row->sub_head;
                                                        $this->db->where('id', $subH);
                                                        $sqlM = $this->db->get('sub_head');
                                                        $sqlM = $sqlM->row();
                                                        echo $sqlM->sub_head;
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
                                                    <td>
                                                        <a title="Approved" href="<?php echo base_url('expenses_details/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Details"> বিস্তারিত </button>
                                                        </a>
                                                        <?php if ($userid == 'super' || $userid == 'sub' || $userid == 'accounts') { ?>


                                                            <a title="Edit" href="<?php echo base_url('edit-expenses/' . $row->id); ?>">
                                                                <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">
                                                                    সংস্কার</button>
                                                            </a>

                                                            <a title="Delete" href="<?php echo base_url('delete-expenses/' . $row->id); ?>" onClick="return confirm('Are you sure Delete This Option?');">
                                                                <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete ">
                                                                    বন্ধ </button>
                                                            </a>



                                                        <?php } else {
                                                        } ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                $totalexpenses = $totalexpenses +  $totalamount;
                                            endforeach;
                                            ?>


                                        </tbody>
                                    </table>
                                    <table style="background:#555; color:#FFF; font-family:Tahoma, Geneva, sans-serif; font-size:18px">
                                        <tr>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>
                                            <td>&nbsp; </td>


                                            <td align="center"> <span style="text-align:center">
                                                    সর্বমোট : <?php $totalexpenses;

                                                                echo BanglaConverter::totalexpenses($totalexpenses);

                                                                ?> টাকা </span></td>

                                            <td>&nbsp; </td>

                                        </tr>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
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
<!-- Preloader -->

<?php

class BanglaConverter
{
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

    public static function totalexpenses($totalexpenses)
    {
        return str_replace(self::$en, self::$bn, $totalexpenses);
    }
}
?>


<script>
    "use strict";
    $(document).ready(function() {
        function dtable() {
            $('#dataTableExample1').DataTable({
                "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                "lengthMenu": [
                    [6, 25, 50, -1],
                    [6, 25, 50, "All"]
                ],
                "iDisplayLength": 6
            });
        }
        return (dtable());
    });
</script>