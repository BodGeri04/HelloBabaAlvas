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
    // Főoldal megjelenítése
    public function HomePage()
    {
        $products = Product::paginate(4);
        $blogs = Blog::where('is_published', true)->orderBy('created_at', 'DESC')->paginate(4);

        return view('website.home', compact('products', 'blogs'));
    }

    public function searchBlogs(Request $request)
    {
        $query = $request->get('query'); // A keresési kifejezés

        // Keresés blogokban a title és content mezőkben
        $blogs = Blog::where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->where('is_published', true)
            ->orderBy('created_at', 'DESC')
            ->get();

        if ($request->ajax()) {
            return response()->json([
                'blogs' => $blogs,
            ]);
        }

        return view('website.home', compact('blogs'));
    }

    public function aboutMe()
    {
        $products = Product::where('price', '>', 0)->paginate(5);
        $blogs = Blog::where('is_published', true)->orderBy('created_at', 'DESC')->paginate(4);
        return view('website.aboutMe', compact('products', 'blogs'));
    }

    public function allProducts()
    {
        $products = Product::all();
        return view('website.allProducts', compact('products'));
    }
}
