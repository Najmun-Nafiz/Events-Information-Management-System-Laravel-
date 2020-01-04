



@extends('layouts.app')

@section('content')

<section id="content" style="margin-top: 0px;">
<div class="container">



<div class="topbar">
<ul class="navbtns">
<li>
<a href="{{ route('home.prev_post',$info -> id) }}" rel="prev">Previous post</a>							</li>
<li>
	<a href="{{ route('home.next_post',$info -> id) }}" rel="next">Next post</a>							</li>
</ul>
<p class="space border-color-5">&nbsp;</p>
</div>
<div class="post-129 post type-post status-publish format-standard has-post-thumbnail hentry category-sport">
<div class="contentbox">
	<h2 class="title-1 border-color-1" style="text-align: center;font-size: 26px;font-style: italic;color: #f9e70f;margin-bottom: 30px;">Information Detail</h2>



<div class="distance">
<div class="left" style="width: 57%;display: inline-block;">
	
	<p class="featured-image">
		<img id="left_img" src="{{asset('uploads/event/'.$info -> image)}}" alt="Where does it come from?">
	</p>

</div>


<div class="right" style="width: 37%;display: inline-block;float: right;padding-right: 5px;">
	
	<h1 class="title-3 have-button" style="">
	
		<a id="right_head" href="index.html" style="">{{ $info -> title }}</a>



		<ul class="lead" style="padding-top: 15px;">
			<li style="list-style: none;">
				<i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> <span id="right_date" content="2019-07-23"> {{ $info -> date }}</span> <a id="right_d" href="javascript:void(0);" onclick="show_thank();attendNew(this,'bookmark');" class="x-bk evtstatus font-12 font-bold ml-10  action-cl action-db" style="">Add To Calendar</a>
			</li>
			<li style="list-style: none;padding-top: 3px;">
				<i class="fa fa-map-marker fa-fw" aria-hidden="true"></i> 
				<a id="right_address" href="/usa/conferences">{{ $info -> address }}</a> 
				<a id="right_d" href="javascript:void(0);" class="font-12 font-bold ml-10 action-dir" style="" onclick="show_thank();attendNew(this,'bookmark');">View Direction</a>
			</li>
		</ul>

	</h1>

	

</div>
<p id="description_details" >{{ $info -> description }}</p>
</div>


<div style="margin-top: 20px;">
<div class="metabar data clearfix" style="margin-top: 60px;">
	<ul class="postmetas">
		<li class="tooltip" title="Post date"><span class="icon-post-date-2">{{ $info -> created_at }}</span></li>
		<li><span class="icon-author"><a href="../author/admin/index.html" title="Posts by admin" rel="author">admin</a></span></li>
		<li class="tooltip" title="Total comments"><span class="icon-total-comments-2">0</span></li>
	</ul>
	<ul class="social-media-icons clearfix">
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://pinthis.pixelbeautify.com/where-does-it-come-from-5/" class="border-color-3 icon-facebook tooltip" title="Share on Facebook" target="_blank">Facebook</a></li>
		<li><a href="https://plus.google.com/share?url=http://pinthis.pixelbeautify.com/where-does-it-come-from-5/" class="border-color-1 icon-gplus tooltip" title="Share on Google+" target="_blank">Google+</a></li>
		<li><a href="https://twitter.com/share?url=http://pinthis.pixelbeautify.com/where-does-it-come-from-5/" class="border-color-4 icon-twitter tooltip" title="Share on Twitter" target="_blank">Twitter</a></li>
	</ul>
</div>

<div class="textbox clearfix" style="padding-top: 0px;">

<section class="box" style="margin-top: 50px;border: 2px solid #F59E00;">
	<table class="table noBorder mng">
		<tbody>
			<tr>
				<td style="width: 50%;"><h2>Timings</h2> {{ $info -> time }} (expected)<br> <small class="block text-danger"> Not Verified</small></td>

				<td style="width:50%;"><h2>Entry Fees</h2> <small>{{ $info -> entry_fee }}</small></td>

			</tr>
			<tr>
				<td><h2>Participants</h2>upto {{ $info -> participant }} Delegates <small class="text-danger block ">Estimated Count</small></td>

				<td>
					<h2>Category &amp; Type</h2><i class="fa fa-check fa-fw text-success"></i> {{ $info -> category -> name }}<br>
				</td>
			</tr>
				<tr>

				<td>
					<h2>Editions</h2>
					{{ $info -> created_at }}
					<a class="x-ded-in editionList pastEdition" data-id="835283" id="pastEdition" style="margin-left: 5px;text-decoration: none" href="javascript:void(0);" onclick="attendNew(this ,'interest');"><small><strong><i style="font-weight:600;font-size: 11px;" class="fa fa-plus-square"></i>  Interested</strong></small></a><br><br><br> 


				</td>
				<td>
					<h2>Official Links</h2> <a href="{{ route('home') }}" onclick="attendNew(this ,'orgdetailswebsite_interest');" class="btn btn-xs btn-default x-ob-ow ">Website</a>

					<a href="{{ route('home.contact_us') }}" onclick="attendNew(this ,'orgdetailscontact_interest');" class="btn btn-xs btn-default x-ob-cd">Contacts </a>
				</td>
			</tr>
		</tbody>
	</table>
</section>
</div>
</div>

@foreach($comment as $v_info)
<div class="log-in-out dropel" style="padding-top: 30px;padding-bottom: 50px;margin-left: 30px;">
	<img src="{{asset('front/wp-content/themes/pinthis/images/cat2.jpg')}}" onclick="return false;"class="icon-login tooltip" alt="" style="height: 40px;width: 40px;border-radius: 50%;cursor: pointer;float: left;">
	<div style="padding: 10px;border-bottom: 2px solid green; cursor: pointer;margin-left: 50px;" class="user__name">{{ Auth::user()->name }}
		
		<p style="background-color: #868a86;padding: 30px;margin-top: 15px;">{{ $v_info -> comment }}</p>
		
	</div>
	
</div>
@endforeach

 <form class="row" method="post" action="{{ route('home.comment') }}" enctype="multipart/form-data" style="margin-left: 25px;">

                                @csrf

                                <div class="col-md-10">

              						<div class="form-group">
                                        <textarea class="form-control content" name="comment" placeholder="Comments" cols="7" rows="2" required style="width: 70%;"></textarea>
                                    </div>
									
                                    <button class="col-md-5 btn btn-primary btn-block" type="submit" style="font-size: 17px;margin-top: 20px;background-color: orange;padding: 6px;margin-bottom: 50px;">Sublit</button>

                                </div>

                            </form>


</div>
</div>




</div>
</section>

@endsection

