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
Route::get('/', 'PagesController@home');

// Route::get('/', function () {
//     $tasks = [
//         'Hello',
//          'i am',
//          'Groot'    
//     ];

//     // return view('welcome',[
//     //     'tasks' => $tasks
//     // ]);
//     // return view('welcome')->withTasks($tasks);  
//     // return view('welcome')->withTasks([
//     // 'Hello',
//     // 'i am',
//     // 'Groot'   ]);  
//     return view('welcome')->with([
//         'tasks' => [ 'Hello',
//         'i am',
//         'Groot' ] ]);  

// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

