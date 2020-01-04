<?php

namespace App\Http\Controllers\Admin\Date;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Date\Date;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Date::orderBy('id', 'desc')->get();
        return view('admin.date.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.date.create');
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

        

        
        $info = new Date();
        $info->name = $request->name;
        $info->status = false;
        $data = $info->save();

        if($data){
            Toastr::success('Date Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $date = Date::find($id);
        return view('admin.date.edit',compact('date'));
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


        $info = Date::find($id);
        $info->name = $request->name;
        $info->status = false;
        $data = $info->update();

        if($data){
            Toastr::success('Date Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.month.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


    public function active(Request $request,$id)
    {
        

        $info = Date::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Date Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $info = Date::find($id);
        $info->status = false;
        $info->save();
        

        Toastr::success('Date Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Date::find($id);

        $info->delete();
        Toastr::success('Date Deleted Successfullye....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
