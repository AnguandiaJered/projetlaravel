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
   $name='Jered Ted';
    return view('welcome')->withName($name);
});

// Route::get( '/',function(){
//     return view('hello');
// });
Route::get('/events',function(){
    $events=[
        'BOB',
        'BEN',
        'ALI'
    ];
    return view('events.index',compact('events'));
});
