<?php

namespace App\Http\Controllers\Home\Upload;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Event\Event;
use App\Admin\Header\Category;
use App\Admin\Date\Date;
use App\Admin\Place\Place;
use App\Admin\Twm\Twm;

use Carbon\Carbon;
use Redirect;
use Brian2694\Toastr\Facades\Toastr;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $date = Date::all();
        $place = Place::all();
        $twm = Twm::get()->where('status', 1);

        return view('layouts.upload.eventUpload',compact('category','date','place','twm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $info->status = true;
        $info->image = $imagename;
        $data = $info->save();

        if($data){
           
            return Redirect()->route('home');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
