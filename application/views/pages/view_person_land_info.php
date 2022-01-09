<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> জেলা পরিষদ এর মালিকানাধীন ভূমি সংক্রান্ত তথ্য </h1>
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

                    <li><a href="<?php echo base_url() ?>add-new-person-land-info"> মালিকানাধীন ভূমি সংযুক্তি </a></li>

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
                                                <th> উপজেলা </th>
                                                <th> মৌজার নাম </th>
                                                <th> সি এস খতিয়ান নং </th>
                                                <th> কার্যক্রিয়া </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $this->db->order_by('id', 'DESC');
                                            $sql = $this->db->get('person_land_info');
                                            $rec = $list_of_pending_record;
                                            $i = 0;
                                            foreach ($rec as $row) :
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td class="center"><?php $location = $row->thana_name;
                                                                        if ($location == 'ফেনী সদর') {
                                                                            echo "ফেনী সদর";
                                                                        } elseif ($location == 'দাগনভূঁঞা') {
                                                                            echo "দাগনভূঁঞা";
                                                                        } elseif ($location == 'সোনাগাজী') {
                                                                            echo "সোনাগাজী";
                                                                        } elseif ($location == 'ফুলগাজী') {
                                                                            echo "ফুলগাজী";
                                                                        } elseif (
                                                                            $location == 'পরশুরাম'
                                                                        ) {
                                                                            echo "পরশুরাম";
                                                                        } elseif (
                                                                            $location == 'ছাগলনাইয়া'
                                                                        ) {
                                                                            echo "ছাগলনাইয়া";
                                                                        } else {
                                                                            echo "";
                                                                        }
                                                                        ?>
                                                    </td>
                                                    <td class="center"><?php echo $row->moja_name; ?></td>
                                                    <td class="center"><?php echo $row->khotian_no; ?></td>

                                                    <td>
                                                        <a title="Details" href="<?php echo base_url('view-person-land-info/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Details">বিস্তারিত </button> </a><?php if ($userid == 'super' or $userid == 'sub') { ?>

                                                            <a title="Edit" href="<?php echo base_url('edit-person-land-info/' . $row->khotian_no); ?>"> <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">
                                                                    <i class="fa fa-pencil" aria-hidden="true"> সংস্কার </i></button>
                                                            </a>

                                                            <a title="Delete" href="<?php echo base_url('delete-person-land-info/' . $row->khotian_no); ?>" onClick="return confirm('Are you sure Delete This Option?');">
                                                                <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete ">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"> বন্ধ </i></button>
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