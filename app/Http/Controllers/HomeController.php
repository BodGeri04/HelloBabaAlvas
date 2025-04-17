<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function HomePage()
    {
        $products = Product::paginate(4);
        $blogs=Blog::where('is_published',true)->orderBy('created_at','DESC')->paginate(4);
        return view('website.home')->with('products',$products)->with('blogs',$blogs);
    }
}
