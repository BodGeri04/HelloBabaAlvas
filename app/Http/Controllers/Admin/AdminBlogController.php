<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'nullable',
            'cover_image' => 'nullable|image',
            'is_published' => 'nullable'
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->content = $request->content;
        $blog->is_published = $request->has('is_published') ? true : false;
        $blog->quote = $request->quote;
        $blog->quote_author = $request->quote_author;
        $blog->quote_title = $request->quote_title;
        $blog->second_main_title = $request->second_main_title;
        if ($request->hasFile('second_cover_image')) {
            $imageName = time() . '.' . $request->second_cover_image->getClientOriginalExtension();
            $request->second_cover_image->move(public_path('/assets/images/gallery/blog/'), $imageName);
            $blog->second_cover_image = $imageName;
        } else {
            $blog->image = 'noimage.jpg';
        }
        $blog->second_content = $request->second_content;
        $blog->end_content = $request->end_content;
        $blog->created_at = $request->filled('created_at') ? $request->created_at : now();

        if ($request->hasFile('cover_image')) {
            $imageName = time() . '.' . $request->cover_image->getClientOriginalExtension();
            $request->cover_image->move(public_path('/assets/images/gallery/blog/'), $imageName);
            $blog->cover_image = $imageName;
        } else {
            $blog->image = 'noimage.jpg';
        }
        $blog->save();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog létrehozva!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Cookie kulcs - Laravel titkosítja automatikusan
        $blogHash = hash('sha256', 'blog-' . $blog->id);
        $cookieKey = 'blog_viewed_' . $blogHash;

        // Ha nincs ilyen cookie, akkor növeljük a megtekintések számát
        if (!Cookie::has($cookieKey)) {
            $blog->increment('views');
            Cookie::queue($cookieKey, true, 1441); // 1 nap
        }

        // Korábbi blog (időrend szerint előző, de nem ugyanaz)
        $pastBlog = Blog::where('updated_at', '<', $blog->updated_at)
            ->where('id', '!=', $blog->id)
            ->where('is_published', true)
            ->orderBy('updated_at', 'desc')
            ->first();

        // Legújabb blog (időrend szerint legfrissebb, de nem ugyanaz)
        $latestBlog = Blog::where('id', '!=', $blog->id)
            ->where('is_published', true)
            ->orderBy('updated_at', 'asc')
            ->first();
        // Legnézettebb blogok (nézettségi szám alapján sorba rendezve)
        $popularBlogs = Blog::orderBy('views', 'desc')
            ->where('id', '!=', $blog->id)
            ->take(3)
            ->get();

        return view('website.blog', compact('blog', 'pastBlog', 'latestBlog', 'popularBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.create', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'nullable',
            'cover_image' => 'nullable|image',
            'is_published' => 'nullable'
        ]);

        $blog = Blog::findOrFail($id);

        $blog->title = $request->title;
        $blog->slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->title);
        $blog->content = $request->content;
        $blog->is_published = $request->has('is_published') ? true : false;
        $blog->quote = $request->quote;
        $blog->quote_author = $request->quote_author;
        $blog->quote_title = $request->quote_title;
        $blog->second_main_title = $request->second_main_title;
        if ($request->hasFile('second_cover_image')) {
            // Töröljük a régi képet, ha nem az alapértelmezett
            if ($blog->second_cover_image && $blog->second_cover_image !== 'noimage.jpg') {
                $oldImagePath = public_path('/assets/images/gallery/blog/' . $blog->second_cover_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = uniqid() . '_second.' . $request->second_cover_image->getClientOriginalExtension();
            $request->second_cover_image->move(public_path('/assets/images/gallery/blog/'), $imageName);
            $blog->second_cover_image = $imageName;
        }
        $blog->second_content = $request->second_content;
        $blog->end_content = $request->end_content;
        $blog->created_at = $request->filled('created_at') ? $request->created_at : now();
        if ($request->hasFile('cover_image')) {
            // Töröljük a régi képet, ha nem az alapértelmezett
            if ($blog->cover_image && $blog->cover_image !== 'noimage.jpg') {
                $oldImagePath = public_path('/assets/images/gallery/blog/' . $blog->cover_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->cover_image->getClientOriginalExtension();
            $request->cover_image->move(public_path('/assets/images/gallery/blog/'), $imageName);
            $blog->cover_image = $imageName;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog sikeresen frissítve!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog törölve');
    }
}
