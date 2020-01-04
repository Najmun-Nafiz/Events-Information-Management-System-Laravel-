<?php

namespace App\Http\Controllers\Admin\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Header\Category;
use App\Admin\Date\Date;
use App\Admin\Place\Place;
use App\Admin\Event\Event;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Event::orderBy('id', 'DESC')->get();
        return view ('admin.event.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $date = Date::all();
        $place = Place::all();
        return view('admin.event.create',compact('category','date','place'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'place_id' => 'required',
            'month_id' => 'required',
            'date' => 'required',
            'address' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'time' => 'required',
            'entry_fee' => 'required',
            'participant' => 'required',
            'eddition' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/event')) {
                mkdir('uploads/event',0777,true);
            }
            $image->move('uploads/event',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        $info = new Event();
        $info->title = $request->title;
        $info->category_id = $request->category_id;
        $info->place_id = $request->place_id;
        $info->month_id = $request->month_id;
        $info->date = $request->date;
        $info->address = $request->address;
        $info->short_description = $request->short_description;
        $info->description = $request->description;
        $info->time = $request->time;
        $info->entry_fee = $request->entry_fee;
        $info->participant = $request->participant;
        $info->eddition = $request->eddition;
        $info->status = false;
        $info->image = $imagename;
        $data = $info->save();

        if($data){
            Toastr::success('Event Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Event::find($id);
        $category = Category::all();
        $date = Date::all();
        $place = Place::all();
        return view('admin.event.edit',compact('info','category','date','place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'place_id' => 'required',
            'month_id' => 'required',
            'date' => 'required',
            'address' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'time' => 'required',
            'entry_fee' => 'required',
            'participant' => 'required',
            'eddition' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        
        $info = Event::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/event')) {
                mkdir('uploads/event',0777,true);
            }
            unlink('uploads/event/'.$info->image);
            $image->move('uploads/event',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        
        $info->title = $request->title;
        $info->category_id = $request->category_id;
        $info->place_id = $request->place_id;
        $info->month_id = $request->month_id;
        $info->date = $request->date;
        $info->address = $request->address;
        $info->short_description = $request->short_description;
        $info->description = $request->description;
        $info->time = $request->time;
        $info->entry_fee = $request->entry_fee;
        $info->participant = $request->participant;
        $info->eddition = $request->eddition;
        $info->status = false;
        $info->image = $imagename;
        $data = $info->update();

        if($data){
            Toastr::success('Event Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.event.index');
        }
        else{
            Toastr::success('Something Error !!', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


    public function active(Request $request,$id)
    {
        

        $info = Event::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Event Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $info = Event::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Event Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Event::find($id);

        if(file_exists('uploads/event/'.$info->image)){
            unlink('uploads/event/'.$info->image);
        }

        $info->delete();
        Toastr::success('Event Deleted Successfullye....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
