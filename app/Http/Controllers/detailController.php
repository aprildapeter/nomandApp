<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.detail');
    }
}
