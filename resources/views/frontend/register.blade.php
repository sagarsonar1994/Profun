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
              <img src="images/heyFan-logo.png">
            </div>
          </div>
          <div class="col-8">
            <div class="right-nav">
              <ul>
                {{-- <li>
                  <a href="#" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i> Post Your Ad</a>
                </li>
                <li>
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
    <div class="signup-form">
      <h1>Sign up</h1>
      <form>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" name="" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label>Confirm E-mail</label>
          <input type="email" name="" placeholder="Confirm email">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">I have read the <a href="#">Terms and Conditions</a> of use and <a href="#">Privacy Policy</a> and I consent the processing of my personal data for the purposes related to the provision of the web service.</label>
        </div>
        <div class="sbm-btn">
          <button>Sign up</button>
        </div>
      </form>
      <div class="not-yet">
        <p>Do you have account? <a href="#">Login</a></p>
      </div>
    </div>
    <!-- Footer section start -->
    <div class="footer-sec">
      <div class="container">
        <div class="top-section">
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Manage your ads</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
        <div class="social-nav">
          <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="footer-btm">
          <p>© {{date('Y')}} TheProfun Inc Pvt Ltd. All Rights Reserved.</p>
        </div>
      </div>
    </div>
    <!-- Footer section end -->
    <script src="{{asset('public/profun_theme/js/jquery-3.2.1.slim.min.js')}}" ></script>
    <script src="{{asset('public/profun_theme/js/popper.min.js')}}"></script>
    <script src="{{asset('public/profun_theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/profun_theme/js/owl.carousel.js')}}"></script>
    <script src="{{asset('public/profun_theme/js/custom.js')}}"></script>
  </body>
</html>


