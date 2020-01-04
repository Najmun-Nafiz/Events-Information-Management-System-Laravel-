<header class="with-header-nav-menu  with-slider ">
            <div class="container clearfix">
                <div class="left-part">
                    <nav class="menu-categories dropel">
                        <a href="#" onclick="return false;" class="icon-menu-categories tooltip" title="Categories">Categories</a>
                        <div class="dropdown">
                            <div class="dropdown-wrapper arrow-up-left">

                                <?php 
                                    $infos = DB::table('categories')->where('status', 1)->get();
                                ?>

                                <ul class="categories-list">
                                    @foreach($infos as $v_info)
                                    <li class="cat-item cat-item-7"><a href="{{ route('home.cat_by_event',$v_info -> id) }}" >{{ $v_info -> name }}</a>
                                    </li>
                                    @endforeach

                                </ul>

                           
                            </div>
</div>
</nav>

<div class="search-box clearfix dropel">
<a href="#" onclick="return false;" class="icon-zoom">Search</a>
<div class="dropdown">
    <div class="dropdown-wrapper arrow-up-left">
        <form action="http://pinthis.pixelbeautify.com/" method="get">
            <input type="text" name="s" value="Search">
            <input type="submit" value="Search">
        </form>
    </div>
</div>
</div>

</div>


<h1 class="logo">            
    <a href="{{ route('home') }}" title="PinThis Theme Preview" >
        <?php 
            $logo = DB::table('logos')->where('status', 1)->get();
        ?>

        @foreach($logo as $v_info)

            <img src="{{URL('uploads/logo/'.$v_info->image)}}" alt="PinThis Theme Preview"><span style="position:absolute;margin-top: 28px !important;margin-left: 20px;">PinBox</span>

        @endforeach

    </a>

</h1> 

<div class="right-part" style="position: absolute;">     
<div  style="display: inline-block;float: left;position: relative;">
    <div class="log-in-out dropel">
        <img src="{{asset('front/wp-content/themes/pinthis/images/cat2.jpg')}}" onclick="return false;"class="icon-login tooltip" alt="" style="height: 40px;width: 40px;border-radius: 50%;cursor: pointer;">

        <div class="dropdown">
            <div class="dropdown-wrapper arrow-up-right">

                <div style="padding: 10px;border-bottom: 2px solid green; cursor: pointer;" class="user__name">{{ Auth::user()->name }}</div>
                <div style="padding: 10px;border-bottom: 2px solid green; cursor: pointer;" class="user__email">{{ Auth::user()->email }}</div>
                <div style="padding: 10px;border-bottom: 2px solid green;margin-top: 20px;" >
                    <a style="background-color: orange;padding: 8px;margin-top: 20px; " href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                    </form>
                </div>
                                       
                
        </div>
        </div>

        
    </div>

</div>


<div style="display: inline-block;position: relative;float: right;margin-top: 28px;">
<a href="{{ route('home.upload') }}" rel="modal:open" class="btn btn-primary" style="background-color: green;padding: 8px;margin-left: 10px;">Upload</a>

</div>


</div> 
</div>




<div class="container fluid clearfix">
    <a href="#" onclick="return false;" class="icon-nav-menu">Menu</a>
    <div class="header-menu">
        <div class="header-menu-wrapper arrow-up-right">

        <ul id="menu-primary" class="header-menu-list">

                        <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14">
                            <a href="{{ route('home') }}">Home</a>
                        </li>


                        <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-17">
                            <a href="#">Select-Category</a>

                            <div class="dropdown">
                                <div class="dropdown-wrapper arrow-up-left">
                                    <?php 
                                        $info = DB::table('categories')->where('status', 1)->get();
                                    ?>
                                    <ul class="sub-menu">
                                        @foreach($info as $v_info)

                                        <li id="menu-item-19" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19"><a href="{{ route('home.cat_by_event',$v_info -> id) }}">{{ $v_info -> name }}</a></li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>



                        <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-17">
                            <a href="#">Recent-Events</a>

                            <div class="dropdown">
                                <div class="dropdown-wrapper arrow-up-left">
                                    <ul class="sub-menu">
                                        @foreach($twm as $v_info)

                                        <li id="menu-item-19" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19"><a href="{{ route('home.cat_by_event',$v_info -> id) }}">{{ $v_info -> name }}</a></li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14">
                            <a href="{{ route('home.about_us') }}">Our-Services</a>
                        </li>

                       
                        <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14">
                            <a href="{{ route('home.about_us') }}">About-Us</a>
                        </li>

                        <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14">
                            <a href="{{ route('home.contact_us') }}">Contact-Us</a>
                        </li>
                        
                    </ul>

        </div>      
    </div>
</div>

</header>