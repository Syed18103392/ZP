<script language="javascript">
    function printdiv(printpage) {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>


<!-- Sidebar -->

<div id="sidebar-wrapper" class="waves-effect" data-simplebar>

    <div class="navbar-default sidebar" role="navigation">

        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">
                <li class="active-link"><a href="<?php echo base_url(); ?>"><i class="material-icons">dashboard</i>
                        মেনু-বার </a></li>
                <li>
                    <a><i class="material-icons">add_to_photos</i> আয় <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url() ?>add_income"> আয় (নতুন)</a></li>
                        <li><a href="<?php echo base_url() ?>view_income"> আয় (অনিষ্পন্ন)</a></li>
                        <li><a href="<?php echo base_url() ?>income_list"> আয় (সকল) </a></li>
                        <li><a href="<?php echo base_url() ?>opening_income"> প্রারম্ভিক স্থিতি </a></li>
                    </ul>
                </li>


                <li>
                    <a><i class="material-icons">add_to_photos</i> ব্যয় <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url() ?>add_expenses">ব্যয় (নতুন) </a></li>
                        <li><a href="<?php echo base_url() ?>view_expenses">ব্যয় (অনিষ্পন্ন) </a></li>
                        <li><a href="<?php echo base_url() ?>expenditure_list"> ব্যয় (সকল) </a></li>

                        <li><a href="<?php echo base_url() ?>contractor_bill"> পি.আই.সি / ঠিকাদার বিল(অনিষ্পন্ন) </a></li>
                        <li><a href="<?php echo base_url() ?>contractor-bill-list">পি.আই.সি / ঠিকাদার বিল (সকল)</a></li>
                        <li><a href="<?php echo base_url() ?>new_contractor_bill"> পি.আই.সি / ঠিকাদার বিল (সংযুক্তি)</a></li>

                    </ul>
                </li>


                <li>
                    <a><i class="material-icons">add_to_photos</i> রেকর্ড <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li><a href="<?php echo base_url() ?>record-project-tender"> প্রকল্প </a></li>
                        <li><a href="<?php echo base_url() ?>record-tranning-info">প্রশিক্ষণ </a></li>
                        <li><a href="<?php echo base_url() ?>record-audit-info"> অডিট </a></li>
                        <li><a href="<?php echo base_url() ?>record-case-info"> মামলা </a></li>
                        <li><a href="<?php echo base_url() ?>record-tender"> দরপত্র </a></li>
                        <li><a href="<?php echo base_url() ?>record-fdr-info"> এফ-ডি-আর </a></li>
                        <li><a href="<?php echo base_url() ?>record-land-lease"> ভূমি ইজারা </a></li>
                        <li><a href="<?php echo base_url() ?>record-land-recoad"> ভূমি রেকর্ড </a></li>
                        <li><a href="<?php echo base_url() ?>record-land-record_info"> মালিকানাধীন জমির তথ্য </a></li>
                        <li><a href="<?php echo base_url() ?>record-others-record">রেকর্ড (অন্যান্য)</a></li>
            

                    </ul>
                </li>

                <li>
                    <a><i class="material-icons">add_to_photos</i> রিপোর্ট <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo base_url() ?>Report/income_report">আয় রিপোর্ট </a></li>
                        <li><a href="<?php echo base_url() ?>Report/expenses_report">ব্যয় রিপোর্ট </a></li>
                        <li><a href="<?php echo base_url() ?>Report/Balance_sheet">ব্যালেন্স শীট </a></li>
                        <li><a href="<?php echo base_url() ?>Report/bank_report">ব্যাংক রিপোর্ট </a></li>
                        <li><a href="<?php echo base_url() ?>Report/bank_balance_sheet">ব্যাংক ব্যালেন্স শীট </a></li>
                        <li><a href="<?php echo base_url() ?>Report/land_recoad_report"> ভূমি রেকর্ড রিপোর্ট</a></li>
                        <li><a href="<?php echo base_url() ?>budget_allocation">বাজেট রিপোর্ট </a></li>
                        <li><a href="<?php echo base_url() ?>Report/project_report"> প্রকল্পের রিপোর্ট </a></li>
                        <li><a href="<?php echo base_url() ?>Report/fdr_report"> এফ ডি আর রিপোর্ট </a></li>
                    </ul>
                </li>
            </ul>
            <!-- ./sidebar-nav -->
        </div>
        <!-- ./sidebar -->
    </div>
    <!-- ./sidebar-nav -->
</div>
<!-- ./sidebar-wrapper end-->