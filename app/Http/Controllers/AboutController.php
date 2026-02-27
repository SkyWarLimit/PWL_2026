<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'Nama : Muhammad Ihsan Rahmatullah<br> NIM : 244107020218';
    }
}
