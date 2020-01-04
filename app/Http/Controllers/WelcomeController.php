<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin\Event\Event;
use App\Admin\Slider\Slider;
use App\Admin\Header\Logo;
use App\Admin\Aboutus\Aboutus;
use App\Admin\Twm\Twm;




class WelcomeController extends Controller
{
	public function index()
	{
		$info = Event::orderBy('id', 'desc')->get()->where('status', 1);
		$slider = Slider::orderBy('id','desc')->get()->where('status', 1);
        $logo = Logo::first()->where('status', 1);
        $twm = Twm::get()->where('status', 1);
        
		return view('welcome',compact('info','slider','logo','twm'));
	}

    public function about_us()
    {
        $aboutus = Aboutus::all()->where('status', 1);
        $twm = Twm::get()->where('status', 1);
        return view('about_us.about_us',compact('aboutus','twm'));
    }


    public function contact_us()
    {
        $twm = Twm::get()->where('status', 1);
        return view('contact_us.contact_us', compact('twm'));
    }


    public function event_details($id)
    {
    	$info = Event::find($id);
        $twm = Twm::get()->where('status', 1);
        return view('event_detail.event_detail',compact('info','twm'));
    }


    public function next_post($id)
    {
    	$info = Event::find($id+1);
        $twm = Twm::get()->where('status', 1);
    	return view('event_detail.event_detail',compact('info','twm'));
    }

    public function prev_post($id)
    {
    	$info = Event::find($id-1);
        $twm = Twm::get()->where('status', 1);
    	return view('event_detail.event_detail',compact('info','twm'));
    }


    public function comment()
    {
    	return redirect()->route('login');
    }
}
