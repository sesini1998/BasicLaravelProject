<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    // This middleware class is responsible for trusting proxies and handling headers.

    // Define the proxies that are trusted.
    protected $proxies;

    // Define the headers to be trusted for proxy requests.
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
