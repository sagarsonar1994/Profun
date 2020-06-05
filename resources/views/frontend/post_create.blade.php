@extends('frontend.layouts.master')

@section('content')

 <!-- Add form-section start -->
    <div class="add-row">
      <div class="container">
        <div class="step-sec">
          <span class="step">Create Ad</span>
          <span class="step">Ad Preview</span>
          <span class="step">Promot</span>
          <span class="step">Billing</span>
        </div>
        <p>*Mandatory Fields</p>
        <form method="post" action="{{route('post_add')}}" enctype="multipart/form-data" id="regForm">
          @csrf
          <div class="tab">
            <div class="first-step">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="show_title">*Select Category</label>
                    <select name="category" id="category" class="mandatory_field">
                      <option value="">Select Category</option>
                      <option value="Call Girl">Call Girl</option>
                      <option value="Male Escort">Male Escort</option>
                      <option value="Massage">Massage</option>
                      <option value="Dating">Dating</option>
                      <option value="Adult Chat">Adult Chat</option>
                      <option value="Bisexual">Bisexual</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="show_title">*Select City</label>
                    <select name="city" id="city" class="mandatory_field">
                      <option value="">Select City</option>
                      @foreach($city_list as $city)
                      <option value="{{$city->city}}">{{$city->city}}</option>
                      @endforeach
                      
                    </select>
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label>Pin Code</label>
                    <input type="text" name="pincode" id="pincode">
                  </div>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" id="address">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="show_title">*Title</label>
                    <input type="text" name="title" id="title" class="mandatory_field">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="show_title">*Description</label>
                    <textarea name="description" id="desc" class="mandatory_field"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group upl-img">
                    <div class="field" align="left">
                      <label>Upload Image</label>
                      <input type="file" class="files" id="files" name="files[]" multiple />
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="show_title">*Age</label>
                    <input type="text" name="age" id="age" class="mandatory_field">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="show_title">*Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="mandatory_field">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input mandatory_field" id="exampleCheck1" name="whatsapp_status">
                    <label class="form-check-label" for="exampleCheck1"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-check email">
                    <input type="checkbox" class="form-check-input mandatory_field" id="exampleCheck1" name="term_cond_status">
                    <label class="form-check-label" for="exampleCheck2">I have read the <a href="#">Terms and Conditions of use</a> and <a href="#">Privacy Policy</a> and I consent the processing of my personal data for the purposes related to the provision of the web service.</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab">
            <div class="second-step">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Category</label>
                    <p id="cat_show">Call Girl</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Location</label>
                    <p id="post_location">Delhi</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Title</label>
                    <p id="title_show">Title Text</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <p id="desc_show"></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group img-sec">
                    <label class="files_preview">Images</label>
                    {{-- <img src="{{asset('public/profun_theme/images/product-img.jpg')}}">
                    <img src="{{asset('public/profun_theme/images/profile-img-3.jpg')}}">
                    <img src="{{asset('public/profun_theme/images/product-img.jpg')}}"> --}}
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group img-sec">
                    <label>Mobile</label>
                    <p><span id="mobile_show">987664273</span> <span class="whats-yes"><i class="fa fa-whatsapp" aria-hidden="true"></i> Yes</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab">
            <div class="third-step">
              <div class="common-head">
                <h2>PROMOTE YOUR AD!</h2>
                <p>Select the offer and promote your ad, or skip this step and Publish for Free!</p>
              </div>
              <div class="day-shift">
                <div class="day-shift-head">
                  <h3>Day Add sec</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="day-shift-box">
                      <p class="day"><i class="fa fa-sun-o" aria-hidden="true"></i></p>
                      <h4>7 Top-ups for 3 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="7_3">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="day-shift-box">
                      <p class="day"><i class="fa fa-sun-o" aria-hidden="true"></i></p>
                      <h4>7 Top-ups for 7 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="7_7">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="day-shift-box">
                      <p class="day"><i class="fa fa-sun-o" aria-hidden="true"></i></p>
                      <h4>7 Top-ups for 15 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="7_15">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="day-shift-box">
                      <p class="day"><i class="fa fa-sun-o" aria-hidden="true"></i></p>
                      <h4>5 Top-ups for 3 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="5_3">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="day-shift-box">
                      <p class="day"><i class="fa fa-sun-o" aria-hidden="true"></i></p>
                      <h4>5 Top-ups for 7 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="5_7">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="day-shift-box">
                      <p class="day"><i class="fa fa-sun-o" aria-hidden="true"></i></p>
                      <h4>5 Top-ups for 15 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="5_15">
                    </div>
                  </div>
                </div>
                <div class="day-time">
                  <h4>Add Show Timing</h4>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="time-box">
                        <h5>9am to 2pm</h5>
                        <input type="radio" name="time" value="0">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="time-box">
                        <h5>2am to7pm</h5>
                        <input type="radio" name="time" value="1">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="time-box">
                        <h5>7am to 12am</h5>
                        <input type="radio" name="time" value="2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="night-shift">
                <div class="night-shift-head">
                  <h3>Night Add sec</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="night-shift-box">
                      <p class="night"><i class="fa fa-moon-o" aria-hidden="true"></i></p>
                      <h4>12 Top-ups for 3 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="12_3">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="night-shift-box">
                      <p class="night"><i class="fa fa-moon-o" aria-hidden="true"></i></p>
                      <h4>12 Top-ups for 7 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="12_7">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="night-shift-box">
                      <p class="night"><i class="fa fa-moon-o" aria-hidden="true"></i></p>
                      <h4>12 Top-ups for 15 days</h4>
                      <p>Rs 1200.00</p>
                      <h5>(22 credits)</h5>
                      <input type="radio" name="plan" value="12_15">
                    </div>
                  </div>
                </div>
                <div class="night-time">
                  <h4>Add Show Timing</h4>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="time-box">
                        <h5>12am to 9am</h5>
                        <input type="radio" name="time" value="3">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab">
            <div class="fourth-step">
              <h2><i class="fa fa-shopping-cart" aria-hidden="true"></i> Product in your Cart</h2>
              <div class="forth-header">
                <div class="row">
                  <div class="col-md-3">
                    <h3>Product</h3>
                    <p>7 Top-ups for 3 days</p>
                  </div>
                  <div class="col-md-3">
                    <h3>Period</h3>
                    <p>3 Days</p>
                  </div>
                  <div class="col-md-3">
                    <h3>Timing</h3>
                    <p>3 Days</p>
                  </div>
                  <div class="col-md-3">
                    <h3>Price</h3>
                    <p>3 Days</p>
                  </div>
                </div>
              </div>
              <div class="row-credit">
                <h3>Total Avilable Credits <span>233</span></h3>
              </div>
              <div class="row-credit">
                <h3>Total Avilable Credits <span>233</span></h3>
              </div>
            </div>
          </div>
          <div class="button-row">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>

            <button type="submit" id="draft" style="display:none;">Save as draft</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Add form-section end -->
    @endsection
	@section('script')
  <script type="text/javascript">
    $(document).on('click', '#nextBtn', function(e) {
      var category = $('#category').val();
      var city = $('#city').val();
      var title = $('#title').val();
      var description = $('#desc').val();
      var mobile = $('#mobile').val();

      $('#cat_show').html(category);
      $('#post_location').html(city);

      $('#title_show').html(title);
      $('#desc_show').html(description);
      $('#mobile_show').html(mobile);
    });

    $(document).on('click', '.day-shift-box', function(e) {
      $('.day-shift-box').removeClass('active');
      $(this).addClass('active');
    });

    $(document).on('click', '.time-box', function(e) {
      $('.time-box').removeClass('active');
      $(this).addClass('active');
    });

    $(document).on('click', '.night-shift-box', function(e) {
      $('.night-shift-box').removeClass('active');
      $(this).addClass('active');
    });
    
  </script>
	@endsection