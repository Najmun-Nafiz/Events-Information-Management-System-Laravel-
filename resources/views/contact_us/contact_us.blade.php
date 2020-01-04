


@include('partial.header');

<section id="content" style="padding-top: 116px;">
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

<div role="form" lang="en-US" dir="ltr" style="border: 2px solid #F9E70F;padding: 20px;margin-top: 50px;">

<div class="screen-reader-response"></div>

		<p>Your Name<br />
			<input type="text" name="name" value="" size="40" placeholder="Enter Name" required />
		</p>


		<p>Your Email<br />
			<input type="email" name="name" value="" size="40"  placeholder="Enter Email" required />
		</p>

		<p>Subject<br />
			<input type="text" name="subject" value="" size="40"  placeholder="Enter Subject" required />
		</p>


		<p>Your Message<br />
			<textarea name="message" cols="40" rows="10"  placeholder="Enter Message" required></textarea>
		</p>

		<p>
			<a href="{{ route('login') }}"><input type="submit" value="Send"/></a>
			
		</p>
			
		</div>
	</div>

</div>



</div>
</section>
<input type="checkbox" id="toggle-footer" class="hide">


@include('partial.footer');

