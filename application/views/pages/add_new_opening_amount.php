<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> প্রারম্ভিক স্থিতি </h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>new_opening_amount"> প্রারম্ভিক স্থিতি সংযুক্তি</a></li>
                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <!-- basic forms -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="row">
                                <form class="form-horizontal" action="<?php echo site_url('income_controller/add_new_opening_amount'); ?>" method="post">
                                    <h2 class="text-center"> প্রারম্ভিক স্থিতি সংযুক্তি </h2>
                                    <fieldset>
                                        <!-- Text input-->

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> অর্থবছর </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <select class="icons" name="session">
                                                        <option value="" disabled selected> চিহ্নিত করুন </option>
                                                        <?php
                                                        for ($i = 2010; $i < 2100; $i++) { ?>
                                                            <option> <?php echo $i; ?>-<?php echo $i + 1; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">স্থিতির ধরণ </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <select class="icons" name="type">
                                                        <option value="" disabled selected> চিহ্নিত করুন </option>
                                                        <option value="01"> রাজস্ব </option>
                                                        <option value="02">এ ডি পি </option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> প্রারম্ভিক স্থিতি </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input type="number" name="amount" placeholder="  প্রারম্ভিক স্থিতি">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> প্রারম্ভিক স্থিতির মাস </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input type="text" name="month" class="tcal" placeholder=" প্রারম্ভিক স্থিতির মাস  ">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-md-4 control-label">এন্ট্রি তারিখ</label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input type="text" name="entryDate" placeholder="এন্ট্রি তারিখ" class="tcal">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="form-group">
                                                <input type="hidden" name="uid" value="<?php echo $userid; ?>">
                                            </div>

                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>
                                            <div class="col-md-4">
                                                <input type="submit" name="submit" class="btn btn-success" value="তথ্য সংরক্ষণ">
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ./basic forms -->

            </div>
            <!-- ./bootstrap forms -->
        </div>
        <!-- ./row -->
    </div>
    <!-- ./cotainer -->
</div>
<!-- ./page-content -->
</div>
<!-- ./page-content-wrapper -->
