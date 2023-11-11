@extends('layouts.main')
@section('content')
<section class="Sec-InnerPagesBanner" style="background-image: url({{ asset($page->image) }})">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="InnerPagesBannerText">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>
</div>
</section>
<!-- SECTION INNER-PAGES BANNER END -->
<!-- Get in touch START -->
<section class=" ContactPage">
<div class="container">
<div class="row">
    <div class="col-lg-7">
        <div class="COntactinfo" data-aos="fade-up" data-aos-duration="2000">
            <h5>GET IN TOUCH</h5>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="innerForm">
                    <label for="exampleInputEmail1">First Name</label>
                      <input type="email" class="form-control"  aria-describedby="emailHelp" required>
                        <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control"  aria-describedby="emailHelp" required>
                      <label for="exampleInputEmail1">Address</label>
                    <input type="email" class="form-control"  aria-describedby="emailHelp" required>
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="innerForm">
                        <label for="exampleInputEmail1">Last Name</label>
                      <input type="email" class="form-control"  aria-describedby="emailHelp" required>
                        <label for="exampleInputEmail1">Mobile Phone Number</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp" required>
                    <label for="exampleInputEmail1">Country</label>
                    <input type="email" class="form-control"  aria-describedby="emailHelp" required>
                  </div>
                </div>

                <div class="col-md-12">
                    <div class="innerForm">
                        <label for="exampleInputEmail1">Note</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                        </div>
                       <button href="#" class="btn btnCustom" type="submit">SENT MESSAGE</button>
                </div>
              </div>
            </form>
        </div>
    </div>
        <div class="col-md-5">
        <div class="contact-info" data-aos="fade-down" data-aos-duration="2000">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqua. </p>
            <ul class="contact-socails-address">
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <div class="contat-wrap">
                        <h6>Phone</h6>
                        <p><a href="">Landline: {{  App\Http\Traits\HelperTrait::returnFlag(59) }}</a></p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <div class="contat-wrap">
                        <h6>Email</h6>
                        <p><a href="">{{  App\Http\Traits\HelperTrait::returnFlag(218) }}</a></p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="contat-wrap">
                        <h6>Address</h6>
                        <p><a href="">{{  App\Http\Traits\HelperTrait::returnFlag(519)}}</a></p>
                    </div>
                </li>
            </ul>
            <div class="contact-socails">
                <ul>
                    <li>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- Get in touch END -->
<!-- Section7 Start -->
<section class="Sec-spacing Section7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" >
                <div class="GalleryContent" data-aos="fade-down">
                    <h6>Follow Us on Instagram</h6>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($instagram as $items)
            <div class="col p-0" >
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



