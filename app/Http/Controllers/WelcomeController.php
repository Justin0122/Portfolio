<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;


class WelcomeController extends Controller
{


    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }
        $imageDirectory = 'images/projects';
        $folders = File::directories(public_path($imageDirectory));
        $imagesByFolder = [];
        $imagesPerSlide = 3;

        foreach ($folders as $folder) {
            $images = File::files($folder);
            $images = array_slice($images, 0, $imagesPerSlide);
            $imageUrls = array_map(function ($imagePath) {
                return asset(str_replace(public_path(), '', $imagePath));
            }, $images);

            $folderName = basename($folder);
            $imagesByFolder[$folderName] = $imageUrls;
        }

        $skills = [];
        $personalSkills = [];
        array_push($skills, 'PHP', 'Laravel', 'C++', 'C#', 'JavaScript', 'Python');
        array_push($personalSkills, 'Teamwork', 'Creativity', 'Problem Solving');

        sort($skills);
        sort($personalSkills);

        return View::make('welcome', compact('imagesByFolder', 'skills', 'personalSkills'));
    }
}
