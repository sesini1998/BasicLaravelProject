@extends('master')  <!-- Extends the 'master' layout -->

@section("content") <!-- Defines a section named 'content' -->

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST" > <!-- Create a form that submits to the 'login' route using the POST method -->
                <div class="form-group">
                    @csrf <!-- CSRF protection token to secure the form -->
                <label for="exampleInputEmail1">Email address</label> <!-- Label for the Email input field -->
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> <!-- Email input field -->
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label> <!-- Label for the Password input field -->
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> <!-- Password input field -->
                </div>
                <button type="submit" class="btn btn-default">Login</button> <!-- Submit button for the form -->
            </form>
        </div>
    </div>
</div>

@endsection <!-- End of 'content' section -->
