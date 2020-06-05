@extends('frontend.layouts.master')

@section('content')
<!-- Search section start -->
    @include('frontend.layouts.search')
<!-- Search section end -->

    <!-- bradecromb sec start -->
    <div class="bradcomb-sec">
      <div class="container">
        <a href="{{url('/')}}">Home</a>
        @if(@$request->city)
        <span>{{@$request->city}}</span>
        @endif
        @if(@$request->category)
        <span>{{@$request->category}}</span>
        @endif
      </div>
    </div>
    <!-- bradecromb sec end -->
    <!-- cate-list-sec start-->
    <div class="ad-row-list">
      <div class="container">
        @foreach($getPostList as $key => $post_list)
        <div class="ad-box-sec">
          <a href="{{route('getPostDetail',$post_list->id)}}">
            <div class="row">
              <div class="col-lg-2 col-md-3">
                <img src="{{asset('public/post_images/'.@getPostImage($post_list->id))}}">
              </div>
              <div class="col-lg-10 col-md-9">
                <div class="ad-box-cnt">
                  <h3>{{$post_list->title}}</h3>
                  <p>{{$post_list->description}}</p>
                  <h6><span>{{$post_list->age}} Year</span><span>{{@$post_list->category}}</span><span>{{@$post_list->city}}</span> {{@$post_list->address}}</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
    <!-- cate-list-sec end-->

@endsection
@section('script')
@endsection