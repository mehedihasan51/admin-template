<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css">
    
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  {{-- <link
  href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
  rel="stylesheet"
/> --}}
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Admin Mastering</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
        <!--   Core JS Files   -->
        @include('backend/partials/styles')
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      @include('backend/partials/sidebar')
      <!-- End Sidebar -->
      @include('backend/partials/header')

      <div class="main-panel">

        @yield('content')
        
        @include('backend/partials/footer')

      </div>

      <!-- Custom template | don't include it in your project! -->
      @include('backend/partials/theme-settings')
      <!-- End Custom template -->

      @include('backend/partials/scripts')
    </div>

  </body>
</html>
