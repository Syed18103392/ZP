<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> ইউজার </h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>add-new-user"> নতুন ইউজার সংযুক্তি</a></li>
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
                                <form class="form-horizontal" action="<?php echo site_url('user_controller/add_user'); ?>" method="post">
                                    <h2 class="text-center"> নতুন ইউজার সংযুক্তি </h2>
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"> ইউজার ধরণ </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <select class="icons" name="type">
                                                        <option value="" disabled selected> ইউজার ধরণ </option>
                                                        <option value="super"> চেয়ারম্যান</option>
                                                        <option value="super">সিইও</option>
                                                        <option value="super">এডমিন </option>
                                                        <option value="sub">সাব এডমিন </option>
                                                        <option value="accounts">একাউন্টস সেকশন </option>
                                                        <option value="office"> অফিস সেকশন </option>
                                                        <option value="recoad"> রেকর্ড সেকশন </option>
                                                        <option value="engineer"> প্রকৌশলী সেকশন </option>
                                                        <option value="land"> জমি লিজ সেকশন </option>
                                                        <option value="computer"> কম্পিউটার অপারেটর </option>
                                                        <option value="marketT"> মার্কেট ও প্রশিক্ষণ সেকশন </option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">ইউজার নাম </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input type="text" name="user" placeholder="ইউজার নাম">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label">ইউজার আইডি </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input type="text" name="userid" placeholder="ইউজার আইডি">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">পাসওয়ার্ড </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input type="password" name="password" placeholder="পাসওয়ার্ড">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">এন্ট্রি তারিখ </label>
                                            <div class="col-md-4">
                                                <div class="input-field">
                                                    <input type="text" name="date" class="tcal" value="<?php echo date('d-m-Y'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

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