<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // This is the base controller class for your Laravel application.

    // The "AuthorizesRequests" trait provides authorization functionality.
    use AuthorizesRequests;

    // The "DispatchesJobs" trait dispatches jobs to queues or other handlers.
    use DispatchesJobs;

    // The "ValidatesRequests" trait handles request validation.
    use ValidatesRequests;
}
