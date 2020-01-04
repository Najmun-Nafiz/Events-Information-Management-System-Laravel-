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
                    <li class="page_item page-item-2"><a href="{{ route('home.about_us') }}">About Us</a>
                    <li class="page_item page-item-9"><a href="{{ route('home.contact_us') }}">Contact Us</a>
                    <li class="page_item page-item-15"><a href="{{ route('home') }}">Portfolio</a>
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
                        <li><a href="{{ route('home.event_details',$v_info -> id) }}" title="Post Format: Audio">{{ $v_info -> title }}</a></li>
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