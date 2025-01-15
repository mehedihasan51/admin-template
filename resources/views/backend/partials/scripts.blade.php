
<script>
  WebFont.load({
    google: { families: ["Public Sans:300,400,500,600,700"] },
    custom: {
      families: [
        "Font Awesome 5 Solid",
        "Font Awesome 5 Regular",
        "Font Awesome 5 Brands",
        "simple-line-icons",
      ],
      urls: ["/backend/assets/css/fonts.min.css"],
    },
    active: function () {
      sessionStorage.fonts = true;
    },
  });

  
</script>

<script src="{{asset('/backend/assets/custom_downloaded_file/axios.min.js')}}"></script>
{{-- <script src="{{asset('/backend/assets/custom_downloaded_file/bootstrap.min.css')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/ckeditor.js')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/css2.css')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/css2AdminDashboard.css')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/dataTables.bootstrap5.min.css')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/jquery.min.js')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/sweetalert2.min.css')}}"></script>
<script src="{{asset('/backend/assets/custom_downloaded_file/table-data.js')}}"></script> --}}

<script src="{{asset('/backend/assets/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('/backend/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('/backend/assets/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('/backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{asset('/backend/assets/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{asset('/backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{asset('/backend/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('/backend/assets/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    {{-- <script src="{{asset('/backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script> --}}

    <!-- jQuery Vector Maps -->
    <script src="{{asset('/backend/assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('/backend/assets/js/plugin/jsvectormap/world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{asset('/backend/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{asset('backend/assets/js/kaiadmin.min.js')}}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{asset('/backend/assets/js/setting-demo.js')}}"></script>
    <script src="{{asset('/backend/assets/js/demo.js')}}"></script>

        {{-- <!--   Core JS Files   -->
        <script src="{{asset('/backend/assets/js/core/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('/backend/assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('/backend/assets/js/core/bootstrap.min.js')}}"></script>
    
        <!-- jQuery Scrollbar -->
        <script src="{{asset('/backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
        <!-- Datatables -->
        <script src="{{asset('/backend/assets/js/plugin/datatables/datatables.min.js')}}"></script>
        <!-- Kaiadmin JS -->
        <script src="{{asset('/backend/assets/js/kaiadmin.min.js')}}"></script>
        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src="{{asset('/backend/assets/js/setting-demo2.js')}}"></script> --}}



        <script>
          $(document).ready(function() {
              toastr.options.timeOut = 10000;
              toastr.options.positionClass = 'toast-top-right';
      
              @if (Session::has('t-success'))
                  toastr.options = {
                      'closeButton': true,
                      'debug': false,
                      'newestOnTop': true,
                      'progressBar': true,
                      'positionClass': 'toast-top-right',
                      'preventDuplicates': false,
                      'showDuration': '1000',
                      'hideDuration': '1000',
                      'timeOut': '5000',
                      'extendedTimeOut': '1000',
                      'showEasing': 'swing',
                      'hideEasing': 'linear',
                      'showMethod': 'fadeIn',
                      'hideMethod': 'fadeOut',
                  };
                  toastr.success("{{ session('t-success') }}");
              @endif
      
              @if (Session::has('t-error'))
                  toastr.options = {
                      'closeButton': true,
                      'debug': false,
                      'newestOnTop': true,
                      'progressBar': true,
                      'positionClass': 'toast-top-right',
                      'preventDuplicates': false,
                      'showDuration': '1000',
                      'hideDuration': '1000',
                      'timeOut': '5000',
                      'extendedTimeOut': '1000',
                      'showEasing': 'swing',
                      'hideEasing': 'linear',
                      'showMethod': 'fadeIn',
                      'hideMethod': 'fadeOut',
                  };
                  toastr.error("{{ session('t-error') }}");
              @endif
      
              @if (Session::has('t-info'))
                  toastr.options = {
                      'closeButton': true,
                      'debug': false,
                      'newestOnTop': true,
                      'progressBar': true,
                      'positionClass': 'toast-top-right',
                      'preventDuplicates': false,
                      'showDuration': '1000',
                      'hideDuration': '1000',
                      'timeOut': '5000',
                      'extendedTimeOut': '1000',
                      'showEasing': 'swing',
                      'hideEasing': 'linear',
                      'showMethod': 'fadeIn',
                      'hideMethod': 'fadeOut',
                  };
                  toastr.info("{{ session('t-info') }}");
              @endif
      
              @if (Session::has('t-warning'))
                  toastr.options = {
                      'closeButton': true,
                      'debug': false,
                      'newestOnTop': true,
                      'progressBar': true,
                      'positionClass': 'toast-top-right',
                      'preventDuplicates': false,
                      'showDuration': '1000',
                      'hideDuration': '1000',
                      'timeOut': '5000',
                      'extendedTimeOut': '1000',
                      'showEasing': 'swing',
                      'hideEasing': 'linear',
                      'showMethod': 'fadeIn',
                      'hideMethod': 'fadeOut',
                  };
                  toastr.warning("{{ session('t-warning') }}");
              @endif
          });
      </script>

    @stack('scripts')