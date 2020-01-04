<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('back');

// Route::get('/back', 'HomeController@back')->name('back');

Auth::routes();
Route::get('url', 'KamalController@index')->name('url');
Auth::routes(['verify' => true]);



Route::get('/', 'WelcomeController@index')->name('back');
Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'admin','namespace'=>'Admin','as' => 'admin.'], function(){

  Route::get('/dashboard', 'AdminController@index')->name('dashboard');
  Route::get('/dashboard', 'AdminController@index')->name('dashboard');
  Route::get('register', 'AdminController@create')->name('register');
  Route::post('register', 'AdminController@store')->name('register.store');

  Route::get('login', 'Auth\AdminLoginController@login')->name('login');
  Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('login');
  Route::post('logout', 'Auth\AdminLoginController@logout')->name('logout');

   Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('password.request');
   Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('password.email');

   Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('password.reset');
   Route::post('password/reset', 'Auth\AdminResetPasswordController@reset')->name('password.update');

    Route::get('email/verify', 'Auth\AdminVerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'Auth\AdminVerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'Auth\AdminVerificationController@resend')->name('verification.resend');

});


Route::group(['prefix'=>'admin/dashboard','middleware'=>'admin','namespace'=>'Admin','as' => 'admin.dashboard.'], function(){


  //Header Logo-Controller Start Now................
  Route::resource('/logo', 'Header\LogoController');
  Route::get('/logo/create', 'Header\LogoController@create')->name('logo.create');
  Route::post('/logo/store', 'Header\LogoController@store')->name('logo.store');
  Route::get('/logo/edit/{id}', 'Header\LogoController@edit')->name('logo.edit');

  Route::post('/logo/update/{id}', 'Header\LogoController@update')->name('logo.update');
  Route::get('/logo/delete/{id}', 'Header\LogoController@destroy')->name('logo.destroy');

  Route::get('/logo/active/{id}', 'Header\LogoController@active')->name('logo.active');
  Route::get('/logo/unactive/{id}', 'Header\LogoController@unactive')->name('logo.unactive');



  //Header Category-Controller Start Now................
  Route::resource('/category', 'Header\CategoryController');
  Route::get('/category/create', 'Header\CategoryController@create')->name('category.create');
  Route::post('/category/store', 'Header\CategoryController@store')->name('category.store');
  Route::get('/category/edit/{id}', 'Header\CategoryController@edit')->name('category.edit');

  Route::post('/category/update/{id}', 'Header\CategoryController@update')->name('category.update');
  Route::get('/category/delete/{id}', 'Header\CategoryController@destroy')->name('category.destroy');

  Route::get('/category/active/{id}', 'Header\CategoryController@active')->name('category.active');
  Route::get('/category/unactive/{id}', 'Header\CategoryController@unactive')->name('category.unactive');



  //Header Month-Controller Start Now................
  Route::resource('/month', 'Date\DateController');
  Route::get('/month/create', 'Date\DateController@create')->name('month.create');
  Route::post('/month/store', 'Date\DateController@store')->name('month.store');
  Route::get('/month/edit/{id}', 'Date\DateController@edit')->name('month.edit');

  Route::post('/month/update/{id}', 'Date\DateController@update')->name('month.update');
  Route::get('/month/delete/{id}', 'Date\DateController@destroy')->name('month.destroy');

  Route::get('/month/active/{id}', 'Date\DateController@active')->name('month.active');
  Route::get('/month/unactive/{id}', 'Date\DateController@unactive')->name('month.unactive');



  //Header Today_Week_Month-Controller Start Now................
  Route::resource('/twm', 'Twm\TwmController');
  Route::get('/twm/create', 'Twm\TwmController@create')->name('twm.create');
  Route::post('/twm/store', 'Twm\TwmController@store')->name('twm.store');
  Route::get('/twm/edit/{id}', 'Twm\TwmController@edit')->name('twm.edit');

  Route::post('/twm/update/{id}', 'Twm\TwmController@update')->name('twm.update');
  Route::get('/twm/delete/{id}', 'Twm\TwmController@destroy')->name('twm.destroy');

  Route::get('/twm/active/{id}', 'Twm\TwmController@active')->name('twm.active');
  Route::get('/twm/unactive/{id}', 'Twm\TwmController@unactive')->name('twm.unactive');


  //Header Place-Controller Start Now................
  Route::resource('/place', 'Place\PlaceController');
  Route::get('/place/create', 'Place\PlaceController@create')->name('place.create');
  Route::post('/place/store', 'Place\PlaceController@store')->name('place.store');
  Route::get('/place/edit/{id}', 'Place\PlaceController@edit')->name('place.edit');

  Route::post('/place/update/{id}', 'Place\PlaceController@update')->name('place.update');
  Route::get('/place/delete/{id}', 'Place\PlaceController@destroy')->name('place.destroy');

  Route::get('/place/active/{id}', 'Place\PlaceController@active')->name('place.active');
  Route::get('/place/unactive/{id}', 'Place\PlaceController@unactive')->name('place.unactive');



  //Header Event-Controller Start Now................
  Route::resource('/event', 'Event\EventController');
  Route::get('/event/create', 'Event\EventController@create')->name('event.create');
  Route::post('/event/store', 'Event\EventController@store')->name('event.store');
  Route::get('/event/edit/{id}', 'Event\EventController@edit')->name('event.edit');

  Route::post('/event/update/{id}', 'Event\EventController@update')->name('event.update');
  Route::get('/event/delete/{id}', 'Event\EventController@destroy')->name('event.destroy');

  Route::get('/event/active/{id}', 'Event\EventController@active')->name('event.active');
  Route::get('/event/unactive/{id}', 'Event\EventController@unactive')->name('event.unactive');




  //Header Slider-Controller Start Now................
  Route::resource('/slider', 'Slider\SliderController');
  Route::get('/slider/create', 'Slider\SliderController@create')->name('slider.create');
  Route::post('/slider/store', 'Slider\SliderController@store')->name('slider.store');
  Route::get('/slider/edit/{id}', 'Slider\SliderController@edit')->name('slider.edit');

  Route::post('/slider/update/{id}', 'Slider\SliderController@update')->name('slider.update');
  Route::get('/slider/delete/{id}', 'Slider\SliderController@destroy')->name('slider.destroy');

  Route::get('/slider/active/{id}', 'Slider\SliderController@active')->name('slider.active');
  Route::get('/slider/unactive/{id}', 'Slider\SliderController@unactive')->name('slider.unactive');




  //Event-About Us Controller Start Now................
  Route::resource('/aboutus', 'Aboutus\AboutusController');
  Route::get('/aboutus/create', 'Aboutus\AboutusController@create')->name('aboutus.create');
  Route::post('/aboutus/store', 'Aboutus\AboutusController@store')->name('aboutus.store');
  Route::get('/aboutus/edit/{id}', 'Aboutus\AboutusController@edit')->name('aboutus.edit');

  Route::post('/aboutus/update/{id}', 'Aboutus\AboutusController@update')->name('aboutus.update');
  Route::get('/aboutus/delete/{id}', 'Aboutus\AboutusController@destroy')->name('aboutus.destroy');

  Route::get('/aboutus/active/{id}', 'Aboutus\AboutusController@active')->name('aboutus.active');
  Route::get('/aboutus/unactive/{id}', 'Aboutus\AboutusController@unactive')->name('aboutus.unactive');




  // Comment-Controller Start Now................
  Route::resource('/comment', 'Comment\CommentController');

  Route::get('/comment/delete/{id}', 'Comment\CommentController@destroy')->name('comment.destroy');



  // Contact Message-Controller Start Now................
  Route::resource('/contact', 'Contact\ContactController');
  Route::get('/contact/create', 'Contact\ContactController@create')->name('contact.create');
  Route::post('/contact/reply/{id}/', 'Contact\ContactController@reply')->name('contact.reply');

  Route::get('/contact/edit/{id}', 'Contact\ContactController@edit')->name('contact.edit');

  Route::post('/contact/update/{id}', 'Contact\ContactController@update')->name('contact.update');
  Route::get('/contact/delete/{id}', 'Contact\ContactController@destroy')->name('contact.destroy');

  Route::get('/contact/active/{id}', 'Contact\ContactController@active')->name('contact.active');
  Route::get('/contact/unactive/{id}', 'Contact\ContactController@unactive')->name('contact.unactive');

});



Route::get('/category_by_event/{id}', 'Cat_By_Event\Category_By_EventController@category_by_event')->name('category_by_event');

Route::get('/category_by_event/place_cate_by_event/{id}/', 'Cat_By_Event\Category_By_EventController@place_cate_by_event')->name('place_cate_by_event');

Route::get('/category_by_event/month_place_cate_by_event/{id}/', 'Cat_By_Event\Category_By_EventController@month_place_cate_by_event')->name('month_place_cate_by_event');


Route::get('/category_by_event/month_by_event/{id}/', 'Cat_By_Event\Category_By_EventController@month_by_event')->name('month_by_event');

Route::get('/category_by_event/place_by_event/{id}/', 'Cat_By_Event\Category_By_EventController@place_by_event')->name('place_by_event');


Route::get('/about_us', 'WelcomeController@about_us')->name('about_us');
Route::get('/contact_us', 'WelcomeController@contact_us')->name('contact_us');

Route::get('/event_details/{id}', 'WelcomeController@event_details')->name('event_details');

Route::get('/next_post/{id}', 'WelcomeController@next_post')->name('next_post');
Route::get('/prev_post/{id}', 'WelcomeController@prev_post')->name('prev_post');

Route::post('/comment', 'WelcomeController@comment')->name('comment');







//Home Front Rout are Includes in bellow....


Route::group(['prefix'=>'home','middleware'=>'auth','as' => 'home.'], function(){



  Route::get('/cat_by_event/{id}/', 'Home\Cat_By_Event\Category_By_EventController@category_by_event')->name('cat_by_event');


  Route::get('/cat_by_event/place_cate_by_event/{id}/', 'Home\Cat_By_Event\Category_By_EventController@place_cate_by_event')->name('place_cate_by_event');

  Route::get('/cat_by_event/month_place_cate_by_event/{id}/', 'Home\Cat_By_Event\Category_By_EventController@month_place_cate_by_event')->name('month_place_cate_by_event');



  Route::get('/month_by_event/{id}/', 'Home\Cat_By_Event\Category_By_EventController@month_by_event')->name('month_by_event');


  Route::get('/place_by_event/{id}/', 'Home\Cat_By_Event\Category_By_EventController@place_by_event')->name('place_by_event');


  Route::get('/about_us', 'HomeController@about_us')->name('about_us');
  Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
  Route::post('/message', 'HomeController@message')->name('message');

  Route::get('/event_details/{id}', 'HomeController@event_details')->name('event_details');

  Route::get('/next_post/{id}', 'HomeController@next_post')->name('next_post');
  Route::get('/prev_post/{id}', 'HomeController@prev_post')->name('prev_post');


  Route::post('/comment', 'Home\Comment\CommentController@comment')->name('comment');

  Route::get('/upload', 'Home\Upload\UploadController@index')->name('upload');
  Route::post('/upload_store', 'Home\Upload\UploadController@store')->name('upload_store');


});
