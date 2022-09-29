<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ThemeController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\Backend\PhotoController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\IndexController;
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

Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


Route::get('/language/nepali', [LanguageController::class, 'Nepali'])->name('nepali.language');
Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');

Route::get('/', [IndexController::class, 'Home'])->name('/');
Route::get('/about', [AboutController::class, 'About'])->name('user.about');
Route::get('/services', [ServiceController::class, 'Service'])->name('user.services');
Route::get('/service_detiails/{id}/{slug}', [ServiceController::class, 'ServiceDetails'])->name('user.service_detiails');

Route::get('/team', [TeamController::class, 'Teams'])->name('user.teams');
Route::get('/project', [ProjectController::class, 'Project'])->name('user.projects');
Route::get('/project_detiails/{id}/{slug}', [ProjectController::class, 'ProjectDetials'])->name('user.project_detiails');
Route::get('/contact', [ContactController::class, 'Contact'])->name('user.contact');
Route::get('/gallery', [GalleryController::class, 'Gallery'])->name('user.gallery');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        Session::put('admin_page', 'dashboard');
        return view('backend.index');
      
    })->name('dashboard');
});

Route::get('/admin/logout/', [UserController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/admin/profile/', [UserController::class, 'AdminProfile'])->name('admin.profile');
Route::post('/admin/profile_info/', [UserController::class, 'AdminProfileStore'])->name('admin.profile_info');
Route::post('/admin/profile_img/', [UserController::class, 'AdminProfileImgStore'])->name('admin.profile_img');
Route::get('/admin/user_list/', [UserController::class, 'AdminListView'])->name('admin.user_list');
Route::get('/admin/user_add/', [UserController::class, 'AdminAddView'])->name('admin.user_add');
Route::post('/admin/admin_Store/',[UserController::class, 'AdminDataStore'])->name('admin.user_store');
Route::get('/admin/admin_edit/{id}',[UserController::class, 'AdminDataEdit'])->name('admin.user_edit');
Route::get('/admin/user_delete/{id}', [UserController::class, 'AdminDelete'])->name('admin.user_delete');
Route::post('/admin/admin_update/{id}',[UserController::class, 'AdminDataUpdate'])->name('admin.user_update');
Route::get('/admin/reset_password/',[UserController::class, 'EditPassword'])->name('admin.reset_password');
Route::post('/admin/check-password', [UserController::class, 'checkUserPassword'])->name('admin.change.password');
Route::post('/admin/update-password', [UserController::class, 'ChangePasswordUpdate'])->name('admin.update_password');

Route::get('/Admin/Theme/',[ThemeController::class, 'ThemeView'])->name('admin.themeView');
Route::post('/Admin/Theme_store/',[ThemeController::class, 'ThemeStore'])->name('admin.theme_store');


Route::get('/Admin/Slider/',[HomeController::class, 'SliderView'])->name('admin.sliderView');
Route::get('/Admin/Slider_add/',[HomeController::class, 'SliderAdd'])->name('admin.slider_add');
Route::post('/Admin/Slider_store/',[HomeController::class, 'SliderStore'])->name('admin.slider_store');
Route::get('/Admin/Slider_edit/{id}',[HomeController::class, 'SliderEdit'])->name('admin.slider_edit');

Route::post('/Admin/Slider_Update/{id}',[HomeController::class, 'SliderUpdate'])->name('admin.slider_update');

Route::get('/Admin/Slider_delete/{id}',[HomeController::class, 'SliderDelete'])->name('admin.slider_delete');
Route::get('/Admin/Slider_active/{id}',[HomeController::class, 'SliderStoreActive'])->name('admin.slider_store_active');
Route::get('/Admin/Slider_inactive/{id}',[HomeController::class, 'SliderStoreInActive'])->name('admin.slider_store_inactive');


//Admin Service 

Route::get('/Admin/Services_view/',[ServicesController::class, 'ServiceView'])->name('admin.service_view');
Route::get('/Admin/Services_add/',[ServicesController::class, 'ServiceAdd'])->name('admin.service_add');
Route::post('/Admin/Services_store/',[ServicesController::class, 'ServiceStore'])->name('admin.service_store');
Route::get('/Admin/Services_edit/{id}',[ServicesController::class, 'ServiceEdit'])->name('admin.service_edit');
Route::post('/Admin/Services_update/{id}',[ServicesController::class, 'ServiceUpdate'])->name('admin.service_update');
Route::get('/Admin/Services_delete/{id}',[ServicesController::class, 'ServiceDelete'])->name('admin.service_delete');

//Admin Product
Route::get('/Admin/product_view/',[ProjectsController::class, 'ProductView'])->name('admin.product_view');
Route::get('/Admin/product_add/',[ProjectsController::class, 'ProductAdd'])->name('admin.product_add');
Route::post('/Admin/Projects_store/',[ProjectsController::class, 'ProjectsStore'])->name('admin.projects_store');
Route::get('/Admin/project_edit/{id}',[ProjectsController::class, 'ProjectEdit'])->name('admin.project_edit');
Route::post('/Admin/Projects_update/{id}',[ProjectsController::class, 'ProjectsUpdate'])->name('admin.projects_update');
Route::get('/Admin/project_delete/{id}',[ProjectsController::class, 'ProjectDelete'])->name('admin.project_delete');

//Admin Gallery Controller
Route::get('/Admin/gallery_view/',[PhotoController::class, 'PhotoView'])->name('admin.photo_view');
Route::get('/Admin/gallery_add/',[PhotoController::class, 'PhotoAdd'])->name('admin.photo_add');
Route::post('/Admin/Gallery_store/',[PhotoController::class, 'GalleryStore'])->name('admin.gallery_store');
Route::get('/Admin/gallery_edit/{id}',[PhotoController::class, 'PhotoEdit'])->name('admin.photo_edit');
Route::post('/Admin/Gallery_update/{id}',[PhotoController::class, 'GalleryUpdate'])->name('admin.gallery_update');
Route::get('/Admin/gallery_delete/{id}',[PhotoController::class, 'PhotoDelete'])->name('admin.photo_delete');