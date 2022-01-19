<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> ব্যাংক ব্যালেন্স শীট </h1>
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
                                                <th> ক্রমিক নং</th>
                                                <th> ব্যাংকের নাম </th>
                                                <th> শাখার নাম </th>
                                                <th> হিসাব নাম্বার </th>
                                                <th> প্রারম্ভিক স্থিতি </th>
                                                <th> হিসাব খোলার তারিখ </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $this->db->order_by('id', 'ASC');
                                            $sql = $this->db->get('bank_info');
                                            $rec = $sql->result();
                                            $i = 0;
                                            foreach ($rec as $row) :
                                                $i++;

                                            ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td class="center"><?php echo $row->bank_name; ?></td>
                                                    <td class="center"><?php echo $row->branch_name; ?></td>
                                                    <td class="center"><?php echo $row->account_no; ?></td>
                                                    <td class="center"><?php echo $row->opening_balance; ?></td>
                                                    <td class="center"><?php echo $row->open_date; ?></td>
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
