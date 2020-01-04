<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Header\Category;

use App\Admin\Event\Event;
use App\Home\Comment;
use App\Home\Contact;
use App\Admin\Slider\Slider;
use App\Admin\Aboutus\Aboutus;
use App\Admin\Twm\Twm;

use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all()->where('status', 1);
        $slider = Slider::orderBy('id','desc')->get()->where('status', 1);
        $twm = Twm::get()->where('status', 1);

        $info = Event::orderBy('id','desc')->get()->where('status', 1);
        return view('home',compact('category','slider','info','twm'));
    }


    public function about_us()
    {
        $category = Category::all()->where('status', 1);
        $aboutus = Aboutus::all()->where('status', 1);
        $twm = Twm::get()->where('status', 1);
        return view('layouts.about_us.about_us',compact('category','aboutus','twm'));
    }


    public function contact_us()
    {
        $category = Category::all()->where('status', 1);
        $twm = Twm::get()->where('status', 1);
        return view('layouts.contact_us.contact_us',compact('category','twm'));
    }

    public function message(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $info = new Contact();
        $info->name = $request->name;
        $info->email = $request->email;
        $info->subject = $request->subject;
        $info->message = $request->message;
        $info->status = false;

        $data = $info->save();

        if($data){
            Toastr::success('Your Message Successfully Sent...', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


    public function event_details($id)
    {
        $comment = Comment::orderBy('id', 'desc')->limit(3)->get();
        $info = Event::find($id);
        $category = Category::all()->where('status', 1);
        return view('layouts.event_detail.event_detail',compact('info','category','comment'));
    }


    public function next_post($id)
    {
        $info = Event::find($id+1);
        $category = Category::all()->where('status', 1);
        return view('layouts.event_detail.event_detail',compact('info','category'));
    }

    public function prev_post($id)
    {
        $info = Event::find($id-1);
        $category = Category::all()->where('status', 1);
        return view('layouts.event_detail.event_detail',compact('info','category'));
    }



}
