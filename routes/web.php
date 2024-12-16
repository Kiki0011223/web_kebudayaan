<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KuponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableAdminController;
use App\Http\Controllers\SebelumloginController;
use App\Http\Controllers\SetelahloginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  
    return view('home');
});

//sebelum login
Route::get('/sebelum_login/gallery',[SebelumloginController::class, 'gallery']);
Route::get('/sebelum_login/tips',[SebelumloginController::class, 'tips']);
Route::get('/home',[SebelumloginController::class, 'home']);
Route::get('/auth/login',[SebelumloginController::class, 'login'])->name('login');



// Route::get('/dashboard', function () {
//     $user = auth()->User();
//     return view('dashboard',compact('user'));
// })->middleware(['auth', 'verified'])->name('dashboard');

//halaman home utama admin dan user
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('dashboard');

//halaman  admin 
Route::get('/admin/post', [AdminController::class, 'post'])->middleware('auth', 'admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //sesudah login
    Route::get('/setelah_login/gallery',[SetelahloginController::class, 'gallery'])->name('gallery2');
    Route::get('/setelah_login/tips',[SetelahloginController::class, 'tips'])->name('tips2');
    Route::get('/setelah_login/biodata',[SetelahloginController::class, 'biodata'])->name('biodata');
    Route::get('/setelah_login/harga',[SetelahloginController::class, 'harga'])->name('harga');
    Route::get('/setelah_login/kupon',[SetelahloginController::class, 'kupon'])->name('kupon');
    Route::get('/setelah_login/contact',[SetelahloginController::class, 'contact'])->name('contact');
    Route::get('/setelah_login/event',[SetelahloginController::class, 'event'])->name('event');
    Route::get('/setelah_login/order',[SetelahloginController::class, 'order'])->name('order');

    // Rute untuk form pemesanan tiket
    Route::put('/order/create', [OrderController::class, 'create'])->name('orders.create');
    // Rute untuk menyimpan data pemesanan
    Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');
    
});

//table user
Route::get('/admin/table_user', [AdminController::class, 'show'])->middleware('auth', 'admin');
Route::get('/delete/{name}', [AdminController::class, 'destroy'])->middleware('auth', 'admin');
Route::post('/setelah_login/biodata', [AdminController::class, 'updateProfile'])->name('update.profile')->middleware('auth');
// Route::resource('/admin/table_user', TableAdminController::class)->middleware('auth', 'admin');

//table contact
Route::post('/setelah_login/contact', [ContactController::class, 'create'])->name('contact')->middleware('auth');
Route::get('/admin/table_ulasan', [ContactController::class, 'index'])->middleware('auth', 'admin');
Route::get('/delete_ulasan/{nama}', [ContactController::class, 'destroy'])->middleware('auth', 'admin');

//table product
Route::get('/admin/product', [ProductController::class, 'product'])->name('product')->middleware('auth', 'admin');
Route::get('/admin/table_product', [ProductController::class, 'tbl_product'])->name('table_product')->middleware('auth', 'admin');
Route::post('/admin/product', [ProductController::class, 'input'])->name('input_product')->middleware('auth', 'admin');
Route::get('/delete_product/{nama}', [ProductController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/admin/update_product', [ProductController::class, 'update_product'])->name('update_product')->middleware('auth', 'admin');
Route::get('/update_product/{kategori}', [ProductController::class, 'update'])->name('update')->middleware('auth', 'admin');
Route::post('/admin/update_product/{kategori}', [ProductController::class, 'updateproduct'])->name('productupdate')->middleware('auth', 'admin');

//table kupon
Route::get('/admin/kupondiskon',[KuponController::class, 'view'])->name('kupondiskon')->middleware('auth','admin');
Route::post('/admin/kupondiskon',[KuponController::class, 'create'])->name('create.kupon')->middleware('auth','admin');
Route::get('/admin/table_kupon',[KuponController::class, 'tabel'])->name('tabel.kupon')->middleware('auth','admin');
Route::get('/delete_kupon/{kategori}', [KuponController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/update_kupon/{kategori}', [KuponController::class, 'updatekupon'])->name('update.kupon')->middleware('auth', 'admin');
Route::put('/admin/update_kupon/{kategori}', [KuponController::class, 'kuponupdate'])->name('kuponupdate')->middleware('auth', 'admin');

//table Acara
Route::get('/admin/acara',[AcaraController::class, 'view'])->name('acara')->middleware('auth','admin');
Route::post('/admin/acara',[AcaraController::class, 'create'])->name('create.acara')->middleware('auth','admin');
Route::get('/admin/table_acara',[AcaraController::class, 'tabel'])->name('tabel.acara')->middleware('auth','admin');
Route::get('/delete_acara/{judul}', [AcaraController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/update_acara/{judul}', [AcaraController::class, 'updateacara'])->name('update.acara')->middleware('auth', 'admin');
Route::put('/admin/update_acara/{judul}', [AcaraController::class, 'acaraupdate'])->name('acaraupdate')->middleware('auth', 'admin');

//table content
Route::get('/admin/content',[ContentController::class, 'view'])->name('content')->middleware('auth','admin');
Route::post('/admin/content',[ContentController::class, 'create'])->name('create.content')->middleware('auth','admin');
Route::get('/admin/table_content',[ContentController::class, 'tabel'])->name('tabel.content')->middleware('auth','admin');
Route::get('/delete_content/{judul}', [ContentController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/update_content/{judul}', [ContentController::class, 'updatecontent'])->name('update.content')->middleware('auth', 'admin');
Route::put('/admin/update_content/{judul}', [ContentController::class, 'contentupdate'])->name('contentupdate')->middleware('auth', 'admin');

//table Poster
Route::get('/admin/poster',[PosterController::class, 'view'])->name('poster')->middleware('auth','admin');
Route::post('/admin/poster',[PosterController::class, 'create'])->name('create.poster')->middleware('auth','admin');
Route::get('/admin/table_poster',[PosterController::class, 'tabel'])->name('tabel.poster')->middleware('auth','admin');
Route::get('/delete_poster/{nama}', [PosterController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/update_poster/{nama}', [PosterController::class, 'updateposter'])->name('update.poster')->middleware('auth', 'admin');
Route::put('/admin/update_poster/{nama}', [PosterController::class, 'posterupdate'])->name('posterupdate')->middleware('auth', 'admin');

//table Order
Route::get('/admin/table_order',[OrderController::class, 'tabel'])->name('tabel.order')->middleware('auth','admin');
Route::get('/delete_order/{id}', [OrderController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/update_order/{id}', [OrderController::class, 'updateorder'])->name('update.order')->middleware('auth', 'admin');
Route::put('/admin/update_order/{id}', [OrderController::class, 'orderupdate'])->name('orderupdate')->middleware('auth', 'admin');
Route::patch('/orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus')->middleware('auth', 'admin');



require __DIR__.'/auth.php';
=======

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu-utama', function () {
    return view('index');
});
>>>>>>> 7275130ac15ab9e3fb2f6baab7f239faec0b709e
