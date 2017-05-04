<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});

//Route::get('projects', function()
//{
//    return View::make('pages.projects');
//});

Route::get('/projects', array(
    //'before' => 'auth.basic',//simple browser based implementation
    'before' => 'auth',
    function(){
        return View::make('pages.projects');
    }
));

Route::get('/contact', function()
{
    return View::make('pages.contact');
});

Route::get('/register', 'RegisterController@showRegister');
Route::post('/register', 'RegisterController@doRegister');

Route::get('/login', function()
{
    return View::make('pages.login');
});

Route::post('/login', function()
{
    $credentials = Input::only('username', 'password');
    if (Auth::attempt($credentials)) {
        return Redirect::intended('/');
    }
    return Redirect::to('pages.login');
});

Route::get('/logout', function()
{
    Auth::logout();
    return View::make('pages.logout');
});
