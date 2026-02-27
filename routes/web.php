<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Stat;
use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\KaryaMahasiswa;
use App\Models\PeriodeMagang;
use App\Models\Beasiswa;
use App\Models\Faq;
use App\Models\BlogPost;
use App\Models\Testimonial;


Route::get('/', function () {
    $stats = Stat::all();
    $faqs = Faq::orderBy('order')->get();
    $blogPosts = BlogPost::where('status', 'published')
        ->latest('published_at')
        ->take(3)
        ->get();
    $karyas = KaryaMahasiswa::latest()->take(6)->get();
    $dosens = Dosen::where('is_active', true)->get();
    $testimoni = Testimonial::all();
    return view('welcome', compact('stats', 'faqs', 'blogPosts', 'karyas', 'dosens', 'testimoni'));

});

Route::get('/about', function () {
    $stats = Stat::all();
    $dosens = Dosen::where('is_active', true)->take(4)->get();
    return view('about', compact('stats', 'dosens'));
});

Route::get('/kurikulum', function () {
    $mataKuliahs = MataKuliah::all()->groupBy('semester');
    return view('kurikulum', compact('mataKuliahs'));
});

Route::get('/karya-mahasiswa', function () {
    $karyas = KaryaMahasiswa::all();
    return view('karya-mahasiswa', compact('karyas'));
});

Route::get('/magang', function () {
    $magangs = PeriodeMagang::all()->groupBy(fn($item) => $item->formatted_period);
    return view('magang', compact('magangs'));
});

Route::get('/dosen', function () {
    $dosens = Dosen::where('is_active', true)->get();
    return view('dosen', compact('dosens'));
});

Route::get('/beasiswa', function () {
    $beasiswas = Beasiswa::all();
    return view('beasiswa', compact('beasiswas'));
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::post('/kontak', function (Illuminate\Http\Request $request) {
    try {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\ContactMessage::create($validated);

        return 'OK';
    } catch (\Exception $e) {
        return response($e->getMessage(), 400);
    }
});

Route::get('/blog', function (Request $request) {
    $query = BlogPost::where('status', 'published');

    if ($request->has('search')) {
        $search = $request->get('search');
        $query->where(function($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('content', 'like', "%{$search}%");
        });
    }

    if ($request->has('category')) {
        $query->where('category', $request->get('category'));
    }

    $blogPosts = $query->orderBy('published_at', 'desc')->get();
    
    $categories = BlogPost::where('status', 'published')
        ->select('category', DB::raw('count(*) as count'))
        ->groupBy('category')
        ->get();

    $tags = BlogPost::where('status', 'published')
        ->whereNotNull('tags')
        ->pluck('tags')
        ->flatten()
        ->unique()
        ->filter();

    return view('blog', compact('blogPosts', 'categories', 'tags'));
});

Route::get('/blog/{slug}', function ($slug) {
    $post = BlogPost::with('author')->where('slug', $slug)->firstOrFail();
    $recentPosts = BlogPost::where('status', 'published')
        ->where('id', '!=', $post->id)
        ->latest('published_at')
        ->take(5)
        ->get();

    $categories = BlogPost::where('status', 'published')
        ->select('category', DB::raw('count(*) as count'))
        ->groupBy('category')
        ->get();

    $tags = BlogPost::where('status', 'published')
        ->whereNotNull('tags')
        ->pluck('tags')
        ->flatten()
        ->unique()
        ->filter();

    return view('blog-details', compact('post', 'recentPosts', 'categories', 'tags'));
})->name('blog.show');

Route::get('/blog-details', function () {
    return redirect('/blog');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/starter-page', function () {
    return view('starter-page');
});
