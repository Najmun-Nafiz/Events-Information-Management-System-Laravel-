
<aside class="sidebar ">
                <div class="scrollbar">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="{{asset('back/demo/img/cat.jpg')}}" alt="">
                            <?php
                                $admin = DB::table('admins')->get();
                            ?>
                            @foreach($admin as $users)
                            <div>
                                <div class="user__name">{{ $users->name }}</div>
                                <div class="user__email">{{ $users->email }}</div>
                            </div>
                            @endforeach
                        </div>

                        <div class="dropdown-menu dropdown-menu--invert">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            

                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/header*')? 'active':''}}" href="#"><i class="zwicon-stand-up"></i>  Header</a>

                            <ul>

                                <li class="navigation__sub">
                                    <a class="{{Request::is('admin/dashboard/logo*')? 'active':''}}" href="#"><i class="zwicon-slider-circle-v" style="font-size: 20px;"></i>  Logo</a>

                                    <ul style="margin-left: 20px;">
                                        <li><a href="{{ route('admin.dashboard.logo.index') }}">All Logo</a></li>
                                        <li><a href="{{ route('admin.dashboard.logo.create') }}">Add Logo</a></li>
                                        
                                    </ul>
                                </li>


                                <li class="navigation__sub">
                                    <a class="{{Request::is('admin/dashboard/category*')? 'active':''}}" href="#"><i class="zwicon-slider-circle-v" style="font-size: 20px;"></i>  Category</a>

                                    <ul style="margin-left: 20px;">
                                        <li><a href="{{ route('admin.dashboard.category.index') }}">All Category</a></li>
                                        <li><a href="{{ route('admin.dashboard.category.create') }}">Add Category</a></li>
                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>

                        

                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/month*')? 'active':''}}" href="#"><i class="zwicon-edit-square-feather"></i>  Date</a>

                            <ul style="margin-left: 20px;">
                                <li><a href="{{ route('admin.dashboard.month.index') }}">All Month</a></li>
                                <li><a href="{{ route('admin.dashboard.month.create') }}">Add Month</a></li>
                                        
                            </ul>
                        </li>


                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/twm*')? 'active':''}}" href="#"><i class="zwicon-edit-square-feather"></i>  T_W_M</a>

                            <ul style="margin-left: 20px;">
                                <li><a href="{{ route('admin.dashboard.twm.index') }}">All T_W_M</a></li>
                                <li><a href="{{ route('admin.dashboard.twm.create') }}">Add T_W_M</a></li>
                                        
                            </ul>
                        </li>


                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/place*')? 'active':''}}" href="#"><i class="zwicon-layout-4"></i>  Place</a>

                            <ul style="margin-left: 20px;">
                                <li><a href="{{ route('admin.dashboard.place.index') }}">All Place</a></li>
                                <li><a href="{{ route('admin.dashboard.place.create') }}">Add Place</a></li>
                                        
                            </ul>
                        </li>



                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/event*')? 'active':''}}" href="#"><i class="zwicon-layout-2"></i>  Event</a>

                            <ul style="margin-left: 20px;">
                                <li><a href="{{ route('admin.dashboard.event.index') }}">All Event</a></li>
                                <li><a href="{{ route('admin.dashboard.event.create') }}">Add Event</a></li>
                                        
                            </ul>
                        </li>


                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/slider*')? 'active':''}}" href="#"><i class="zwicon-film-alt"></i>  Slider</a>

                            <ul style="margin-left: 20px;">
                                <li><a href="{{ route('admin.dashboard.slider.index') }}">All Slider</a></li>
                                <li><a href="{{ route('admin.dashboard.slider.create') }}">Add Slider</a></li>
                                        
                            </ul>
                        </li>



                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/aboutus*')? 'active':''}}" href="#"><i class="zwicon-face-id"></i>  About Us</a>

                            <ul style="margin-left: 20px;">
                                <li><a href="{{ route('admin.dashboard.aboutus.index') }}">All About Us</a></li>
                                <li><a href="{{ route('admin.dashboard.aboutus.create') }}">Add About Us</a></li>
                                        
                            </ul>
                        </li>


                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/comment*')? 'active':''}}" href="#"><i class="zwicon-comment"></i>  Comment</a>

                            <ul style="margin-left: 20px;">

                                <li><a href="{{ route('admin.dashboard.comment.index') }}">All Comment</a></li>
                                        
                            </ul>
                        </li>


                        <li class="navigation__sub">
                            <a class="{{Request::is('admin/dashboard/contact*')? 'active':''}}" href="#"><i class="zwicon-mail"></i>  Contact-Message</a>

                            <ul style="margin-left: 20px;">

                                <li><a href="{{ route('admin.dashboard.contact.index') }}">All Contact-Message</a></li>
                                        
                            </ul>
                        </li>

                    </ul>
                </div>
            </aside>