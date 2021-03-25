<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'HELLO INDEX';
    }

    public function show()
    {
        return 'HELLO SHOW';
    }
}
