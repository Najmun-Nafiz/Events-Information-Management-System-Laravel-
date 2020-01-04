<footer>
    <a href="#totop" class="scrolltotop">Scroll to Top</a>
    <div class="toggler">
        <label for="toggle-footer">&nbsp;</label>
    </div>
    <div class="footerwrapper">
        <div class="footerbar">
        <div class="container">
        <div class="container-cell">
        <div class="footer-widgets">
            <div class="footer-widget">
                <h3 class="title-2">Event Pages</h3>
                <ul class="links">
                    <li class="page_item page-item-2"><a href="{{ route('about_us') }}">About Us</a>
                    <li class="page_item page-item-9"><a href="{{ route('contact_us') }}">Contact Us</a>
                    <li class="page_item page-item-15"><a href="{{ route('back') }}">Portfolio</a>
                </ul>
            </div>
                <div class="footer-widget">

                </div>

                <div class="footer-widget">
                    <h3 class="title-2">Recent Posts</h3>
                        
                    <?php 
                        $recent = DB::table('events')->where('status', 1)->limit(3)->orderBy('id', 'desc')->get();
                    ?>
                                    
                    <ul class="links">
                        @foreach($recent as $v_info)
                        <li><a href="{{ route('event_details',$v_info -> id) }}" title="Post Format: Audio">{{ $v_info -> title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="footer-widget">
                    
                </div>

            </div>
            </div>
            <div class="container-cell">
                <h3 class="title-2">Follow Us</h3>
                <ul class="soclinks clearfix">
                    <li><a href="https://facebook.com/" class="icon-footer-fb" target="_blank">Facebook</a></li>
                    <li><a href="https://pinterest.com/" class="icon-footer-pin" target="_blank">Pinterest</a></li>
                    <li><a href="https://twitter.com/" class="icon-footer-tw" target="_blank">Twitter</a></li>
                    <li><a href="https://instagram.com/" class="icon-footer-instagram" target="_blank">Instagram</a></li>
                    <li><a href="https://youtube.com/" class="icon-footer-youtube" target="_blank">Youtube</a></li>
                    <li><a href="https://linkedin.com/" class="icon-footer-linkedin" target="_blank">LinkedIn</a></li>
                    <li><a href="https://plus.google.com/" class="icon-footer-gplus" target="_blank">Google +</a></li>
                    <li><a href="https://www.behance.net/" class="icon-footer-behance" target="_blank">Behance</a></li>
                    <li><a href="https://www.flickr.com/" class="icon-footer-flickr" target="_blank">Flickr</a></li>
                    <li><a href="https://foursquare.com/" class="icon-footer-foursquare" target="_blank">Foursquare</a></li>
                    <li><a href="https://vimeo.com/" class="icon-footer-vimeo" target="_blank">Vimeo</a></li>
                    <li><a href="https://soundcloud.com/" class="icon-footer-soundcloud" target="_blank">Soundcloud</a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright &copy; 2019 PinThis Theme Preview</p>
            </div>
        </div>
    </div>
</footer>

{{-- Event_Details Portion extra css link... --}}

<link rel='stylesheet' id='mediaelement-css'  href='{{asset('front/wp-includes/js/mediaelement/mediaelementplayer-legacy.min45a0.css?ver=4.2.6-78496d1')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='{{asset('front/wp-includes/js/mediaelement/wp-mediaelement.min5010.css?ver=4.9.8')}}' type='text/css' media='all' />


<script type='text/javascript'>

    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"http:\/\/pinthis.pixelbeautify.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
    /* ]]> */

</script>


<script type='text/javascript' src='{{asset('front/wp-content/plugins/contact-form-7/includes/js/scripts1748.js?ver=5.0.5')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/modernizr.minf7ff.js?ver=2.8.3')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/spin95b8.js?ver=2.3.2')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-mousewheel4830.js?ver=3.1.12')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-masonry.min3a05.js?ver=4.2.2')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-imagesloadededa1.js?ver=4.1.4')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-selectboxac28.js?ver=0.2')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-clearinginput5152.js?ver=1.0')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-atooltip.min7ef2.js?ver=1.5')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-magnific-popupf488.js?ver=1.1.0')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-spin.min5152.js?ver=1.0')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-jscrollpane.min90c1.js?ver=2.0.21')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-finger.minc5da.js?ver=0.1.0')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/jquery-flickerplate.mine1fc.js?ver=2.1.1')}}'></script>
<script type='text/javascript'>

/* <![CDATA[ */
var pinthis_phpjs_option = {"arrows":"1","arrows_constraint":"","auto_flick":"1","auto_flick_delay":"10","block_text":"","dot_navigation":"1","dot_alignment":"center","flick_position":"1","tr_username":"Username","tr_password":"Password","tr_search":"Search"};
/* ]]> */

</script>

<script type='text/javascript' src='{{asset('front/wp-content/themes/pinthis/js/main544c.js?ver=1.6.9')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/wp-embed.min5010.js?ver=4.9.8')}}'></script>


{{-- Event_Details Portion extra JS link... --}}

<script type='text/javascript'>
var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>

<script type='text/javascript' src='{{asset('front/wp-includes/js/mediaelement/mediaelement-and-player.min45a0.js?ver=4.2.6-78496d1')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/mediaelement/mediaelement-migrate.min5010.js?ver=4.9.8')}}'></script>

<script type='text/javascript'>

/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */

</script>

<script type='text/javascript' src='{{asset('front/wp-includes/js/mediaelement/wp-mediaelement.min5010.js?ver=4.9.8')}}'></script>
<script type='text/javascript' src='{{asset('front/wp-includes/js/mediaelement/renderers/vimeo.min45a0.js?ver=4.2.6-78496d1')}}'></script>

</body>
<!-- Mirrored from pinthis.pixelbeautify.com/page/3/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2019 13:18:44 GMT -->
</html>