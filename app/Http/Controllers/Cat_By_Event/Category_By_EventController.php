<?php

namespace App\Http\Controllers\Cat_By_Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Event\Event;
use App\Admin\Header\Category;
use App\Admin\Date\Date;
use App\Admin\Place\Place;
use App\Admin\Twm\Twm;

use Session;

session_start();

class Category_By_EventController extends Controller
{
    public function category_by_event(Request $request,$id)
    {
    	$month = Date::get()->where('status',true);
    	$place = Place::get()->where('status',true);
    	$event_all = Event::orderBy('id','desc')->limit(8)->get()->where('status',true);

    	$info = Category::find($id);
    	$event = Event::orderBy('id','desc')->get()->where('category_id',$id)->where('status',true);
        $twm = Twm::get()->where('status', 1);

    	$cat_id = Session::put('cat_id',$id);

    	return view('category_by_event.category_by_event',compact('info','event','event_all','place','month','twm'));
    }




    public function place_cate_by_event(Request $request,$id)
    {
        $month = Date::get()->where('status',true);
        $place = Place::get()->where('status',true);
        $event_all = Event::orderBy('id','desc')->limit(8)->get()->where('status',true);

        $cat_id = Session::get('category_id');
        
        $event = Event::orderBy('id','desc')->get()->where('place_id',$id)->where('category_id',$cat_id)->where('status',true);
        $twm = Twm::get()->where('status', 1);



        $info = Place::find($id);
        $category = Category::get()->where('id',$cat_id);
        return view('place_cate_by_event.place_cate_by_event',compact('info','event','event_all','month','place','category','twm'));
    }




    public function month_place_cate_by_event(Request $request,$id)
    {
        $month = Date::get()->where('status',true);
        $place = Place::get()->where('status',true);
        $event_all = Event::orderBy('id','desc')->limit(8)->get()->where('status',true);

        $cat_id = Session::get('category_id');
        $place_id = Session::get('place_id');
        
        $event = Event::orderBy('id','desc')->get()->where('month_id',$id)->where('category_id',$cat_id)->where('place_id',$place_id)->where('status',true);
        $twm = Twm::get()->where('status', 1);



        $info = Date::find($id);
        $category = Category::get()->where('id',$cat_id);
        $place_name = Place::find($place_id);
        return view('month_place_cate_by_event.month_place_cate_by_event',compact('info','event','event_all','month','place','category','place_name','twm'));
    }




    public function month_by_event(Request $request,$id)
    {
        $month = Date::get()->where('status',true);
        $place = Place::get()->where('status',true);
        $event_all = Event::orderBy('id','desc')->limit(8)->get()->where('status',true);

        $cat_id = Session::get('category_id');
        
        $event = Event::orderBy('id','desc')->get()->where('month_id',$id)->where('category_id',$cat_id)->where('status',true);
        $twm = Twm::get()->where('status', 1);



        $info = Date::find($id);
        $category = Category::get()->where('id',$cat_id);
        return view('month_by_event.month_by_event',compact('info','event','event_all','month','place','category','twm'));
    }




    public function place_by_event(Request $request,$id)
    {
    	$month = Date::get()->where('status',true);
    	$place = Place::get()->where('status',true);
    	$event_all = Event::orderBy('id','desc')->limit(8)->get()->where('status',true);

    	$cat_id = Session::get('category_id');
        $month_id = Session::get('month_id');
 		
    	$event = Event::orderBy('id','desc')->get()->where('place_id',$id)->where('month_id',$month_id)->where('category_id',$cat_id)->where('status',true);
        $twm = Twm::get()->where('status', 1);



    	$info = Place::find($id);
        $category = Category::get()->where('id',$cat_id);
        $month_name = Date::find($month_id);
    	return view('place_by_event.place_by_event',compact('info','event','event_all','month','place','category','month_name','twm'));
    }

}
