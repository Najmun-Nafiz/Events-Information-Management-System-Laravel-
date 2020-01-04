<?php

namespace App\Http\Controllers\Admin\Header;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin\Header\Category;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Category::all();
        return view('admin.header.category.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.header.category.create');
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

        

        
        $info = new Category();
        $info->name = $request->name;
        $info->status = false;
        $data = $info->save();

        if($data){
            Toastr::success('Category Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Category::find($id);
        return view('admin.header.category.edit',compact('info'));
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


        $info = Category::find($id);
        $info->name = $request->name;
        $info->status = false;
        $data = $info->update();

        if($data){
            Toastr::success('Category Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.category.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function active(Request $request,$id)
    {
        

        $info = Category::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Category Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $$info = Category::find($id);
        $info->status = false;
        $info->save();
        

        Toastr::success('Category Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Category::find($id);

        $info->delete();
        Toastr::success('Category Deleted Successfullye....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
