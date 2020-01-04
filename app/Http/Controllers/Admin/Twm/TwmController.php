<?php

namespace App\Http\Controllers\Admin\Twm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Twm\Twm;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class TwmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Twm::all();
        return view('admin.twm.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.twm.create');
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

        

        
        $info = new Twm();
        $info->name = $request->name;
        $info->status = false;
        $data = $info->save();

        if($data){
            Toastr::success('Today_Week_Month Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Twm::find($id);
        return view('admin.twm.edit',compact('info'));
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


        $info = Twm::find($id);
        $info->name = $request->name;
        $info->status = false;
        $data = $info->update();

        if($data){
            Toastr::success('Today_Week_Month Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.twm.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }



    public function active(Request $request,$id)
    {
        

        $info = Twm::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Today_Week_Month Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $$info = Twm::find($id);
        $info->status = false;
        $info->save();
        

        Toastr::success('Today_Week_Month Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Twm::find($id);

        $info->delete();
        Toastr::success('Today_Week_Month Deleted Successfullye....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
