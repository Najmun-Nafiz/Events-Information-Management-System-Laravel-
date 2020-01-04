
@extends('admin.layouts.app')
@section('title','About Us')

@push('css')
@endpush

@section('content')
<section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Form Elements</h1>

                        <div class="actions">
                            <a href="#" class="actions__item zwicon-cog"></a>
                            <a href="#" class="actions__item zwicon-refresh-double"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zwicon-more-h"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add-About-Us</h4>
                            <div class="col-md-6">
                            </div>
                            <h6 class="card-subtitle" style="margin-top: 10px;">You can easily add your project about-us information by fillup this field and also showing in the main page.</h6>

                            <form class="row" method="post" action="{{ route('admin.dashboard.aboutus.update', $info -> id) }}" enctype="multipart/form-data">

                                @csrf

                                <div class="col-md-10">
                                    
									
									<div class="form-group">
                                        <label style="font-size: 16px;">Dhaka Office</label>
                                        <input type="text" class="form-control" placeholder="Dhaka Office" name="dhaka_offiece" value="{{ $info -> dhaka_offiece }}" required>
                                    </div>


		                            <div class="form-group">
                                        <label style="font-size: 16px;">Chittagong Offiece</label>
                                        <input type="text" class="form-control" placeholder="Chittagong Offiece" name="chittagong_offiece" value="{{ $info -> chittagong_offiece }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px;">Rajshahi Offiece</label>
                                        <input type="text" class="form-control" placeholder="Rajshahi Offiece" name="rajshahi_offiece" value="{{ $info -> rajshahi_offiece }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px;">Helpdesk</label>
                                        <input type="email" class="form-control" placeholder="Helpdesk" name="helpdesk" value="{{ $info -> helpdesk }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px;">Email </label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $info -> email }}" required>
                                    </div>


                                    <div class="form-group">
                                        <label style="font-size: 16px;">Phone</label>
                                        <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ $info -> phone }}" required>
                                    </div>


                                    <div class="form-group">
                                        <label style="font-size: 16px;">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Description" cols="7" rows="5" required>{{ $info -> description }}</textarea>
                                    </div>



                                    <div class="form-group">
                                        <label style="font-size: 16px;">Select-Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="image" value="{{ $info -> image }}" required>
                                            <label class="custom-file-label" for="customFile">Choose Image</label>
                                        </div>
                                    </div>


              

                                    <button class="col-md-5 btn btn-primary btn-block" type="submit" style="font-size: 17px;display: inline-block;" >Sublit</button>

                                    <a class="col-md-5 btn btn-primary btn-block" href="{{ route('admin.dashboard.aboutus.index') }}" style="background-color: red; color: #fff;border-color: #007bff;display: inline-block;font-size: 16.5px;margin-top: -2px; ">Back To Home</a>

                                </div>

                            </form>
                        </div>
                    </div>

                    
                </div>

                
            </section>
@endsection

@push('scripts')

	
@endpush


            




            