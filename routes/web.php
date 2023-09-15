<?php

use Illuminate\Support\Facades\Route; // Import the Route facade
use App\Http\Controllers\UserController; // Import the UserController
use App\Http\Controllers\ProductController; // Import the ProductController

// Define a route to display the login view
Route::get('/login', function () {
    return view('login');
});

// Define a route to handle user logout
Route::get('/logout', function () {
    // Clear the user session and redirect to the login page
    Session::forget('user');
    return redirect('login');
});

// Define a route to handle user login (POST request)
Route::post("/login",[UserController::class,'login']);

// Define a route for the home page
Route::get("/",[ProductController::class,'index']);

// Define a route to view product details by ID
Route::get("detail/{id}",[ProductController::class,'detail']);

// Define a route to search for products
Route::get("search",[ProductController::class,'search']);

// Define a route to add a product to the cart (POST request)
Route::post("add_to_cart",[ProductController::class,'addToCart']);

// Define a route to view the cart
Route::get("cartlist",[ProductController::class,'cartList']); 

// Define a route to remove a product from the cart by ID
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 

// Define a route to place an order
Route::get("ordernow",[ProductController::class,'orderNow']); 

// Define a route to handle order placement (POST request)
Route::post("orderplace",[ProductController::class,'orderPlace']);

// Define a route to view a user's orders
Route::get("myorders",[ProductController::class,'myOrders']);

 








