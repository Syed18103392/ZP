<?php
$sql = $single_post_data;
?>

<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1> জেলা পরিষদ কর্মকর্তা / কর্মচারীর তথ্য </h1>
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

                    <li><a href="<?php echo base_url() ?>add-new-employee"> নতুন সংযুক্তি </a></li>

                </ul>
            </div>
        </section>

        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('employee_controller/update_employee'); ?>" method="post">
                    <input type="hidden" name="pid" value="<?php echo  $sql->id; ?>" />

                    <input id="icon_prefix" type="hidden" name="personal_id" readonly="readonly" class="validate" value="<?php echo $personid =  $sql->person_id; ?>">
                    <input type="hidden" class="validate tcal" name="to_date" value="<?php echo $sql->add_date; ?>">
                    <!-- basic forms -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                সাধারণ তথ্য
                            </h2>
                            <div class="card-content">
                                <div class="row">





                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="name" value="<?php echo $sql->name;  ?>">
                                        <label> নাম </label>
                                    </div>
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="childen" value="<?php echo $sql->childen; ?>" class="validate">
                                        <label>পদবী </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="father" class="validate" value="<?php echo $sql->father;  ?>">
                                        <label for="icon_prefix"> পিতার নাম </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="mother" class="validate" value="<?php echo $sql->mother; ?>">
                                        <label for="icon_prefix"> মাতার নাম </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="potni" value="<?php echo $sql->potni; ?>">
                                        <label> স্বামী / স্ত্রীর নাম </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="nid" class="validate" value="<?php echo $sql->nid; ?>">
                                        <label for="icon_prefix"> জাতীয় পরিচয় পত্র নাম্বার </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="won_dist" class="validate" value="<?php echo $sql->district; ?>">
                                        <label for="icon_prefix"> নিজ জেলা </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="dob" value="<?php echo $sql->dob; ?>">
                                        <label> জন্ম তারিখ </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="marital" value="<?php echo $sql->marital_status; ?>">
                                        <label> বৈবাহিক অবস্থা </label>
                                    </div>



                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="persent_address" class="validate" value="<?php echo $sql->present_address; ?>">
                                        <label for="icon_prefix"> বর্তমান ঠিকানা </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="permanent_address" class="validate" value="<?php echo $sql->permanent_address; ?>">
                                        <label for="icon_prefix"> স্থায়ী ঠিকানা </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="mobile_number" class="validate" value="<?php echo $sql->mobile; ?>">
                                        <label for="icon_prefix"> মোবাইল নাম্বার </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="email" class="validate" value="<?php echo $sql->email; ?>">
                                        <label for="icon_prefix"> ই-মেইল আইডি </label>
                                    </div>

                                    <div class="input-field form-input col s6">

                                        ছবি সংযুক্তি <input id="icon_prefix" type="file" name="attach_file[]" multiple class="validate">

                                        <input type="hidden" name="attach_file2" value='<?php echo $sql->images; ?>'>

                                    </div>



                                </div>
                                <div class="row" style="background:#FFF">
                                    <div class="col-md-12" style="background:#FFF">

                                        <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                            শিক্ষাগত যোগ্যতা
                                        </h2>

                                        <span style="float:right">
                                            <input type="button" id="addRow" value="Add" />
                                            <input type="button" id="delTr" value="Delete" />
                                        </span>

                                        <table id="itemTableJ" style="background:#FFF; color:#26a69a;">
                                            <thead>
                                                <tr>
                                                    <th> পরীক্ষার নাম </th>
                                                    <th> বিষয় / বিভাগ </th>
                                                    <th> শিক্ষা প্রতিষ্ঠান </th>
                                                    <th> বোর্ড / বিশ্ববিদ্যালয় </th>
                                                    <th> পাশের বছর </th>
                                                    <th> ফলাফল</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $this->db->where('person_id', $personid);
                                            $sqlE = $this->db->get('person_edu');
                                            $recE = $sqlE->result();
                                            $num = $sqlE->num_rows();
                                            $e = 0;

                                            foreach ($recE as $rowE) {
                                                $e++;
                                            ?>
                                                <tr>
                                                    <input type="hidden" name="eid[]" value="<?php echo $rowE->id; ?>" />
                                                    <td valign="top"><input type="text" name="exam_name_ee[]" value="<?php echo $rowE->exam_name; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="subject_e[]" value="<?php echo $rowE->subject; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="institute_e[]" value="<?php echo $rowE->institute; ?>" /></td>
                                                    <td valign="top"><input type="text" name="board_e[]" value="<?php echo $rowE->board; ?>" /></td>
                                                    <td valign="top"><input type="text" name="pass_year_e[]" value="<?php echo $rowE->pass_year; ?>" /></td>
                                                    <td valign="top"><input type="text" name="result_e[]" value="<?php echo $rowE->result; ?>" /></td>
                                                </tr>
                                            <?php } ?>
                                            <tbody id="items_table" style="background:#FFF"></tbody>
                                        </table>
                                    </div>

                                </div>


                                <div class="row">
                                    <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                        চাকুরীর তথ্য
                                    </h2>
                                    <div class="col-md-12">
                                        <span style="float:right">
                                            <input type="button" id="addRowJ" value="Add" />
                                            <input type="button" id="delTrJ" value="Delete" />
                                        </span>

                                        <table id="itemTableJ" style="background:#FFF; color:#26a69a;">
                                            <thead>
                                                <tr>
                                                    <th> পদবী </th>
                                                    <th> যোগদান তারিখ </th>
                                                    <th> স্থায়ী করার তারিখ </th>

                                                    <th> এল পি আর তারিখ </th>
                                                    <th> ঠিকানা </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>

                                            <?php
                                            $this->db->where('person_id', $personid);
                                            $sqlE = $this->db->get('person_job');
                                            $recE = $sqlE->result();
                                            $numJ = $sqlE->num_rows();
                                            $e = 0;
                                            foreach ($recE as $rowE) {
                                                $e++;
                                            ?>
                                                <tr>
                                                    <input type="hidden" name="jid[]" value="<?php echo $rowE->id; ?>" />
                                                    <td valign="top"><input type="text" name="designation_j[]" value="<?php echo $rowE->job_post; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="join_j[]" value="<?php echo $rowE->join_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="confirmation_j[]" value="<?php echo $rowE->confirm_date; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="lpr_j[]" value="<?php echo $rowE->lpr_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="address_j[]" value="<?php echo $rowE->address; ?>" /></td>
                                                    <td valign="top"><input type="text" name="details_j[]" value="<?php echo $rowE->details; ?>" /></td>
                                                </tr>

                                            <?php } ?>


                                            <tbody id="items_tableJ"></tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                        প্রশিক্ষণ তথ্য
                                    </h2>
                                    <div class="col-md-12">

                                        <span style="float:right">
                                            <input type="button" id="addRowT" value="Add" />
                                            <input type="button" id="delTrT" value="Delete" />
                                        </span>

                                        <table id="itemTableT" style="background:#FFF; color:#26a69a;">
                                            <thead>
                                                <tr>
                                                    <th> কোর্সের নাম </th>
                                                    <th> প্রতিষ্ঠান </th>
                                                    <th> সময়কাল </th>
                                                    <th> শুরুর তারিখ </th>
                                                    <th> শেষ তারিখ </th>
                                                    <th> ঠিকানা </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $this->db->where('person_id', $personid);
                                            $sqlE = $this->db->get('person_tranning');
                                            $recE = $sqlE->result();
                                            $numT = $sqlE->num_rows();
                                            $e = 0;
                                            foreach ($recE as $rowE) {
                                                $e++;
                                            ?>
                                                <tr>
                                                    <input type="hidden" name="tid[]" value="<?php echo $rowE->id; ?>" />
                                                    <td valign="top"><input type="text" name="course_t[]" value="<?php echo $rowE->course; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="institute_t[]" value="<?php echo $rowE->institute; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="duration_t[]" value="<?php echo $rowE->duration; ?>" /></td>
                                                    <td valign="top"><input type="text" name="start_t[]" value="<?php echo $rowE->start_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="end_t[]" value="<?php echo $rowE->end_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="address_t[]" value="<?php echo $rowE->address; ?>" /></td>
                                                    <td valign="top"><input type="text" name="details_t[]" value="<?php echo $rowE->details; ?>" /></td>
                                                </tr>

                                            <?php } ?>



                                            <tbody id="items_tableT"></tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="row">
                                    <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                        ছুটির তথ্য
                                    </h2>
                                    <div class="col-md-12">
                                        <span style="float:right">
                                            <input type="button" id="addRowL" value="Add" />
                                            <input type="button" id="delTrL" value="Delete" />
                                        </span>

                                        <table id="itemTableL" style="background:#FFF; color:#26a69a;">
                                            <thead>
                                                <tr>
                                                    <th> ছুটির ধরণ </th>
                                                    <th> সময়কাল </th>
                                                    <th> ছুটি শুরুর তারিখ </th>
                                                    <th> ছুটি শেষ তারিখ </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $this->db->where('person_id', $personid);
                                            $sqlE = $this->db->get('person_leave');
                                            $recE = $sqlE->result();
                                            $numL = $sqlE->num_rows();
                                            $e = 0;
                                            foreach ($recE as $rowE) {
                                                $e++;
                                            ?>
                                                <tr><input type="hidden" name="lid[]" value="<?php echo $rowE->id; ?>" />
                                                    <td valign="top"><input type="text" name="leavetype_l[]" value="<?php echo $rowE->leave_type; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="time_l[]" value="<?php echo $rowE->leave_time; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="startDate_l[]" value="<?php echo $rowE->start_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="end_date_l[]" value="<?php echo $rowE->end_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="details_l[]" value="<?php echo $rowE->details; ?>" /></td>
                                                </tr>

                                            <?php } ?>
                                            <tbody id="items_tableL"></tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="row">
                                    <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                        পদোন্নতি বিবরণ
                                    </h2>
                                    <div class="col-md-12">
                                        <span style="float:right">
                                            <input type="button" id="addRowP" value="Add" />
                                            <input type="button" id="delTrP" value="Delete" />
                                        </span>

                                        <table id="itemTableP" style="background:#FFF; color:#26a69a;">
                                            <thead>
                                                <tr>
                                                    <th> পদবী </th>
                                                    <th> পদোন্নতি তারিখ </th>
                                                    <th> বেতন স্কেল </th>

                                                    <th> পূর্বের পদ </th>
                                                    <th> জি ও তারিখ </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $this->db->where('perosn_id', $personid);
                                            $sqlE = $this->db->get('person_pomoson');
                                            $recE = $sqlE->result();
                                            $numP = $sqlE->num_rows();

                                            $e = 0;
                                            foreach ($recE as $rowE) {
                                                $e++;
                                            ?>
                                                <tr><input type="hidden" name="poid[]" value="<?php echo $rowE->id; ?>" />
                                                    <td valign="top"><input type="text" name="promo_date_p[]" value="<?php echo $rowE->promotion_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="pay_scale_p[]" value="<?php echo $rowE->pay_scal; ?>" /> </td>

                                                    <td valign="top"><input type="text" name="promo_type_p[]" value="<?php echo $rowE->promo_type; ?>" /></td>
                                                    <td valign="top"><input type="text" name="go_date_p[]" value="<?php echo $rowE->go_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="details_p[]" value="<?php echo $rowE->details; ?>" /></td>
                                                </tr>

                                            <?php } ?>


                                            <tbody id="items_tableP"></tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                        শৃঙ্খলামূলক ব্যবস্থা / অপরাধমূলক প্রসিকিউশন
                                    </h2>
                                    <div class="col-md-12">

                                        <span style="float:right">
                                            <input type="button" id="addRowD" value="Add" />
                                            <input type="button" id="delTrD" value="Delete" />
                                        </span>

                                        <table id="itemTableD" style="background:#FFF; color:#26a69a;">
                                            <thead>
                                                <tr>
                                                    <th> ধরণ </th>
                                                    <th> বর্ণনা </th>
                                                    <th> বর্তমান অবস্থা </th>
                                                    <th>আদেশ / সিদ্দান্ত </th>
                                                    <th> চূড়ান্ত বিচার </th>
                                                    <th> মন্তব্য </th>
                                                </tr>
                                            </thead>

                                            <?php
                                            $this->db->where('person_id', $personid);
                                            $sqlE = $this->db->get('person_crime');
                                            $recE = $sqlE->result();
                                            $numD = $sqlE->num_rows();
                                            $e = 0;
                                            foreach ($recE as $rowE) {
                                                $e++;
                                            ?>
                                                <tr><input type="hidden" name="cid[]" value="<?php echo $rowE->id; ?>" />
                                                    <td valign="top"><input type="text" name="type_c[]" value="<?php echo $rowE->crime_type; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="details_c[]" value="<?php echo $rowE->details; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="present_status_c[]" value="<?php echo $rowE->present; ?>" /></td>
                                                    <td valign="top"><input type="text" name="judgment_c[]" value="<?php echo $rowE->judment; ?>" /></td>
                                                    <td valign="top"><input type="text" name="final_judg_c[]" value="<?php echo $rowE->final_judment; ?>" /></td>
                                                    <td valign="top"><input type="text" name="comment_c[]" value="<?php echo $rowE->comment; ?>" /></td>
                                                </tr>

                                            <?php } ?>
                                            <tbody id="items_tableD"></tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="row">
                                    <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                        পোস্টিং রেকর্ড
                                    </h2>
                                    <div class="col-md-12">

                                        <span style="float:right">
                                            <input type="button" id="addRowPO" value="Add" />
                                            <input type="button" id="delTrPO" value="Delete" />
                                        </span>

                                        <table id="itemTablePO" style="background:#FFF; color:#26a69a;">
                                            <thead>
                                                <tr>
                                                    <th> পদবী </th>
                                                    <th> সংস্থা </th>

                                                    <th> ঠিকানা </th>
                                                    <th> শুরুর তারিখ </th>
                                                    <th> শেষ তারিখ </th>
                                                    <th> বেতন কাঠামো</th>
                                                </tr>
                                            </thead>

                                            <?php
                                            $this->db->where('person_id', $personid);
                                            $sqlE = $this->db->get('person_posting');
                                            $recE = $sqlE->result();
                                            $numPO = $sqlE->num_rows();
                                            $e = 0;
                                            foreach ($recE as $rowE) {
                                                $e++;
                                            ?>
                                                <tr><input type="hidden" name="posid[]" value="<?php echo $rowE->id; ?>" />
                                                    <td valign="top"><input type="text" name="post_po[]" value="<?php echo $rowE->post; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="organization_po[]" value="<?php echo $rowE->organization; ?>" /> </td>
                                                    <td valign="top"><input type="text" name="post_type_po[]" value="<?php echo $rowE->post_type; ?>" /></td>
                                                    <td valign="top"><input type="text" name="address_po[]" value="<?php echo $rowE->address; ?>" /></td>
                                                    <td valign="top"><input type="text" name="start_date_po[]" value="<?php echo $rowE->start_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="end_date_po[]" value="<?php echo $rowE->end_date; ?>" /></td>
                                                    <td valign="top"><input type="text" name="pay_scal_po[]" value="<?php echo $rowE->pay_scal; ?>" /></td>
                                                </tr>

                                            <?php } ?>
                                            <tbody id="items_tablePO"></tbody>
                                        </table>
                                    </div>
                                </div>



                                <input type="hidden" name="uid" value="<?php echo $userid; ?>">

                                <button type="submit" name="submit" class="btn btn-success">Update Information <span class="glyphicon glyphicon-send"></span></button>



                            </div>
                        </div>
                    </div>
                    <!-- ./basic forms -->

                    <!-- forms cntrol -->
                </form>
            </div>
            <!-- ./bootstrap forms -->
        </div>
        <!-- ./cotainer -->

    </div>
    <!-- ./page-content -->


</div>
<!-- ./page-content-wrapper -->

</div>
<!-- ./page-wrapper -->

<script type="text/javascript">
    $('#addRow').click(function() {
        addItem();
    });

    $('#addRowJ').click(function() {
        addItemJ();
    });


    $('#addRowT').click(function() {
        addItemT();
    });

    $('#addRowL').click(function() {
        addItemL();
    });

    $('#addRowP').click(function() {
        addItemP();
    });

    $('#addRowD').click(function() {
        addItemD();
    });

    $('#addRowPO').click(function() {
        addItemPO();
    });


    $('#items_table').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });

    $('#items_tableJ').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });

    $('#items_tableT').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });


    $('#items_tableL').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });

    $('#items_tableP').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });

    $('#items_tableD').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });

    $('#items_tablePO').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });



    $('#taxPercentage').change(function() {
        calculateTotals(); // user changed tax percentage, recalculate everything
    });

    function addItem() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="exam_name_ee[]" style="width:100px" class="form-control" placeholder="পরীক্ষার নাম" /></td>' +
            '<td><input type="text" name="subject_e[]" style="width:100px;" class="form-control" placeholder="বিষয় / বিভাগ"> </td>' +
            '<td><input type="text" name="institute_e[]" style="width:230px" class="form-control" placeholder="শিক্ষা প্রতিষ্ঠান" /></td>' +
            '<td><input type="text" name="board_e[]" style="width:230px" class="form-control"  placeholder="বোর্ড / বিশ্ববিদ্যালয়" /></td>' +
            '<td><input type="text" name="pass_year_e[]" style="width:100px" class="form-control"  placeholder="পাশের বছর" /></td>' +
            '<td><input type="text" name="result_e[]" style="width:100px" class="form-control"  placeholder="ফলাফল" /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_table").append(itemRow);
    }
    <?php if ($num < 1) { ?>
        addItem(); //call function on load to add the first item

    <?php } ?>

    function addItemJ() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="designation_j[]" style="width:100px" class="form-control" placeholder="পদবী" /></td>' +
            '<td><input type="text" name="confirmation_j[]" style="width:140px;" class="form-control" placeholder="স্থায়ী করার তারিখ"> </td>' +
            '<td><input type="text" name="join_j[]" style="width:140px" class="form-control" placeholder="যোগদান তারিখ" /></td>' +
            '<td><input type="text" name="lpr_j[]" style="width:140px" class="form-control"  placeholder="এল পি আর তারিখ" /></td>' +
            '<td><input type="text" name="address_j[]" style="width:200px" class="form-control"  placeholder="ঠিকানা" /></td>' +
            '<td><input type="text" name="details_j[]" style="width:200px" class="form-control"  placeholder=" বর্ণনা " /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tableJ").append(itemRow);
    }
    <?php if ($numJ < 1) { ?>

        addItemJ(); //call function on load to add the first item
    <?php } ?>


    function addItemT() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="course_t[]" style="width:100px" class="form-control" placeholder="কোর্সের নাম" /></td>' +
            '<td><input type="text" name="institute_t[]" style="width:100px;" class="form-control" placeholder="প্রতিষ্ঠান"> </td>' +
            '<td><input type="text" name="duration_t[]" style="width:100px" class="form-control" placeholder="সময়কাল" /></td>' +
            '<td><input type="text" name="start_t[]" style="width:100px" class="form-control"  placeholder="শুরুর তারিখ" /></td>' +
            '<td><input type="text" name="end_t[]" style="width:100px" class="form-control"  placeholder="শেষ তারিখ" /></td>' +
            '<td><input type="text" name="address_t[]" style="width:100px" class="form-control"  placeholder="ঠিকানা" /></td>' +
            '<td><input type="text" name="details_t[]" style="width:100px" class="form-control"  placeholder="বর্ণনা" /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tableT").append(itemRow);
    }
    <?php if ($numT < 1) { ?>

        addItemT(); //call function on load to add the first item

    <?php } ?>

    /// Leave Information

    function addItemL() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="leavetype_l[]" style="width:200px" class="form-control" placeholder="ছুটির ধরণ" /></td>' +
            '<td><input type="text" name="time_l[]" style="width:150px;" class="form-control" placeholder="সময়কাল"> </td>' +
            '<td><input type="text" name="startDate_l[]" style="width:150px" class="form-control" placeholder="ছুটি শুরুর তারিখ" /></td>' +
            '<td><input type="text" name="end_date_l[]" style="width:150px" class="form-control"  placeholder="ছুটি শেষ তারিখ" /></td>' +
            '<td><input type="text" name="details_l[]" style="width:200px" class="form-control"  placeholder=" বর্ণনা " /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tableL").append(itemRow);
    }
    <?php if ($numL < 1) { ?>

        addItemL(); //call function on load to add the first item
    <?php } ?>

    // Promotion Information

    function addItemP() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="rank_p[]" style="width:100px" class="form-control" placeholder="পদবী" /></td>' +
            '<td><input type="text" name="pay_scale_p[]" style="width:150px;" class="form-control" placeholder="বেতন স্কেল "> </td>' +
            '<td><input type="text" name="promo_date_p[]" style="width:150px" class="form-control" placeholder="পদোন্নতি তারিখ" /></td>' +
            '<td><input type="text" name="promo_type_p[]" style="width:150px" class="form-control"  placeholder="পদোন্নতির ধরণ" /></td>' +
            '<td><input type="text" name="go_date_p[]" style="width:100px" class="form-control"  placeholder="জি ও তারিখ" /></td>' +
            '<td><input type="text" name="details_p[]" style="width:200px" class="form-control"  placeholder="বর্ণনা" /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tableP").append(itemRow);
    }
    <?php if ($numP < 1) { ?>

        addItemP(); //call function on load to add the first item
    <?php } ?>

    // Promotion Information

    function addItemD() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="type_c[]" style="width:100px" class="form-control" placeholder="ধরণ" /></td>' +
            '<td><input type="text" name="details_c[]" style="width:150px;" class="form-control" placeholder="বর্ণনা"> </td>' +
            '<td><input type="text" name="present_status_c[]" style="width:150px" class="form-control" placeholder="বর্তমান অবস্থা" /></td>' +
            '<td><input type="text" name="judgment_c[]" style="width:150px" class="form-control"  placeholder="রায়" /></td>' +
            '<td><input type="text" name="final_judg_c[]" style="width:100px" class="form-control"  placeholder="চূড়ান্ত বিচার" /></td>' +
            '<td><input type="text" name="comment_c[]" style="width:200px" class="form-control"  placeholder="মন্তব্য" /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tableD").append(itemRow);
    }
    <?php if ($numD < 1) { ?>

        addItemD(); //call function on load to add the first item
    <?php } ?>

    // Promotion Information

    function addItemPO() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="post_po[]" style="width:100px" class="form-control" placeholder="পদবী" /></td>' +
            '<td><input type="text" name="organization_po[]" style="width:150px;" class="form-control" placeholder="সংস্থা"> </td>' +
            '<td><input type="text" name="address_po[]" style="width:150px" class="form-control"  placeholder="ঠিকানা" /></td>' +
            '<td><input type="text" name="start_date_po[]" style="width:100px" class="form-control"  placeholder="শুরুর তারিখ" /></td>' +
            '<td><input type="text" name="end_date_po[]" style="width:100px" class="form-control"  placeholder="শেষ তারিখ" /></td>' +
            '<td><input type="text" name="pay_scal_po[]" style="width:100px" class="form-control"  placeholder="বেতন কাঠামো" /></td>' +
            '<td>&nbsp;</td>' +
            '</tr>';
        $("#items_tablePO").append(itemRow);
    }
    <?php if ($numPO < 1) { ?>

        addItemPO(); //call function on load to add the first item
    <?php } ?>
</script>


<script type="text/javascript">
    $('#delTr').click(function() {
        $('#itemTable tr:last').remove();
        calculateTotals();
    });


    $('#delTrJ').click(function() {
        $('#itemTableJ tr:last').remove();
        calculateTotals();
    });

    $('#delTrT').click(function() {
        $('#itemTableT tr:last').remove();
        calculateTotals();
    });


    $('#delTrL').click(function() {
        $('#itemTableL tr:last').remove();
        calculateTotals();
    });

    $('#delTrP').click(function() {
        $('#itemTableP tr:last').remove();
        calculateTotals();
    });

    $('#delTrD').click(function() {
        $('#itemTableD tr:last').remove();
        calculateTotals();
    });

    $('#delTrPO').click(function() {
        $('#itemTablePO tr:last').remove();
        calculateTotals();
    });

    $(document).ready(function(e) {
        $("#discount").bind('keyup', function(e) {
            var val = $(this).val();
            var subto = $("#subtotal").val();

            var main_amt = subto - val;

            $("#grandtotal").val(main_amt);
        });

    });
</script>