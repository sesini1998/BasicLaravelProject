<?php
use App\Http\Controllers\ProductController;

$total = 0;

// Check if the 'user' session exists
if (Session::has('user')) {
    // Calculate the total number of items in the cart using the 'cartItem' method from the 'ProductController'
    $total = ProductController::cartItem();
}
?>

<!-- Start of Navigation Bar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- Navbar Brand and Toggle Button -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">E-Comm</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Left Navigation Links -->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/myorders">Orders</a></li>
            </ul>

            <!-- Search Form -->
            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>

            <!-- Right Navigation Links -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist">Cart ({{$total}})</a></li>

                <!-- Check if the 'user' session exists -->
                @if(Session::has('user'))
                <li class="dropdown">
                    <!-- User Dropdown Menu -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                <!-- Display Login Link if 'user' session does not exist -->
                <li><a href="/login">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- End of Navigation Bar -->
