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

Route::resource("/", "GoatController");
/*Route::get("/", "SessionsController@create");
Route::get("logout", "SessionsController@destroy");
Route::resource("users", "UsersController", ["before" => "auth"]);
Route::resource("sessions", "SessionsController");
Route::resource("votes", "VotesController");
Route::resource("posts", "PostsController");
Route::resource("comments", "CommentsController");*/