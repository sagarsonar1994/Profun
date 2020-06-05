<div class="serach-sec">
      <div class="container">
        @php
          $city_list = DB::table('city')->get();
        @endphp
        <form method="get" action="{{route('searchList')}}">
          @csrf
          <div class="row">
            <div class="col-md-5">
              <select name="category" id="category">
                <option value="">Select Category</option>
                <option value="Call Girl" @if(@$request->category == "Call Girl") selected @endif>Call Girl</option>
                <option value="Male Escort" @if(@$request->category == "Male Escort") selected @endif>Male Escort</option>
                <option value="Massage" @if(@$request->category == "Massage") selected @endif>Massage</option>
                <option value="Dating" @if(@$request->category == "Dating") selected @endif>Dating</option>
                <option value="Adult Chat" @if(@$request->category == "Adult Chat") selected @endif>Adult Chat</option>
                <option value="Bisexual" @if(@$request->category == "Bisexual") selected @endif>Bisexual</option>
              </select>
            </div>
            <div class="col-md-5">
              <select name="city" id="city">
                <option value="">Select City</option>
                @foreach($city_list as $key => $list)
                  <option value="{{$list->city}}" @if(@$request->city == $list->city) selected @endif>{{$list->city}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-2">
              <button><i class="fa fa-search" aria-hidden="true"></i> Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>