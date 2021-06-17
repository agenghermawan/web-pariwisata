<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AllWisataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataAlamController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\WisataKulinerController;
use App\Http\Controllers\WisataSejarahController;
use App\Http\Controllers\WisataKeluargaController;

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

Route::get('/kontak', function () {
    return view('frontend.kontak.index');
})->name('kontak');


Route::resource('wisatasejarah', WisataSejarahController::class);
Route::resource('wisatakeluarga', WisataKeluargaController::class);
Route::resource('wisataalam', WisataAlamController::class);
Route::resource('wisatakuliner', WisataKulinerController::class);
Route::resource('kritik', KritikController::class);
Route::resource('tentang', TentangKamiController::class);
Route::get('detail/{id}/',[App\Http\Controllers\DetailController::class, 'index'])->name('detail');



Route::post('/sejarahdetail', [App\Http\Controllers\WisataSejarahController::class, 'details'])->name('wisatasejarah.details');
Route::post('/kulinerdetail', [App\Http\Controllers\WisataKulinerController::class, 'details'])->name('wisatakuliner.details');
Route::post('/alamdetail', [App\Http\Controllers\WisataAlamController::class, 'details'])->name('wisataalam.details');
Route::post('/keluargadetail', [App\Http\Controllers\WisataKeluargaController::class, 'details'])->name('wisatakeluarga.details');

//admin


Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {   
            Route::resource('dashboard', DashboardController::class);
            // Route::resource('admin/kategori', KategoriWisataController::class);
            Route::resource('admin/wisata', WisataController::class);
            Route::resource('admin/gallery', GalleryController::class);

            Route::get('list-wisata-sejarah',[App\Http\Controllers\AllWisataController::class, 'WisataSejarah'])->name('list-wisata-sejarah');
            Route::get('list-wisata-kuliner',[App\Http\Controllers\AllWisataController::class, 'WisataKuliner'])->name('list-wisata-kuliner');
            Route::get('list-wisata-alam',[App\Http\Controllers\AllWisataController::class, 'WisataAlam'])->name('list-wisata-alam');
            Route::get('list-wisata-keluarga',[App\Http\Controllers\AllWisataController::class, 'WisataKeluarga'])->name('list-wisata-keluarga');


            Route::get('list-gallery-sejarah',[App\Http\Controllers\AllGalleryController::class, 'GallerySejarah'])->name('list-gallery-sejarah');
            Route::get('list-gallery-kuliner',[App\Http\Controllers\AllGalleryController::class, 'GalleryKuliner'])->name('list-gallery-kuliner');
            Route::get('list-gallery-alam',[App\Http\Controllers\AllGalleryController::class, 'GalleryAlam'])->name('list-gallery-alam');
            Route::get('list-gallery-keluarga',[App\Http\Controllers\AllGalleryController::class, 'GalleryKeluarga'])->name('list-gallery-keluarga');
    });

// Route::post('dependent-dropdown','GalleryController@dropdown')->name('dependent-dropdown.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
