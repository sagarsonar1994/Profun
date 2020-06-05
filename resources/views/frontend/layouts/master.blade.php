<!doctype html>
<html lang="en">
  @include('frontend.layouts.header')
  <body>
    <!-- Header section start -->
    @include('frontend.layouts.navbar')
    <!-- Header section end -->
    

    @yield('content')
    
    <!-- Footer section start -->
    @include('frontend.layouts.footer')
    <!-- Footer section end -->
   @include('frontend.layouts.script')
   @yield('script')
   
  </body>
</html>


