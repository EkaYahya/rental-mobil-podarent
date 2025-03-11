<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Models\Type;
use App\Models\Testimonial;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::where('status', 1)->get();
        $testimonials = Testimonial::get();
        $types = Type::get(['id', 'nama']);
        $blogs = Blog::where('status', 1)->get();

        return view('frontend.homepage', compact('cars', 'testimonials', 'types', 'blogs'));
    }
}
