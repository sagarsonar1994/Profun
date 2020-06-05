@extends('frontend.layouts.master')

@section('content')

<!-- Header section end -->
    <div class="ads-row">
      <div class="container">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#actives-ads">Active Ads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#unpublish-ads">Not Published Ads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#expired-ads">Expired Ads</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="actives-ads" class="tab-pane active">
            <div class="active-add-sec">
              <div class="filter-ads">
                <form>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" name="" placeholder="Keyword">
                    </div>
                    <div class="col-md-3">
                      <select>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select>
                        <option>location</option>
                        <option>location</option>
                        <option>location</option>
                        <option>location</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <button>Filter</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="ad-row">
                @foreach($getActiveList as $key1 => $active_list) 
                <div class="ad-box-sec">
                  <a href="#">
                    <div class="row">
                      <div class="col-lg-2 col-md-3">
                        <img src="{{asset('public/post_images/'.@getPostImage($active_list->id))}}">
                      </div>
                      <div class="col-lg-10 col-md-9">
                        <div class="ad-box-cnt">
                          <h3>{{$active_list->title}}</h3>
                          <p>{{$active_list->description}}</p>
                          <h6><span>{{$active_list->age}} Year</span><span>{{$active_list->category}}</span><span>{{$active_list->city}}</span> {{$active_list->address}}</h6>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div id="unpublish-ads" class="tab-pane fade">
            <div class="unpublish-ads">
              <div class="filter-ads">
                <form>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" name="" placeholder="Keyword">
                    </div>
                    <div class="col-md-3">
                      <select>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select>
                        <option>location</option>
                        <option>location</option>
                        <option>location</option>
                        <option>location</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <button>Filter</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="ad-row">
                @foreach($getUnpublishedList as $key2 => $unpublished_list)
                <div class="ad-box-sec">
                  <a href="#">
                    <div class="row">
                      <div class="col-lg-2 col-md-3">
                        <img src="{{asset('public/post_images/'.@getPostImage($unpublished_list->id))}}">
                      </div>
                      <div class="col-lg-10 col-md-9">
                        <div class="ad-box-cnt">
                          <h3>{{$unpublished_list->title}}</h3>
                          <p>{{$unpublished_list->description}}</p>
                          <h6><span>{{$unpublished_list->age}} Year</span><span>{{$unpublished_list->category}}</span><span>{{$unpublished_list->city}}</span> {{$unpublished_list->address}}</h6>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div id="expired-ads" class="tab-pane fade">
            <div class="expired-ads-sec">
              <div class="filter-ads">
                <form>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" name="" placeholder="Keyword">
                    </div>
                    <div class="col-md-3">
                      <select>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                        <option>Category Opt</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select>
                        <option>location</option>
                        <option>location</option>
                        <option>location</option>
                        <option>location</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <button>Filter</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="ad-row">
                @foreach($getExpiredList as $key2 => $expired_list)
                <div class="ad-box-sec">
                  <a href="#">
                    <div class="row">
                      <div class="col-lg-2 col-md-3">
                        <img src="{{asset('public/post_images/'.@getPostImage($expired_list->id))}}">
                      </div>
                      <div class="col-lg-10 col-md-9">
                        <div class="ad-box-cnt">
                          <h3>{{$expired_list->title}}</h3>
                          <p>{{$expired_list->description}}</p>
                          <h6><span>{{$expired_list->age}} Year</span><span>{{$expired_list->category}}</span><span>{{$expired_list->city}}</span> {{$expired_list->address}}</h6>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('script')
@endsection

<style type="text/css">
.btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>