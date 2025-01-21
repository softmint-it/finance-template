<footer class="bg-gray">
    <div class="container py-13 py-md-15">
        <!--/div -->
        <!-- <hr class="mt-5" /> -->
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x"
                        alt="" />
                    <br>
                    <!-- large phone icon with number -->
                    <a href="tel:{{env('COMPANY_PHONE')}}" class="link-dark fs-22 fs-md-22 fs-lg-32">
                        <i class="uil uil-phone-volume me-2 "></i>{{env('COMPANY_PHONE')}}
                    </a>

                    <nav class="nav social social-muted">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title ls-sm mb-3">Get in Touch</h4>
                    <address class="pe-xl-15 pe-xxl-17">{{env('COMPANY_ADDRESS')}}</address>
                    <a href="mailto:#" class="link-body">{{env('COMPANY_EMAIL')}}</a><br /> {{env('COMPANY_PHONE')}}
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title ls-sm mb-3">Learn More</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="{{route('home')}}">Leasing</a></li>
                        <li><a href="{{route('home')}}">Insurace</a></li>
                        <li><a href="{{route('vehicle-import')}}">Vehicle Import</a></li>
                        <li><a href="{{route('about-us')}}">About Us</a></li>
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title ls-sm mb-3">Download</h4>
                    <p class="mb-5">Download {{env('COMPANY_NAME')}} mobile app.</p>

                    <div class="d-xl-flex d-block">
                        <div>
                            <a href="{{getenv('PLAYSTORE_LINK')}}" class="btn btn-primary btn-sm custom-btn"><i
                                    class="uil uil-google-play me-2"></i>Google
                                Play</a>
                        </div>
                        <div class="ms-xl-3 mt-3 mt-xl-0">
                            <a href="{{getenv('APPSTORE_LINK')}}" class="btn btn-primary btn-sm me-2 custom-btn"><i
                                    class="uil uil-apple me-2"></i>App
                                Store</a>
                        </div>
                    </div>
                    <div class="newsletter-wrapper" style="display: none;">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form
                                action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                class="validate " target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="EMAIL" class="required email form-control"
                                            placeholder="Email Address" id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Email Address</label>
                                        <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2"
                                            class="btn btn-primary ">
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none"></div>
                                        <div class="response" id="mce-success-response2" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                            type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1"
                                            value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <div class="col-md-6 text-center text-md-center">
                    <p class="mb-0">© {{
                        date('Y')
                    }} {{env('APP_NAME')}}. All Rights Reserved</p>
                </div>
                <!--/column -->
            </div>
            <!--/row -->
        </div>
        <!--/container -->
    </div>
    <!-- /.footer-bar -->


</footer>