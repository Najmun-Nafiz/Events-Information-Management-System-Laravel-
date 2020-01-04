<?php

namespace App\Http\Controllers\Home\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Home\Comment;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
    	$this->validate($request,[
            'comment' => 'required',
        ]);

        $info = new Comment();
        $info->comment = $request->comment;

        $data = $info->save();

        if($data){
            Toastr::success('Comment Successfully Sent...', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

}
