<?php
$pageTitle = "Home Page";
ob_start();
?>

<section class="flat-spacing-15">
    <div class="container">
        <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
            <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                <div>
                    <div class="heading">Our Story</div>
                    <div class="text">
                        Welcome to PC Mart, your one-stop shop for all your computer needs.<br> Founded with a passion
                        for technology, we aim to provide high-quality<br> computer components and accessories at
                        unbeatable prices. Our<br> dedicated team ensures that every customer receives the best
                        service<br> and guidance to build their dream setup.<br>
                        <br>At PC Mart, we believe technology should be accessible to everyone.<br> Whether you’re a
                        gamer, a professional, or a casual user, our extensive<br> range of products caters to all
                        needs. Our mission is to bring cutting-edge<br> technology closer to you with excellent customer
                        service and expert advice
                    </div>
                </div>
            </div>
            <div class="grid-img-group">
                <div class="tf-image-wrap box-img item-1">
                    <div class="img-style">
                        <img class="lazyload" src="assets/images/collections/story-2.png"
                            data-src="assets/images/collections/story-2.png" alt="img-slider">
                    </div>
                </div>
                <div class="tf-image-wrap box-img item-2">
                    <div class="img-style">
                        <img class="lazyload" src="assets/images/collections/story-1.png"
                            data-src="assets/images/collections/story-3.png" alt="img-slider">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Icon box -->
<section class="flat-spacing-1 flat-iconbox bg_grey-7 wow fadeInUp" data-wow-delay="0s">
    <div class="container">
        <div class="wrap-carousel wrap-mobile">
            <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                <div class="swiper-wrapper wrap-iconbox">
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-shipping"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">Free Shipping</div>
                                <p>Free shipping over order $120</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-payment fs-22"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">Flexible Payment</div>
                                <p>Pay with Multiple Credit Cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-return fs-20"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">14 Day Returns</div>
                                <p>Within 30 days for an exchange</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tf-icon-box style-row">
                            <div class="icon bg_white">
                                <i class="icon-suport"></i>
                            </div>
                            <div class="content">
                                <div class="title fw-4">Premium Support</div>
                                <p>Outstanding premium support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Icon box -->

<?php
$pageContent = ob_get_clean();
include("includes/main-layout.php");
?>