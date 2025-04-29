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
    public function HomePage(Request $request)
    {
        $query = $request->get('search');

        if ($query) {
            // Ha van keresési kulcsszó, akkor keresés alapján töltjük a blogokat
            $blogs = Blog::where('title', 'like', '%' . $query . '%')
                ->orWhere('content', 'like', '%' . $query . '%')
                ->where('is_published', true)
                ->orderBy('created_at', 'DESC')
                ->get();

            // Megjegyezzük, hogy vissza kell görgetni
            session()->flash('scrollTo', 'blog-section');
        } else {
            // Alapértelmezett blog lista
            $blogs = Blog::where('is_published', true)
                ->orderBy('created_at', 'DESC')
                ->paginate(4);
        }

        $products = Product::paginate(4);

        return view('website.home', compact('products', 'blogs'));
    }

    public function searchBlogs(Request $request)
    {
        $query = $request->get('query');

        // A keresési eredményeket tárold el a session-ben vagy redirecteld a query paramétert
        return redirect()->route('home', ['search' => $query])->with('scrollTo', '#blog-section');
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

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->where('active', true)->firstOrFail();
        return view('website.product', compact('product'));
    }
}
