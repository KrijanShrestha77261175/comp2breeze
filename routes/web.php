<?php

use App\Http\Controllers\ListingController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//Database Connection
// Route::get('/dbconn', function () {
//     return view('dbconn');
// });


//common resource routes:
// index - show all lisitng
//show - show single listing
//create - show form to cereate new lisitng
//store - store new listing
//edit - show form to edit listing
//update - update listing
//destroy = delete listing


//All Listing.. goes to listing controller to index function
Route::get('/', [ListingController::class, 'index']);


//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);


//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);


//Single Listing
//passing our listing module and a variable of listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Route::get('posts/{post}', function ($slug) {
//     // find a post by its slug and pass it to a view called "post"

    
//     return view('post', [
//         'post' => Post::find($slug)
//     ]);

   
// })->where('post', '[A-z_\-]+');


// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });