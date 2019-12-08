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


Route::get('/', function () {
    if(Auth::check()) {
        return redirect()->route('home');
    } 
    $data = \App\FrontPage::first();
    return view('auth.login',compact('data'));
});

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->to('/');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/masterdata/skpd', 'MasterDataController@skpd');
    Route::get('/masterdata/skpd/tambah', 'MasterDataController@tambahSkpd');
    Route::post('/masterdata/skpd/{id}/update', 'MasterDataController@updateSkpd');
    Route::get('/masterdata/skpd/{id}/delete', 'MasterDataController@deleteSkpd');
    Route::get('/masterdata/skpd/{id}/edit', 'MasterDataController@editSkpd');
    Route::post('/masterdata/skpd/simpan', 'MasterDataController@simpanSkpd');
    Route::post('/simpanPegawai/{id_skpd}', 'MasterDataController@simpanPegawai');
    
    Route::get('/masterdata/kategori', 'MasterDataController@kategori');
    Route::post('/masterdata/kategori', 'MasterDataController@simpankategori');
    Route::post('/masterdata/kategori/update', 'MasterDataController@updatekategori');
    Route::get('/masterdata/kategori/{id}/delete', 'MasterDataController@deletekategori');
    
    Route::get('/masterdata/wbk', 'MasterDataController@wbk');
    Route::post('/masterdata/wbk', 'MasterDataController@simpanwbk');
    Route::post('/masterdata/wbk/update', 'MasterDataController@updatewbk');
    Route::get('/masterdata/wbk/{id}/delete', 'MasterDataController@deletewbk');

    Route::get('/masterdata/wbbm', 'MasterDataController@wbbm');
    Route::post('/masterdata/wbbm', 'MasterDataController@simpanwbbm');
    Route::post('/masterdata/wbbm/update', 'MasterDataController@updatewbbm');
    Route::get('/masterdata/wbbm/{id}/delete', 'MasterDataController@deletewbbm');

    Route::get('/masterdata/komponen', 'MasterDataController@komponen');
    Route::post('/masterdata/komponen', 'MasterDataController@simpankomponen');
    Route::post('/masterdata/komponen/update', 'MasterDataController@updatekomponen');
    Route::get('/masterdata/komponen/{id}/delete', 'MasterDataController@deletekomponen');

    Route::get('/zi', 'PnController@zi');
    
    //Route Pencanangan
    Route::get('/zi/pencanangan/skpd/{id_skpd}', 'PnController@ziPencanangan');
    Route::get('/zi/pencanangan/skpd/{id_skpd}/kategori/{id_kategori}', 'PnController@detailUpload');
    Route::get('/zi/pencanangan/skpd/{id_skpd}/kategori/{id_kategori}/upload', 'PnController@PencananganUpload');
    Route::post('/zi/pencanangan/skpd/{id_skpd}/kategori/{id_kategori}/upload', 'PnController@PencananganUploadSimpan');
    Route::get('/zi/pencanangan/skpd/{id_skpd}/kategori/{id_kategori}/delete/{id_upload}', 'PnController@deleteUpload');
    Route::get('/fileupload/delete/{id}', 'PnController@deleteFileUpload');
    Route::get('/fileupload/preview/{id_skpd}/{id}', 'PnController@previewFile');
    Route::post('/fileupload/update', 'PnController@updateFile');
    Route::post('/fileupload/judul/update', 'PnController@updateJudul');
    Route::post('/zi/pencanangan/ubahstatus', 'PnController@ubahstatus');
    
    //Route Pembangunan
    Route::get('/zi/pembangunan/skpd/{id_skpd}', 'PbController@ziPembangunan');
    Route::post('/zi/pembangunan/skpd/{id_skpd}', 'PbController@PembangunanUploadSimpan');
    Route::get('/uploadkomponen/delete/{id}', 'PbController@deleteUploadKomponen');
    Route::post('/uploadkomponen/update/{id_skpd}', 'PbController@updateFile');
    Route::post('/uploadkomponen/nilai/{id_skpd}', 'PbController@isiNilai');
    Route::post('/uploadkomponen/nilai/{id_skpd}/update', 'PbController@updateNilai');
    Route::post('/zi/pembangunan/ubahstatus', 'PbController@ubahstatus');
});


Route::group(['middleware' => ['auth', 'role:skpd']], function () {
    Route::get('/pencanangan', 'PnController@index');
});
