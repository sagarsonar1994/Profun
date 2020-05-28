@extends('frontend.layouts.master')

@section('content')
<!-- Search section start -->
    @include('frontend.layouts.search')
<!-- Search section end -->

    <!-- bradecromb sec start -->
    <div class="bradcomb-sec">
      <div class="container">
        <a href="#">Home</a>
        <a href="#">Delhi</a>
        <span>Call Girl</span>
      </div>
    </div>
    <!-- bradecromb sec end -->
    <!-- cate-list-sec start-->
    <div class="ad-row-list">
      <div class="container">
        <div class="ad-box-sec">
          <a href="#">
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
              </div>
              <div class="col-lg-10 col-md-9">
                <div class="ad-box-cnt">
                  <h3>Ads title here</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <h6><span>22 Year</span><span>Call Girl</span><span>Delhi</span> Delhi KalkaJi</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="ad-box-sec">
          <a href="#">
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
              </div>
              <div class="col-lg-10 col-md-9">
                <div class="ad-box-cnt">
                  <h3>Ads title here</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <h6><span>22 Year</span><span>Call Girl</span><span>Delhi</span> Delhi KalkaJi</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="ad-box-sec">
          <a href="#">
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
              </div>
              <div class="col-lg-10 col-md-9">
                <div class="ad-box-cnt">
                  <h3>Ads title here</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <h6><span>22 Year</span><span>Call Girl</span><span>Delhi</span> Delhi KalkaJi</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- cate-list-sec end-->

@endsection
@section('script')
@endsection