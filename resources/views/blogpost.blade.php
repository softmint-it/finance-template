@extends('layouts.main')

@section('title', 'Easy Leasing | ' . $blog->title)

@section('description', $blog->meta_description)
@section('keywords', $blog->meta_keywords)

@section('og:title', 'Easy Leasing | ' . $blog->title)
@section('og:description', $blog->meta_description)
@section('og:url', url("blog/{$blog->slug}"))
@section('og:type', 'website')
@section('og:image', env('BASE_URL') . $blog->temp_img)

@section('twitter:card', 'summary_large_image')
@section('twitter:title', 'Easy Leasing | ' . $blog->title)
@section('twitter:description', $blog->meta_description)
@section('twitter:image', env('BASE_URL') . $blog->temp_img)


@section('content')



<section class="wrapper mt-14">
    <div class="container pt-1 pt-md-8 pt-lg-10 pt-xl-12 pb-12  pb-md-12">
        <div class="row">
            <div class="col-md-12 col-xl-10 col-xxl-10 mx-auto">
                <h3 class="display-4 mb-5 w-100 text-center">{{$blog->title}}</h3>
            </div>
            <div class="col-md-12 blog-container">
                <div class="blog-image-container">
                    <img src="{{env('BASE_URL')}}{{$blog->main_img}}" class="img-fluid w-100 rounded-xl" alt="" />
                </div>
                <div class="blog-content d-grid align-items-center">
                    @if($blog->custom_page == 1)
                    <a href="{{$blog->url}}" class="category-link">{{$blog->category}} <i
                            class="uil uil-external-link-alt"></i></a>
                    @endif
                </div>
            </div>

            <div class="col-md-12 mx-auto mt-4">
                <div class="container my-5">
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-white">
                        </div>
                        <div class="card-body">
                            <p class="published-date mb-4 text-md-end text-center">
                                {{$blog->published_at->format('F j, Y')}}, by
                                {{$blog->author}}
                            </p>
                            {!!$blog->content!!}

                            @if($blog->custom_page == 1)
                            <a href="{{$blog->url}}" class="btn btn-primary btn-sm">{{$blog->category}}<i
                                    class="uil uil-external-link-alt" style="margin-left:10px;"></i></a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- other blog posts -->
            <div class="col-md-12 col-xl-10 col-xxl-10 mx-auto">
                <h5 class="display-5 mt-5 mb-5 w-100 text-center">Other Articles</h5>

                <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3"
                    data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($otherBlogs as $blog)
                            <div class="swiper-slide">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a
                                            href="{{route('blog', $blog->slug)}}">
                                            <img src="{{env('BASE_URL')}}{{ $blog->temp_img }}" alt="" /></a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="post-header">
                                        <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark"
                                                href="{{route('blog', $blog->slug)}}">{{$blog->title}}</a></h2>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date"><i
                                                    class="uil uil-calendar-alt"></i><span>{{ $blog->published_at->format('Y-m-d') }}</span>
                                            </li>
                                            @if($blog->custom_page == 1)
                                            <li class="post-comments"><a href="{{$blog->url}}"><i
                                                        class="uil uil-file-alt fs-15"></i>{{$blog->category}}</a>
                                            </li>

                                            @else
                                            <li class="post-comments"><a href="{{route('blog', $blog->slug)}}"><i
                                                        class="uil uil-file-alt fs-15"></i>{{$blog->category}}</a>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
    </div>
</section>



@endsection