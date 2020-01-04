
@extends('admin.layouts.app')
@section('title','Date')

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
                            <h4 class="card-title">Message Reply</h4>
                            <div class="col-md-6">
                            </div>
                            <h6 class="card-subtitle" style="margin-top: 10px;">You can easily reply answer from fillup this field and also showing in the main page.</h6>
							
							<div class="user_message" style="border: 5px solid #5b6319;padding: 15px;margin-bottom: 50px;">
								<b><strong>Name : </strong>{{ $info->name }}</b></br>
	          					<b><strong>Email : </strong>{{ $info->email }}</b></br>
	          					<p><strong><b>Message :</b> </strong>{{ $info->message }}</p>
							</div>
                            

                            <form class="row" method="post" action="{{ route('admin.dashboard.contact.reply',$info -> id) }}" enctype="multipart/form-data">

                                @csrf

                                <div class="col-md-10">
                                    
									
									<div class="form-group">
                                        <label style="font-size: 16px;"> Reply Answer</label>
                                        <input type="text" class="form-control" placeholder="Answer" name="reply" required>
                                    </div>



                                    <button class="col-md-5 btn btn-primary btn-block" type="submit" style="font-size: 17px;display: inline-block;" >Sublit</button>

                                    <a class="col-md-5 btn btn-primary btn-block" href="{{ route('admin.dashboard.contact.index') }}" style="background-color: red; color: #fff;border-color: #007bff;display: inline-block;font-size: 16.5px;margin-top: -2px; ">Back To Home</a>

                                </div>

                            </form>
                        </div>
                    </div>

                    
                </div>

                
            </section>
@endsection

@push('scripts')
@endpush