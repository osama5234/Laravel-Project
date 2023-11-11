@extends('layouts.main')
@section('content')

    <section class="Sec-InnerPagesBanner" style="background-image: url({{ asset($page->image) }})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="InnerPagesBannerText">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION INNER-PAGES BANNER END -->
    <!-- SECTION SOME-ABOUT START -->
    <section class="Sec-SomeAbout">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="SomeAboutContent">
                        {!!$page->content!!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="SomeAboutImage">
                        <figure>
                            <img src="{{ asset($section[1]->value) }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION SOME-ABOUT END -->
    <!-- SECTION VIDEO-IMAGE START -->
    <section class="Sec-VideoImage">
        <div class="container">
            <div class="row">
                <div class="col-md-12 video">
                   {!!$section[2]->value!!}
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION VIDEO-IMAGE END -->
    <!-- SECTION NEWSLETTER START -->
    <section class="Sec-Newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="NewsLetterText">
                        <h1>Newsletter</h1>
                        <p>
                            Keep always updated with our fresh blog posts
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION NEWSLETTER END -->
    <!-- Section7 Start -->
    <section class="Sec-spacing Section7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="GalleryContent" data-aos="fade-down">
                        <h6>{!! $section[0]->value !!}</h6>
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
    <!-- Section7 End -->
    <!-- footer start -->

    @endsection
    @section('css')
        <style>

        </style>
    @endsection

    @section('js')
        <script type="text/javascript"></script>
    @endsection
