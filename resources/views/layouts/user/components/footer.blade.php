<style>
    @media (min-width: 300px) {
        .footer-logo img {
            margin-left: 40px;
        }
    }

    @media (min-width: 500px) {
        .footer-logo img {
            margin-left: 130px;
        }
    }

    @media (min-width: 768px) {
        .footer-logo img {
            margin-left: 10px;
        }
    }
</style>

<footer class="footer_area">
    <div class="container">
        <div class="row">
            <!-- Single Footer Area Start -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single_footer_area">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/img/core-img/logo.png') }}" alt="">
                    </div>
                    <div class="copywrite_text d-flex align-items-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">YOUNIQUE</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-4">
                <div class="single_footer_area">
                    <ul class="footer_widget_menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('shop.index') }}">Shop</a></li>
                        <li><a href="{{ route('keranjang.index') }}"> Cart</a></li>
                        <li><a href="{{ route('kontak') }}">Contact</a></li>
                    </ul>

                </div>
            </div>
            <!-- Single Footer Area Start -->
            <div class="col-12 col-lg-5">
                <div class="single_footer_area">
                    <div class="footer_heading mb-30">
                        <h6>Subscribe to our newsletter</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="#" method="post">
                            <input type="email" name="mail" class="mail" placeholder="Your email here">
                            <button type="submit" class="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>

        <!-- Footer Bottom Area Start -->
        <div class="footer_bottom_area">
            <div class="row">
                <div class="col-12">
                    <div class="footer_social_area text-center">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
