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
      
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header section end -->
    <div class="login-form">
      @if($status == 'Link Expired')
      <h1>Your link is expired</h1>
      <div class="not-yet">
        <p style="margin-right:68%;">Back to <a href="{{route('login')}}">Login</a></p>
      </div>
      @else
      <h1>Password Set</h1>
      <form method="POST" action="{{ route('passwordSet') }}">
        @csrf
        <span id="msg_show"></span>
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" name="email" id="email" value="{{$user_email}}" readonly>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter password" id="pwd">
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="cnfrm_password" placeholder="Enter password" id="cnfrm_pwd">
        </div>
        
        <div class="sbm-btn">
          <button type="submit" class="btn-sbm">Submit</button>
          <button id="wating" style="display:none;"> 
            <div class="spinner-border spinner-border-sm" role="status" style="margin-bottom:3px;">
              <span class="sr-only">Loading...</span>
            </div>
          Please wait...</button>
        </div>
        
      </form>
    @endif
    </div>
    
    @include('frontend.layouts.script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).on('click', '.btn-sbm', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        var pwd = $('#pwd').val();
        var cnfrm_pwd = $('#cnfrm_pwd').val();
        if(pwd == '') {
          $('#msg_show').html('*Password is required');
          $('#msg_show').css('color',"red");
        }
        else if(cnfrm_pwd == '') {
          $('#msg_show').html('*Confirm password is required');
          $('#msg_show').css('color',"red");
        }
        else if(pwd !== cnfrm_pwd) {
          $('#msg_show').html('*Password is mismatched');
          $('#msg_show').css('color',"red");
        }
        
        else {
          $('.btn-sbm').hide();
          $('#wating').show();
          $.ajax({
                  type : 'get',
                  url : '{{route('passwordSet')}}',
                  data: {'email' : email, 'password' : pwd}, 
                  success: function(response){ 
                  if(response){
                       if(response === 'success') {
                        $('#msg_show').html('Please login, your account is activated successfully.');
                         $('#msg_show').css('color', 'blue');
                         setTimeout(function() {
                             window.location.href = "http://localhost/ProfunProject/login";
                          }, 2000);
                       }
                       else {
                         $('#msg_show').html(response);
                         $('#msg_show').css('color', 'red');
                       }
                      $('.btn-sbm').show();
                      $('#wating').hide();
                  }
                  console.log(response);
              },
              error: function(jqXHR, textStatus, errorThrown) { 
                  $('.btn-sbm').show();
                  $('#wating').hide();
                  console.log(JSON.stringify(jqXHR));
                  console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
              }              
            }); 
        }

      });
    </script>
  </body>
</html>


