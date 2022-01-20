<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1>ইউজার সমূহ </h1>
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

                    <li><a href="<?php echo base_url() ?>add-new-user"> নতুন ইউজার সংযুক্তি</a></li>

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
                                                <th> ইউজার ধরন </th>
                                                <th> ইউজার </th>
                                                <th> ইউজার আইডি </th>
                                                <th> পাসওয়ার্ড </th>
                                                <th> লগইন স্ট্যাটাস </th>
                                                <th> ক্রিয়াকার্য </th>
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
                                                    <td class="center"><?php
                                                                        $type = $row->user_type;
                                                                        if ($type == 'super') {
                                                                            echo "এডমিন";
                                                                        } elseif ($type == 'sub') {
                                                                            echo "সাব এডমিন";
                                                                        } elseif ($type == 'accounts') {
                                                                            echo "অ্যাকাউন্ট সেকশন";
                                                                        } elseif ($type == 'office') {
                                                                            echo "অফিস সেকশন";
                                                                        } elseif ($type == 'recoad') {
                                                                            echo "রেকর্ড সেকশন";
                                                                        } elseif ($type == 'engineer') {
                                                                            echo "প্রকৌশলী সেকশন";
                                                                        } elseif ($type == 'land') {
                                                                            echo "জমি লিজ সেকশন";
                                                                        } elseif ($type == 'computer') {
                                                                            echo " কম্পিউটার অপারেটর";
                                                                        } elseif ($type == 'marketT') {
                                                                            echo "মার্কেট ও  প্রশিক্ষণ সেকশন";
                                                                        } else {
                                                                        }

                                                                        ?></td>
                                                    <td class="center"><?php echo $row->name; ?></td>
                                                    <td class="center"><?php echo $row->user_id; ?></td>
                                                    <td class="center"><?php echo $row->password; ?></td>
                                                    <td class="center">
                                                        <?php
                                                        $status = $row->status;
                                                        if ($status == 'Panding') { ?>
                                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "> অনিষ্পন্ন </button>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved"> অনুমোদিত </button>
                                                        <?php } ?>


                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($status == 'Panding') { ?>
                                                            <a title="Approved" href="<?php echo base_url('user_controller/approve_user/' . $row->id); ?>">
                                                                <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Approved"> অনুমোদিত </button></a> <?php
                                                                                                                                                                            } else {
                                                                                                                                                                                ?>
                                                            <a title="Approved" href="<?php echo base_url('user_controller/decline_user/' . $row->id); ?>">
                                                                <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Panding"> অনিষ্পন্ন </button></a>

                                                            <a title="Approved" href="<?php echo base_url('user_controller/edit_user_details/' . $row->id); ?>">
                                                                <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Edit"> সংস্কার </button></a>
                                                        <?php  } ?>

                                                        <a title="Delete" href="<?php echo base_url('user_controller/delete_single_user/' . $row->id); ?>" onClick="return confirm('Are you sure?');"><button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i> বন্ধ </button></a>


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
