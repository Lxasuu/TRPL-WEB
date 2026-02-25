@extends('layouts.app')

@section('title', 'Blog - TRPL Politeknik Meta Industri')

@section('body-class', 'blog-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Blog</h1>
                        <p class="mb-0">Dapatkan informasi terbaru seputar kampus, prestasi mahasiswa, dan artikel
                            teknologi terkini.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Blog</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <div class="container blog-container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section pt-0">

                    <div class="container px-0">

                        <div class="row gy-5">

                            @forelse($blogPosts as $post)
                            <div class="col-12">
                                <article class="blog-post-card">

                                    @if($post->image_path)
                                    <div class="post-img">
                                        <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="img-fluid">
                                    </div>
                                    @endif

                                    <div class="post-content">
                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $post->author->name ?? 'Admin' }}</li>
                                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="{{ $post->published_at?->format('Y-m-d') }}">{{ $post->published_at?->format('M d, Y') }}</time></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-folder"></i> {{ $post->category }}</li>
                                            </ul>
                                        </div>

                                        <h2 class="title">
                                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                        </h2>

                                        <div class="content">
                                            <p>
                                                {{ Str::limit(strip_tags($post->content), 250) }}
                                            </p>

                                            <div class="read-more">
                                                <a href="{{ route('blog.show', $post->slug) }}" class="btn-read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </div><!-- End post list item -->
                            @empty
                            <div class="col-12 text-center py-5">
                                <div class="empty-blog">
                                    <i class="bi bi-journal-x" style="font-size: 4rem; color: #ddd;"></i>
                                    <p class="mt-3 text-muted">Belum ada artikel blog yang diterbitkan.</p>
                                </div>
                            </div>
                            @endforelse

                        </div><!-- End blog posts list -->

                    </div>

                </section><!-- /Blog Posts Section -->

            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item">
                        <h3 class="widget-title">Search</h3>
                        <form action="{{ url('/blog') }}" method="get" class="search-form">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel...">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!--/Search Widget -->

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="mt-3">
                            <li><a href="{{ url('/blog') }}" class="{{ !request('category') ? 'active-cat' : '' }}">All <span>({{ \App\Models\BlogPost::where('status', 'published')->count() }})</span></a></li>
                            @foreach($categories as $cat)
                            <li>
                                <a href="{{ url('/blog?category=' . $cat->category) }}" class="{{ request('category') == $cat->category ? 'active-cat' : '' }}">
                                    {{ $cat->category }} <span>({{ $cat->count }})</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div><!--/Categories Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">
                        <h3 class="widget-title">Recent Posts</h3>
                        <div class="recent-posts-list mt-3">
                            @foreach($blogPosts->take(5) as $recent)
                            <div class="post-item">
                                @if($recent->image_path)
                                    <img src="{{ asset('storage/' . $recent->image_path) }}" alt="" class="flex-shrink-0">
                                @endif
                                <div>
                                    <h4><a href="{{ route('blog.show', $recent->slug) }}">{{ $recent->title }}</a></h4>
                                    <time datetime="{{ $recent->published_at?->format('Y-m-d') }}">{{ $recent->published_at?->format('M d, Y') }}</time>
                                </div>
                            </div><!-- End recent post item-->
                            @endforeach
                        </div>
                    </div><!--/Recent Posts Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tags-list mt-3">
                            @forelse($tags as $tag)
                                <a href="{{ url('/blog?search=' . $tag) }}">{{ $tag }}</a>
                            @empty
                                <p class="text-muted small">Belum ada tag.</p>
                            @endforelse
                        </div>
                    </div><!--/Tags Widget -->

                </div>

            </div>

        </div>
    </div>

    <style>
        .blog-container {
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .blog-post-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        .blog-post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--accent-color);
        }
        .blog-post-card .post-img {
            max-height: 400px;
            overflow: hidden;
        }
        .blog-post-card .post-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .blog-post-card:hover .post-img img {
            transform: scale(1.05);
        }
        .blog-post-card .post-content {
            padding: 30px;
        }
        .blog-post-card .meta-top {
            margin-bottom: 15px;
        }
        .blog-post-card .meta-top ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 20px;
            color: #64748b;
            font-size: 14px;
        }
        .blog-post-card .meta-top ul i {
            margin-right: 8px;
            color: var(--accent-color);
        }
        .blog-post-card .title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        .blog-post-card .title a {
            color: var(--heading-color);
        }
        .blog-post-card .title a:hover {
            color: var(--accent-color);
        }
        .blog-post-card .content p {
            color: #475569;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        .btn-read-more {
            display: inline-flex;
            align-items: center;
            padding: 10px 24px;
            background: var(--accent-color);
            color: #fff !important;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2);
        }
        .btn-read-more:hover {
            background: #4f46e5;
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.3);
            transform: translateX(5px);
        }
        .btn-read-more i {
            margin-left: 8px;
            font-size: 16px;
        }

        /* Sidebar Styling */
        .sidebar .widget-item {
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        .sidebar .widget-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f5f9;
            position: relative;
        }
        .sidebar .widget-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 50px;
            height: 2px;
            background: var(--accent-color);
        }
        .search-form {
            position: relative;
        }
        .search-form input {
            width: 100%;
            padding: 12px 20px;
            padding-right: 50px;
            border: 1px solid #e2e8f0;
            border-radius: 50px;
            outline: none;
            transition: all 0.3s ease;
        }
        .search-form input:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }
        .search-form button {
            position: absolute;
            right: 5px;
            top: 5px;
            bottom: 5px;
            width: 40px;
            background: var(--accent-color);
            color: #fff;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        .search-form button:hover {
            background: #4f46e5;
        }
        .categories-widget ul li {
            padding: 10px 0;
            border-bottom: 1px dashed #e2e8f0;
        }
        .categories-widget ul li:last-child {
            border-bottom: none;
        }
        .categories-widget ul li a {
            display: flex;
            justify-content: space-between;
            color: #475569;
            font-weight: 500;
        }
        .categories-widget ul li a:hover, .categories-widget ul li a.active-cat {
            color: var(--accent-color);
            padding-left: 5px;
        }
        .categories-widget ul li span {
            color: #94a3b8;
            font-size: 13px;
        }
        .tags-widget .tags-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .tags-widget .tags-list a {
            padding: 5px 15px;
            background: #f1f5f9;
            color: #475569;
            border-radius: 50px;
            font-size: 13px;
            transition: all 0.3s ease;
        }
        .tags-widget .tags-list a:hover {
            background: var(--accent-color);
            color: #fff;
        }
    </style>
@endsection
