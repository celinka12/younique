@extends('layouts.user.user')

@section('content')

    <!-- ****** Welcome Slides Area Start ****** -->
    <section class="welcome_area">
        <div class="welcome_slides owl-carousel">
            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url({{ asset('assets/img/bg-img/bg-1.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only
                                    today we offer free shipping</h6>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Makeup
                                    Trends</h2>
                                <a href="{{route('shop.index')}}" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s"
                                    data-duration="500ms">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url({{ asset('assets/img/bg-img/bg-4.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today
                                    we offer free shipping</h6>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Skincare
                                    Collection</h2>
                                <a href="{{route('shop.index')}}" class="btn karl-btn" data-animation="fadeInLeftBig"
                                    data-delay="1s" data-duration="500ms">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url({{ asset('assets/img/bg-img/bg-6.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Only today
                                    we offer free shipping</h6>
                                <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Women
                                    Skincare</h2>
                                <a href="{{route('shop.index')}}" class="btn karl-btn" data-animation="fadeInRightBig"
                                    data-delay="1s" data-duration="500ms">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Slides Area End ****** -->

    <!-- ****** Top Catagory Area Start ****** -->
    <section class="top_catagory_area d-md-flex clearfix">
        <!-- Single Catagory -->
        <div class="single_catagory_area d-flex align-items-center bg-img"
            style="background-image: url({{ asset('assets/img/bg-img/bg-2.jpg') }});">
            <div class="catagory-content">
                <h6>On Makeup</h6>
                <h2>Sale 30%</h2>
                <a href="{{route('shop.index')}}" class="btn karl-btn">SHOP NOW</a>
            </div>
        </div>
        <!-- Single Catagory -->
        <div class="single_catagory_area d-flex align-items-center bg-img"
            style="background-image: url({{ asset('assets/img/bg-img/bg-7.jpg') }});">
            <div class="catagory-content">
                <h6>Check new collection of BodyCare</h6>
                <h2>Sunscreen</h2>
                <a href="{{route('shop.index')}}" class="btn karl-btn">SHOP NOW</a>
            </div>
        </div>
    </section>
    <!-- ****** Top Catagory Area End ****** -->

    <!-- ****** Quick View Modal Area Start ****** -->
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <div class="modal-body">
                    <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="quickview_pro_img">
                                        <img src="{{ asset('assets/img/product-img/product-1.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                    <!-- Add to Cart Form -->
                                    <form class="cart" method="post">
                                        <div class="quantity">
                                            <span class="qty-minus"
                                                onclick="var effect = document.getElementById('qty'); var qty = parseInt(effect.value); if(!isNaN(qty) && qty > 1) effect.value = qty - 1;"><i
                                                    class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" id="qty" value="1" min="1">


                                            <input type="number" class="qty-text" id="qty" step="1"
                                                min="1" max="12" name="quantity" value="1">

                                            <span class="qty-plus"
                                                onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                        <button type="submit" name="addtocart" value="5"
                                            class="cart-submit">Add to cart</button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="cart.html" target="_blank"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html" target="_blank"><i
                                                    class="ti-stats-up"></i></a>
                                        </div>
                                    </form>

                                    <!-- <div class="share_wf mt-30">
                                        <!- <p>Share With Friend</p> 
                                        <div class="_icon">
                                             <a href="#"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"
                                                    aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"
                                                    aria-hidden="true"></i></a> 
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Quick View Modal Area End ****** -->

    <!-- ****** Offer Area Start ****** -->
    <section class="offer_area height-700 section_padding_100 bg-img"
        style="background-image: url({{ asset('assets/img/bg-img/bg-5.jpg') }});">
        <div class="container h-100">
            {{-- <div class="row h-100 align-items-end justify-content-end">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                        <h2>White t-shirt <span class="karl-level">Hot</span></h2>
                        <p>* Free shipping until 25 Dec 2017</p>
                        <div class="offer-product-price">
                            <h3><span class="regular-price">$25.90</span> $15.90</h3>
                        </div>
                        <a href="#" class="btn karl-btn mt-30">Shop Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- ****** Offer Area End ****** -->

    <!-- ****** Popular Brands Area Start ****** -->
    <section class="karl-testimonials-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="karl-testimonials-slides owl-carousel">

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Terima kasih kepada YOUNIQUE karena menyediakan produk berkualitas tinggi dan 
                                layanan pelanggan yang luar biasa. Saya pasti akan terus berbelanja di sini dan
                                 merekomendasikannya kepada teman-teman dan keluarga saya!"</h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{ asset('assets/img/bg-img/tes-1.jpg') }}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Michelle </p>
                                    <span>Client, Indonesia</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Belanja di YOUNIQUE adalah pengalaman yang sangat memuaskan. Situs web mereka mudah digunakan dan penuh dengan informasi berguna. 
                                Produk-produk yang saya coba sejauh ini tidak mengecewakan, mulai dari bodycare hingga serum wajah. 
                                Kulit saya tidak pernah terlihat lebih baik! </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{ asset('assets/img/bg-img/tes-1.jpg') }}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p> Williams</p>
                                    <span>Client, Indonesia</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Pengalaman berbelanja saya di YOUNIQUE sangat memuaskan. 
                                Pengiriman cepat dan produk tiba dalam kondisi sempurna. 
                                Saya juga mengapresiasi paket ramah lingkungan mereka, 
                                yang menunjukkan komitmen terhadap keberlanjutan. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="{{ asset('assets/img/bg-img/tes-1.jpg') }}" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Emily Victoria</p>
                                    <span>Client, Indonesia</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ****** Popular Brands Area End ****** -->
@endsection
