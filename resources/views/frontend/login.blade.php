<!doctype html>
<html lang="en">
  @include('frontend.layouts.header')
  <body>
    <!-- Header section start -->
    <div class="header-sec">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="logo">
              <img src="{{asset('public/profun_theme/images/heyFan-logo.png')}}">
            </div>
          </div>
          <div class="col-8">
            <div class="right-nav">
              <ul>
                {{-- <li>
                  <a href="#" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i> Post Your Ad</a>
                </li> --}}
                {{-- <li>
                  <a href="#" target="_blank">Sign up</a>
                </li>
                <li>
                  <a href="#" target="_blank">Login</a>
                </li> --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header section end -->
    <div class="login-form">
      <h1>Login</h1>
      <form>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" name="email" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter password" id="pwd">
        </div>
        <div class="forgot-pass">
          <a href="#">Forgot your password?</a>
        </div>
        <div class="sbm-btn">
          <button class="btn-sbm">Login</button>
        </div>
      </form>
      <div class="not-yet">
        <p>Not signed in yet? <a href="#">Sign up</a></p>
      </div>
    </div>
    <!-- Footer section start -->
    @include('frontend.layouts.footer')
    <!-- Footer section end -->
    <script src="{{asset('public/profun_theme/js/jquery-3.2.1.slim.min.js')}}" ></script>
    <script src="{{asset('public/profun_theme/js/popper.min.js')}}"></script>
    <script src="{{asset('public/profun_theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/profun_theme/js/owl.carousel.js')}}"></script>
    <script src="{{asset('public/profun_theme/js/custom.js')}}"></script>

    <script type="text/javascript">
      $(document).on('click', '.btn-sbm', function(e) {
        e.preventDefault();
      });
    </script>
  </body>
</html>


