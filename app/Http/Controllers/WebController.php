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
            $expiry = $this->expiryGet($request->time, $apply_day);
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
	      $storePost->post_expired = @$expiry;
	      $storePost->credit = @$credit;
	      $storePost->status = @$status;
          $storePost->show_time = @$request->time == "3" ? 'night' : 'day';
	      $storePost->save();

      	foreach ($request->files as $keys => $value) {
    	  foreach ($value as $image) {
    	  	//dd($image);
    	  	$img_height = \Image::make($image)->height();
    	  	$img_width  = \Image::make($image)->width();

    	  	$new_name = time() . '_' . $image->getClientOriginalName();
    	  	$img = \Image::make($image->getPathName());
    	  	$img->text('www.profun.com',($img_width/2)-1,$img_height-20, function($font) {
    	  		$font->size(50);
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


    public function expiryGet($time, $apply){
        date_default_timezone_set("Asia/Calcutta");
        $current_time = date('H:i:s');
        $slot_0 = ['09:00:00','14:00:00'];
        $slot_1 = ['14:00:00','19:00:00'];
        $slot_2 = ['07:00:00','23:59:00'];
        $slot_3 = ['00:00:00','09:00:00'];

        if($current_time <= $slot_0[1] && $current_time >= $slot_0[0]){
            $post_time = date('Y-m-d '.$current_time);
            $expiry = date('Y-m-d H:i:s', strtotime($post_time . ' +'.$apply.'days'));
        }

        if($current_time <= $slot_1[1] && $current_time >= $slot_1[0]){
            $post_time = date('Y-m-d '.$current_time);
            $expiry = date('Y-m-d H:i:s', strtotime($post_time . ' +'.$apply.'days'));
        }

        if($current_time <= $slot_2[1] && $current_time >= $slot_2[0]){
            $post_time = date('Y-m-d '.$current_time);
            $expiry = date('Y-m-d H:i:s', strtotime($post_time . ' +'.$apply.'days'));
        }

        if($current_time <= $slot_3[1] && $current_time >= $slot_3[0]){
            $post_time = date('Y-m-d '.$current_time);
            $expiry = date('Y-m-d H:i:s', strtotime($post_time . ' +'.$apply.'days'));
        }

        return $expiry;
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
    	$getPostList=$getPostList->where('post_expired','>=',date('Y-m-d H:i:s'))
                    ->orderBy('show_order','asc')->get();

    	return view('frontend.ads_list', compact('getPostList','request'));

    }



    public function cityList($city) {
    	return view('frontend.ads_section',compact('city'));
    }


    public function cityCategoryList(Request $request, $category, $city) {
    	date_default_timezone_set("Asia/Calcutta");
    	$show_time = date('H:i:s');
    	$getPostList = Post::where('city',$city);
    	if($category) {
    		$cat_string = explode('-',$category);
    		if(count($cat_string)>1){
    			$city_query = $cat_string[0].' '.$cat_string[1];
    		}else{
    			$city_query = $category;
    		}
    		$getPostList = $getPostList->where('category',$city_query);
    	}
    	$getPostList =$getPostList->where('post_expired','>=',date('Y-m-d H:i:s'))
                    ->orderBy('show_order','asc')->get();
    
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
    	$current_time = date('H:i:s');

    	$getCurrentHour = date('H:00:00');
    	$afterOneHour 	= date('H:00:00', strtotime('1 hour'));
    	$active_slot 	= NULL;

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
    		

    		$list1=Post::where('status',1)
    				->where('time_slot',$active_slot)
    				->whereColumn('frequency_show','!=','complete_frequency')
    				->get();
        
    		$divide_slot = $list1->count(); 
    		foreach ($list1 as $key1 => $data_list1) {
    			
    			$next_show_time=date('H:'.floor(59/$divide_slot)*($key1+1)).':00';
    			$update_data = [
				   	  'next_show_time' => $next_show_time,
				   	  'start_show'     => $getCurrentHour,
				   	  'expire_show'    => $afterOneHour,
				   	  'show_order' 	   => ($key1+1)
				 	];

				$manageList=Post::where('id',$data_list1->id)->update($update_data);
    		}


	        $list2=Post::where('status',1)
	    			->where('time_slot','!=',$active_slot)
	    			->orwhereColumn('frequency_show','=','complete_frequency')
	    			->orderBy('show_order','asc')->get();
	    	

	    	foreach ($list2 as $key2 => $data_list2) {
    			
    			$update_data = ['show_order' => ($key2+$divide_slot+1)];

				$manageList=Post::where('id',$data_list2->id)->update($update_data);
    		}

	    	

		  $manageListOrder1=Post::where('status',1)
    				->where('time_slot',$active_slot)
    				->whereColumn('frequency_show','!=','complete_frequency')
    				->whereTime('next_show_time','>',$current_time)
    				->orderBy('next_show_time','asc')
    				->get();

    	  $manageListOrder2=Post::where('status',1)
    				->where('time_slot',$active_slot)
    				->whereColumn('frequency_show','!=','complete_frequency')
    				->whereTime('next_show_time','<',$current_time)
    				->orderBy('next_show_time','desc')
    				->get();

    	  $getNewList = $manageListOrder1->merge($manageListOrder2);


    	  foreach ($getNewList as $ad_key => $listOrder) {

    	  	$updateList=Post::where('id',$listOrder->id)
    	  			   ->update(['show_order' => ($ad_key+1)]);
    	  }

    	  $name = "slot_$active_slot";
    	  $current_array = eval('return $'. $name . ';');
		  $time_diff=strtotime($getCurrentHour)-strtotime($current_array[0]);

    	  $manageFrequency=Post::where('show_order',1)->first();
		  $count = $manageFrequency->complete_frequency + 1;		  
		  if($manageFrequency->frequency_show != $manageFrequency->complete_frequency || $manageFrequency->complete_frequency < $time_diff){

		  	$manageFrequency->complete_frequency = $count;
		  	$manageFrequency->save();
		  }

		  $manageResetDate=Post::whereColumn('frequency_show','=','complete_frequency')->update(['reset_date' => date('Y-m-d', strtotime('1 day'))]);
		
		return "success";
		

    }



    public function creditBuyPage() {
        return view('frontend.credit_buy');
    }

    
}
