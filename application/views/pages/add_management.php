<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-table"></i>
            </div>
            <div class="header-title">
                <h1>জেলা পরিষদ </h1>

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
                    <!-- <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> -->
                    <li><a href="<?php echo base_url() ?>add-new-management"> সদস্য সংযুক্তি </a></li>

                </ul>
            </div>
        </section>
        <!-- page section -->
        <form enctype="multipart/form-data" action="<?php echo site_url('management_controller/add_management'); ?>" method="post" class="col s12 m-t-20">
            <div class="container-fluid">
                <div class="row">
                    <!-- basic forms -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">

                            <div class="card-content">
                                <div class="row">

                                    <h2 style="background:#549ab2; text-align:center; height:30px; line-height:30px; color:#FFF"> সাধারন তথ্য</h2>
                                    <input id="icon_prefix" type="hidden" name="manaid" class="validate" value="<?php echo time(); ?>">
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="name" class="validate">
                                        <label for="icon_prefix"> নাম </label>
                                    </div>
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <select class="validate " name="childen" style="visibility: collapse;display:none!important";>
                                            <option value=""> চিহ্নিত করুন </option>
                                            <option value=" চেয়ারম্যান">চেয়ারম্যান</option>
                                            <option value="সদস্য">সদস্য</option>
                                            <option value="প্যানেল চেয়ারম্যান">প্যানেল চেয়ারম্যান</option>
                                            <option value="প্যানেল চেয়ারম্যান ১">প্যানেল চেয়ারম্যান ১</option>
                                            <option value="প্যানেল চেয়ারম্যান ২">প্যানেল চেয়ারম্যান ২</option>
                                            <option value="প্যানেল চেয়ারম্যান ৩">প্যানেল চেয়ারম্যান ৩</option>

                                        </select>
                                        <label>পদবী </label>
                                    </div>
                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="father">
                                        <label>পিতার নাম </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="mother" class="validate">
                                        <label for="icon_prefix"> মাতার নাম </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="spouse">
                                        <label> স্বামী / স্ত্রীর নাম </label>
                                    </div>



                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="blood" class="validate">
                                        <label for="icon_prefix"> রক্তের গ্রুপ </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="nid_number">
                                        <label> জাতীয় পরিচয় পত্র নাম্বার </label>
                                    </div>



                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate tcal" name="dob">
                                        <label> জন্ম তারিখ </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="word">
                                        <label> ওয়ার্ড নং / গ্রাম </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="union">
                                        <label> ইউনিয়ন </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="thana">
                                        <label> থানা </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="dist">
                                        <label> জেলা </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="eduction">
                                        <label>শিক্ষাগত যোগ্যতা </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate tcal" name="join_date">
                                        <label> শপথ গ্রহন তারিখ </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate tcal" name="first_meeting">
                                        <label> প্রথম মিটিং তারিখ </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="duration">
                                        <label> মেয়াদ কাল </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" name="address" class="validate">
                                        <label for="icon_prefix"> ঠিকানা </label>
                                    </div>

                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="mobile">
                                        <label>মোবাইল নাম্বার </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="email">
                                        <label> ই-মেইল </label>
                                    </div>


                                    <div class="input-field form-input col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" class="validate" name="today" value="<?php echo date('d-m-Y'); ?>">
                                        <label> এন্ট্রি তারিখ </label>
                                    </div>



                                    <div class="col s6">

                                        <p style="margin-left:10px;">
                                            &nbsp; ছবি সংযুক্তি
                                            <input type="file" name="picture[]">
                                        </p>
                                    </div>

                                    <!--  
                                                <div class="input-field form-input col s6">
                                                     সম্পত্তির তথ্য <input type="file" class="validate" name="asset[]" multiple>
                                                  
                                                </div> -->
                                </div>

                                <div class="row">

                                    <div class="col-md-12" style="background:#FFF">

                                        <h2 style="background:#549ab2; text-align:center; height:40px; line-height:40px; color:#FFF">
                                            বিদেশ ভ্রমন তথ্য </h2>

                                        <span style="float:right">
                                            <input type="button" id="addRow" value="Add" />
                                            <input type="button" id="delTr" value="Delete" />
                                        </span>

                                        <table id="itemTable" style="background:#FFF;">
                                            <thead style="background:#FFF">
                                                <tr>
                                                    <th> তারিখ হইতে </th>
                                                    <th> তারিখ পর্যন্ত</th>
                                                    <th> দেশের নাম </th>
                                                    <th> উদ্দেশ্য </th>
                                                    <th> বর্ণনা </th>
                                                </tr>
                                            </thead>
                                            <tbody id="items_table" style="background:#FFF"></tbody>
                                        </table>
                                    </div>

                                    <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                    <div class="form-group">

                                        <div class="col-md-5">
                                            <i class="material-icons prefix"> &nbsp; </i>
                                            <i class="material-icons prefix"> &nbsp; </i>
                                            <i class="material-icons prefix"> &nbsp; </i>
                                            <button type="submit" name="submit" class="btn btn-success">
                                                তথ্য সংরক্ষণ
                                                <span class="glyphicon glyphicon-send"></span></button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- ./basic forms -->

                    <!-- forms cntrol -->

                </div>
                <!-- ./bootstrap forms -->
            </div>
            <!-- ./cotainer -->
        </form>
    </div>
    <!-- ./page-content -->
</div>
<!-- ./page-content-wrapper -->
</div>
<!-- ./page-wrapper -->


<!-- End Theme label Script-->
<script>
    "use strict";
    $(function() {
        $('select').material_select();
        Materialize.updateTextFields();
        // autocomplete
        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'https://placehold.it/250x250'
            },
            limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
            onAutocomplete: function(val) {
                // Callback function when value is autcompleted.
            },
            minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
        });

        //datepicker
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>
<script>
    function addItem() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" name="from_date[]" style="width:100px" class="form-control tcal" placeholder="তারিখ হইতে"/></td>' +
            '<td><input type="text" name="to_date[]" style="width:100px;" class="form-control tcal" placeholder="তারিখ পর্যন্ত"> </td>' +
            '<td><input type="text" name="country[]" style="width:230px" class="form-control" placeholder="দেশের নাম" /></td>' +
            '<td><input type="text" name="purpose[]" style="width:230px" class="form-control"  placeholder="উদ্দেশ্য" /></td>' +
            '<td><input type="text" name="details[]" style="width:100px" class="form-control"  placeholder="বর্ণনা" /></td>' +
            '</tr>';
        $("#items_table").append(itemRow);
    }
    addItem(); //call function on load to add the first item


    $('#delTr').click(function() {
        $('#itemTable tr:last').remove();
        // calculateTotals();
    });

    $('#addRow').click(function() {
        addItem();
    });
</script>