<?php

namespace App\Http\Controllers\Admin\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Home\Contact;
use App\Home\Messagereply;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

use App\Notifications\MessagereplyNotification;
use Illuminate\Support\Facades\Notification;

use Session;
Session_start();

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Contact::orderBy('id', 'desc')->get();
        
        return view('admin.contact.index', compact('info'));
    }



    public function active(Request $request,$id)
    {
        

        $info = Contact::find($id);
        return view('admin.contact.reply', compact('info'));
    }


    public function reply(Request $request,$id)
    {
        $this->validate($request,[
            'reply' => 'required',
        ]);

        $info = Contact::find($id);
        $name = $info->name;
        $email = $info->email;
        $info->status = true;
        $info->save();

        $reply = new Messagereply();
        $reply->reply = $request->reply;
        $reply->name = $name;
        $reply->email = $email;
        $data = $reply->save();

        $answer = $request->reply;
        Session::put('answer',$answer);


        Notification::route('mail', $email )
            ->notify(new MessagereplyNotification()); 

        if($data){
            Toastr::success('Your Message Reply Successfully Sent...', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.dashboard.contact.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }

    }


    public function unactive(Request $request,$id)
    {
        $info = Contact::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Contact Message Not Reply....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
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
        //
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
