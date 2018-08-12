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
    return view('welcome');
});

Route::get('/notification', function () {
//    \App\User::first()->notify(new \App\Notifications\TaskCompleted());

//    $users=\App\User::first();
//    Notification::send($users, new \App\Notifications\TaskCompleted());

//    $user=\App\User::first();
//    $when = now()->addSeconds(10);
//    $user->notify((new \App\Notifications\TaskCompleted())->delay($when));

    \Illuminate\Support\Facades\Notification::route('mail', 'taylor@example.com')
        ->notify(new \App\Notifications\TaskCompleted());

    return view('welcome');
});

Route::get('/search/{searchKey}', 'HomeController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
