<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> দরপত্র সমূহ </h1>
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
                    <!-- <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>Recoad/new_terder"> নতুন দরপত্র সংযুক্তি </a></li>
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

                                                <th> অর্থ বছর </th>
                                                <th> বাজেটের ধরন </th>
                                                <th> বাস্তবায়ন ধরন</th>
                                                <th> উপজেলা </th>
                                                <th> উন্নয়ন নাম </th>
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
                                                    <td class="center"><?php echo $row->session; ?></td>
                                                    <td class="center"> <?php echo  $budget = $row->budget_type; ?> </td>
                                                    <td class="center"><?php echo $row->implemention; ?></td>
                                                    <td class="center">
                                                        <?php
                                                        $location = $row->thana;
                                                        if ($location == 'ফেনী সদর') {
                                                            echo "ফেনী সদর";
                                                        } elseif ($location == 'দাগনভূঁঞা') {
                                                            echo "দাগনভূঁঞা";
                                                        } elseif ($location == 'সোনাগাজী') {
                                                            echo "সোনাগাজী";
                                                        } elseif ($location == 'ফুলগাজী') {
                                                            echo "ফুলগাজী";
                                                        } elseif ($location == 'পরশুরাম') {
                                                            echo "পরশুরাম";
                                                        } elseif ($location == 'ছাগলনাইয়া') {
                                                            echo "ছাগলনাইয়া";
                                                        } else {
                                                            echo "";
                                                        }

                                                        ?>
                                                    </td>
                                                    <td class="center"><?php echo $row->project_name; ?></td>

                                                    <td>
                                                        <a title="Approved" href="<?php echo base_url('view-project/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Details">বিস্তারিত </button>
                                                        </a>


                                                        <?php if ($userid == 'super' || $userid == 'sub' || $userid == 'accounts') { ?>


                                                            <a title="Edit" href="<?php echo base_url('edit-project/' . $row->id); ?>">
                                                                <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">
                                                                    সংস্কার </button>
                                                            </a>

                                                            <a title="Delete" href="<?php echo base_url('delete-project/' . $row->id); ?>" onClick="return confirm('Are you sure Delete This Option?');">
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
<!-- Preloader -->

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