<?php

namespace App\Http\Controllers\Admin\Aboutus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Aboutus\Aboutus;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Aboutus::all();
        return view('admin.aboutus.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutus.create');
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
            'dhaka_offiece' => 'required',
            'chittagong_offiece' => 'required',
            'rajshahi_offiece' => 'required',
            'helpdesk' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/aboutus')) {
                mkdir('uploads/aboutus',0777,true);
            }
            $image->move('uploads/aboutus',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        $info = new Aboutus();
        $info->dhaka_offiece = $request->dhaka_offiece;
        $info->chittagong_offiece = $request->chittagong_offiece;
        $info->rajshahi_offiece = $request->rajshahi_offiece;
        $info->helpdesk = $request->helpdesk;
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->description = $request->description;
        $info->status = false;
        $info->image = $imagename;
        $data = $info->save();

        if($data){
            Toastr::success('Aboutus Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Aboutus::find($id);
        return view('admin.aboutus.edit',compact('info'));
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
            'dhaka_offiece' => 'required',
            'chittagong_offiece' => 'required',
            'rajshahi_offiece' => 'required',
            'helpdesk' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $info = Aboutus::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/aboutus')) {
                mkdir('uploads/aboutus',0777,true);
            }
            unlink('uploads/aboutus/'.$info->image);
            $image->move('uploads/aboutus',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        
        $info->dhaka_offiece = $request->dhaka_offiece;
        $info->chittagong_offiece = $request->chittagong_offiece;
        $info->rajshahi_offiece = $request->rajshahi_offiece;
        $info->helpdesk = $request->helpdesk;
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->description = $request->description;
        $info->status = false;
        $info->image = $imagename;
        $data = $info->update();

        if($data){
            Toastr::success('Aboutus Udated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.aboutus.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }



    public function active(Request $request,$id)
    {
        

        $info = Aboutus::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Aboutus Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $info = Aboutus::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Aboutus Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Aboutus::find($id);

        if(file_exists('uploads/aboutus/'.$info->image)){
            unlink('uploads/aboutus/'.$info->image);
        }

        $info->delete();
        Toastr::success('Aboutus Deleted Successfullye....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
