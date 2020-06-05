@extends('frontend.layouts.master')

@section('content')
<!-- Search section start -->
    @include('frontend.layouts.search')
    <!-- bradecromb sec start -->
    <div class="bradcomb-sec">
      <div class="container">
        <a href="{{url('/')}}">Home</a>
        @if(@$city)
        <span>{{@$city}}</span>
        @endif
      </div>
    </div>
    <!-- bradecromb sec end -->
    <!-- Category list section start -->
    <div class="cat-section">
      <div class="container">
        <div class="cat-heading">
          <h2>Hot meetings in your city</h2>
          <p>Find your favourite CALL GIRL in TheProfun</p>
        </div>
        <div class="cat-sec-row">
          <div class="row">
            <div class="col-md-4">
              <div class="cat-sec-box">
                <a href="{{url("/Call-Girl/$city/")}}">
                  <img src="{{asset('public/profun_theme/images/slider-img.jpg')}}">
                  <div class="cat-sec-cnt">
                    <h3>Call Girls</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="cat-sec-box">
                <a href="{{url("/Male-Escort/$city/")}}">
                  <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
                  <div class="cat-sec-cnt">
                    <h3>Male Escorts</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="cat-sec-box">
                <a href="{{url("/Massage/$city/")}}">
                  <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
                  <div class="cat-sec-cnt">
                    <h3>Massage</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="cat-sec-box">
                <a href="{{url("/Dating/$city/")}}">
                  <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
                  <div class="cat-sec-cnt">
                    <h3>Dating</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="cat-sec-box">
                <a href="{{url("/Adult-Chat/$city/")}}">
                  <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
                  <div class="cat-sec-cnt">
                    <h3>Adult Chat</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="cat-sec-box">
                <a href="{{url("/Bisexual/$city/")}}">
                  <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
                  <div class="cat-sec-cnt">
                    <h3>Bisexual</h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Category list section end -->

@endsection
@section('script')
@endsection