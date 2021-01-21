<?php $__env->startSection('content'); ?>

<main>
        <!-- hero-area start -->
        <section class="breadcrumb-bg pt-200 pb-180" data-background="/watercolour-1325656_1920.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="page-title">
                            <p class="small-text pb-15">We are here for your care.</p>
                            <h1 class="white-color">Contact Us</h1>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                        <div class="page-breadcumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area end -->

        <!-- contact-area start -->
        <section class="contact-area pt-120 pb-90" data-background="assets/img/bg/bg-map.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-envelope"></i>
                            <h3>Mail Here</h3>
                            <!-- <p>Admin@BasicTheme.com</p> -->
                            <p><a href="mailto:info@allwellhealthcarega.com">info@allwellhealthcarega.com</a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Visit Here</h3>
                            <p>4171 Marietta St, Powder Springs, GA 30127, USA</p>
                        </div>
                    </div>
                    <div class="col-xl-4  col-lg-4 col-md-4 ">
                        <div class="contact text-center mb-30">
                            <i class="fas fa-phone"></i>
                            <h3>Call Here</h3>
                            <p>Tel: <a href="tel:+1 (678) 504-5686">+1 (678) 504-5686</a></p>
                            <p>Fax: 844-273-2473</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area end -->

        <!-- contact-form-area start -->
        <section class="contact-form-area gray-bg pt-100 pb-100">
            <div class="container">
                <div class="form-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title mb-55">
                                <p><span></span> Anything On your Mind</p>
                                <h1>You can also contact us by using the form below: </h1>
                            </div>
                        </div>
                        
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" action="/contact" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box phone-icon mb-30">
                                        <input type="text" name="phone" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="subject" placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="contact-btn text-center">
                                        <button class="btn btn-icon ml-0" type="submit"><span>+</span> get action</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response text-center"></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-area end -->

        <section class="map-area">
            <div id="contact-map" class="contact-map"></div>
        </section>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/salamisamuel/hospitalCaleb/resources/views/contact.blade.php ENDPATH**/ ?>