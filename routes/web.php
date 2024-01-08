<?php
use App\Category;

Route::get('/', function (){
    // $data['system'] = Systemsetting::find(1);
    // $data['categories'] = Category::with('products')->get();
    // $_SESSION['setting'] = $data['system'];
    return view('frontend.index');
});

// login and Register Route
Route::view('/login','login')->name('login.page');
Route::post('/submit','LoginController@login')->name('admin.login.submit');

// Contact US Route
Route::post('/contact-submit','ContactController@create')->name('contact.us.submit');

// group of admin routes
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard','LoginController@dashboard')->name('admin.dashboard');

    // System Setting Route
    Route::resource('system-setting','Systemcontroller');
});

// group of renter routes
Route::group(['prefix'=>'renter'],function(){
    Route::view('dashboard','backend.dashboard.renter.index')->name('renter.dashboard');
});

// group of landlord routes
Route::group(['prefix'=>'landlord'],function(){
    Route::view('dashboard','backend.dashboard.landlord.index')->name('landlord.dashboard');

    // Room Details All Routes
    Route::get('Room/Details','ProductConteroller@index')->name('Room.Details');  //view category
    Route::get('Room/Details/Add','ProductConteroller@addroomview')->name('Room.Details.View');  //Add Room Category
    Route::post('Room/Detail/Add','ProductConteroller@create')->name('Add.Room.Details');  //Insert Room Data
    

    // Room Category All Routes
    Route::get('Room/Category','CategoryConteroller@index')->name('Room.Category');  //view category
    Route::get('Room/Category/Add','CategoryConteroller@addcat')->name('Room.Category.View');  //Add Room Category
    Route::post('Room/Category/add/Details','CategoryConteroller@catinsert')->name('Add.Room.Category');  //Insert Category Data
    Route::get('Room/Category/Delete/{id}','CategoryConteroller@catdelete')->name('Room.Category.Delete');  //Delete category
    Route::get('Rooms/Category/Edit/{id}','CategoryConteroller@catedit')->name('Room.Category.Edit');  //Edit category   
    Route::post('Room/Category/Update/{id}','CategoryConteroller@catupdate')->name('Update.Room.Category');  //Insert Category Data
});