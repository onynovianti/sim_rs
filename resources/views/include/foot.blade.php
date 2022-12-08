<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js')}}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('assets/js/template.js')}}"></script>
<script src="{{ asset('assets/js/settings.js')}}"></script>
<script src="{{ asset('assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
{{-- <script src="{{ asset('assets/js/dashboard.js')}}"></script> --}}
{{-- <script src="{{ asset('assets/js/Chart.roundedBarCharts.js')}}"></script> --}}
<script src="{{ asset('assets/js/chart_dashboard.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('assets/html2pdf/dist/html2pdf.bundle.min.js')}}"></script>

        
        <script>
        $(document).ready(function(){

            $('#search').keyup(function(){

            // Search text
            var text = $(this).val();

            // Hide all content class element
            $('.content').hide();

            // Search and show
            $('.content:contains("'+text+'")').show();
            });

            $("#export").click(function(){
                var element = document.getElementById('body');
                html2pdf().from(element).save('report.pdf');
            });
        });
        </script>