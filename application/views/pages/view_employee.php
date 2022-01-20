
<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> কর্মকর্তা ও কর্মচারীবৃন্দ </h1>
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

                    <li><a href="<?php echo base_url() ?>add-new-employee"> নতুন কর্মকর্তা ও কর্মচারী সংযুক্তি </a></li>

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
                                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover dataTable">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> নাম </th>
                                                <th> পদবী </th>
                                                <th> পিতার নাম </th>
                                                <th> মাতার নাম </th>
                                                <th> মোবাইল নাম্বার </th>
                                                <th> ই-মেইল আইডি </th>
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
                                                    <td><?php echo $row->name; ?></td>
                                                    <td><?php echo $row->childen; ?></td>
                                                    <td><?php echo $row->father; ?></td>
                                                    <td><?php echo $row->mother; ?></td>
                                                    <td><?php echo $row->mobile; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td>
                                                        <a title="Approved" href="<?php echo base_url('view-employee/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved">বিস্তারিত </button>
                                                        </a>
                                                        <?php if ($userid == 'super') { ?>


                                                            <a title="Approved" href="<?php echo base_url('edit-employee/' . $row->id); ?>">
                                                                <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Update">সংস্কার</button>
                                                            </a>



                                                            <a title="Delete" href="<?php echo base_url('delete-employee/' . $row->person_id); ?>" onClick="return confirm('Are you sure Delete This Option?');">
                                                                <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete ">
                                                                    বন্ধ </button>
                                                            </a>
                                                        <?php } else {
                                                        } ?>
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
