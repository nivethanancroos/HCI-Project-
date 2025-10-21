<?php
$pageTitle = "Home Page";
ob_start();
?>

<!-- page-title -->
<div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Contact Us</div>
    </div>
</div>
<!-- /page-title -->

<!-- form and contact details -->
<section class="flat-spacing-21">
    <div class="container">
        <div class="tf-grid-layout gap30 lg-col-2 contact-box">
            <div class="tf-content-left contact-details-box p-4 border rounded shadow">
                <h5 class="mb_20">Visit Our Store</h5>
                <div class="mb_20">
                    <p class="mb_15"><strong>Address</strong></p>
                    <p>1234 Main Street, Suite 567,
                    Colombo 05, Sri Lanka</p>
                </div>
                <div class="mb_20">
                    <p class="mb_15"><strong>Phone</strong></p>
                    <p>(059) 555-1234</p>
                </div>
                <div class="mb_20">
                    <p class="mb_15"><strong>Email</strong></p>
                    <p>PCmart@gmail.com</p>
                </div>
                <div>
                    <ul class="tf-social-icon d-flex gap-20 style-default">
                        <li><a href="#" class="box-icon link round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                        <li><a href="#" class="box-icon link round social-twitter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                        <li><a href="#" class="box-icon link round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                        <li><a href="#" class="box-icon link round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                        <li><a href="#" class="box-icon link round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="tf-content-right contact-form-box p-4 border rounded shadow">
                <h5 class="mb_20">Get in Touch</h5>
                <p class="mb_24">If you’ve got great products you’re making or looking to work with us, then drop us a line.</p>
                <div>
                    <form class="form-contact" id="contactform" action="https://themesflat.co/html/ecomus/contact/contact-process.php" method="post">
                        <div class="d-flex gap-15 mb_15">
                            <fieldset class="w-100">
                                <input type="text" name="name" id="name" required placeholder="Name *" />
                            </fieldset>
                            <fieldset class="w-100">
                                <input type="email" name="email" id="email" required placeholder="Email *" />
                            </fieldset>
                        </div>
                        <div class="mb_15">
                            <textarea placeholder="Message" name="message" id="message" required cols="30" rows="5"></textarea>
                        </div>
                        <div class="send-wrap">
                            <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center bg-danger">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /form and contact details -->


<?php
$pageContent = ob_get_clean();
include("includes/main-layout.php");
?>
