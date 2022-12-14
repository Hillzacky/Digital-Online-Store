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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| Laravel Dashboard
|--------------------------------------------------------------------------
|
*/
use App\Http\Controllers\Dashboard\AdSenses;
use App\Http\Controllers\Dashboard\Books;
use App\Http\Controllers\Dashboard\Categories;
use App\Http\Controllers\Dashboard\Clients;
use App\Http\Controllers\Dashboard\Dashboard;
use App\Http\Controllers\Dashboard\Galleries;
use App\Http\Controllers\Dashboard\Instagrams;
use App\Http\Controllers\Dashboard\Links;
use App\Http\Controllers\Dashboard\Media;
use App\Http\Controllers\Dashboard\Menus;
use App\Http\Controllers\Dashboard\Messages;
use App\Http\Controllers\Dashboard\Posts;
use App\Http\Controllers\Dashboard\Roles;
use App\Http\Controllers\Dashboard\Seo;
use App\Http\Controllers\Dashboard\Settings;
use App\Http\Controllers\Dashboard\Users;
/*
|--------------------------------------------------------------------------
| ImageUploadController
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['auth','role:Super-Admin']], function () {
Route::get('Dashboard/image/upload', [ImageUploadController::class, 'fileCreate']);
Route::post('Dashboard/image/upload/store', [ImageUploadController::class, 'fileStore']);
Route::post('Dashboard/Audio/upload/store', [ImageUploadController::class, 'AudioStore']);
Route::post('Dashboard/image/delete', [ImageUploadController::class, 'fileDestroy']);
});
/*
|--------------------------------------------------------------------------
| Payment Routes
|--------------------------------------------------------------------------
|
*/
// route for processing payment
Route::get('/paypal', [PaymentPaypal::class, 'payWithpaypal']);
// route for check status of the payment
Route::get('/status', [PaymentPaypal::class, 'getPaymentStatus']);
/*
|--------------------------------------------------------------------------
| LaravelLocalization
|--------------------------------------------------------------------------
|
*/
Route::group([
'prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function () {  
Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('search', [SearchController::class, 'search']);
Route::get('Contact', [Contact::class, 'index']);
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['isVerified']], function () {
Route::get('email-verification/error', [Auth\RegisterController::class, 'getVerificationError']);
Route::get('email-verification/check/{token}', [Auth\RegisterController::class, 'getVerification']);
});
/*
|--------------------------------------------------------------------------
| missing RETURN 404 PAGE Route   
|--------------------------------------------------------------------------
|
*/
Route::get('missing', function () {
return view('404');
});
/*
|--------------------------------------------------------------------------
| resource
|--------------------------------------------------------------------------
|
*/
Route::resource('Contact', Contact::class);
Route::resource('Comments', Comments::class);
Route::resource('Downloads', Downloads::class);
/**
* Show the middleware dashboard Super-Admin.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
Route::group(['middleware' => ['auth','role:Super-Admin']], function () {
/*
|--------------------------------------------------------------------------
| Web Routes Dashboard
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', [Dashboard::class, 'index']);
Route::resource('Dashboard/Roles','Dashboard\Roles');
Route::resource('Dashboard/Users','Dashboard\Users');
Route::resource('Dashboard/AdSense','Dashboard\AdSenses');
Route::resource('Dashboard/Categories','Dashboard\Categories');
Route::resource('Dashboard/Clients','Dashboard\Clients');
Route::resource('Dashboard/Galleries','Dashboard\Galleries');
Route::resource('Dashboard/Instagrams','Dashboard\Instagrams');
Route::resource('Dashboard/Links','Dashboard\Links');
Route::resource('Dashboard/Menus','Dashboard\Menus');
Route::resource('Dashboard/Media','Dashboard\Media');
Route::resource('Dashboard/Messages','Dashboard\Messages');
Route::resource('Dashboard/Books','Dashboard\Books');
Route::resource('Dashboard/Posts','Dashboard\Posts');
Route::resource('Dashboard/Seo','Dashboard\Seo');
Route::resource('Dashboard/Settings','Dashboard\Settings');
});
});


