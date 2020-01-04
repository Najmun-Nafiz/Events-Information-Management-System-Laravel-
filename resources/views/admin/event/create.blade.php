
@extends('admin.layouts.app')
@section('title','Place')

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
                            <h4 class="card-title">Add-Place</h4>
                            <div class="col-md-6">
                            </div>
                            <h6 class="card-subtitle" style="margin-top: 10px;">You can easily add your project date-place from fillup this field and also showing in the main page.</h6>

                            <form class="row" method="post" action="{{ route('admin.dashboard.event.store') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="col-md-10">
                                    
									
									<div class="form-group">
                                        <label style="font-size: 16px;">Title</label>
                                        <input type="text" class="form-control" placeholder="Title" name="title" required>
                                    </div>


                                    <div class="form-group mb-0" style="padding-bottom: 30px;">
		                                <label style="font-size: 16px;">Category</label>

		                                <select class="form-control" name = "category_id">

		                                	<option>Select Category</option>

		                                    @foreach($category as $v_info)
		                                    	<option value = "{{$v_info -> id}}" style="background-color: #312b2b;">
		                                    		{{$v_info -> name}}
		                                    	</option>
		                                    @endforeach
		                                    
		                                </select>
		                            </div>


		                            <div class="form-group mb-0" style="padding-bottom: 30px;">
		                                <label style="font-size: 16px;">Place Category</label>

		                                <select class="form-control" name = "place_id">

		                                	<option>Select Place</option>

		                                    @foreach($place as $v_info)
		                                    	<option value = "{{$v_info -> id}}" style="background-color: #312b2b;">
		                                    		{{$v_info -> name}}
		                                    	</option>
		                                    @endforeach
		                                    
		                                </select>
		                            </div>


		                            <div class="form-group mb-0" style="padding-bottom: 30px;">
		                                <label style="font-size: 16px;">Month Category</label>

		                                <select class="form-control" name = "month_id">

		                                	<option>Select Month</option>

		                                    @foreach($date as $v_info)
		                                    	<option value = "{{$v_info -> id}}" style="background-color: #312b2b;">
		                                    		{{$v_info -> name}}
		                                    	</option>
		                                    @endforeach
		                                    
		                                </select>
		                            </div>


		                            <div class="form-group">
                                        <label style="font-size: 16px;">Date</label>
                                        <input type="text" id="datetimepicker1" class="form-control" placeholder="Date" name="date" required>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px;">Address</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address" required>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px;">Time</label>
                                        <input type="text" id="datetimepicker2" class="form-control" placeholder="Time" name="time" required>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 16px;">Enry Fee</label>
                                        <input type="text" class="form-control" placeholder="Enry Fee" name="entry_fee" required>
                                    </div>


                                    <div class="form-group">
                                        <label style="font-size: 16px;">Participant</label>
                                        <input type="text" class="form-control" placeholder="Participant" name="participant" required>
                                    </div>


                                    <div class="form-group">
                                        <label style="font-size: 16px;">Eddition</label>
                                        <input type="text" class="form-control" placeholder="Eddition" name="eddition" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Short Description</label>
                                        <textarea class="form-control" name="short_description" placeholder="Short Description" cols="7" rows="5" required></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label style="font-size: 16px;">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Description" cols="7" rows="5" required></textarea>
                                    </div>



                                    <div class="form-group">
                                        <label style="font-size: 16px;">Select-Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="image" required>
                                            <label class="custom-file-label" for="customFile">Choose Image</label>
                                        </div>
                                    </div>


              

                                    <button class="col-md-5 btn btn-primary btn-block" type="submit" style="font-size: 17px;display: inline-block;" >Sublit</button>

                                    <a class="col-md-5 btn btn-primary btn-block" href="{{ route('admin.dashboard.event.index') }}" style="background-color: red; color: #fff;border-color: #007bff;display: inline-block;font-size: 16.5px;margin-top: -2px; ">Back To Home</a>

                                </div>

                            </form>
                        </div>
                    </div>

                    
                </div>

                
            </section>
@endsection

@push('scripts')

	
@endpush


            




            