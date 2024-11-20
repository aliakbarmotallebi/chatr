<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Gift;
use App\Models\Mechanic;
use App\Models\Profile;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $products = Product::all();
        $mechanics = Mechanic::all();
        $gifts = Gift::all();
        $posts = BlogPost::all();
        $videos = Video::all();
        $profiles = Profile::all();
        return view('home', compact('slides', 'profiles', 'products', 'gifts', 'posts', 'mechanics', 'videos'));
    }
}
