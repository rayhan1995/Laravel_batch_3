<?php

use App\Http\Controllers\CategoryControler;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    // info('i am info');
    return view('welcome');
});

// Route::get('abc', function () {
//     return 'Abc Route!';
// });

// Route::post('abc', function () {
//     return "ABC post route!";
// });
// Route::put('abc', function () {
//     // TODO : some task
// });

// Route::patch('abc', function () {
//     // TODO : some task
// });

// Route::delete('abc', function () {
//     // TODO : some task
// });

// Route::get('redirect', function () {
//     return "Redirect";
// });

// Route::redirect('abc', 'redirect');

// Route::view(
//     'view',
//     'abc',
//     [
//         'title' => "Shahin"
//     ]
// );

// Route::get('params/{name}/{id}', function ($name, $id) {
//     return "params = {$name} -> $id";
// });

// Route::get('params/{name}/{id?}', function ($name, $id = null) {
//     return "params = {$name} -> $id";
// });


// Route::get('/member/{name}', function ($name = null) {
//     return $name;
// })->where('name', '[A-Za-z]+')->name('user');

// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->where(['name' => '[A-Za-z]+', 'test' => '[88]']);

// Route::get('shahin', function () {
//     return redirect()->route('user', 'ARS');
// });

// Route::prefix('category')->name('category.')->group(function () {
//     Route::get('/', function () {
//         return 'ALL CAT';
//     })->name('index');
//     Route::get('/create', function () {
//         return 'ALL CAT';
//     });
// });

// Route::fallback(function () {
//     return view('route_nai');
// });


Route::resource('category', CategoryControler::class);

Route::get('con', [CategoryControler::class, 'idex'])->name('arr');
