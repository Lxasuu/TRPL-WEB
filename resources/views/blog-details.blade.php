@extends('layouts.app')

@section('title', 'Blog Details - TRPL Politeknik Meta Industri')

@section('body-class', 'blog-details-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Blog Details</h1>
                        <p class="mb-0">Informasi mendalam mengenai topik pilihan kami.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Blog Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            @if($post->image_path)
                            <div class="post-img">
                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="img-fluid">
                            </div>
                            @endif

                            <h2 class="title">{{ $post->title }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post->author->name ?? 'Admin' }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
                                                datetime="{{ $post->published_at?->format('Y-m-d') }}">{{ $post->published_at?->format('M d, Y') }}</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="{{ url('/blog?category=' . $post->category) }}">{{ $post->category }}</a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                {!! $post->content !!}
                            </div><!-- End post content -->



                        </article>

                    </div>
                </section><!-- /Blog Details Section -->



            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">Search</h3>
                        <form action="">
                            <input type="text">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">

                        <h3 class="widget-title">Categories</h3>
                        <ul class="mt-3">
                            <li><a href="{{ url('/blog') }}">All <span>({{ \App\Models\BlogPost::where('status', 'published')->count() }})</span></a></li>
                            @foreach($categories as $cat)
                            <li>
                                <a href="{{ url('/blog?category=' . $cat->category) }}">
                                    {{ $cat->category }} <span>({{ $cat->count }})</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>

                    </div><!--/Categories Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <h3 class="widget-title">Recent Posts</h3>

                        @foreach($recentPosts as $recent)
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
        .categories-widget ul li {
            padding: 10px 0;
            border-bottom: 1px dashed #e2e8f0;
            list-style: none;
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
        .categories-widget ul li a:hover {
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
        .meta-top ul li a:hover {
            color: var(--accent-color);
        }
    </style>
@endsection
