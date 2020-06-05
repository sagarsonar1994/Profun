@extends('frontend.layouts.master')

@section('content')

<div class="dasborad-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="profile-box">
              <h1><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</h1>
              <div class="profile-cnt">
                <p><strong>Welcome</strong> to your account<span><a href="#">{{auth()->user()->email}}</a></span></p>
                {{-- <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p> --}}
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="profile-box">
              <h1><i class="fa fa-credit-card" aria-hidden="true"></i> Credits</h1>
              <div class="profile-cnt">
                <ul>
                  <li><p><i class="fa fa-database" aria-hidden="true"></i> Current Credit</p></li>
                  <li><p><span>{{@$credit}}</span></p></li>
                </ul>
                <div class="by-btn">
                  <a href="#">Buy Credit</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="profile-box">
              <h1><i class="fa fa-leanpub" aria-hidden="true"></i> Ads</h1>
              <div class="profile-cnt">
                <ul>
                  <li><p><i class="fa fa-tags" aria-hidden="true"></i> Total Ads</p></li>
                  <li><p><span>{{@$user_ads_count}}</span></p></li>
                </ul>
                <div class="by-btn">
                  <a href="{{route('addPostShow')}}"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Ads</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('script')
@endsection