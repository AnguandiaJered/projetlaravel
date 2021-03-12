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
// $name='Jered Ted';
// return view('welcome')->withName($name);
Route::get('/', function () {
    dd(App\Post::find(2));

    // DB::table('posts')->where('id',8)->delete();
    // dump(DB::table('posts')->get());

    // dump(DB::table('posts')->whereId(1)->update(['titre'=>'mon prenom ' ,'body'=>'Jered']));
//     DB::table('posts')->insert([
//        'titre'=> 'magnifique voiture',
//        'body'=> 'belle madame'
//    ]);
});

Route::get( '/pages',function(){
    return view('pages.hello');
});
Route::get('/events',function(){
    $events=[
        'BOB',
        'BEN',
        'ALI'
    ];
    return view('events.index',compact('events'));
});
