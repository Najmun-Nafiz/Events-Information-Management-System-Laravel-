

@extends('layouts.app')

@section('content')

<section id="content" style="padding-top: 50px;">
<div class="container">


<div class="postWrap" style="width: 100%;">


<div class="post-9 page type-page status-publish hentry">
<div class="contentbox">
<h2 class="title-1 border-color-1" style="text-align: center;font-size: 26px;font-style: italic;color: #f9e70f;">Contact-Us</h2>
<div class="metabar data clearfix">
<ul class="postmetas">
<li class="tooltip" title="Post date"><span class="icon-post-date-2">22.07.2016</span></li>
<li><span class="icon-author"><a href="../author/admin/index.html" title="Posts by admin" rel="author">admin</a></span></li>
<li class="tooltip" title="Total comments"><span class="icon-total-comments-2">0</span></li>
</ul>
<ul class="social-media-icons clearfix">
<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://pinthis.pixelbeautify.com/contact-us/" class="border-color-3 icon-facebook tooltip" title="Share on Facebook" target="_blank">Facebook</a></li>
<li><a href="https://plus.google.com/share?url=http://pinthis.pixelbeautify.com/contact-us/" class="border-color-1 icon-gplus tooltip" title="Share on Google+" target="_blank">Google+</a></li>
<li><a href="https://twitter.com/share?url=http://pinthis.pixelbeautify.com/contact-us/" class="border-color-4 icon-twitter tooltip" title="Share on Twitter" target="_blank">Twitter</a></li>
</ul>
</div>
<div class="textbox clearfix">
<p style="font-size: 22px;text-align: center;margin-bottom: 50px;">Any kind of information for knowing you can ask us bt using this contact form.</p>
<p><span style="color: yellow;font-size: 16px;">Address:</span> Sector 11, Uttara - 1230 (Bangladesh)<br />
<span style="color: yellow;font-size: 16px;">Phone:</span> +8801750496753</p>

<div role="form" lang="en-US" style="border: 2px solid #F9E70F;padding: 20px;margin-top: 50px;">
<div class="screen-reader-response"></div>


	<form action="{{ route('home.message') }}" method="post" class="wpcf7-form" novalidate="novalidate">
		@csrf
		
		<p>Your Name (required)<br />
			<span>
				<input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter Name" />
			</span> 
		</p>


		<p>Your Email (required)<br />
		<span>
			<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter Email" />
		</span> 
	</p>
		<p>Subject<br />
			<span>
				<input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter Subject" />
			</span>
		</p>


			<p>Your Message<br />
				<span>
					<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Enter Message" aria-invalid="false"></textarea>
				</span>
			</p>
			<p>

			<input type="submit" value="Send"/></p>
			<div class="wpcf7-response-output wpcf7-display-none"></div>
	</form>


			
			
			
		</div>
	</div>

</div>



</div>
</section>


@endsection

