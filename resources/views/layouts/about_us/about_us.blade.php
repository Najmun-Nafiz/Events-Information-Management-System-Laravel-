
@extends('layouts.app')

@section('content')



@foreach($aboutus as $v_info)

    <section id="content" style="padding-top: 50px;">

    <div class="container">

    <div class="post-2 page type-page status-publish has-post-thumbnail hentry">
    <div class="contentbox">
    <h2 class="title-1 border-color-1" style="text-align: center;font-size: 26px;font-style: italic;color: #f9e70f;">About-Us</h2>
    <p class="featured-image">
    <img src="{{asset('uploads/aboutus/'.$v_info -> image)}}" width="100%" height="400" alt="About">
    </p>

    <div class="metabar data clearfix">
        <ul class="postmetas">

            <li class="tooltip" title="Post date"><span class="icon-post-date-2">22.07.2016</span></li>
            <li><span class="icon-author"><a href="../author/admin/index.html" title="Posts by admin" rel="author">admin</a></span></li>

        </ul>
        <ul class="social-media-icons clearfix">

            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://pinthis.pixelbeautify.com/about/" class="border-color-3 icon-facebook tooltip" title="Share on Facebook" target="_blank">Facebook</a></li>
            <li><a href="https://plus.google.com/share?url=http://pinthis.pixelbeautify.com/about/" class="border-color-1 icon-gplus tooltip" title="Share on Google+" target="_blank">Google+</a></li>
            <li><a href="https://twitter.com/share?url=http://pinthis.pixelbeautify.com/about/" class="border-color-4 icon-twitter tooltip" title="Share on Twitter" target="_blank">Twitter</a></li>

        </ul>
    </div>

    <div class="textbox clearfix">
    <p>{{ $v_info -> description }}</p>
    </div>




    <div class="col-md-12 clearfix" style="   
        background-color: #394264;
        padding: 25px;
        margin-bottom: 1.5em;border: 2px solid #cabf43;margin-top: 50px;">
        <h4 style="color: #a5a5a5;font-size: 25px;padding-bottom: 35px;text-align: center;">Pin Box Online Private Limited</h4>
    	<div class="col-md-6" style="width: 60%;float: left;">
    		<b style="color: black;font-weight: bold;font-size: 20px;">Dhaka Office</b>:<br>
                        <span style="color: #d8d3d3;">{{ $v_info -> dhaka_offiece }}</span> 
                <a href="https://www.google.com/maps/place/10times.com/@28.5388706,77.3374325,17z/data=!3m1!4b1!4m5!3m4!1s0x390ceff17a9ba0f3:0xd43409450523c92d!8m2!3d28.5388659!4d77.3396212" style="color: #d6a853;text-decoration: underline;">Map</a><br><br><b style="color: black;font-size: 20px;">Rajshahi Office</b>: <br>
                         <span style="color: #d8d3d3;">{{ $v_info -> rajshahi_offiece }}</span>
                        

                         <br><br><b style="color: black;font-size: 20px;">Chittagong Office</b>: <br>
                         <span style="color: #d8d3d3;">{{ $v_info -> chittagong_offiece }}</span><br>
        </div>
        <div class="col-md-6" style="width: 40%;float: right;"><br>
        	<h style="color: black;font-size: 20px;"5>Support &amp; Helpdesk :</h5> 
        	<a href="mailto:help@eventinfo.com" style="color: #d6a853;text-decoration: underline;font-size: 16px;">{{ $v_info -> helpdesk }}</a><br><br>
        	<h5 style="color: black;font-size: 20px;margin-bottom: 15px;">Sales &amp; Advertising</h5><b style="color: black;">Email</b> : <a href="https://requestdemo.typeform.com/to/Sz8R4V" style="color: #d6a853;text-decoration: underline;font-size: 16px;">{{ $v_info -> email }}</a><br><b style="color: black;">Phone</b> : <span style="color: #d6a853;text-decoration: underline;font-size: 16px;">{{ $v_info -> phone }}</span><br>
        </div>
    </div>

    <div class="metabar" style="padding-top: 20px;">
    <h4 class="title-5">Comments</h4>
    </div>
    <p class="notification">Sorry, comments are closed for this item.</p>

    </div>
    </div>



    </div>
    </section>

@endforeach


@endsection



