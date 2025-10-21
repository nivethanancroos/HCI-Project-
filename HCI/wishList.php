<?php
$pageTitle = "Home Page";
ob_start();
?>

<!-- page-title -->
<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Your Wishlist</div>
    </div>
</div>
<!-- /page-title -->

<!-- Section Product -->
<section class="flat-spacing-2">
    <div class="container">

        <div class="tf-shop-control grid-3 align-items-center">
            <div class="tf-control-filter">
                <!-- <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a> -->
            </div>
            <ul class="tf-control-layout d-flex justify-content-center">
                <li class="tf-view-layout-switch sw-layout-2" data-value-grid="grid-2">
                    <div class="item"><span class="icon icon-grid-2"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-3 active" data-value-grid="grid-3">
                    <div class="item"><span class="icon icon-grid-3"></span></div>
                </li>
                <li class="tf-view-layout-switch sw-layout-4" data-value-grid="grid-4">
                    <div class="item"><span class="icon icon-grid-4"></span></div>
                </li>
            </ul>
            <div class="tf-control-sorting d-flex justify-content-end">
                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                    <div class="btn-select">
                        <span class="text-sort-value">Featured</span>
                        <span class="icon icon-arrow-down"></span>
                    </div>
                    <div class="dropdown-menu">
                        <div class="select-item active">
                            <span class="text-value-item">Featured</span>
                        </div>
                        <div class="select-item">
                            <span class="text-value-item">Best selling</span>
                        </div>
                        <div class="select-item">
                            <span class="text-value-item">Alphabetically, A-Z</span>
                        </div>
                        <div class="select-item">
                            <span class="text-value-item">Alphabetically, Z-A</span>
                        </div>
                        <div class="select-item">
                            <span class="text-value-item">Price, low to high</span>
                        </div>
                        <div class="select-item">
                            <span class="text-value-item">Price, high to low</span>
                        </div>
                        <div class="select-item">
                            <span class="text-value-item">Date, old to new</span>
                        </div>
                        <div class="select-item">
                            <span class="text-value-item">Date, new to old</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-layout wrapper-shop" data-grid="grid-4">
            <!-- card product 1 -->
            <div class="card-product">
                <div class="card-product-wrapper">
                    <a href="product-detail.html" class="product-img">
                        <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                            src="images/products/orange-1.jpg" alt="image-product">
                        <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                            src="images/products/white-1.jpg" alt="image-product">
                    </a>
                    <div class="list-product-btn type-wishlist">
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist">
                            <span class="tooltip">Remove Wishlist</span>
                            <span class="icon icon-delete"></span>
                        </a>
                    </div>
                    <div class="list-product-btn">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                            <span class="icon icon-bag"></span>
                            <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                            class="box-icon bg_white compare btn-icon-action">
                            <span class="icon icon-compare"></span>
                            <span class="tooltip">Add to Compare</span>
                            <span class="icon icon-check"></span>
                        </a>
                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                            <span class="icon icon-view"></span>
                            <span class="tooltip">Quick View</span>
                        </a>
                    </div>
                </div>
                <div class="card-product-info">
                    <a href="product-detail.html" class="title link">NVIDIA RTX 4080</a>
                    <span class="price">$16.95</span>
                </div>
            </div>
            <!-- card product 2 -->
            <div class="card-product">
                <div class="card-product-wrapper">
                    <div class="product-img">
                        <img class="lazyload img-product" data-src="assets/images/item/item-2.png"
                            src="images/products/brown.jpg" alt="image-product">
                        <img class="lazyload img-hover" data-src="assets/images/item/item-2.png"
                            src="images/products/purple.jpg" alt="image-product">
                    </div>
                    <div class="list-product-btn type-wishlist">
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist">
                            <span class="tooltip">Remove Wishlist</span>
                            <span class="icon icon-delete"></span>
                        </a>
                    </div>
                    <div class="list-product-btn">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                            <span class="icon icon-bag"></span>
                            <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                            class="box-icon bg_white compare btn-icon-action">
                            <span class="icon icon-compare"></span>
                            <span class="tooltip">Add to Compare</span>
                            <span class="icon icon-check"></span>
                        </a>
                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                            <span class="icon icon-view"></span>
                            <span class="tooltip">Quick View</span>
                        </a>
                    </div>
                    <div class="countdown-box">
                        <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                    </div>
                    <div class="on-sale-wrap">
                        <div class="on-sale-item">-33%</div>
                    </div>
                </div>
                <div class="card-product-info">
                    <a href="product-detail.html" class="title link">Samsung 970 EVO SSD</a>
                    <span class="price">From $18.95</span>
                </div>
            </div>
            <!-- card product 3 -->
            <div class="card-product">
                <div class="card-product-wrapper">
                    <div class="product-img">
                        <img class="lazyload img-product" data-src="assets/images/item/item-3.png"
                            src="images/products/white-3.jpg" alt="image-product">
                        <img class="lazyload img-hover" data-src="assets/images/item/item-3.png"
                            src="images/products/white-4.jpg" alt="image-product">
                    </div>
                    <div class="list-product-btn type-wishlist">
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist">
                            <span class="tooltip">Remove Wishlist</span>
                            <span class="icon icon-delete"></span>
                        </a>
                    </div>
                    <div class="list-product-btn absolute-2">
                        <a href="#shoppingCart" data-bs-toggle="modal"
                            class="box-icon bg_white quick-add tf-btn-loading">
                            <span class="icon icon-bag"></span>
                            <span class="tooltip">Add to cart</span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                            class="box-icon bg_white compare btn-icon-action">
                            <span class="icon icon-compare"></span>
                            <span class="tooltip">Add to Compare</span>
                            <span class="icon icon-check"></span>
                        </a>
                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                            <span class="icon icon-view"></span>
                            <span class="tooltip">Quick View</span>
                        </a>
                    </div>
                </div>
                <div class="card-product-info">
                    <a href="product-detail.html" class="title link">Intel Core i7-12700K</a>
                    <span class="price">$10.00</span>
                </div>
            </div>
            <!-- card product 4 -->
            <div class="card-product">
                <div class="card-product-wrapper">
                    <div class="product-img">
                        <img class="lazyload img-product" data-src="assets/images/item/item-4.png"
                            src="images/products/white-2.jpg" alt="image-product">
                        <img class="lazyload img-hover" data-src="assets/images/item/item-4.png"
                            src="images/products/pink-1.jpg" alt="image-product">
                    </div>
                    <div class="list-product-btn type-wishlist">
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist">
                            <span class="tooltip">Remove Wishlist</span>
                            <span class="icon icon-delete"></span>
                        </a>
                    </div>
                    <div class="list-product-btn">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                            <span class="icon icon-bag"></span>
                            <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                            class="box-icon bg_white compare btn-icon-action">
                            <span class="icon icon-compare"></span>
                            <span class="tooltip">Add to Compare</span>
                            <span class="icon icon-check"></span>
                        </a>
                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                            <span class="icon icon-view"></span>
                            <span class="tooltip">Quick View</span>
                        </a>
                    </div>
                </div>
                <div class="card-product-info">
                    <a href="product-detail.html" class="title">ASUS ROG STRIX B550-F</a>
                    <span class="price">$16.95</span>
                </div>
            </div>
            <!-- card product 5 -->
            <div class="card-product">
                <div class="card-product-wrapper">
                    <div class="product-img">
                        <img class="lazyload img-product" data-src="assets/images/item/item-1.png"
                            src="images/products/brown-2.jpg" alt="image-product">
                        <img class="lazyload img-hover" data-src="assets/images/item/item-1.png"
                            src="images/products/brown-3.jpg" alt="image-product">
                    </div>
                    <div class="list-product-btn type-wishlist">
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist">
                            <span class="tooltip">Remove Wishlist</span>
                            <span class="icon icon-delete"></span>
                        </a>
                    </div>
                    <div class="list-product-btn">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                            <span class="icon icon-bag"></span>
                            <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                            class="box-icon bg_white compare btn-icon-action">
                            <span class="icon icon-compare"></span>
                            <span class="tooltip">Add to Compare</span>
                            <span class="icon icon-check"></span>
                        </a>
                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                            <span class="icon icon-view"></span>
                            <span class="tooltip">Quick View</span>
                        </a>
                    </div>
                </div>
                <div class="card-product-info">
                    <a href="product-detail.html" class="title link">NVIDIA RTX 4080</a>
                    <span class="price">$114.95</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section Product -->

<?php
$pageContent = ob_get_clean();
include("includes/main-layout.php");
?>