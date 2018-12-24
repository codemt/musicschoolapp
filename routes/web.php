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
    return view('app');
});

// Guitar Notes
Route::get('/guitarnotes','PagesController@guitarnotes')->name('guitarnotes');

// Piano Notes

Route::get('/pianonotes',function(){


        return view('pages.piano.pianonotes');

});

Route::get('/about',function(){



    return view('pages.about.about');

});
// Route::get('/photos',function(){



//     return view('pages.photos.photos');

// });


Route::get('contact','ContactController@index')->name('contact');

