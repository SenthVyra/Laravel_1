<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

//All listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);



//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
