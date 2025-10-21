<?php
$pageTitle = "Home Page";
ob_start();
?>

<!-- Slider -->
<div class="tf-slideshow slider-home-2 slider-effect-fade position-relative">
    <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="true" data-delay="2000" data-speed="1000">
        <div class="swiper-wrapper">
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/Slideshow_Electronics1.jpg" src="images/slider/Slideshow_Electronics1.jpg" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                            <h1 class="fade-item fade-item-2">Savings for<br> dads and grads.</h1>
                            <a href="shop-default.html" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/Slideshow_Electronics2.jpg" src="images/slider/Slideshow_Electronics2.jpg" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                            <h1 class="fade-item fade-item-2">Modern design</h1>
                            <a href="shop-default.html" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="assets/images/slider/Slideshow_Electronics3.jpg" src="images/slider/Slideshow_Electronics3.jpg" alt="fashion-slideshow-01">
                    <div class="box-content">
                        <div class="container">
                            <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                            <h1 class="fade-item fade-item-2">Fast charging</h1>
                            <a href="shop-default.html" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
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

<section class="flat-spacing-1">
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
      <div class="tf-row-flex">
         <aside class="tf-shop-sidebar wrap-sidebar-mobile">
            <div class="widget-facet wd-categories">
               <div class="facet-title" data-bs-target="#categories" data-bs-toggle="collapse" aria-expanded="true" aria-controls="categories">
                  <span>Product Categories</span>
                  <span class="icon icon-arrow-up"></span>
               </div>
               <div id="categories" class="collapse show">
                  <ul class="list-categoris current-scrollbar mb_36">
                     <li class="cate-item current"><a href="#"><span>Processors</span>&nbsp;<span>(15)</span></a></li>
                     <li class="cate-item"><a href="#"><span>Graphics Cards</span>&nbsp;<span>(10)</span></a></li>
                     <li class="cate-item"><a href="#"><span>Motherboards</span>&nbsp;<span>(12)</span></a></li>
                     <li class="cate-item"><a href="#"><span>RAM</span>&nbsp;<span>(20)</span></a></li>
                     <li class="cate-item"><a href="#"><span>Storage Drives</span>&nbsp;<span>(18)</span></a></li>
                  </ul>
               </div>
            </div>
            <div class="widget-facet">
               <div class="facet-title" data-bs-target="#sale-products" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sale-products">
                  <span>Sale Products</span>
                  <span class="icon icon-arrow-up"></span>
               </div>
               <div id="sale-products" class="collapse show">
                  <div class="widget-featured-products mb_36">
                     <div class="featured-product-item">
                        <a href="product-detail.html" class="card-product-wrapper">
                        <img class="lazyload img-product" data-src="assets/images/item/item-3.png" alt="image-feature">
                        </a>
                        <div class="card-product-info">
                           <a href="#" class="title link">Intel Core i7 Processor</a>
                           <span class="price">$320.95</span>
                        </div>
                     </div>
                     <div class="featured-product-item">
                        <a href="product-detail.html" class="card-product-wrapper">
                        <img class="lazyload img-product" data-src="assets/images/item/item-1.png" alt="image-feature">
                        </a>
                        <div class="card-product-info">
                           <a href="#" class="title link">NVIDIA RTX 3070 Graphics Card</a>
                           <span class="price">$499.95</span>
                        </div>
                     </div>
                     <div class="featured-product-item">
                        <a href="product-detail.html" class="card-product-wrapper">
                        <img class="lazyload img-product" data-src="assets/images/item/item-2.png" alt="image-feature">
                        </a>
                        <div class="card-product-info">
                           <a href="#" class="title link">Corsair 16GB DDR4 RAM</a>
                           <span class="price">$85.95</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widget-facet">
               <div class="facet-title" data-bs-target="#shipping" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shipping">
                  <span>Shipping & Delivery</span>
                  <span class="icon icon-arrow-up"></span>
               </div>
               <div id="shipping" class="collapse show">
                  <ul class="widget-iconbox-list mb_36">
                     <li class="iconbox-item">
                        <div class="box-icon w_50 round">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H15.5C16.0523 0 16.5 0.447715 16.5 1V3.5H19.7857C20.099 3.5 20.3943 3.64687 20.5833 3.89679L23.7976 8.14679C23.9289 8.32046 24 8.53225 24 8.75V13C24 13.5523 23.5523 14 23 14H20.3293C19.9174 15.1652 18.8062 16 17.5 16C16.1938 16 15.0826 15.1652 14.6707 14H8.82929C8.41745 15.1652 7.3062 16 6 16C4.69378 16 3.58255 15.1652 3.17071 14H1C0.447715 14 0 13.5523 0 13V1ZM3.17071 12C3.58255 10.8348 4.69378 10 6 10C7.3062 10 8.41745 10.8348 8.82929 12H14.5V2H2V12H3.17071ZM16.5 10.1707V5.5H19.2882L22 9.08557V12H20.3293C19.9174 10.8348 18.8062 10 17.5 10C17.1494 10 16.8128 10.0602 16.5 10.1707ZM6 12C5.44772 12 5 12.4477 5 13C5 13.5523 5.44772 14 6 14C6.55227 14 7 13.5523 7 13C7 12.4477 6.55227 12 6 12ZM17.5 12C16.9477 12 16.5 12.4477 16.5 13C16.5 13.5523 16.9477 14 17.5 14C18.0523 14 18.5 13.5523 18.5 13C18.5 12.4477 18.0523 12 17.5 12Z" fill="black"/>
                           </svg>
                        </div>
                        <div class="iconbox-content">
                           <h4 class="iconbox-title">Free Shipping</h4>
                           <p class="iconbox-desc">Free shipping on all US orders</p>
                        </div>
                     </li>
                     <li class="iconbox-item">
                        <div class="box-icon w_50 round">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                              <path d="M14.9074 23.9572C13.9179 23.9561 12.9418 23.7273 12.0548 23.2887C9.58879 22.0801 7.33175 20.4851 5.36912 18.5641C3.44812 16.6015 1.85314 14.3444 0.644541 11.8784C0.0604334 10.6753 -0.133278 9.31981 0.0904706 8.0013C0.314219 6.68278 0.94425 5.46709 1.89254 4.52406L3.43026 2.98635C3.79573 2.62231 4.29056 2.41791 4.8064 2.41791C5.32225 2.41791 5.81707 2.62231 6.18255 2.98635L8.47798 5.29292C8.80356 5.62725 8.99924 6.06673 9.02988 6.5324C9.06052 6.99806 8.92409 7.45939 8.64512 7.83349L7.53084 9.3935C8.04739 11.0793 8.9739 12.6107 10.2274 13.8506C11.4467 15.0497 12.9375 15.9366 14.5731 16.4358L16.1331 15.3215C16.5094 15.041 16.9738 14.9047 17.4421 14.9374C17.9103 14.9701 18.3512 15.1696 18.6849 15.4998L20.9803 17.7952C21.3443 18.1607 21.5487 18.6555 21.5487 19.1714C21.5487 19.6873 21.3443 20.1821 20.9803 20.5476L18.6849 22.8431C18.3512 23.1733 17.9103 23.3728 17.4421 23.4055C16.9738 23.4382 16.5094 23.3019 16.1331 23.0214L14.5731 21.9071C12.9375 22.4063 11.4467 23.2932 10.2274 24.4923C8.9739 25.7322 8.04739 27.2636 7.53084 28.9495L8.64512 30.5095C8.92409 30.8836 9.06052 31.3449 9.02988 31.8105C8.99924 32.2762 8.80356 32.7157 8.47798 33.0501L6.18255 35.3567C5.81707 35.7207 5.32225 35.9251 4.8064 35.9251C4.29056 35.9251 3.79573 35.7207 3.43026 35.3567L1.89254 33.819C0.94425 32.8759 0.314219 31.6602 0.0904706 30.3417C-0.133278 29.0232 0.0604334 27.6677 0.644541 26.4646C1.85314 24.9986 3.44812 22.7415 5.36912 20.7789C7.33175 18.8579 9.58879 17.2629 12.0548 16.0543C12.9418 15.6157 13.9179 15.386 14.9074 15.3859C15.8979 15.386 16.8735 15.6157 17.7609 16.0543C20.2275 17.2629 22.4845 18.8579 24.4359 20.7789C26.3569 22.7415 27.9519 24.9986 27.1677 26.4646C27.4825 27.6677 27.6785 29.0232 27.4547 30.3417C27.231 31.6602 26.6008 32.8759 25.6525 33.819L23.1158 35.3567C22.7503 35.7207 22.2555 35.9251 21.7397 35.9251C21.2238 35.9251 20.729 35.7207 20.3635 35.3567L18.6849 33.0501C18.3512 32.7157 17.9103 32.5162 17.4421 32.4835C16.9738 32.4508 16.5094 32.5871 16.1331 32.8676L14.5731 34.9819C12.9375 34.4827 11.4467 33.5958 10.2274 32.3967C8.9739 31.1568 8.04739 29.6254 7.53084 28.9394C8.41745 27.2032 9.52869 25.6802 10.8889 24.8784C12.5633 24.0755 14.1617 23.888 14.9074 23.9572Z" fill="black"/>
                           </svg>
                        </div>
                        <div class="iconbox-content">
                           <h4 class="iconbox-title">Premium Support</h4>
                           <p class="iconbox-desc">Get 24/7 customer support</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </aside>
         <div class="tf-shop-content">
            <div class="grid-layout wrapper-shop" data-grid="grid-3">
               <!-- card product 1 - Processor -->
               <div class="card-product">
                  <div class="card-product-wrapper">
                     <a href="product-detail.html" class="product-img">
                     <img class="lazyload img-product" data-src="assets/images/item/item-3.png" src="images/products/intel-i7.jpg" alt="Intel Core i7 Processor">
                     <img class="lazyload img-hover" data-src="assets/images/item/item-3.png" src="images/products/intel-i7-hover.jpg" alt="Intel Core i7 Processor Hover">
                     </a>
                     <div class="list-product-btn absolute-2">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                        <span class="icon icon-bag"></span>
                        <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                        <span class="icon icon-heart"></span>
                        <span class="tooltip">Add to Wishlist</span>
                        <span class="icon icon-delete"></span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
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
                     <a href="product-detail.html" class="title link">Intel Core i7 Processor</a>
                     <span class="price">$320.95</span>
                  </div>
               </div>
               <!-- card product 2 - Graphics Card -->
               <div class="card-product">
                  <div class="card-product-wrapper">
                     <a href="product-detail.html" class="product-img">
                     <img class="lazyload img-product" data-src="assets/images/item/item-1.png" src="images/products/rtx-3070.jpg" alt="NVIDIA RTX 3070 Graphics Card">
                     <img class="lazyload img-hover" data-src="assets/images/item/item-1.png" src="images/products/rtx-3070-hover.jpg" alt="NVIDIA RTX 3070 Graphics Card Hover">
                     </a>
                     <div class="list-product-btn absolute-2">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                        <span class="icon icon-bag"></span>
                        <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                        <span class="icon icon-heart"></span>
                        <span class="tooltip">Add to Wishlist</span>
                        <span class="icon icon-delete"></span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
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
                     <a href="product-detail.html" class="title link">NVIDIA RTX 3070 Graphics Card</a>
                     <span class="price">$499.95</span>
                  </div>
               </div>
               <!-- card product 3 - RAM -->
               <div class="card-product">
                  <div class="card-product-wrapper">
                     <a href="product-detail.html" class="product-img">
                     <img class="lazyload img-product" data-src="assets/images/item/item-2.png" src="images/products/corsair-16gb.jpg" alt="Corsair 16GB DDR4 RAM">
                     <img class="lazyload img-hover" data-src="assets/images/item/item-2.png" src="images/products/corsair-16gb-hover.jpg" alt="Corsair 16GB DDR4 RAM Hover">
                     </a>
                     <div class="list-product-btn absolute-2">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                        <span class="icon icon-bag"></span>
                        <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                        <span class="icon icon-heart"></span>
                        <span class="tooltip">Add to Wishlist</span>
                        <span class="icon icon-delete"></span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
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
                     <a href="product-detail.html" class="title link">Corsair 16GB DDR4 RAM</a>
                     <span class="price">$85.95</span>
                  </div>
               </div>
               <!-- card product 4 - Storage Drive -->
               <div class="card-product">
                  <div class="card-product-wrapper">
                     <a href="product-detail.html" class="product-img">
                     <img class="lazyload img-product" data-src="assets/images/item/item-2.png" src="images/products/samsung-ssd.jpg" alt="Samsung 1TB SSD">
                     <img class="lazyload img-hover" data-src="assets/images/item/item-2.png" src="images/products/samsung-ssd-hover.jpg" alt="Samsung 1TB SSD Hover">
                     </a>
                     <div class="list-product-btn absolute-2">
                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                        <span class="icon icon-bag"></span>
                        <span class="tooltip">Quick Add</span>
                        </a>
                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                        <span class="icon icon-heart"></span>
                        <span class="tooltip">Add to Wishlist</span>
                        <span class="icon icon-delete"></span>
                        </a>
                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
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
                     <a href="product-detail.html" class="title link">Samsung 1TB SSD</a>
                     <span class="price">$119.99</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="btn-sidebar-style2">
   <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvas"><i class="icon icon-sidebar-2"></i></button>
</div>

<?php
$pageContent = ob_get_clean();
include("includes/main-layout.php");
?>