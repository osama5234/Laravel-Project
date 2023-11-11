@extends('layouts.main')
@section('content')
    @foreach ($banners as $item)
        <section class="Sec-Banner" style="background-image: url({{ asset($item->image) }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="BannerContent" >
                            <h1>{{ $item->title }}</h1>

                                {!!  $item->description !!}
                            <a href="#" class="btn btnShop">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <!-- SECTION BANNER END -->
    <!-- SECTION TOP COLLECTION START -->
    <section class="Sec-TopCollection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="TopCollectHeading">
                        <h1>The Collection</h1>
                    </div>
                </div>
                @foreach ($categories as $items)


                <div class="col-lg-3">
                    <div class="Collection-box" style="background-image: url({{ asset($items->image) }})">
                        <h5><a href="#">{!!$items->name!!}</a></h5>
                    </div>
                </div>
                @endforeach

        </div>
    </section>
    <!-- SECTION TOP COLLECTION END-->
    <!-- SECTION TRY-US START -->
    <section class="Sec-TryUs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="TryUsImage">
                        <img src="{{ asset($page->image) }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="TryUsContent">
                        {!! $page->content !!}
                        <a href="#" class="btn btnTryon">Home Try On</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION TRY-US END -->
    <!-- SECTION FEATURE START -->
    <section class="FeaturedSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-down" data-aos-duration="1500">
                    <div class="FeatureHeading">
                        <h1>{!! $section[2]->value !!}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                    @foreach($products as $items)
                    <div class="col-lg-4" data-aos="zoom-in-down" data-aos-duration="1500">
                        <div class="featuredBox">
                            <figure>
                                <img src="{{ asset($items->image) }}" alt="" class="img-fluid" >
                            </figure>
                            <div class="featuredtext">
                                <h6>{{ $items->product_title  }}</h6>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </li>
                                    <li>
                                        <span>(6458)</span>
                                    </li>
                                </ul>
                                <p>$25.00</p>
                                <a href="product-detail.php" class="btn btnBag">Add to Bag</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
    </section>
    <!-- SECTION FEATURE END -->
    <!-- SECTION SOME-ABOUT START -->
    <section class="Sec-SomeAbout">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="SomeAboutContent">
                        {!! $section[0]->value !!}
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
    <!-- SECTION RENTAL-PRODUCTS START -->
    <section class="Sec-RentalProducts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="RentalProductHeading">
                        <h1>{!! $section[3]->value !!}</h1>
                    </div>
                </div>
                @foreach ($rent_products as $items)
                <div class="col-lg-4" data-aos="zoom-in-right" data-aos-duration="1500">
                    <div class="featuredBox">
                        <figure>
                            <img src="{{ asset($items->image) }}" alt="" class="img-fluid">
                        </figure>
                        <div class="featuredtext">
                            <h6>{{ $items->product_title  }}</h6>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </li>
                                <li>
                                    <span>(6458)</span>
                                </li>
                            </ul>
                            <p>$25.00</p>
                            <a href="product-detail.php" class="btn btnBag">Add to Bag</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- SECTION RENTAL-PRODUCTS END -->
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
                        <h6>{!! $section[4]->value !!}</h6>
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
