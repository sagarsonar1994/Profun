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
                        <img src="{{asset('public/profun_theme/images/profile-img-3.jpg')}}">
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