<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> এফ ডি আর সমূহ </h1>
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
                    <li><a href="<?php echo base_url() ?>add-new-fdr-info">এফ ডি আর সংযুক্তি ফর্ম </a></li>

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
                                            <tr style="font-size:14px;">
                                                <th> ক্রমিক নং </th>
                                                <th> ব্যাংক </th>
                                                <th> শাখা </th>
                                                <th> এফ ডি আর নং </th>
                                                <th> প্রারম্ভিক এফ ডি আর </th>
                                                <th> প্রারম্ভিক খোলার তারিখ </th>
                                                <th> বর্তমান এফ ডি আর </th>
                                                <th> বর্তমান খোলার তারিখ </th>
                                                <th> মেয়াদকাল </th>
                                                <th> মুনাফার হার </th>
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
                                                    <td>
                                                        <a title="Approved" href="<?php echo base_url('view-fdr-info/' . $row->id); ?>">
                                                            <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Details"> বিস্তারিত </button>
                                                        </a>


                                                        <?php if ($userid == 'super') { ?>
                                                            <a title="Edit" href="<?php echo base_url('edit-fdr-info/' . $row->id); ?>">
                                                                <button class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">
                                                                    সংস্কার </button>
                                                            </a>
                                                            <a title="Delete" href="<?php echo base_url('delete-fdr-info/' . $row->id); ?>" onClick="return confirm('Are you sure Delete This Option?');">
                                                                <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete ">
                                                                    বন্ধ </button>
                                                            </a>



                                                        <?php } else {
                                                        } ?>
                                                        <!--   
                                                  
                                                    
                                                   -->

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