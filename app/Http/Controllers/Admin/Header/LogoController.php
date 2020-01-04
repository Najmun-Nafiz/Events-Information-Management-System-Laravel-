<?php

namespace App\Http\Controllers\Admin\Header;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Header\Logo;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;


class LogoController extends Controller
{

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $info = Logo::all();
        return view('admin.header.logo.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.header.logo.create');
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
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/logo')) {
                mkdir('uploads/logo',0777,true);
            }
            $image->move('uploads/logo',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        $info = new Logo();
        $info->name = $request->name;
        $info->status = false;
        $info->image = $imagename;
        $data = $info->save();

        if($data){
            Toastr::success('Logo Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Logo::find($id);
        return view('admin.header.logo.edit',compact('info'));
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
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        
        $info = Logo::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/logo')) {
                mkdir('uploads/logo',0777,true);
            }
            unlink('uploads/logo/'.$info->image);
            $image->move('uploads/logo',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        
        $info->name = $request->name;
        $info->status = false;
        $info->image = $imagename;
        $data = $info->update();

        if($data){
            Toastr::success('Logo Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.logo.index');
        }

        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }



    public function active(Request $request,$id)
    {
        

        $info = Logo::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Logo Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $info = Logo::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Logo Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Logo::find($id);

        if(file_exists('uploads/logo/'.$info->image)){
            unlink('uploads/logo/'.$info->image);
        }

        $info->delete();
        Toastr::success('Logo Deleted Successfullye....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
