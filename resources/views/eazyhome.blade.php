@extends('layouts.main')

@section('title', 'Eazy Home')

@section('content')
<style>
.calculator-block {
    width: 100%;
    top: 90%;
}

.cursor-pointer {
    cursor: pointer;
}

@keyframes scroll {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(calc(-180px * 4));
    }
}

.slider {
    height: 50px;
    margin: 0px;
    overflow: hidden;
    position: relative;
    width: 60%;
}

.slider::before,
.slider::after {
    background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    content: "";
    height: 50px;
    position: absolute;
    width: 150px;
    z-index: 2;
}

.slider::after {
    right: 0;
    top: 0;
    transform: rotateZ(180deg);
}

.slider::before {
    left: 0;
    top: 0;
}

.slider .slide-track {
    display: flex;
    animation: scroll 10s linear infinite;
    width: calc(180px * 20);
}

.slider .slide {
    height: 50px;
    width: 180px;
}

@media screen and (max-width: 1399px) {
    .slider {
        width: 50%;
    }
}

@media screen and (max-width: 991.5px) {
    .slider {
        width: 100%;
        margin-top: 25px;
    }
}
</style>
<section class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray position-relative"
    data-image-src="./assets/img/photos/bg37.jpg">
    <div class="container pt-17   position-relative">
        <div class="row">
            <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title"
                data-interval="-200" data-delay="500">
                <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">We bring leasing solutions to make
                    life
                    <span class="underline-3 style-3 yellow">easier</span>
                </h2>
                <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">We are a creative company that focuses on
                    long term relationships with customers.</p>
                <div><a href="#" class="btn btn-lg btn-primary rounded">Read More</a></div>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
        <div class="pb-10 mt-10 calculator-block">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-lg-flex d-block justify-content-between">
                                <div class="d-flex justify-lg-content-between gap-3">
                                    <h6 id="leasingCalculatorTitle" class="cursor-pointer">Leasing Calculator</h6>
                                    <h6 id="standardCalculatorTitle" class="cursor-pointer">Standard Calculator</h6>
                                </div>
                                <div class="slider">
                                    <div class="slide-track">
                                        @foreach ($banks as $bank)
                                        <div class="slide">
                                            <img src="{{env('BASE_URL')}}{{ $bank->logo }}" height="50" width="150"
                                                alt="" />
                                        </div>
                                        @endforeach
                                        @foreach ($banks as $bank)
                                        <div class="slide">
                                            <img src="{{env('BASE_URL')}}{{ $bank->logo }}" height="50" width="150"
                                                alt="" />
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body" id="leasingcalculator">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <lable for="leasingcompany">Leasing Company</lable>
                                    <select id="leasingcompany" class="form-select" aria-label="Default select example">
                                        <option selected>Select Leasing Company</option>
                                        @foreach ($banks as $bank)
                                        <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="vehicleType">Vehicle Type</label>
                                    <select id="vehicleType" class="form-select" aria-label="Default select example">
                                        <option selected>Select Vehicle Type</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="leasingperiod">Leasing Period</label>
                                    <input type="number" class="form-control" id="leasingperiod"
                                        placeholder="Leasing Period" readonly style="cursor: not-allowed;">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form-group">
                                    <label for="leasingrate">Rate</label><span class="pl-2 pb-2 text-danger"
                                        id="bankratespan" style="font-size:10px;"></span>
                                    <input type="number" step="0.1" class="form-control" id="leasingrate"
                                        placeholder="Rate">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form">
                                    <label for=" leasingamount">Leasing Amount</label>
                                    <input type="number" class="form-control" id="leasingamount"
                                        placeholder="Leasing Amount">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form">
                                    <label for=" installment">Installment</label>
                                    <input type="number" class="form-control" id="installment" value="0" readonly
                                        style="cursor: not-allowed;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="">
                                    <button id="requestqt" class="btn btn-primary mt-2">Request a Quotation</button>
                                </div>
                            </div>
                        </div>

                        <div id="standardcalculator">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 form-group">
                                        <label for="loanamount">Loan Amount</label>
                                        <input type="number" class="form-control" id="sloanamount"
                                            placeholder="Loan Amount">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 form-group">
                                        <label for="loanrate">Rate</label>
                                        <input type="number" step="0.1" class="form-control" id="sloanrate"
                                            placeholder="Rate">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 form-group">
                                        <label for="loanperiod">Loan Period</label>
                                        <input type="number" class="form-control" id="sloanperiod"
                                            placeholder="Loan Period">
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 form">
                                        <label for=" installment">Installment</label>
                                        <input type="number" class="form-control" id="sinstallment" value="0" readonly
                                            style="cursor: not-allowed;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-15 py-md-17">
        <div class="row text-center">
            <div class="col-md-10 col-lg-9 col-xxl-8 mx-auto">
                <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
                <h3 class="display-3 ls-sm mb-9 px-xl-11">The service we offer is specifically designed to meet your
                    needs.</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="./assets/img/icons/lineal/telephone-3.svg"
                            class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="24/7 Support" />
                    </div>
                    <div>
                        <h4 class="fs-20 ls-sm">24/7 Customer Support</h4>
                        <p class="mb-0">Our dedicated support team is available round-the-clock to assist both customers
                            and leasing companies with their queries and needs.</p>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="./assets/img/icons/lineal/shield.svg"
                            class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1" alt="Secure Platform" />
                    </div>
                    <div>
                        <h4 class="fs-20 ls-sm">Secure Platform</h4>
                        <p class="mb-0">We ensure a safe and secure environment for all transactions and interactions on
                            our platform, giving you peace of mind.</p>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="./assets/img/icons/lineal/cloud-computing-2.svg"
                            class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="Real-Time Updates" />
                    </div>
                    <div>
                        <h4 class="fs-20 ls-sm">Real-Time Updates</h4>
                        <p class="mb-0">Stay informed with real-time updates about leasing options, application status,
                            and platform features.</p>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="./assets/img/icons/lineal/analytics.svg"
                            class="svg-inject icon-svg icon-svg-md text-pink me-5" alt="Analytics & Insights" />
                    </div>
                    <div>
                        <h4 class="fs-20 ls-sm">Analytics & Insights</h4>
                        <p class="mb-0">Access detailed insights to help you make informed decisions when choosing the
                            right leasing options or market opportunities.</p>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="./assets/img/icons/lineal/chat-2.svg"
                            class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1"
                            alt="Effortless Communication" />
                    </div>
                    <div>
                        <h4 class="fs-20 ls-sm">Effortless Communication</h4>
                        <p class="mb-0">Our platform bridges the gap between leasing companies and customers, offering
                            seamless communication channels.</p>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="./assets/img/icons/lineal/megaphone.svg"
                            class="svg-inject icon-svg icon-svg-md text-purple me-5 mt-1" alt="Exclusive Promotions" />
                    </div>
                    <div>
                        <h4 class="fs-20 ls-sm">Exclusive Promotions</h4>
                        <p class="mb-0">Discover exclusive deals and offers from top leasing companies, all in one
                            convenient platform.</p>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>

        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
    <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100"
        data-image-src="./assets/img/photos/bg38.jpg">
        <div class="divider text-gray divider-v-end d-none d-lg-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
                <g />
                <g>
                    <g>
                        <polygon fill="currentColor" points="48 0 0 0 48 1200 54 1200 54 0 48 0" />
                    </g>
                </g>
            </svg>
        </div>
    </div>
    <!--/column -->
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-6 ms-auto">
                <div class="pt-13 pb-15 pb-md-17 py-lg-16 ps-lg-15 pe-xxl-16">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">How It Works?</h2>
                    <h3 class="display-3 ls-sm mb-7">Follow these 3 simple steps to get started with leasing.</h3>

                    <!-- Step 1 -->
                    <div class="d-flex flex-row mb-5">
                        <div>
                            <img src="./assets/img/icons/lineal/compare-icon.png"
                                class="svg-inject icon-svg icon-svg-md text-blue me-5 mt-1" alt="Compare Rates Icon" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Compare Leasing Rates</h4>
                            <p class="mb-0">Analyze and compare leasing rates from various providers to find the most
                                competitive offers.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="d-flex flex-row mb-5">
                        <div>
                            <img src="./assets/img/icons/lineal/handshake.svg"
                                class="svg-inject icon-svg icon-svg-md text-green me-5 mt-1"
                                alt="Choose Best Company Icon" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Choose the Best Company</h4>
                            <p class="mb-0">Select the company that aligns with your needs, offering the best terms and
                                services.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/application-icon.png"
                                class="svg-inject icon-svg icon-svg-md text-yellow me-5 mt-1"
                                alt="Apply for Leasing Icon" />
                        </div>
                        <div>
                            <h4 class="fs-20 ls-sm">Apply for Leasing</h4>
                            <p class="mb-0">Complete the application process and start your leasing journey
                                effortlessly.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-white">
    <div class="container py-15 py-md-17">
        <div class="row text-center">
            <div class="col-lg-10 col-xl-7 col-xxl-6 mx-auto">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Case Studies</h2>
                <h3 class="display-3 ls-sm mb-10">Our awesome projects with creative ideas and great design.</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3"
            data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                        src="./assets/img/photos/b4.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark" href="./blog-post.html">Ligula
                                        tristique quis risus</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr
                                            2022</span></li>
                                    <li class="post-comments"><a href="#"><i
                                                class="uil uil-file-alt fs-15"></i>Coding</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                        src="./assets/img/photos/b5.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark" href="./blog-post.html">Nullam
                                        id dolor elit id nibh</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar
                                            2022</span></li>
                                    <li class="post-comments"><a href="#"><i
                                                class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                        src="./assets/img/photos/b6.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark"
                                        href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb
                                            2022</span></li>
                                    <li class="post-comments"><a href="#"><i
                                                class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img
                                        src="./assets/img/photos/b7.jpg" alt="" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <h2 class="post-title h3 ls-sm mb-3"><a class="link-dark" href="./blog-post.html">Morbi
                                        leo risus porta eget</a></h2>
                            </div>
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan
                                            2022</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Business
                                            Tips</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const leasingCalculatorTitle = document.getElementById('leasingCalculatorTitle');
    const standardCalculatorTitle = document.getElementById('standardCalculatorTitle');
    const leasingCalculator = document.getElementById('leasingcalculator');
    const standardCalculator = document.getElementById('standardcalculator');

    // Show Leasing Calculator and hide Standard Calculator on load
    leasingCalculator.style.display = 'block';
    standardCalculator.style.display = 'none';
    leasingCalculatorTitle.style.borderBottom = '2px solid blue';
    standardCalculatorTitle.style.borderBottom = 'none';

    // Event listener for Leasing Calculator title
    leasingCalculatorTitle.addEventListener('click', () => {
        leasingCalculator.style.display = 'block';
        standardCalculator.style.display = 'none';
        leasingCalculatorTitle.style.borderBottom = '2px solid blue';
        standardCalculatorTitle.style.borderBottom = 'none';
    });

    // Event listener for Standard Calculator title
    standardCalculatorTitle.addEventListener('click', () => {
        leasingCalculator.style.display = 'none';
        standardCalculator.style.display = 'block';
        standardCalculatorTitle.style.borderBottom = '2px solid blue';
        leasingCalculatorTitle.style.borderBottom = 'none';

    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const leasingCompany = document.getElementById('leasingcompany');
    const vehicleTypeSelect = document.getElementById('vehicleType');
    const leasingPeriodInput = document.getElementById('leasingperiod');
    const leasingRateInput = document.getElementById('leasingrate');
    const bankratesspan = document.getElementById('bankratespan');
    const leasingAmountInput = document.getElementById('leasingamount');
    const installmentInput = document.getElementById('installment');

    document.getElementById('leasingrate').value = 0;
    document.getElementById('leasingperiod').value = 0;
    document.getElementById('leasingamount').value = 0;
    document.getElementById('installment').value = 0;
    document.getElementById('leasingcompany').value = 'Select Leasing Company';


    let bankRates = [];

    function calculateInstallment() {
        const leasingAmount = parseFloat(leasingAmountInput.value) || 0;
        const leasingRate = parseFloat(leasingRateInput.value) || 0;
        const leasingPeriod = parseInt(leasingPeriodInput.value) || 0;

        if (leasingAmount && leasingRate && leasingPeriod) {
            const installment = (leasingAmount * leasingRate * leasingPeriod) / (100 * 12);
            installmentInput.value = installment.toFixed(2);
        } else {
            installmentInput.value = '0';
        }
    }

    if (leasingCompany && vehicleTypeSelect && leasingPeriodInput && leasingRateInput) {
        leasingCompany.addEventListener('change', function() {
            const bankId = this.value;

            vehicleTypeSelect.innerHTML = '<option selected>Select Vehicle Type</option>';
            leasingPeriodInput.value = '';
            leasingRateInput.value = '';

            if (bankId) {
                fetch(`/get-bank-rates/${bankId}`)
                    .then(response => response.json())
                    .then(data => {
                        bankRates = data;
                        if (data.length > 0) {
                            data.forEach(rate => {
                                const option = document.createElement('option');
                                option.value = rate.vehicle_type;
                                option.textContent =
                                    `${rate.vehicle_type.charAt(0).toUpperCase() + rate.vehicle_type.slice(1)} (${rate.year} Years)`;
                                vehicleTypeSelect.appendChild(option);
                            });
                        } else {
                            const option = document.createElement('option');
                            option.textContent = 'No Vehicle Types Available';
                            vehicleTypeSelect.appendChild(option);
                        }
                    })
                    .catch(error => console.error('Error fetching vehicle types:', error));
            }
        });
        vehicleTypeSelect.addEventListener('change', function() {
            const selectedVehicleType = this.value;

            if (selectedVehicleType && bankRates.length > 0) {
                const selectedRate = bankRates.find(rate => rate.vehicle_type === selectedVehicleType);
                if (selectedRate) {
                    leasingPeriodInput.value = selectedRate.year;
                    leasingRateInput.value = selectedRate
                        .min_rate;
                    leasingRateInput.setAttribute('min', selectedRate.min_rate);
                    leasingRateInput.setAttribute('max', selectedRate.max_rate);
                    bankratesspan.textContent =
                        `*(Min Rate: ${selectedRate.min_rate} - Max Rate: ${selectedRate.max_rate})`;
                } else {
                    leasingPeriodInput.value = '';
                    leasingRateInput.value = '';
                }
            } else {
                leasingPeriodInput.value = '';
                leasingRateInput.value = '';
            }
        });

        leasingAmountInput.addEventListener('input', calculateInstallment);
        leasingRateInput.addEventListener('input', calculateInstallment);
        leasingPeriodInput.addEventListener('input', calculateInstallment);
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sloanamount = document.getElementById('sloanamount');
    const sloanrate = document.getElementById('sloanrate');
    const sloanperiod = document.getElementById('sloanperiod');
    const sinstallment = document.getElementById('sinstallment');

    document.getElementById('sloanrate').value = 0;
    document.getElementById('sloanperiod').value = 0;
    document.getElementById('sloanamount').value = 0;
    document.getElementById('sinstallment').value = 0;

    function calculateStandardInstallment() {
        const loanAmount = parseFloat(sloanamount.value) || 0;
        const loanRate = parseFloat(sloanrate.value) || 0;
        const loanPeriod = parseInt(sloanperiod.value) || 0;

        if (loanAmount && loanRate && loanPeriod) {
            const installment = (loanAmount * loanRate * loanPeriod) / (100 * 12);
            sinstallment.value = installment.toFixed(2);
        } else {
            sinstallment.value = '0';
        }
    }

    sloanamount.addEventListener('input', calculateStandardInstallment);
    sloanrate.addEventListener('input', calculateStandardInstallment);
    sloanperiod.addEventListener('input', calculateStandardInstallment);
});
</script>



@endsection