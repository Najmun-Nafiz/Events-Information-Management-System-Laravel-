@extends('layouts.app')

@section('content'))


<section id="content" style="padding-top: 50px;">
<div class="container">


<div class="postWrap" style="width: 100%;">


<div class="post-9 page type-page status-publish hentry">
<div class="contentbox">
<h2 class="title-1 border-color-1" style="text-align: center;font-size: 26px;font-style: italic;color: #f9e70f;">Event Upload</h2>

<div class="textbox clearfix">

<p><span style="color: yellow;font-size: 16px;">Address:</span> Sector 11, Uttara - 1230 (Bangladesh)<br />
<span style="color: yellow;font-size: 16px;">Phone:</span> +8801750496753</p>

<div role="form" lang="en-US" style="border: 2px solid #F9E70F;padding: 20px;margin-top: 50px;">
<div class="screen-reader-response"></div>


	<form class="row" method="post" action="{{ route('home.upload_store') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="col-md-10" style="padding: 0px 0px 0 200px">
                                    
									
									<div class="form-group" style="padding-bottom: 30px;">
                                        <input type="text" class="form-control" placeholder="Title" name="title" required>
                                    </div>


                                    <div class="form-group mb-0" style="padding-bottom: 30px;">

		                                <select class="form-control" name = "category_id">

		                                	<option>Category</option>

		                                    @foreach($category as $v_info)
		                                    	<option value = "{{$v_info -> id}}" style="background-color: #312b2b;">
		                                    		{{$v_info -> name}}
		                                    	</option>
		                                    @endforeach
		                                    
		                                </select>
		                            </div>


		                            <div class="form-group mb-0" style="padding-bottom: 30px;">

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

		                                <select class="form-control" name = "month_id">

		                                	<option>Select Month</option>

		                                    @foreach($date as $v_info)
		                                    	<option value = "{{$v_info -> id}}" style="background-color: #312b2b;">
		                                    		{{$v_info -> name}}
		                                    	</option>
		                                    @endforeach
		                                    
		                                </select>
		                            </div>


		                            <div class="form-group" style="padding-bottom: 30px;">
		                            	<label for="date">Select Date</label>
                                        <input style="margin-left: 20px;" type="date" class="form-control" placeholder="Date" name="date" required>
                                    </div>

                                    <div class="form-group" style="padding-bottom: 30px;">
                                    	<label for="date">Select Time</label>
                                        <input style="margin-left: 20px;" type="time" class="form-control" placeholder="Time" name="time" required>
                                    </div>

                                    <div class="form-group" style="padding-bottom: 30px;">
                                        <input type="text" class="form-control" placeholder="Address" name="address" required>
                                    </div>



                                    <div class="form-group" style="padding-bottom: 30px;">
                                        <input type="text" class="form-control" placeholder="Enry Fee" name="entry_fee" required>
                                    </div>


                                    <div class="form-group" style="padding-bottom: 30px;">
                                        <input type="text" class="form-control" placeholder="Participant" name="participant" required>
                                    </div>


                                    <div class="form-group" style="padding-bottom: 30px;">
                                        <input type="text" class="form-control" placeholder="Eddition" name="eddition" required>
                                    </div>
                                    
                                    <div class="form-group" style="padding-bottom: 30px;">
                                        <textarea class="form-control" name="short_description" placeholder="Short Description" cols="7" rows="5" required></textarea>
                                    </div>


                                    <div class="form-group" style="padding-bottom: 30px;">
                                        <textarea class="form-control" name="description" placeholder="Description" cols="7" rows="5" required></textarea>
                                    </div>



                                    <div class="form-group" style="padding-bottom: 30px;">
                                        <label style="font-size: 16px;">Image</label>
                                        <div class="custom-file">
                                        	
                                            <input type="file" class="custom-file-input" id="customFile" name="image" required>
                                        </div>
                                    </div>


              

                                    <button class="col-md-5 btn btn-primary btn-block" type="submit" style="font-size: 17px;background-color: green; display: inline-block; padding: 14px 16px;" >Sublit</button>

                                    

                                </div>

                            </form>

			
			
			
		</div>
	</div>

</div>



</div>
</div>
</div>
</section>


@endsection