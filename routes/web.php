<?php

use App\Http\Controllers\Admin\Client\ClientController;
use App\Http\Controllers\Admin\CMS\CmsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\BooknowController;
use App\Http\Controllers\User\FaqController;
use App\Http\Controllers\User\OurServiceController;
use App\Http\Controllers\User\ReviewController;
use App\Models\Cms;
use Illuminate\Support\Facades\Route;

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
    $data['title'] = 'home'; 
    
    return view('User.home',$data);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user
Route::get('/user-dashboard', [App\Http\Controllers\HomeController::class, 'userUashboard'])->name('userUashboard');
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('changePassword');
Route::get('/booking-history', [App\Http\Controllers\HomeController::class, 'bookinghistory'])->name('bookinghistory');
Route::get('/index', function () {
    return view('User.home');
});
Route::get('/about-us', [AboutUsController::class, 'aboutUs']);
Route::get('/our-service', [OurServiceController::class, 'ourService']);
Route::get('/faq', [FaqController::class, 'faq']);
Route::get('/contact-us', [FaqController::class, 'contact']);
Route::get('/review', [ReviewController::class, 'review']);
Route::get('/book-now', [BooknowController::class, 'bookNow']);



//Admin
Route::get('/admin', [LoginController::class, 'logIn']);
Route::post('/admin-login', [LoginController::class, 'loggedIn'])->name('loggedIn');

Route::group(['prefix'=>'admin', 'middleware' =>'adminCheck'], function () {
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
//settings
Route::get('/Settings/site-setting', [SiteSettingController::class, 'show']);
// Route::get('/Settings/site-setting/create', [SiteSettingController::class, 'create']);
// Route::post('/Settings/site-setting/store', [SiteSettingController::class, 'store']);
Route::get('/Settings/site-setting/edit', [SiteSettingController::class, 'edit'])->name('edit');
Route::post('/Settings/site-setting/update/{id}', [SiteSettingController::class, 'update'])->name('update');
Route::get('/Settings/logo-setting/edit', [SiteSettingController::class, 'logoEdit'])->name('logoEdit');
Route::post('/Settings/logo-setting/update/{id}', [SiteSettingController::class, 'logoUpdate'])->name('logoUpdate');
// Cms
Route::get('/cms', [CmsController::class, 'show']);
// Route::get('/cms/create', [CmsController::class, 'create']);
// Route::post('/cms/store', [CmsController::class, 'store']);
Route::get('/cms/edit/{id}', [CmsController::class, 'edit'])->name('cmsEdit');
Route::post('/cms/update/{id}', [CmsController::class, 'update'])->name('cmsUpdate');
// Route::get('/cms/delete/{id}', [CmsController::class, 'delete'])->name('cmsDelete');
//Client
Route::get('/client', [ClientController::class, 'show']);
Route::get('/client/create', [ClientController::class, 'create']);
Route::post('/client/store', [ClientController::class, 'store']);
Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('clientEdit');
Route::post('/client/update/', [ClientController::class, 'update'])->name('clientUpdate');
// Route::get('/client/up/', [ClientController::class, 'up'])->name('up');
Route::get('/client/delete/', [ClientController::class, 'deleteclient']);
//user management
Route::get('users/list-of-user', [UserController::class, 'listOfUsers']);
Route::get('users/add-user', [UserController::class, 'addUser']);
Route::post('users/add-user', [UserController::class, 'storeUser'])->name('storeUser');
Route::get('users/edit-user/{id}', [UserController::class, 'editUser'])->name('editUser');
Route::post('users/update-user/{id}', [UserController::class, 'updateUser'])->name('updateUser');


//profile
Route::get('/change-password', [ProfileController::class, 'show']);
Route::post('/change-password', [ProfileController::class, 'store'])->name('change-password');
Route::get('/profile', [ProfileController::class, 'profile']);
Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('update-profile');








Route::get('/log-out', [LoginController::class, 'logOut'])->name('logOut');
});


