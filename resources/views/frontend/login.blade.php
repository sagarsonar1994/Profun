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
      <form method="POST" action="{{ route('login') }}" id="login_form">
        @csrf
        <span id="msg_show"></span>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" name="email" placeholder="Enter email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter password" id="pwd" required autocomplete="current-password" class=" @error('password') is-invalid @enderror">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="forgot-pass">
          <a href="#">Forgot your password?</a>
        </div>
        <div class="sbm-btn">
          <button type="submit" class="btn-sbm">Login</button>
          <button id="wating" style="display:none;"> 
            <div class="spinner-border spinner-border-sm" role="status" style="margin-bottom:3px;">
              <span class="sr-only">Loading...</span>
            </div>
          Please wait...</button>
        </div>
      </form>
      <div class="not-yet">
        <p>Not signed in yet? <a href="#">Sign up</a></p>
      </div>
    </div>
    <!-- Footer section start -->
    @include('frontend.layouts.footer')
    <!-- Footer section end -->
    @include('frontend.layouts.script')

    <script type="text/javascript">
      $(document).on('click', '.btn-sbm', function(e) {
        var email = $('#email').val();
        var pwd = $('#pwd').val();
        if(email === '' || pwd === '') {
          e.preventDefault();
          $('#msg_show').html('*Email or password is required');
          $('#msg_show').css('color',"red");
        }
        else if(IsEmail(email)==false){
          $('#invalid_email').show();
          e.preventDefault();
          $('#msg_show').html('*Email must be valid');
          $('#msg_show').css('color',"red");
        }
        else {
          $('.btn-sbm').hide();
          $('#wating').show();
          e.preventDefault();
          setTimeout(function() {
             $('#login_form').submit();
          }, 2000);
        }

        
      });

      function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
          return false;
        }else{
          return true;
        }
      }
    </script>
  </body>
</html>


