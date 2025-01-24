@extends('layouts.main')

@section('title', 'About Us')


@section('content')
<section class="wrapper bg-white mt-10 ">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-4">Hello! This is {{env('COMPANY_NAME')}}</h1>
                <p class="lead fs-lg mb-0">A company provides best leasing consultation</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{env('BASE_URL')}}/assets/img/photos/bg12.jpg"
            alt="" /></figure> -->
</section>
<!-- /section -->
<section class="wrapper bg-light  upper-end lower-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                    style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">


                        <figure class="rounded shadow d-none d-md-block"><img
                                src="{{env('BASE_URL')}}/assets/img/rover-aboutus.jpg "
                                srcset="{{env('BASE_URL')}}/assets/img/rover-aboutus.jpg  2x" alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="{{env('BASE_URL')}}/assets/img/bmw-aboutus.jpg"
                                srcset="{{env('BASE_URL')}}/assets/img/bmw-aboutus.jpg 2x" alt=""></figure>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="{{env('BASE_URL')}}/assets/img/icons/lineal/megaphone.svg"
                    class="svg-inject icon-svg icon-svg-md mb-4" alt="Who Are We Icon" />
                <h2 class="display-4 mb-3">About Us</h2>
                <p class="lead fs-lg">We are a leading vehicle leasing consultation platform, simplifying your journey
                    to finding the best leasing options by bringing together rates from multiple providers in one place.
                </p>
                <p class="mb-6">Our mission is to empower individuals and businesses by providing a transparent and
                    hassle-free way to compare and select vehicle leasing solutions that suit their needs. With a focus
                    on customer satisfaction and innovation, we make it easy for you to drive away with confidence.</p>

                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Compare rates from trusted leasing
                                    providers in one place.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Save time and money with
                                    our tailored recommendations.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Quick and easy comparison with minimal
                                    effort.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Expert support to guide you
                                    through the decision-making process.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>


            <!--/column -->
        </div>
        <!--/.row -->
        <div class="row mb-5">
            <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                <img src="{{env('BASE_URL')}}/assets/img/icons/lineal/list.svg"
                    class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-4 px-lg-14">Follow these 3 simple steps to get started with leasing.</h2>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="card me-lg-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                        class="number">01</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Tell Us Your Needs</h4>
                                <p class="mb-0">Share your requirements, and we’ll handle the rest.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card ms-lg-13 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                        class="number">02</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Compare & Select</h4>
                                <p class="mb-0">Review and choose the best leasing facility tailored to your needs.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card mx-lg-6 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                        class="number">03</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">
                                    Drive Your Dream Car</h4>
                                <p class="mb-0">Turn your dream into reality with the perfect leasing solution!</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-6 mb-3">How It Works?</h2>
                <p class="lead fs-lg pe-lg-5">Discover the simple steps to find the best leasing options and get started
                    with ease.</p>
                <p>We simplify the leasing process to help you compare rates, choose the right provider, and apply with
                    confidence. Follow these three straightforward steps to make the best decision for your needs.</p>
                <p class="mb-6">Our process is designed to save you time and effort, ensuring a seamless experience from
                    start to finish. Let us guide you toward finding the perfect leasing solution.</p>
                <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1"
                    style="top: -2rem; left: -1.4rem;"></div>
                <figure class="rounded d-none d-md-block"><img src="{{env('BASE_URL')}}/assets/img/key-aboutus.jpg"
                        srcset="{{env('BASE_URL')}}/assets/img/key-aboutus.jpg 2x" alt="">
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="{{env('BASE_URL')}}/assets/img/icons/lineal/telemarketer.svg"
                    class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-8">Ready to assist with your leasing needs. Let's find the perfect solution
                    together!</h2>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Address</h5>
                        <address>{{env('COMPANY_ADDRESS')}}
                        </address>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Phone</h5>
                        <p>{{env('COMPANY_PHONE')}}</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:sandbox@email.com"
                                class="link-body">{{env('COMPANY_EMAIL')}}</a></p>

                    </div>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.
container -->
</section>
@endsection