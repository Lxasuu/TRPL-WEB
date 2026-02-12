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

    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">

                    <div class="container">

                        <div class="row gy-4">

                            @forelse($blogPosts as $post)
                            <div class="col-12">
                                <article>

                                    @if($post->image_path)
                                    <div class="post-img">
                                        <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="img-fluid">
                                    </div>
                                    @endif

                                    <h2 class="title">
                                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="{{ route('blog.show', $post->slug) }}">{{ $post->author->name ?? 'Admin' }}</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="{{ route('blog.show', $post->slug) }}"><time datetime="{{ $post->published_at?->format('Y-m-d') }}">{{ $post->published_at?->format('M d, Y') }}</time></a></li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <p>
                                            {{ Str::limit(strip_tags($post->content), 250) }}
                                        </p>

                                        <div class="read-more">
                                            <a href="{{ route('blog.show', $post->slug) }}">Read More</a>
                                        </div>
                                    </div>

                                </article>
                            </div><!-- End post list item -->
                            @empty
                            <div class="col-12 text-center">
                                <p>Belum ada artikel blog yang diterbitkan.</p>
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
                        <form action="">
                            <input type="text">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">

                        <h3 class="widget-title">Categories</h3>
                        <ul class="mt-3">
                            <li><a href="#">General <span>(25)</span></a></li>
                            <li><a href="#">Lifestyle <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(5)</span></a></li>
                            <li><a href="#">Design <span>(22)</span></a></li>
                            <li><a href="#">Creative <span>(8)</span></a></li>
                            <li><a href="#">Educaion <span>(14)</span></a></li>
                        </ul>

                    </div><!--/Categories Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <h3 class="widget-title">Recent Posts</h3>

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

                    </div><!--/Recent Posts Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">

                        <h3 class="widget-title">Tags</h3>
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>

                    </div><!--/Tags Widget -->

                </div>

            </div>

        </div>
    </div>
@endsection
