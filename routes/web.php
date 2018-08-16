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

Route::group(['middleware'=>['web']], function ()
{
    Auth::routes();
    $this->get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/', 'HomeController@index')->name('/');
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/create', 'UserController@create')->name('user');
    Route::post('/user/store', 'UserController@store')->name('user');
    Route::get('/user/show/{id}', 'UserController@show')->name('user');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user');
    Route::put('/user/update/{id}', 'UserController@update')->name('user');
    Route::delete('/user/destroy/{id}', 'UserController@update')->name('user');
    Route::get('/vendor/vendor', 'VendorController@index')->name('vendor');
    Route::get('/vendor/vendor-bank', 'VendorBankController@index')->name('vendorbank');
    Route::get('/vendor/vendor-toko-bank', 'VendorTokoBankController@index')->name('vendortokobank');
    Route::get('/vendor/billing-vendor', 'VendorController@index')->name('vendorbilling');
    Route::get('/laporan/transaksi', 'LaporanController@index')->name('laporan');
    Route::get('/laporan/laba-transaksi', 'LaporanController@index')->name('laporan');
    Route::get('/master/lokasi/provinsi', 'LokasiController@indexprovinsi')->name('lokasi');
    Route::get('/master/lokasi/provinsi/create', 'LokasiController@createprovinsi')->name('lokasi');
    Route::post('/master/lokasi/provinsi/store', 'LokasiController@storeprovinsi')->name('lokasi');
    Route::get('/master/lokasi/provinsi/show/{id}', 'LokasiController@showprovinsi')->name('lokasi');
    Route::get('/master/lokasi/provinsi/edit/{id}', 'LokasiController@editprovinsi')->name('lokasi');
    Route::put('/master/lokasi/provinsi/update/{id}', 'LokasiController@updateprovinsi')->name('lokasi');
    Route::delete('/master/lokasi/provinsi/destroy/{id}', 'LokasiController@updateprovinsi')->name('lokasi');
    Route::get('/master/lokasi/kota', 'LokasiController@indexkota')->name('lokasi');
    Route::get('/master/lokasi/kota/create', 'LokasiController@createkota')->name('lokasi');
    Route::post('/master/lokasi/kota/store', 'LokasiController@storekota')->name('lokasi');
    Route::get('/master/lokasi/kota/show/{id}', 'LokasiController@showkota')->name('lokasi');
    Route::get('/master/lokasi/kota/edit/{id}', 'LokasiController@editkota')->name('lokasi');
    Route::put('/master/lokasi/kota/update/{id}', 'LokasiController@updatekota')->name('lokasi');
    Route::delete('/master/lokasi/kota/destroy/{id}', 'LokasiController@updatekota')->name('lokasi');
    Route::get('/master/lokasi/kecamatan', 'LokasiController@indexkecamatan')->name('lokasi');
    Route::get('/master/lokasi/kecamatan/create', 'LokasiController@createkecamatan')->name('lokasi');
    Route::post('/master/lokasi/kecamatan/store', 'LokasiController@storekecamatan')->name('lokasi');
    Route::get('/master/lokasi/kecamatan/show/{id}', 'LokasiController@showkecamatan')->name('lokasi');
    Route::get('/master/lokasi/kecamatan/edit/{id}', 'LokasiController@editkecamatan')->name('lokasi');
    Route::put('/master/lokasi/kecamatan/update/{id}', 'LokasiController@updatekecamatan')->name('lokasi');
    Route::delete('/master/lokasi/kecamatan/destroy/{id}', 'LokasiController@updatekecamatan')->name('lokasi');
    Route::get('/master/lokasi/kelurahan', 'LokasiController@indexkelurahan')->name('lokasi');
    Route::get('/master/lokasi/kelurahan/create', 'LokasiController@createkelurahan')->name('lokasi');
    Route::post('/master/lokasi/kelurahan/store', 'LokasiController@storekelurahan')->name('lokasi');
    Route::get('/master/lokasi/kelurahan/show/{id}', 'LokasiController@showkelurahan')->name('lokasi');
    Route::get('/master/lokasi/kelurahan/edit/{id}', 'LokasiController@editkelurahan')->name('lokasi');
    Route::put('/master/lokasi/kelurahan/update/{id}', 'LokasiController@updatekelurahan')->name('lokasi');
    Route::delete('/master/lokasi/kelurahan/destroy/{id}', 'LokasiController@updatekelurahan')->name('lokasi');
    Route::get('/master/userrole', 'RoleController@index')->name('userrole');
    Route::get('/master/userrole/create', 'RoleController@create')->name('userrole');
    Route::post('/master/userrole/store', 'RoleController@store')->name('userrole');
    Route::get('/master/userrole/show/{id}', 'RoleController@show')->name('userrole');
    Route::get('/master/userrole/edit/{id}', 'RoleController@edit')->name('userrole');
    Route::put('/master/userrole/update/{id}', 'RoleController@update')->name('userrole');
    Route::delete('/master/userrole/destroy/{id}', 'RoleController@update')->name('userlevel');
    Route::get('/master/userlevel', 'LevelController@index')->name('userlevel');
    Route::get('/master/userlevel/create', 'LevelController@create')->name('userlevel');
    Route::post('/master/userlevel/store', 'LevelController@store')->name('userlevel');
    Route::get('/master/userlevel/show/{id}', 'LevelController@show')->name('userlevel');
    Route::get('/master/userlevel/edit/{id}', 'LevelController@edit')->name('userlevel');
    Route::put('/master/userlevel/update/{id}', 'LevelController@update')->name('userlevel');
    Route::delete('/master/userlevel/destroy/{id}', 'LevelController@update')->name('userlevel');
    Route::get('/master/bank', 'BankController@index')->name('bank');
    Route::get('/master/bank/create', 'BankController@create')->name('bank');
    Route::post('/master/bank/store', 'BankController@store')->name('bank');
    Route::get('/master/bank/show/{id}', 'BankController@show')->name('bank');
    Route::get('/master/bank/edit/{id}', 'BankController@edit')->name('bank');
    Route::put('/master/bank/update/{id}', 'BankController@update')->name('bank');
    Route::delete('/master/bank/destroy/{id}', 'BankController@update')->name('bank');
    Route::get('/master/category/category', 'PrintCategoryController@indexcategory')->name('category');
    Route::get('/master/category/category/create', 'PrintCategoryController@createcategory')->name('category');
    Route::post('/master/category/category/store', 'PrintCategoryController@storecategory')->name('category');
    Route::get('/master/category/category/show/{id}', 'PrintCategoryController@showcategory')->name('category');
    Route::get('/master/category/category/edit/{id}', 'PrintCategoryController@editcategory')->name('category');
    Route::put('/master/category/category/update/{id}', 'PrintCategoryController@updatecategory')->name('category');
    Route::delete('/master/category/category/destroy/{id}', 'PrintCategoryController@updatecategory')->name('category');
    Route::get('/master/category/sub-category', 'PrintCategoryController@indexsubcategory')->name('printcategory');
    Route::get('/master/category/sub-category/create', 'PrintCategoryController@createsubcategory')->name('category');
    Route::post('/master/category/sub-category/store', 'PrintCategoryController@storesubcategory')->name('category');
    Route::get('/master/category/sub-category/show/{id}', 'PrintCategoryController@showsubcategory')->name('category');
    Route::get('/master/category/sub-category/edit/{id}', 'PrintCategoryController@editsubcategory')->name('category');
    Route::put('/master/category/sub-category/update/{id}', 'PrintCategoryController@updatesubcategory')->name('category');
    Route::delete('/master/category/sub-category/destroy/{id}', 'PrintCategoryController@updatecategory')->name('category');
    Route::get('/master/billing', 'BillingTypeController@index')->name('billing');

    Route::get('/dropdown/{id1}/{id2}','DropdownController@postDropdown');
});
