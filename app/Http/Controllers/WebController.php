<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewUser;
use App\User;
use App\PostImage;
use App\Post;
use DB, Hash;

class WebController extends Controller
{

	public function userDashboard() {
		$user = \Auth::user();
		$credit = $user->credit;
		$user_ads_count = Post::where('user_id', $user->id)->count();
		return view('frontend.user_dashboard', compact('user_ads_count', 'credit'));
	}

    public function addPostShow() {
    	$city_list = DB::table('city')->get();
    	return view('frontend.post_create',compact('city_list'));
    }

    public function postAdd(Request $request){
    	  date_default_timezone_set("Asia/Calcutta");
    	  //dd($request->all());
    	  $status = 0;
    	  $expiry = NULL;
    	  if($request->has('plan')){
    	  	$day_plan = $request->has('plan');
    	  	$plan_array = explode('_', $request->plan);
    	  	$frequency_show = @$plan_array[0];
	      	$apply_day = @$plan_array[1];
	      	$time_slot = $request->time;
	      	$credit = "22";
	      	$status = 1;
	      	$expiry = @date('Y-m-d H:i:s', strtotime(' +'.$apply_day.'days'));
    	  }

	      //dd($request->all());
	      $user = \Auth::user();
	      $storePost = new Post;
	      $storePost->user_id = $user->id;
	      $storePost->title = @$request->title;
	      $storePost->description = @$request->description;
	      $storePost->city = @$request->city;
	      $storePost->category = @$request->category;
	      $storePost->pincode = @$request->pincode;
	      $storePost->address = @$request->address;
	      $storePost->age = $request->age;
	      $storePost->mobile = @$request->mobile;
	      $storePost->is_whatsapp = $request->whatsapp_status == "on" ? 1 : 0;
	      $storePost->email = @$request->email;
	      $storePost->frequency_show = @$frequency_show;
	      $storePost->apply_day = @$apply_day;
	      $storePost->time_slot = @$time_slot;
	      $storePost->post_expired = $expiry;
	      $storePost->credit = @$credit;
	      $storePost->status = @$status;
	      $storePost->save();

      	foreach ($request->files as $keys => $value) {
    	  foreach ($value as $image) {
    	  	//dd($image);
    	  	$img_height = \Image::make($image)->height();
    	  	$img_width = \Image::make($image)->width();

    	  	$new_name = time() . '_' . $image->getClientOriginalName();
    	  	$img = \Image::make($image->getPathName());
    	  	$img->text('www.profun.com',$img_height-20,$img_width/2, function($font) {
    	  		$font->size(40);
			    $font->color('#fdf6e3');
			});
    	  	
    	  	$img->save(public_path('post_images/'.$new_name));
    	  	$storeImg = new PostImage;
    	  	$storeImg->post_id = $storePost->id;
    	  	$storeImg->image = $new_name;
    	  	$storeImg->save();
    	  }
	    }

	    return redirect()->route('addPostShow');
	      
	    
    }

    public function searchList(Request $request) {
    	date_default_timezone_set("Asia/Calcutta");
    	$show_time = date('H:i:s');
    	$getCurrentHour = date('H:00:00');
    	$afterOneHour = date('H:00:00', strtotime('1 hour'));
    	$getPostList = Post::where('status',1);
    	if($request->city) {
    		$getPostList = $getPostList->where('city',$request->city);
    	}
    	if($request->category) {
    		$getPostList = $getPostList->where('category',$request->category);
    	}
    	$getPostList = $getPostList->orderBy('show_order','asc')->get();

    	return view('frontend.ads_list', compact('getPostList','request'));

    }



    public function cityList($city) {
    	return view('frontend.ads_section',compact('city'));
    }



    public function cityCategoryList(Request $request, $category, $city) {
    	date_default_timezone_set("Asia/Calcutta");
    	$show_time = date('H:i:s');
    	//dd($show_time);
    	$getPostList = Post::orderBy('created_at','asc')->where('city',$city);  	
    	if($category) {
    		$cat_string = explode('-',$category);
    		if(count($cat_string)>1){
    			$city_query = $cat_string[0].' '.$cat_string[1];
    		}else{
    			$city_query = $category;
    		}
    		$getPostList = $getPostList->where('category',$city_query);
    	}
    	$getPostList = $getPostList->whereTime('post_time','>=',$show_time)->orWhereTime('post_time','<',$show_time)->get();
    	// dd($getPostList);
    	
    	return view('frontend.ads_list', compact('getPostList','request'));
    }


    public function getPostDetail($id) {
    	$getDetail = Post::where('id', $id)->first();
    	$getImages = PostImage::where('post_id', $id)->get();

    	return view('frontend.ads_detail', compact('getDetail', 'getImages'));
    }

    public function userAdsList() {
    	date_default_timezone_set("Asia/Calcutta");
    	$user = \Auth::user();
    	$user_id = $user->id;
    	$currentDate = date('Y-m-d H:i:s');
    	$getActiveList = Post::where('post_expired', '>=', $currentDate)
    					->where('user_id', $user_id)->where('status',1)
    					->orderBy('created_at','desc')->get();
        
        $getExpiredList = Post::where('post_expired', '<=', $currentDate)
    					->where('user_id', $user_id)
    					->orderBy('created_at','desc')->get();

    	$getUnpublishedList = Post::where('post_expired','=',NULL)
    						->where('user_id', $user_id)->where('status',0)
    						->orderBy('created_at','desc')->get();

    	return view('frontend.user_ad_list', compact('getActiveList', 'getExpiredList','getUnpublishedList'));
    }


    public function manageAds() {
    	date_default_timezone_set("Asia/Calcutta");
    	// return date('Y-m-d', strtotime('1 day'));
    	$current_time = date('H:i:s');

    	$getCurrentHour = date('H:00:00');
    	$afterOneHour = date('H:00:00', strtotime('1 hour'));
    	$active_slot = NULL;

    	$slot_0 = ['14:00:00','19:00:00'];
    	$slot_1 = ['09:00:00','14:00:00'];
    	$slot_2 = ['07:00:00','23:59:00'];
    	$slot_3 = ['00:00:00','09:00:00'];

    	if($current_time <= $slot_0[1] && $current_time >= $slot_0[0]){
    		$active_slot = "0";
    	}

    	if($current_time <= $slot_1[1] && $current_time >= $slot_1[0]){
    		$active_slot = "1";
    	}

    	if($current_time <= $slot_2[1] && $current_time >= $slot_2[0]){
    		$active_slot = "2";
    	}

    	if($current_time <= $slot_3[1] && $current_time >= $slot_3[0]){
    		$active_slot = "3";
    	}

    	
    	$list1 = Post::where('status',1)
    			->where('time_slot',$active_slot)
    			->whereColumn('frequency_show','!=','complete_frequency')
    			->get();
        
    	

        $list2 = Post::where('status',1)
    			->where('time_slot','!=',$active_slot)
    			->orwhereColumn('frequency_show','=','complete_frequency')
    			->orderBy('show_order','asc')->get();
    			//return $list2;

  		$getList = $list1->merge($list2);

		  foreach ($getList as $key => $post) {
		   	$divide_slot = $getList->count();

		   	if($post->time_slot == $active_slot) {
		   	  
		   	  $update_data = ['next_show_time' => date('H:'.floor(59/$divide_slot)*($key+1)).':00','start_show' => $getCurrentHour,'expire_show' => $afterOneHour,'show_order' => ($key+1)];
		   	}
		   	else{
		   	  
		   	  	$update_data = ['show_order' => ($key+1)];
		   	}

		   	$manageList = Post::where('id',$post->id)
		   				->update($update_data);
		  }

		  $manageFrequency = Post::where('show_order',1)->first();
		  $count = $manageFrequency->complete_frequency + 1;
		  
		  if($manageFrequency->frequency_show != $manageFrequency->complete_frequency){
		  	$manageFrequency->complete_frequency = $count;
		  	$manageFrequency->save();
		  }

		  $manageResetDate = Post::whereColumn('frequency_show','=','complete_frequency')->update(['reset_date' => date('Y-m-d', strtotime('1 day'))]);
		
		return "success";
		

    }

    
}
