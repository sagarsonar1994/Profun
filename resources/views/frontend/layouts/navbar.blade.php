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
                <li>
                  <a href="{{route('addPostShow')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Post Your Ad</a>
                </li>
               
                
                @if(Auth::check())
                {{-- <li>
                  <a href="{{route('logout')}}">Logout</a>
                </li> --}}
                <li>
                  <div class="dropdown">
                    <button class="dropdown-toggle" type="button" data-toggle="dropdown"><img src="{{asset('public/profun_theme/images/profile-icon.png')}}"></button>
                    <ul class="dropdown-menu">
                      <li><a href="{{route('userDashboard')}}">Dashboard</a></li>
                      <li><a href="{{route('userAdsList')}}">Ads</a></li>
                      <li><a href="#">Credit</a></li>
                      <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                  </div>
                </li>
                @else
                <li>
                  <a href="{{route('register')}}">Sign up</a>
                </li>
                <li>
                  <a href="{{route('login')}}">Login</a>
                </li>
                @endif
                
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header section end -->