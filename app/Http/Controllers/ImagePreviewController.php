<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ImagePreviewController extends Controller
{
    public function index()
    {
        return view('img-preview');
    }
}
