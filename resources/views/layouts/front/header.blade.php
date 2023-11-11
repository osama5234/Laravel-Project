<?php $segment = Request::segments();?>
<div class="My-Accout">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 "  >
                <div class="Mainitem">
                    <p>
                        {{  App\Http\Traits\HelperTrait::returnFlag(1967) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADER START -->
<header class="TopNav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="customNavbar">
                    <nav class="navbar navbar-expand-lg pr-0 p-0">
                        <a class="navbar-brand" href="index.php">LOGO</a>
                        <!--<a class="nav-link boximg" href="#"><img src="image/ICON.png" class="img-fluid"></a>-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product') }}">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog') }}">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#"><i class="fas fa-search"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-shopping-bag"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

