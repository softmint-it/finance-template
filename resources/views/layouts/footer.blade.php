<div>
    <footer class="wrapper pattern-wrapper bg-image section-frame footer-margins"
        data-image-src="{{env('BASE_URL')}}/assets/img/pattern.png">
        <div class="container pb-8 pb-md-10">
            <div class="card image-wrapper bg-full bg-image bg-overlay mt-n50p mx-md-5 rounded-xl overflow-hidden"
                data-image-src="{{env('BASE_URL')}}/assets/img/photos/easyleasingfooterbanner.jpg">
                <div class=" card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between
                text-center text-lg-start">
                    <h3 class="display-2 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">
                        Discover the Perfect Leasing Solution for Your Dream Vehicle</h3>
                    <span id="findbestdeals" class="btn btn-lg btn-white rounded-xl mb-0 text-nowrap">Find Best
                        Leasing Deal</span>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="text-inverse mx-md-5 mt-n15 mt-lg-0">
                <div class="row gy-6 gy-lg-0">
                    <div class="col-lg-4">
                        <div class="widget">
                            <a href="{{route('home')}}">
                                <img src="{{env('BASE_URL')}}/assets/img/EASYlogo.png"
                                    style="width:300px; max-width:80%;"
                                    srcset="{{env('BASE_URL')}}/assets/img/EASYlogo.png 2x" alt="" />
                            </a>
                            <a href="tel:{{env('COMPANY_PHONE')}}" class="link-dark fs-22 fs-md-22 fs-lg-32"
                                style="padding-left: 20px;">
                                <i class="uil uil-phone-volume me-2 "></i>{{env('COMPANY_PHONE')}}
                            </a>
                            <br>
                            <!-- div class="mt-2">
                                <a href="{{env('COMPANY_PLAYSTORE_LINK')}}" class="link-dark fs-22 fs-md-22 fs-lg-32">
                                    <img src="{{env('BASE_URL')}}/assets/img/play-store.png" alt="Google Play Store"
                                        width="150" class="download-img">
                                </a>

                                <a href="{{env('COMPANY_APPSTORE_LINK')}}" class="link-dark fs-22 fs-md-22 fs-lg-32">
                                    <img src="{{env('BASE_URL')}}/assets/img/app-store.png" alt="App Store" width="150"
                                        class="download-img">
                                </a>
                            </div -->

                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-2 offset-lg-2">
                        <div class="widget">
                            <h4 class="widget-title text-white mb-3">Explore More</h4>
                            <ul class="list-unstyled text-reset mb-0">
                                <li><a href="{{route('home')}}">Leasing</a></li>
                                <li><a href="{{route('vehicle-insurance')}}">Insurance</a></li>
                                <li><a href="{{route('vehicle-import')}}">Vehicle Import</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-2">
                        <div class="widget">
                            <div class="mb-3 d-none d-sm-none d-md-block" style="height:30px"></div>
                            <ul class="list-unstyled text-reset mb-0">
                                <li><a href="{{route('about-us')}}">About Us</a></li>
                                <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                            <a href="mailto:first.last@email.com">{{env('COMPANY_EMAIL')}}</a><br> <a
                                href="tel:{{env('COMPANY_PHONE')}}">{{env('COMPANY_PHONE')}}</a>
                            <nav class="nav social social-white">
                                <a href="{{getenv('FACEBOOK_LINK')}}"><i class="uil uil-facebook-f"></i></a>
                                <a href="{{getenv('INSTAGRAM_LINK')}}"><i class="uil uil-instagram"></i></a>
                                <a href="{{getenv('YOUTUBE_LINK')}}"><i class="uil uil-youtube"></i></a>
                            </nav>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
            </div>
        </div>
        <div class="d-flex justify-content-center w-100 align-items-center gap-2 mb-2">
            <a href="{{route('privacy')}}" class="text-white fs-12">Privacy Policy</a>
            <a href="{{route('terms')}}" class="text-white fs-12">Terms & Conditions</a>
        </div>
        <p class="justify-content-center w-100 px-4 py-2 align-items-center text-center fs-12">

            <span class=" text-white mb-1">© <script>
                document.write(new Date().getUTCFullYear());
                </script> {{env('COMPANY_NAME')}} All rights reserved. &nbsp;</span>
            <a href="{{getenv('DESIGNER_URL')}}" class=" text-white mb-1" target="_blank"><span> Powered By </span><img
                    src="{{env('BASE_URL')}}/assets/img/brands/softmint_logo.png" alt="Logo"
                    width="25"><span>{{getenv('DESIGNER_NAME')}}</span></a>

        </p>
        <!-- /.container -->
    </footer>
</div>
<script>
document.addEventListener('click', function(event) {
    if (event.target && event.target.id === 'findbestdeals') {
        const applyNowModal = new bootstrap.Modal(document.getElementById('applyNowModal'));

        const vehicleTypeSelect = document.getElementById('modelvehicleType');
        vehicleTypeSelect.removeAttribute('readonly');
        vehicleTypeSelect.style.cursor = '';
        document.getElementById('modelleasingrate').value = 0;
        document.getElementById('modelleasingperiod').value = 0;
        document.getElementById('modelleasingamount').value = 0;
        document.getElementById('modelinstallment').value = 0;
        document.getElementById('modelleasingcompany').value = 'Select Leasing/Bank';
        vehicleTypeSelect.value = 'Select Facility type & Period';
        applyNowModal.show();
    }
});
</script>