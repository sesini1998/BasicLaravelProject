<?php

use Illuminate\Http\Request; // Import the Request class from Illuminate
use Illuminate\Support\Facades\Route; // Import the Route facade from Illuminate

// Define a route with middleware that requires authentication for API access
Route::middleware('auth:api')->get('/user', function (Request $request) {
    // Inside the route closure function, return the authenticated user associated with the request
    return $request->user();
});