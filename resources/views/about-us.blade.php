@extends('layouts.main')

@section('title', 'About Us')


@section('content')
<section class="wrapper bg-gray">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-4">Hello! This is {{env('COMPANY_NAME')}}</h1>
                <p class="lead fs-lg mb-0">A company provides best leasing options</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="./assets/img/photos/bg12.jpg"
            alt="" /></figure>
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                    style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">
                        <figure class="rounded shadow"><img src="./assets/img/photos/about2.jpg"
                                srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="./assets/img/photos/about3.jpg"
                                srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="./assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                    alt="Who Are We Icon" />
                <h2 class="display-4 mb-3">Who Are We?</h2>
                <p class="lead fs-lg">We are a trusted leasing and financial solutions provider committed to helping
                    individuals and businesses achieve their goals effortlessly.</p>
                <p class="mb-6">With years of expertise, we specialize in delivering tailored leasing options that meet
                    diverse needs. Our team is driven by innovation, transparency, and a dedication to customer
                    satisfaction, ensuring a seamless and hassle-free experience.</p>
                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Flexible leasing plans designed to suit
                                    your budget.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Trusted by hundreds of
                                    satisfied customers.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Fast approval process with minimal
                                    paperwork.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Dedicated support to guide
                                    you every step of the way.</span></li>
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
                <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
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
                                <h4 class="mb-1">Compare Leasing Rates</h4>
                                <p class="mb-0">Analyze and compare leasing rates from various providers to find the
                                    most competitive offers.</p>
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
                                <h4 class="mb-1">Choose the Best Company</h4>
                                <p class="mb-0">Select the company that aligns with your needs, offering the best terms
                                    and services.</p>
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
                                <h4 class="mb-1">Apply for Leasing</h4>
                                <p class="mb-0">Complete the application process and start your leasing journey
                                    effortlessly.</p>
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
<section class="wrapper bg-soft-primary">
    <div class="container py-14 py-md-16">
        <div class="row mb-10">
            <div class="col-xl-10 mx-auto">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/check.svg"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">7518</h3>
                        <p>Completed Projects</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/user.svg"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">3472</h3>
                        <p>Satisfied Customers</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/briefcase-2.svg"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">2184</h3>
                        <p>Expert Employees</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/award-2.svg"
                            class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter">4523</h3>
                        <p>Awards Won</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1"
                    style="top: -2rem; left: -1.4rem;"></div>
                <figure class="rounded"><img src="./assets/img/photos/about4.jpg"
                        srcset="./assets/img/photos/about4@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="./assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4"
                    alt="" />
                <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
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
    <!-- /.container -->
</section>
@endsection