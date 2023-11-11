@extends('layouts.main')
@section('content')
    <section class="Sec-InnerPagesBanner" style="background-image: url({{ asset($page->image) }})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="InnerPagesBannerText">
                        <h1>Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION INNER-PAGES BANNER END -->
    <!-- SECTION FEATURE START -->
    <section class="FeaturedSec bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-down" data-aos-duration="1500">
                    <div class="FeatureHeading">
                        <h1>Featured Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $items)
                <div class="col-lg-4" data-aos="zoom-in-right" data-aos-duration="1500">
                    <div class="featuredBox">
                        <figure>
                            <img src="{{ asset($items->image) }}" alt="" class="img-fluid">
                        </figure>
                        <div class="featuredtext">
                            <h6>Product Name Goes Here</h6>
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
    <!-- SECTION FEATURE END -->
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
