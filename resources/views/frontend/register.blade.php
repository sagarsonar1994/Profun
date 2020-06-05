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
      <form method="get" id="verify_form">
        @csrf
        <span id="msg_show"></span>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" name="email" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
          <label>Confirm E-mail</label>
          <input type="email" name="cnfrm_email" placeholder="Confirm email" id="cnfrm_email">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms">
          <label class="form-check-label" for="exampleCheck1">I have read the <a href="#">Terms and Conditions</a> of use and <a href="#">Privacy Policy</a> and I consent the processing of my personal data for the purposes related to the provision of the web service.</label>
        </div>
        <div class="sbm-btn">
          <button id="sign_up"> Sign up</button>
          <button id="wating" style="display:none;"> 
            <div class="spinner-border spinner-border-sm" role="status" style="margin-bottom:3px;">
              <span class="sr-only">Loading...</span>
            </div>
          Please wait...</button>
          
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
      $(document).on('click', '#sign_up', function(e) {
          e.preventDefault();
          var email = $('#email').val();
          var cnfrm_email = $('#cnfrm_email').val();
          if (email !== cnfrm_email) {
            $('#msg_show').html('*Email is mismatched');
            $('#msg_show').css('color',"red");
          }
          else if (email == '' || cnfrm_email == '') {
            $('#msg_show').html('*Email is required');
            $('#msg_show').css('color',"red");
          }

          else if($('.form-check-input').is(":not(:checked)")){
            $('#msg_show').html('*Please checked terms and condition');
            $('#msg_show').css('color',"red");
          }

          else {
            $('#sign_up').hide();
            $('#wating').show();
            $.ajax({
                  type : 'get',
                  url : '{{route('newUserCreate')}}',
                  data: {'email' : email}, 
                  success: function(response){ 
                  if(response){
                       if(response === 'mail sended sucessfully') {
                        $('#msg_show').html('Verification link is sended to your email please click link and verify your account');
                         $('#msg_show').css('color', 'blue');
                         $('#email').val('');
                         $('#cnfrm_email').val('');
                       }
                       else if(response === 'Email Already Exist'){
                        $('#msg_show').html('Email Already Exist');
                         $('#msg_show').css('color', 'red');
                       }
                       else {
                         $('#msg_show').html('Something went wrong');
                         $('#msg_show').css('color', 'red');
                       }
                      $('#sign_up').show();
                      $('#wating').hide();
                  }
                  console.log(response);
              },
              error: function(jqXHR, textStatus, errorThrown) { 
                  console.log(JSON.stringify(jqXHR));
                  console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
              }              
            }); 
          }


      });
    </script>
  </body>
</html>


