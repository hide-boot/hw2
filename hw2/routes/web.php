<?php

use Illuminate\Support\Facades\Route;

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
//access route
Route::get('Home','HomeController@home');
Route::get('Login','loginController@checklog');
Route::post('Login','loginController@login');
Route::get('Logout','loginController@logout');
Route::get('Anime','HomeController@anime');
Route::get('Serie','HomeController@serie');
Route::get('Myaccount','HomeController@myaccount');
Route::get('Singup',"singupController@viewRegister");
Route::post('Singup',"singupController@newUser");
Route::get('Singup/ControlUser/{q}','singupController@checkUsername');
Route::get('Singup/ControlEmail/{q}','singupController@checkEmail');



//favorites route
Route::get('Favorites/Film','FavoritesController@returnfilm');
Route::get('Favorites/Film/Delete/{q}','FavoritesController@deletefilm');
Route::get('Favorites/Film/Add/{q}','FavoritesController@addfilm');

Route::get('Favorites/Serie','FavoritesController@returnserie');
Route::get('Favorites/Serie/Delete/{q}','FavoritesController@deleteserie');
Route::get('Favorites/Serie/Add/{q}','FavoritesController@addserie');

Route::get('Favorites/Anime','FavoritesController@returnanime');
Route::get('Favorites/Anime/Delete/{q}','FavoritesController@deleteanime');
Route::get('Favorites/Anime/Add/{q}','FavoritesController@addanime');




//api route
Route::get('ApiController/Films/{q}','ApiController@apifilms');
Route::get('ApiController/Filmt/{q}','ApiController@apifilmt');

Route::get('ApiController/Series/{q}','ApiController@apiseries');
Route::get('ApiController/Seriet/{q}','ApiController@apiseriet');

Route::get('ApiController/Animet/{q}','ApiController@apianimet');
Route::get('ApiController/Animec/{q}','ApiController@apianimec');



//commets route
Route::get('CommentController/AnimeComment/{q}','CommentController@oncommentanime');
Route::get('CommentController/FilmComment/{q}','CommentController@oncommentfilm');
Route::get('CommentController/SerieComment/{q}','CommentController@oncommentserie');

Route::post('Anime','CommentController@incommentanime');
Route::post('Home','CommentController@incommentfilm');
Route::post('Serie','CommentController@incommentserie');


//information
Route::post('Myaccount','InformationController@insertInTo');