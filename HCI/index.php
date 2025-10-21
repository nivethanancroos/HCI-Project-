<?php
$pageTitle = "Home Page";
ob_start();
?>

<!-- Slider -->
<div class="tf-slideshow slider-home-2 slider-effect-fade position-relative">
    <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false"
        data-space="0" data-loop="true" data-auto-play="true" data-delay="2000" data-speed="1000">
        <div class="swiper-wrapper">
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/slideshow-3.png"
                        src="images/slider/slideshow-3.png" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 30% OFF MOTHERBOARDS AND PROCESSORS</p>
                            <h1 class="fade-item fade-item-2">Build Your <br> Dream Rig</h1>
                            <a href="productList.php"
                                class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop
                                    now</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/slideshow-2.png"
                        src="assets/images/slider/slideshow-2.png" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 25% OFF GRAPHICS CARDS</p>
                            <h1 class="fade-item fade-item-2">Performance <br>That Wows</h1>
                            <a href="productList.php"
                                class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Browse
                                    GPUs</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/slideshow-1.png"
                        src="assets/images/slider/slideshow-1.png" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 20% OFF GAMING PERIPHERALS</p>
                            <h1 class="fade-item fade-item-2">Gear Up For Victory</h1>
                            <a href="productList.php"
                                class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop
                                    now</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-pagination sw-absolute-2">
        <div class="container">
            <div class="sw-dots sw-pagination-slider justify-content-center"></div>
        </div>
    </div>
</div>
<!-- /Slider -->

<!-- Brand -->
<section class="flat-spacing-27 wow fadeIn" data-wow-delay="0s">
    <div class="container">
        <div class="wrap-carousel wrap-brand wrap-brand-v2">
            <div dir="ltr" class="swiper tf-sw-brand border-0" data-loop="false" data-play="false" data-preview="6"
                data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="assets/images/brands/brand-1.png"
                                src="images/brand/dyson.svg" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="assets/images/brands/brand-2.png"
                                src="images/brand/sony.svg" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="assets/images/brands/brand-3.png"
                                src="images/brand/samsung.svg" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="assets/images/brands/brand-4.png"
                                src="images/brand/oneplus.svg" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="assets/images/brands/brand-5.png"
                                src="images/brand/monster.svg" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="assets/images/brands/brand-6.png"
                                src="images/brand/sonos.svg" alt="image-brand">
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-dots style-2 sw-pagination-brand justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Brand -->

<!-- Flash Sales -->
<section class="flat-spacing-2">
    <div class="container">
        <div class="flat-title flex-row justify-content-between gap-10 flex-wrap px-0">
            <span class="title wow fadeInUp" data-wow-delay="0s">Flash Sales - Limited Time Offers!</span>
            <div class="tf-countdown-v3 wow fadeInUp" data-wow-delay="0s">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M13.5631 11.7661L10.7746 9.67465V5.41441C10.7746 4.98605 10.4283 4.6398 9.99996 4.6398C9.5716 4.6398 9.22535 4.98605 9.22535 5.41441V10.062C9.22535 10.306 9.34 10.5361 9.5352 10.6817L12.6336 13.0055C12.7673 13.1062 12.9302 13.1606 13.0975 13.1604C13.3338 13.1604 13.5662 13.0543 13.718 12.8498C13.9752 12.5081 13.9055 12.0225 13.5631 11.7661Z"
                        fill="currentColor"></path>
                    <path
                        d="M10 0C4.48566 0 0 4.48566 0 10C0 15.5143 4.48566 20 10 20C15.5143 20 20 15.5143 20 10C20 4.48566 15.5143 0 10 0ZM10 18.4508C5.34082 18.4508 1.54918 14.6592 1.54918 10C1.54918 5.34082 5.34082 1.54918 10 1.54918C14.66 1.54918 18.4508 5.34082 18.4508 10C18.4508 14.6592 14.6592 18.4508 10 18.4508Z"
                        fill="currentColor"></path>
                </svg>
                <div class="js-countdown" data-timer="8007500" data-labels="D,H,M,S"></div>
            </div>
        </div>
        <div class="wrap-carousel wrap-sw-3">
            <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3"
                data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3"
                data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8 border-0 bg_grey-11">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                        src="images/products/bark-phone-blue.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                        src="images/products/bark-phone-blue2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                <span class="price">$19.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8 border-0 bg_grey-11">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-2.png"
                                        src="images/products/bark-phone-blue.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-2.png"
                                        src="images/products/bark-phone-blue2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">Samsung 970 EVO SSD</a>
                                <span class="price">$19.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8 border-0 bg_grey-11">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-3.png"
                                        src="images/products/bark-phone-blue.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-3.png"
                                        src="images/products/bark-phone-blue2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">Intel Core i7-12700K</a>
                                <span class="price">$19.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8 border-0 bg_grey-11">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-4.png"
                                        src="images/products/bark-phone-blue.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-4.png"
                                        src="images/products/bark-phone-blue2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">ASUS ROG STRIX B550-F</a>
                                <span class="price">$19.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8 border-0 bg_grey-11">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-3.png"
                                        src="images/products/bark-phone-blue.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-3.png"
                                        src="images/products/bark-phone-blue2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">Intel Core i7-12700K</a>
                                <span class="price">$19.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8 border-0 bg_grey-11">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                        src="images/products/bark-phone-blue.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                        src="images/products/bark-phone-blue2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                <span class="price">$19.99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-sw disable-line nav-next-slider nav-next-product box-icon w_46 round"><span
                    class="icon icon-arrow-left"></span></div>
            <div class="nav-sw disable-line nav-prev-slider nav-prev-product box-icon w_46 round"><span
                    class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Flash Sales -->

<!-- Categories -->
<section>
    <div class="container">
        <div class="flat-title flex-row justify-content-between px-0">
            <span class="title wow fadeInUp" data-wow-delay="0s">Browse By Category</span>
        </div>
        <div class="flat-categories-bg wrap-carousel">
            <div dir="ltr" class="swiper tf-sw-recent wow fadeInUp" data-preview="6" data-tablet="3" data-mobile="2"
                data-space-lg="70" data-space-md="30" data-space="15" data-pagination="2" data-pagination-md="3"
                data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="images/collections/cpu.svg" alt="CPU"
                                    src="assets/images/item/cpu.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html" class="link title fw-5 text-line-clamp-1">CPU</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="images/collections/gpu.svg" alt="GPU"
                                    src="assets/images/item/gpu.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html" class="link title fw-5 text-line-clamp-1">GPU</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="images/collections/motherboard.svg" alt="Motherboard"
                                    src="assets/images/item/motherboard.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html"
                                    class="link title fw-5 text-line-clamp-1">Motherboard</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="images/collections/ram.svg" alt="RAM"
                                    src="assets/images/item/ram.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html" class="link title fw-5 text-line-clamp-1">RAM</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="assets/images/item/storage.svg" alt="Storage"
                                    src="assets/images/item/storage.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html" class="link title fw-5 text-line-clamp-1">Storage</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="images/collections/cooler.svg" alt="Coolers"
                                    src="assets/images/item/cooler.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html" class="link title fw-5 text-line-clamp-1">Coolers</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="assets/images/item/psu.svg" alt="Power Supply"
                                    src="assets/images/item/psu.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html" class="link title fw-5 text-line-clamp-1">Power
                                    Supply</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="collection-item-circle hover-img">
                            <a href="shop-collection-sub.html" class="collection-image img-style">
                                <img class="lazyloaded" data-src="images/collections/case.svg" alt="Cases"
                                    src="assets/images/item/case.svg">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-collection-sub.html" class="link title fw-5 text-line-clamp-1">Cases</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dots style-2 sw-pagination-recent justify-content-center"></div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span
                    class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span
                    class="icon icon-arrow-right"></span></div>
        </div>
    </div>
</section>
<!-- /Categories -->


<!-- Seller -->
<section class="flat-spacing-2">
    <div class="container">
        <div class="flat-title flex-row justify-content-between px-0">
            <span class="title wow fadeInUp" data-wow-delay="0s">Best Sellers</span>
        </div>
        <div class="wrap-carousel">
            <div dir="ltr" class="swiper tf-sw-product-sell-1" data-preview="4" data-tablet="3" data-mobile="2"
                data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                        src="images/products/headphone-red2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                        src="images/products/headphone-red.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="on-sale-wrap text-end">
                                    <div class="on-sale-item pre-order">Pre-Order</div>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                <span class="price">$199.00</span>
                                <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                    ADD TO CART
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-2.png"
                                        src="images/products/headphone-red2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-2.png"
                                        src="images/products/headphone-red.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">Samsung 970 EVO SSD</a>
                                <span class="price">$199.00</span>
                                <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                    ADD TO CART
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-3.png"
                                        src="images/products/headphone-red2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-3.png"
                                        src="images/products/headphone-red.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="on-sale-wrap text-end">
                                    <div class="on-sale-item pre-order">Pre-Order</div>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">Intel Core i7-12700K</a>
                                <span class="price">$199.00</span>
                                <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                    ADD TO CART
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-4.png"
                                        src="images/products/headphone-red2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-4.png"
                                        src="images/products/headphone-red.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">ASUS ROG STRIX B550-F</a>
                                <span class="price">$199.00</span>
                                <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                    ADD TO CART
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                        src="images/products/headphone-red2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                        src="images/products/headphone-red.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="on-sale-wrap text-end">
                                    <div class="on-sale-item pre-order">Pre-Order</div>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                <span class="price">$199.00</span>
                                <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                    ADD TO CART
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="card-product style-8">
                            <div class="card-product-wrapper">
                                <a href="singleProduct.php" class="product-img">
                                    <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                        src="images/products/headphone-red2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                        src="images/products/headphone-red.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                        class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="singleProduct.php" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="on-sale-wrap text-end">
                                    <div class="on-sale-item pre-order">Pre-Order</div>
                                </div>
                            </div>
                            <div class="card-product-info text-center">
                                <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                <span class="price">$199.00</span>
                                <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                    ADD TO CART
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-sw disable-line nav-next-slider nav-next-sell-1 box-icon w_46 round"><span
                    class="icon icon-arrow-left"></span></div>
            <div class="nav-sw disable-line nav-prev-slider nav-prev-sell-1 box-icon w_46 round"><span
                    class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-sell-1 justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Seller -->

<!-- Banner collection -->
<section class="flat-spacing-28">
    <div class="container">
        <div dir="ltr" class="swiper tf-sw-collection" data-preview="2" data-tablet="2" data-mobile="1.4"
            data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
            <div class="swiper-wrapper">
                <div class="swiper-slide" lazy="true">
                    <div class="collection-item-v4 st-lg hover-img">
                        <div class="collection-inner">
                            <a href="shop-collection-sub.html" class="collection-image img-style radius-10 o-hidden">
                                <img class="lazyload" data-src="assets/images/item/accessories2_b1.jpg"
                                    src="assets/images/item/accessories2_b1.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content text-start wow fadeInUp" data-wow-delay="0s">
                                <h5 class="heading">UV charger</h5>
                                <p class="subtext">Every piece is made to last beyond the season</p>
                                <a href="shop-collection-sub.html"
                                    class="tf-btn btn-line collection-other-link fw-6"><span>Shop Collection</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="collection-item-v4 st-lg hover-img">
                        <div class="collection-inner">
                            <a href="shop-collection-sub.html" class="collection-image img-style radius-10 o-hidden">
                                <img class="lazyload" data-src="assets/images/item/accessories2_b2.jpg"
                                    src="images/collections/accessories2_b2.jpg" alt="collection-img">
                            </a>
                            <div class="collection-content text-start wow fadeInUp" data-wow-delay="0s">
                                <h5 class="heading">Ness Headphone</h5>
                                <p class="subtext">Every piece is made to last beyond the season</p>
                                <a href="shop-collection-sub.html"
                                    class="tf-btn btn-line  collection-other-link fw-6"><span>Shop Collection</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner collection -->

<section class="browse-category flat-spacing-11">
    <div class="container">
        <div class="position-relative">
            <!-- Section Title -->
            <div class="flat-title flex-row justify-content-between px-0">
                <span class="title wow fadeInUp" data-wow-delay="0s">All Products</span>
            </div>
            <div class="wrap-carousel">
                <div dir="ltr" class="swiper tf-sw-product-sell-1" data-preview="4" data-tablet="3" data-mobile="2"
                    data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3"
                    data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product style-8">
                                <div class="card-product-wrapper">
                                    <a href="singleProduct.php" class="product-img">
                                        <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                            src="images/products/headphone-red2.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                            src="images/products/headphone-red.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="javascript:void(0);"
                                            class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                            class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="singleProduct.php" data-bs-toggle="modal"
                                            class="box-icon bg_white quickview tf-btn-loading">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="on-sale-wrap text-end">
                                        <div class="on-sale-item pre-order">Pre-Order</div>
                                    </div>
                                </div>
                                <div class="card-product-info text-center">
                                    <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                    <span class="price">$199.00</span>
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                        ADD TO CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product style-8">
                                <div class="card-product-wrapper">
                                    <a href="singleProduct.php" class="product-img">
                                        <img class="lazyload img-product" data-src="assets/images/item/item-2.png"
                                            src="images/products/headphone-red2.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="assets/images/item/item-2.png"
                                            src="images/products/headphone-red.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="javascript:void(0);"
                                            class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                            class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="singleProduct.php" data-bs-toggle="modal"
                                            class="box-icon bg_white quickview tf-btn-loading">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product-info text-center">
                                    <a href="singleProduct.php" class="title link">Samsung 970 EVO SSD</a>
                                    <span class="price">$199.00</span>
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                        ADD TO CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product style-8">
                                <div class="card-product-wrapper">
                                    <a href="singleProduct.php" class="product-img">
                                        <img class="lazyload img-product" data-src="assets/images/item/item-3.png"
                                            src="images/products/headphone-red2.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="assets/images/item/item-3.png"
                                            src="images/products/headphone-red.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="javascript:void(0);"
                                            class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                            class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="singleProduct.php" data-bs-toggle="modal"
                                            class="box-icon bg_white quickview tf-btn-loading">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="on-sale-wrap text-end">
                                        <div class="on-sale-item pre-order">Pre-Order</div>
                                    </div>
                                </div>
                                <div class="card-product-info text-center">
                                    <a href="singleProduct.php" class="title link">Intel Core i7-12700K</a>
                                    <span class="price">$199.00</span>
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                        ADD TO CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product style-8">
                                <div class="card-product-wrapper">
                                    <a href="singleProduct.php" class="product-img">
                                        <img class="lazyload img-product" data-src="assets/images/item/item-4.png"
                                            src="images/products/headphone-red2.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="assets/images/item/item-4.png"
                                            src="images/products/headphone-red.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="javascript:void(0);"
                                            class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                            class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="singleProduct.php" data-bs-toggle="modal"
                                            class="box-icon bg_white quickview tf-btn-loading">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product-info text-center">
                                    <a href="singleProduct.php" class="title link">ASUS ROG STRIX B550-F</a>
                                    <span class="price">$199.00</span>
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                        ADD TO CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product style-8">
                                <div class="card-product-wrapper">
                                    <a href="singleProduct.php" class="product-img">
                                        <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                            src="images/products/headphone-red2.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                            src="images/products/headphone-red.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="javascript:void(0);"
                                            class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                            class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="singleProduct.php" data-bs-toggle="modal"
                                            class="box-icon bg_white quickview tf-btn-loading">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="on-sale-wrap text-end">
                                        <div class="on-sale-item pre-order">Pre-Order</div>
                                    </div>
                                </div>
                                <div class="card-product-info text-center">
                                    <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                    <span class="price">$199.00</span>
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                        ADD TO CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product style-8">
                                <div class="card-product-wrapper">
                                    <a href="singleProduct.php" class="product-img">
                                        <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                                            src="images/products/headphone-red2.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                                            src="images/products/headphone-red.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="javascript:void(0);"
                                            class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                            class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="singleProduct.php" data-bs-toggle="modal"
                                            class="box-icon bg_white quickview tf-btn-loading">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                    <div class="on-sale-wrap text-end">
                                        <div class="on-sale-item pre-order">Pre-Order</div>
                                    </div>
                                </div>
                                <div class="card-product-info text-center">
                                    <a href="singleProduct.php" class="title link">NVIDIA RTX 4080</a>
                                    <span class="price">$199.00</span>
                                    <a href="#shoppingCart" data-bs-toggle="modal" class="tf-btn tf-btn-loading">
                                        ADD TO CART
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-sw disable-line nav-next-slider nav-next-sell-1 box-icon w_46 round"><span
                        class="icon icon-arrow-left"></span></div>
                <div class="nav-sw disable-line nav-prev-slider nav-prev-sell-1 box-icon w_46 round"><span
                        class="icon icon-arrow-right"></span></div>
                <div class="sw-dots style-2 sw-pagination-sell-1 justify-content-center"></div>
            </div>

            <div class="text-center mt-4">
                <a href="productList.php" class="btn btn-danger">View All Products</a>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /All Products Section -->


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