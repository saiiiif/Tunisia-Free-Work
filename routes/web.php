<?php
use App\Post;
use App\Membre;
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

Route::get('/', function () {
    return view('index');
  
});

//Route::get('/index', function () {
 // return view('index');
//});
/*Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
*/

Auth::routes();

Route::get('/index', 'HomeController@index');

Route::group(['prefix' => 'membre'], function () {
  //$userss[] = Auth::guard('membre')->user();
  Route::get('/login', 'MembreAuth\LoginController@showLoginForm')->name('login');

  Route::get('/free','MembreAuth\loginController@authenticated')->name("freelancerHome");

  Route::get('/free','MembreAuth\loginController@authenticated')->name("donneurHome");

  Route::post('/login', 'MembreAuth\LoginController@login')->name('login');

 

  Route::get('/register', 'MembreAuth\RegisterController@showRegistrationForm')->name('register');



  Route::post('/register', 'MembreAuth\RegisterController@register');



  Route::post('/password/email', 'MembreAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MembreAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MembreAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MembreAuth\ResetPasswordController@showResetForm');
});


Route::get('/logouts', 'MembreAuth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'messages'], function () {
  Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
  Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
  Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
  Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
  Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});


//Route::get('/contacts', function () {
 // return view('contact-us-full-width');

//});
//Route::get('/logout', 'MembreAuth\LoginController@logout')->name('logout');
Route::get('contact', 'ContactController@getcontact');
Route::post('contact', 'ContactController@postcontact');
Route::post('/postinfo', ['as' => 'Posts.store', 'uses' => 'AllController@store']);
Route::get('/freelancer', function () {
  return view('freelancerHome');
}) ;
Route::get('/donneur', function () {
  return view('donneurHome');
}); 
//Route::post('/postjob', ['as' => 'Posts.store', 'uses' => 'PostController@store']);


/*Route::get('/saif',function(){

$membre= Membre::findOrFail(1);




$membre->posts()->save(new Post(['titre'=>'saifoun','postjob'=>'love you']));





});*/
Route::post('/profile', ['as' => '/profile', 'uses' => 'AllController@update_avatar']);
Route::post('/profilefreelancer', ['as' => '/profile', 'uses' => 'AllController@update_avatarfree']);

    
    Route::post('/infodonneur','AllController@updateinfodonneur');
    Route::post('/infofreelancer','AllController@updateinfofreelancer');
    Route::post('/modifierpass','AllController@ModifierPass');
    Route::post('/postuler','AllController@Postuler');
    Route::post('/newsfeed','PostController@store');
    Route::post('/accepter','AllController@accepter');
    Route::post('/refuser','AllController@refuser');
