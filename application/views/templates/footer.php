        <!-- Preloader -->

        <div id="preloader">

            <div class="preloader-position">

                <div class="preloader-wrapper big active">

                    <div class="spinner-layer spinner-teal">

                        <div class="circle-clipper left">

                            <div class="circle"></div>

                        </div>

                        <div class="gap-patch">

                            <div class="circle"></div>

                        </div>

                        <div class="circle-clipper right">

                            <div class="circle"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- End Preloader -->
<!-- jQuery -->

        <script src="assets/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>

<!-- jquery-ui -->

<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>

<!-- Bootstrap -->

<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- materialize  -->

<script src="assets/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>

<!-- metismenu-master -->

<script src="assets/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>

<!-- SlimScroll -->

<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>

<!-- m-custom-scrollbar -->

<script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>

<!-- scroll -->

<script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

<!-- custom js -->

<script src="assets/dist/js/custom.js" type="text/javascript"></script>

<!-- End Core Plugins

     =====================================================================-->

<!-- Start Page Lavel Plugins

     =====================================================================-->

<!-- Sparkline js -->

<script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>

<!-- Counter js -->

<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

<!-- ChartJs JavaScript -->

<script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>

<!-- Monthly js -->

<script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>



<!-- End Page Lavel Plugins

     =====================================================================-->

<!-- Start Theme label Script

     =====================================================================-->

<!-- main js-->

<script src="assets/dist/js/main.js" type="text/javascript"></script>

<!-- End Theme label Script

     =====================================================================-->

<script>

    $(document).ready(function () {

        "use strict";

        // Message

        function slscroll() {

            $('.chat_list , .activity-list , .message_inner').slimScroll({

                size: '3px',

                height: '320px',

                allowPageScroll: true,

                railVisible: true

            });

        }

        slscroll();

        function chatscroll() {

            $('.chat_list').slimScroll({

                size: '3px',

                height: '290px'

            });

        }

        chatscroll();



        //monthly calender

        $('#m_calendar').monthly({

            mode: 'event',

            //jsonUrl: 'events.json',

            //dataType: 'json'

            xmlUrl: 'events.xml'

        });



        //panel refresh

        $.fn.refreshMe = function (opts) {

            var $this = this,

                    defaults = {

                        ms: 1500,

                        started: function () {},

                        completed: function () {}

                    },

                    settings = $.extend(defaults, opts);



            var panelToRefresh = $this.parents('.panel').find('.refresh-container');

            var dataToRefresh = $this.parents('.panel').find('.refresh-data');

            var ms = settings.ms;

            var started = settings.started;		//function before timeout

            var completed = settings.completed;	//function after timeout



            $this.click(function () {

                $this.addClass("fa-spin");

                panelToRefresh.show();

                started(dataToRefresh);

                setTimeout(function () {

                    completed(dataToRefresh);

                    panelToRefresh.fadeOut(800);

                    $this.removeClass("fa-spin");

                }, ms);

                return false;

            });

        };



        $(document).ready(function () {

            $('.refresh, .refresh2').refreshMe({

                started: function (ele) {

                    ele.html("Getting new data..");

                },

                completed: function (ele) {

                    ele.html("This is the new data after refresh..");

                }

            });

        });



        //line chart

        var ctx = document.getElementById("lineChart");

        var myChart = new Chart(ctx, {

            type: 'line',

            data: {

                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],

                datasets: [{

                        label: "Total income",

                        borderColor: "#73879C",

                        borderWidth: "1",

                        backgroundColor: "#73879C",

                        data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]

                    }, {

                        label: "Total Expense",

                        borderColor: "rgba(26, 187, 156, 0.64)",

                        borderWidth: "1",

                        backgroundColor: "rgba(26, 187, 156, 0.64)",

                        pointHighlightStroke: "rgba(26, 187, 156, 0.64)",

                        data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]

                    }]

            },

            options: {

                responsive: true,

                tooltips: {

                    mode: 'index',

                    intersect: false

                },

                hover: {

                    mode: 'nearest',

                    intersect: true

                }



            }

        });



    });

</script>

    </body>

</html>