<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function clearRoute()
    {
        \Artisan::call('route:clear');

        return "OK";
    }
}
