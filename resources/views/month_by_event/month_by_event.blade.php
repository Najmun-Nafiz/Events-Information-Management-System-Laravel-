

@include('partial.header')

<section id="content">
<div class="container fluid">

	<div class="category-title">
	
		@foreach($category as $v_info)
		<h3 class="title-3 border-color-1" style="text-align: center;font-size: 26px;font-style: italic;color: #f9e70f;margin-top: 20px;margin-bottom: 100px;"> {{ $v_info -> name }} <span style="color: white;"> Events in </span> <span style="color: #7adc3d;">{{ $info -> name }}</span></h3>
		@endforeach

	</div>

<?php 
	Session::put('month_id',$info -> id);
?>

<div class="postWrap">
<div class="boxcontainer">


@foreach($event as $v_info)

<article class="pinbox">
<div class="post-106 post type-post status-publish format-standard has-post-thumbnail hentry category-beauty category-celebrities">
<div class="top-bar">
<ul class="social-media-icons clearfix">
	<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://pinthis.pixelbeautify.com/the-standard-lorem-ipsum-passage-2/" class="border-color-3 icon-facebook tooltip" title="Share on Facebook" target="_blank">Facebook</a></li>
	<li><a href="https://plus.google.com/share?url=http://pinthis.pixelbeautify.com/the-standard-lorem-ipsum-passage-2/" class="border-color-1 icon-gplus tooltip" title="Share on Google+" target="_blank">Google+</a></li>
	<li><a href="https://twitter.com/share?url=http://pinthis.pixelbeautify.com/the-standard-lorem-ipsum-passage-2/" class="border-color-4 icon-twitter tooltip" title="Share on Twitter" target="_blank">Twitter</a></li>
</ul>
</div>
<div class="preview">
<p class="thumb">
	<a href="#" title="The standard Lorem Ipsum passage">
		<img src="{{ asset('uploads/event/'.$v_info -> image) }}" width="236" height="157" alt="The standard Lorem Ipsum passage">
	</a>
</p>
</div>
<div class="title">
<h2 class="title-2"><a href="{{ route('event_details',$v_info -> id) }}">{{ $v_info -> title }}</a></h2>
</div>
<div class="excerpt">{{ $v_info -> short_description }}</div>
<div class="meta-data">
<ul class="clearfix">
	<li class="border-color-1 tooltip " title="Total comments">
		<span class="icon-total-comments">0</span>
	</li>
	<li class="border-color-2 tooltip " title="Post date">
		<span class="icon-post-date">{{ $v_info -> created_at }}</span>
	</li>
</ul>
</div>
</div>
</article>

@endforeach




</div>
</div>









<aside class="sidebar">

<div class="contentbox">
	<form role="search" method="get" id="searchform" class="searchform" action="http://pinthis.pixelbeautify.com/">
		<div>
			<label class="screen-reader-text" for="s">Search for:</label>
			<input type="text" value="" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="Search" />
		</div>
	</form>
</div>		





<div class="contentbox">
<nav class="menu-categories dropel" style="padding: 10px;cursor: pointer;">
	<a href="#" onclick="return false;" class="icon-menu-categories tooltip" title="Select Place">Select Place</a><a href="#" style="margin-left: 30px;margin-bottom: 10px;font-size: 20px;color: #dcce21;">Select Place</a>

	<div class="dropdown">
		<div class="dropdown-wrapper arrow-up-left">
		
			<h4 class="title-1 border-color-2">Place</h4>
					
			<ul class="categories-list">
				@foreach($place as $v_info)
				<li class="cat-item cat-item-7"><a href="{{ route('place_by_event',$v_info -> id )}}" >{{ $v_info -> name }}</a>
				</li>
				@endforeach
			</ul>

		</div>
	</div>
</nav>
</div>




<div class="contentbox">
<nav class="menu-categories dropel" style="padding: 10px;cursor: pointer;">
	<a href="#" onclick="return false;" class="icon-menu-categories tooltip" title="Select Month">Select Month</a><a href="#" style="margin-left: 30px;margin-bottom: 10px;font-size: 20px;color: #E64C65;">Select Month</a>

	<div class="dropdown">
		<div class="dropdown-wrapper arrow-up-left">
		
			<h4 class="title-1 border-color-2">Date</h4>
						
			<ul class="categories-list">
				@foreach($month as $v_info)
				<li class="cat-item cat-item-7"><a href="{{ route('month_by_event',$v_info -> id )}}" >{{ $v_info -> name }}</a>
				</li>
				@endforeach
			</ul>

		</div>
	</div>
</nav>
</div>

<div class="contentbox"><h4 class="title-1 border-color-2">Paid-Not_Paid</h4>			
	<ul>
		<li><a href="#">Paid</a></li>
		<li><a href="#">Not Paid</a></li>		
	</ul>
</div>


<div class="contentbox">
	<h4 class="title-1 border-color-2">Gallery</h4>		
<div class="widgetwrapper">
	
	<ul class=" clearfix">
	@foreach($event_all as $v_info)
		<li style="display: inline-block;padding: 3px;">
			<a  href="{{ route('event_details',$v_info -> id) }}" title="{{ $v_info -> title }}" >
			<img src="{{asset('uploads/event/'.$v_info -> image)}}" width="68" height="68" >
			</a>
		</li>
	@endforeach
	</ul>
	
</div>

</div>

</aside>

</div>
</section>

<input type="checkbox" id="toggle-footer" class="hide">

@include('partial.footer')