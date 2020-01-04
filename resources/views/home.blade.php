@extends('layouts.app')

@section('content')



<section id="content">
    <div class="container">
        @include('layouts.partial.slider')
    <div class="boxcontainer">
        
   @foreach($info as $v_info)    

        <article class="pinbox">
        <div class="post-106 post type-post status-publish format-standard has-post-thumbnail hentry category-beauty category-celebrities">
        <div class="top-bar">
        <ul class="social-media-icons clearfix">
            <li><a href="#" class="border-color-3 icon-facebook tooltip" title="Share on Facebook" target="_blank">Facebook</a></li>
            <li><a href="#" class="border-color-1 icon-gplus tooltip" title="Share on Google+" target="_blank">Google+</a></li>
            <li><a href="#" class="border-color-4 icon-twitter tooltip" title="Share on Twitter" target="_blank">Twitter</a></li>
        </ul>
        </div>
        <div class="preview">
        <p class="thumb">
            <a href="#" title="{{ $v_info -> title }}">
                <img src="{{'uploads/event/'.$v_info -> image}}" width="236" height="157" alt="{{ $v_info -> title }}">
            </a>
        </p>
        </div>
        <div class="title">
        <h2 class="title-2"><a href="{{route('home.event_details',$v_info -> id)}}">{{ $v_info -> title }}</a></h2>
        </div>
        <div class="excerpt">
        {{ $v_info -> short_description }}</div>
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
    <div class="container">
    <div class="posts-navigation clearfix hide"><a href="../2/index.html" class="prev">Previous Page</a></div>
    </div>
    </div>
</section>
@endsection
