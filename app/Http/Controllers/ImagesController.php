<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{

	 public function __construct()
    {
        // Verify that the user is currently logged in
        $this->middleware('auth');
    }

    
     public function show($slug)
    {
        // get the image named $slug from storage and display it

        // Something like (not sure)
        $image = \File::get('images/' . $slug . '.jpg');

        return response()->make($image, 200, ['content-type' => 'image/jpg']);
    }
}
