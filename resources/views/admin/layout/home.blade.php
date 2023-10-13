<!doctype html>
<html lang="en">
  <head>
  @include('admin.layout.head')
    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
    {{-- sitebar --}}
    @include('admin.layout.sitebar')

    @yield('content')

    
     @include('admin.layout.footer')


     {{-- Js Summernote --}}
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

     <script>
      $(document).ready(function() {
          $("#mySummernote").summernote({
            height: 250,
          });
          $('.dropdown-toggle').dropdown();
      });
      </script>
  </body>
</html>