<?php

use Illuminate\Support\Facades\Broadcast; // Import the Broadcast facade

// Define a broadcasting channel for the 'App.Models.User.{id}' channel name
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    // Inside the channel definition function, check if the user's ID matches the provided $id
    return (int) $user->id === (int) $id;
});
