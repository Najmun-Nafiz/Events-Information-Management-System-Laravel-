<section id="primary">
    <div class="slider">
        <ul>
            @foreach($slider as $v_info)
            <li class="post-166 pinthis_slider type-pinthis_slider status-publish has-post-thumbnail hentry" data-rel="http://pixelbeautify.com" data-background="{{'uploads/slider/'.$v_info -> image}}">
                <div class="flick-title" style="margin-top: 168px;font-weight: bold;">{{ $v_info -> name }}</div>
            </li>
            @endforeach
        </ul>
    </div>
</section>