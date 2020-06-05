@extends('frontend.layouts.master')

@section('content')
<!-- Search section start -->
    @include('frontend.layouts.search')
<!-- Search section end -->

    <!-- bradecromb sec start -->
    <div class="bradcomb-sec">
      <div class="container">
        <a href="{{url('/')}}">Home</a>
        <a href="{{route('cityList',$getDetail->city)}}">{{$getDetail->city}}</a>
        <span>{{$getDetail->category}}</span>
      </div>
    </div>
    <!-- bradecromb sec end -->
    <!-- add detail page start -->
    <div class="add-detail-sec">
      <div class="container">
        <div class="add-detail-box">
          <h1>{{$getDetail->title}}</h1>
          <div class="button-sec">
            <a  href="tel:(+91){{$getDetail->mobile}}"><button type="button"><i class="fa fa-phone" aria-hidden="true"></i> Mobile</button></a>
            <a href="http://wa.me/91{{$getDetail->mobile}}?text=hello" target="_blank"><button type="button" class="whats"><i class="fa fa-whatsapp" aria-hidden="true"></i> whatsapp</button></a>
          </div>
          <p>{{$getDetail->description}}</p>
          <div class="gallery-sec">
            <div class="row">
    <div class="row">
        @foreach($getImages as $key => $image_list)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{asset('public/post_images/'.$image_list->image)}}"
                         alt="Another alt text">
                </a>
            </div>
        @endforeach
            
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
</div>
</div>
</div>
    <!-- add detail page end -->

@endsection
@section('script')
@endsection