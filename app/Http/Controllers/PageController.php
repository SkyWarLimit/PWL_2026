<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return 'Selamat Datang';
    }

    function about()
    {
        return 'Nama : Muhammad Ihsan Rahmatullah<br> NIM : 244107020218';
    }

    function articles($id)
    {
        return "Halaman Artikel dengan ID: " . $id;
    }
}

