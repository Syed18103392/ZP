<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> অনিষ্পন্ন পি.আই.সি / ঠিকাদার বিল সমূহ </h1>
                <?php
                $su = $this->session->userdata('status');
                if (isset($su)) { ?>
                    <div style="width:50%" class="alert alert-success alert-dismissable fade in z-depth-1">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $su; ?></strong>
                    </div>
                <?php
                }

                $this->session->unset_userdata('status');
                ?>

                <ul class="link hidden-xs">
                    <!--  <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Page/new_contractor_bill"> পি.আই.সি / ঠিকাদার বিল বিল সংযুক্তি </a></li>

                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="table-responsive">
                                <div id="printableArea">
                                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> বিলের ধরন </th>
                                                <th> অর্থ বছর </th>
                                                <th> প্রকল্পের নাম </th>
                                                <th> প্রক্কলিত মূল্য </th>
                                                <th> বিলের ধরন </th>
                                                <th> সর্বমোট টাকা </th>
                                                <th>এন্ট্রি তারিখ </th>
                                                <th> কার্যক্রিয়া </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $rec = $list_of_pending_record;
                                            $i = 0;
                                            foreach ($rec as $row) :
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php
                                                        $type = $row->bill_type;
                                                        if ($type = "01") {
                                                            echo "পি আই সি";
                                                        } else {
                                                            echo "ঠিকাদার বিল";
                                                        }

                                                        ?></td>
                                                    <td><?php echo $row->session; ?></td>
                                                    <td class="center"><?php echo $pid =  $row->project_name;

                                                                        ?></td>
                                                    <td class="center"><?php echo $row->contract_price; ?></td>
                                                    <td class="center"><?php echo $row->advance_price; ?></td>
                                                    <td class="center"><?php echo $row->total_amount; ?></td>
                                                    <td class="center"><?php echo $row->add_date; ?></td>
                                                    <td>
                                                        <a title="Approved" href="<?php echo base_url('contractor_bill_details/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved"> বিস্তারিত </button>
                                                        </a>

                                                        <?php if ($userid == 'super' || $userid == 'sub' || $userid == 'accounts') { ?>
                                                            <a title="Approved" href="<?php echo base_url('approve-contractor-bill/' . $row->id); ?>">
                                                                <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved">অনুমোদিত</button>
                                                            </a>

                                                        <?php } else {
                                                        } ?>

                                                        <a title="Edit" href="<?php echo base_url('edit-contractor-bill/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">
                                                                সংস্কার </button>
                                                        </a>

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