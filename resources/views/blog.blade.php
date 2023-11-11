@extends('layouts.main')
@section('content')
    <section class="Sec-InnerPagesBanner" style="background-image: url({{ asset($page->image) }})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="InnerPagesBannerText">
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION INNER-PAGES BANNER END -->
    <!-- SECTION BLOG START -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-left-side">

                       @foreach ($blog as $items)

                       <div class="blog-item">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6 col-md-6 ">
                                <div class="left">
                                    <div class="date">
                                        <span>08</span>
                                        <span>07</span>
                                        <span>21</span>
                                    </div>
                                    <figure>
                                        <img src="{{ asset($items->image) }}" class="img-fluid" alt="Communication Tips">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-6 ">
                                <div class="blog-content" data-aos="fade-up">
                                    <span class="cat">Lifestyle</span>
                                    <div>
                                        <h2><a href="#">{{ $items->name }}</a></h2>
                                        {!! $items->short_detail !!}
                                    </div>
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                       @endforeach
                        </div>
                        <div class="pagintion-wrapper">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- SECTION BLOG END -->
    <!-- Section7 Start -->
    <section class="Sec-spacing Section7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="GalleryContent" data-aos="fade-down">
                        <h6>Follow Us on Instagram</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($instagram as $items)
                    <div class="col p-0">
                        <figure>
                            <div class="content" data-aos="fade-up">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ asset($items->image) }}" class="w-100">
                                    <div class="content-details fadeIn-bottom fadeIn-left">
                                        <span><i class="fab fa-instagram"></i></span>
                                        <p>Follow Us</p>
                                    </div>
                                </a>
                            </div>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>

    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection
