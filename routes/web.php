<?php
Route::get('/', function () {
    return view('auth.login');
});
Route::get('admin/dashboard' , ['as'=>'admin.dashboard','uses'=>'Admin\MainController@index']);
Route::get('admin/events', ['as'=>'admin.events', 'uses'=>'Admin\MainController@events']);

Route::get('admin/cars', ['as'=>'admin.cars',				'uses'=>'Admin\MainController@cars']);
Route::get('admin/cars/add',['as'=>'admin.cars.create', 	'uses'=>'Admin\MainController@create']);;

Route::prefix('user')->group(function(){
    Route::get('/',['as'=>'user.index','uses'=>'User\UserController@index']) ;
    Route::get('index',['as'=>'user.index.home','uses'=>'User\UserController@carList']);
    Route::get('index/detail/{id}',['as'=>'user.index.detail','uses'=>'User\UserController@carDetail']);
    Route::get('index/detail/buycarform/{id}',['as'=>'user.index.buyform','uses'=>'User\UserController@buyForm']);
    Route::post('index/detail/buycar/{id}',['as'=>'user.index.buycar','uses'=>'User\UserController@buyCar']);
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('user.login');
    Route::get('feedback',['as'=>'user.feedback', 'uses'=>'User\UserController@feedback']);
    Route::post('feedback/store',['as'=>'user.feedback.store','uses'=>'User\UserController@storeFeedback']);
    Route::post('login', ['as' => 'user.login.submit', 'uses' => 'Auth\LoginController@login']);
    Route::get('register', ['as' => 'user.register', 'uses' => 'Auth\RegisterController@showRegisterForm']);
    Route::post('register', ['as' => 'user.register.submit', 'uses' => 'Auth\RegisterController@register']);
    Route::get('addcar' ,['as'=>'user.add.car','uses'=>'User\UserController@addCar']);
    Route::post('addcar/store',['as'=>'user.add.car.store', 'uses'=>'User\UserController@storeCar']);
    Route::get('events',['as'=>'user.events','uses'=>'User\UserController@events']);
    Route::get('onlineforum',['as'=>'user.onlineforum','uses'=>'User\UserController@onlineForum']);
    Route::get('logout', ['as' => 'user.logout', 'uses' => 'Auth\LoginController@logout']);
    Route::get('user/mycars', ['as'=>'user.mycars','uses'=>'User\UserController@showMyCar']);
    Route::get('user/mycars/{id}',['as'=>'user.mycar.edit','uses'=>'User\UserController@editCar']);
    Route::post('user/mycars/{id}',['as'=>'user.mycar.update','uses'=>'User\UserController@updateCar']);
    Route::get('user/mycar/delete/{id}',['as'=>'user.mycar.delete','uses'=>'User\UserController@deleteCar']);
    ROute::post('onlineforum/askquestion',['as'=>'user.onlineforum.askquestion','uses'=>'User\UserController@askQuestion']);
    Route::get('onlineforum',['as'=>'user.onlineforum','uses'=>'User\UserController@viewQuestion']);
    Route::get('onlineforum/answer/{id}',['as'=>'user.answer','uses'=>'User\UserController@answer']);
    Route::get('onlineforum/viewreply/{id}',['as'=>'user.viewreply','uses'=>'User\UserController@viewReply']);
    Route::post('onlineforum/answer/',['as'=>'user.onlineforum.reply','uses'=>'User\UserController@giveAnswer']);
    Route::post('index/search',['as'=>'car.search','uses'=>'User\UserController@search']);
    Route::get('accountsetting',['as'=>'user.accountsetting','uses'=>'User\UserController@account']);
    Route::post('accountsetting/update',['as'=>'user.accountsetting.update','uses'=>'User\UserController@updateAccount']);
    Route::get('aboutus',['as'=>'user.aboutus','uses'=>'User\UserController@aboutus']);

});

Route::prefix('admin')->group(function() {
    Route::get('login', ['as' => 'admin.login', 'uses' => 'Auth\AdminLoginController@showLoginForm']);
    Route::post('login', ['as' => 'admin.login.submit', 'uses' => 'Auth\AdminLoginController@login']);
    Route::get('feedbacks',['as'=>'admin.feedbacks', 'uses' => 'Admin\MainController@Feedbacks']);
    Route::get('events',['as'=>'admin.events','uses'=>'Admin\MainController@events']);
    Route::post('events/store',['as'=>'admin.events.store', 'uses'=>'Admin\MainController@storeEvent']);
    Route::get('events/view',['as'=>'admin.events.view','uses'=>'Admin\MainController@viewEvent']);
    Route::get('events/view/delete/{id}',['as'=>'admin.events.delete','uses'=>'Admin\MainController@deleteEvent']);
    Route::get('car' ,['as'=>'admin.car','uses'=>'Admin\MainController@cars']);
    Route::get('logout',['as' => 'admin.logout', 'uses' => 'Auth\AdminLoginController@logout']);

});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
