<?php
$pageTitle = "Home Page";
ob_start();
?>

<!-- page-title -->
<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Check Out</div>
    </div>
</div>
<!-- /page-title -->

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="tf-page-cart-wrap layout-2">
            <div class="tf-page-cart-item">
                <h5 class="fw-5 mb_20">Billing details</h5>
                <form class="form-checkout">
                    <div class="box grid-2">
                        <fieldset class="fieldset">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" placeholder="Themesflat">
                        </fieldset>
                        <fieldset class="fieldset">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name">
                        </fieldset>
                    </div>
                    <fieldset class="box fieldset">
                        <label for="country">Country/Region</label>
                        <div class="select-custom">
                            <select class="tf-select w-100" id="country" name="address[country]" data-default="">
                                <option value="---" data-provinces="[]">---</option>
                                <option value="Australia"
                                    data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]">
                                    Australia</option>
                                <option value="Austria" data-provinces="[]">Austria</option>
                                <option value="Belgium" data-provinces="[]">Belgium</option>
                                <option value="Canada"
                                    data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]">
                                    Canada</option>
                                <option value="Czech Republic" data-provinces="[]">Czechia</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="city">Town/City</label>
                        <input type="text" id="city">
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="address">Address</label>
                        <input type="text" id="address">
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="phone">Phone Number</label>
                        <input type="number" id="phone">
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="email">Email</label>
                        <input type="email" id="email">
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="note">Order notes (optional)</label>
                        <textarea name="note" id="note"></textarea>
                    </fieldset>
                </form>
            </div>
            <div class="tf-page-cart-footer">
                <div class="tf-cart-footer-inner">
                    <h5 class="fw-5 mb_20">Your order</h5>
                    <form class="tf-page-cart-checkout widget-wrap-checkout">
                        <ul class="wrap-checkout-product">
                            <li class="checkout-product-item">
                                <figure class="img-product">
                                    <img src="assets/images/item/item-1.png" alt="product">
                                    <span class="quantity">1</span>
                                </figure>
                                <div class="content">
                                    <div class="info">
                                        <p class="name">RTX 4060</p>
                                        <span class="variant">Mini /</span>
                                    </div>
                                    <span class="price">$25.00</span>
                                </div>
                            </li>
                            <li class="checkout-product-item">
                                <figure class="img-product">
                                    <img src="assets/images/item/item-4.png" alt="product">
                                    <span class="quantity">1</span>
                                </figure>
                                <div class="content">
                                    <div class="info">
                                        <p class="name">i5 CPU</p>
                                    </div>
                                    <span class="price">$35.00</span>
                                </div>
                            </li>
                            <li class="checkout-product-item">
                                <figure class="img-product">
                                    <img src="assets/images/item/item-3.png" alt="product">
                                    <span class="quantity">1</span>
                                </figure>
                                <div class="content">
                                    <div class="info">
                                        <p class="name">Cooling Fan</p>
                                        <span class="variant">Red</span>
                                    </div>
                                    <span class="price">$8.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="coupon-box">
                            <input type="text" placeholder="Discount code">
                            <a href="#" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Apply</a>
                        </div>
                        <div class="d-flex justify-content-between line pb_20">
                            <h6 class="fw-5">Total</h6>
                            <h6 class="total fw-5">$122.00</h6>
                        </div>
                        <div class="wd-check-payment">
                            <div class="fieldset-radio mb_20">
                                <input type="radio" name="payment" id="bank" class="tf-check" checked>
                                <label for="bank">Direct bank transfer</label>

                            </div>
                            <div class="fieldset-radio mb_20">
                                <input type="radio" name="payment" id="delivery" class="tf-check">
                                <label for="delivery">Cash on delivery</label>
                            </div>
                            <p class="text_black-2 mb_20">Your personal data will be used to process your order, support
                                your experience throughout this website, and for other purposes described in our <a
                                    href="privacy-policy.html" class="text-decoration-underline">privacy policy</a>.</p>
                            <div class="box-checkbox fieldset-radio mb_20">
                                <input type="checkbox" id="check-agree" class="tf-check">
                                <label for="check-agree" class="text_black-2">I have read and agree to the website <a
                                        href="terms-conditions.html" class="text-decoration-underline">terms and
                                        conditions</a>.</label>
                            </div>
                        </div>
                        <a href="paymentConfirmation.php"
                            class="tf-btn radius-3 btn-fill btn-icon animate-hover-btn justify-content-center">Place
                            Order</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

<?php
$pageContent = ob_get_clean();
include("includes/main-layout.php");
?>