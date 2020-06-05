@extends('frontend.layouts.master')

@section('content')
<!-- Search section start -->
    @include('frontend.layouts.search')
<!-- Search section end -->
<!-- category Box section start -->
    <div class="category-sec">
      <div class="container">
        <div class="category-heading">
          <h1>Adult Contacts In India, Free Erotic Classifieds Ads In Your City</h1>
          <p>The Profun.com is an Adult classfieds. According to category and city user may find diffrent kind of services provided by advertiser users. Browse among all categories. Check Call girls in Bangalore, Call girls in Delhi and Call girls in Mumbai categories. Call girls, Call boys, playboys, spa and massage Adult Meetings. Find it on theprofun.</p>
        </div>
        <div class="slider-box">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('public/profun_theme/images/slider-img.jpg')}}">
                <div class="slider-overlay"></div>
                <div class="caption-text">
                  <h2>Service Heading</h2>
                  <p>Browse among all categories. Check Call girls in Bangalore, Call girls in Delhi and Call girls in Mumbai categories. Call girls, Call boys, playboys, spa and massage Adult Meetings.</p>
                  <a href="#">View More</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/profun_theme/images/slider-img.jpg')}}">
                <div class="slider-overlay"></div>
                <div class="caption-text">
                  <h2>Service Heading</h2>
                  <p>Browse among all categories. Check Call girls in Bangalore, Call girls in Delhi and Call girls in Mumbai categories. Call girls, Call boys, playboys, spa and massage Adult Meetings.</p>
                  <a href="#">View More</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('public/profun_theme/images/slider-img.jpg')}}">
                <div class="slider-overlay"></div>
                <div class="caption-text">
                  <h2>Service Heading</h2>
                  <p>Browse among all categories. Check Call girls in Bangalore, Call girls in Delhi and Call girls in Mumbai categories. Call girls, Call boys, playboys, spa and massage Adult Meetings.</p>
                  <a href="#">View More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- category Box section end -->
    <!-- Category city section start -->
    <div class="cat-city-row">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Ahmedabad')}}">
                <h3>Ahmedabad</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Bangalore')}}">
                <h3>Bangalore</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Bhubaneswar')}}">
                <h3>Bhubaneswar</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Jaipur')}}">
                <h3>Jaipur</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Chennai')}}">
                <h3>Chennai</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Delhi')}}">
                <h3>Delhi</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Goa')}}">
                <h3>Goa</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Hyderabad')}}">
                <h3>Hyderabad</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Indore')}}">
                <h3>Indore</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Kerala')}}">
                <h3>Kerala</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Kolkata')}}">
                <h3>Kolkata</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Lucknow')}}">
                <h3>Lucknow</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Mumbai')}}">
                <h3>Mumbai</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Pune')}}">
                <h3>Pune</h3>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cat-city-box">
              <a href="{{route('cityList','Surat')}}">
                <h3>Surat</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Category city section end -->
@endsection
@section('script')
@endsection