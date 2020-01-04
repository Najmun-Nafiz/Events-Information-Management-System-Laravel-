<?php

namespace App\Http\Controllers\Admin\Place;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Place\Place;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Place::all();
        return view('admin.place.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.place.create');
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
            'name' => 'required',
        ]);

        

        
        $info = new Place();
        $info->name = $request->name;
        $info->status = false;
        $data = $info->save();

        if($data){
            Toastr::success('Place Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Place::find($id);
        return view('admin.place.edit',compact('info'));
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
            'name' => 'required',
        ]);

        

        
        $info = Place::find($id);
        $info->name = $request->name;
        $info->status = false;
        $data = $info->update();

        if($data){
            Toastr::success('Place Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.place.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


    public function active(Request $request,$id)
    {
        

        $info = Place::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Place Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $info = Place::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Place Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Place::find($id);

        $info->delete();
        Toastr::success('Place Deleted Successfullye....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    
    }
}
