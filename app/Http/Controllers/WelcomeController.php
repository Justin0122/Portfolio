<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $imageDirectory = 'images/projects/';
        $imagePaths = File::files(public_path($imageDirectory));
        return view('welcome', compact('imagePaths', 'imageDirectory'));
    }
}
