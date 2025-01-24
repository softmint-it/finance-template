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
    <div class="container pt-14 pb-12 pt-md-8 pb-md-12">
        <div class="row">
            <div class="col-md-12 col-xl-10 col-xxl-10 mx-auto">
                <h3 class="display-4 mb-5 w-100 text-center">{{$blog->title}}</h3>
            </div>
            <!-- /nav -->
            <div class="row">
                <div class="col-md-12">
                    <img src="{{env('BASE_URL')}}{{$blog->main_img}}" class="img-fluid w-100 rounded-xl" alt="">
                    <div class="d-flex gap-4">
                        <p class="mb-0">{{$blog->published_at->format('F j, Y')}}</p>
                        @if($blog->custom_page == 1)
                        <a href="{{$blog->url}}" class="">{{$blog->category}}<i class="uil uil-external-link-alt"
                                style="margin-left:10px;"></i></a>
                        @endif
                    </div>

                </div>
                <div class="col-md-12 mx-auto mt-4">
                    <div class="container my-5">
                        <div class="card shadow-sm">
                            <div class="card-header bg-warning text-white">
                            </div>
                            <div class="card-body">
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
            </div>
            <!-- /.container -->
</section>

@endsection
