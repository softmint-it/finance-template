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

.showplan-btn {
    cursor: pointer;
    display: inline-block;
    transition: transform 0.6s ease, color 0.3s ease;
}

.showplan-btn:hover {
    color: blue;
    transform: rotate(360deg);
}

.table-fonts {
    font-size: 0.7rem;
}

.table-fonts-modal {
    font-size: 0.7rem;
}

.dataTables_filter {
    display: none;
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

    .table-fonts-modal {
        font-size: 0.6rem;
    }

    .table-fonts {
        font-size: 0.7rem;
    }
}

@media screen and (max-width:768px) {

    .table-fonts,
    .table-fonts-modal {
        font-size: 0.6rem;
    }
}

@media screen and (max-width:480px) {

    .table-fonts,
    .table-fonts-modal {
        font-size: 0.5rem;
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
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <lable for="leasingcompany">Leasing Company</lable>
                                    <select id="leasingcompany" class="form-select" aria-label="Default select example">
                                        <option selected>Select Leasing Company</option>
                                        @foreach ($banks as $bank)
                                        <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <label for="vehicleType">Facility Type</label>
                                    <select id="vehicleType" class="form-select" aria-label="Default select example">
                                        <option selected>Select Facility Type</option>
                                    </select>
                                </div>
                                <input type="hidden" id="selectedrateid">

                                <div class="col-lg-4 col-md-6 col-12 form-group d-none">
                                    <label for="leasingperiod">Leasing Period</label>
                                    <input type="text" class="form-control" id="leasingperiod"
                                        placeholder="Leasing Period" readonly style="cursor: not-allowed;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <label for="leasingrate">Rate</label><span class="pl-2 pb-2 text-danger"
                                        id="bankratespan" style="font-size:10px;"></span>
                                    <input type="number" step="0.1" class="form-control" id="leasingrate"
                                        placeholder="Rate">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form">
                                    <label for=" leasingamount">Leasing Amount</label>
                                    <input type="number" class="form-control" id="leasingamount"
                                        placeholder="Leasing Amount">
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 form d-none">
                                    <label for=" installment">Installment</label>
                                    <input type="text" class="form-control" id="installment" value="0" readonly
                                        style="cursor: not-allowed;">
                                </div>
                            </div>

                            <div id="totalpayablediv" class="justify-content-center align-items-center mt-4 mb-4 w-100">

                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="">
                                    <button id="requestqt" class="btn btn-primary mt-2 btn-sm">Request a
                                        Quotation</button>
                                </div>
                            </div>
                            <div id="showplan"
                                class="d-none justify-content-center align-items-center text-center mt-10 mt-md-5"
                                style="cursor:pointer">
                                <div>
                                    <p id="showhidetext" style="line-height: 2px; margin-bottom: 0px;"></p>
                                    <i class="uil uil-angle-down fs-30 text-black showplan-btn"></i>
                                </div>
                            </div>
                            <div class="d-none" id="installmentplan">

                            </div>
                        </div>

                        <div id="standardcalculator">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 form-group">
                                        <label for="loanamount">Leasing Amount</label>
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
                                <div id="sttotalpayablediv"
                                    class="d-flex justify-content-between align-items-center mt-4 mb-4">

                                </div>
                                <div id="stshowplan"
                                    class="d-none justify-content-center align-items-center text-center "
                                    style="cursor:pointer">
                                    <div>
                                        <p id="stshowhidetext" style="line-height: 2px; margin-bottom: 0px;"></p>
                                        <i class="uil uil-angle-down fs-30 text-black showplan-btn"></i>
                                    </div>
                                </div>
                                <div class="d-none" id="stinstallmentplan">

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

<section id="leasingcomparisonsection" class="wrapper bg-light">
    <div class="container py-15 py-md-17">
        <div class="row text-center">
            <div class="col-lg-10 col-xl-7 col-xxl-6 mx-auto">
                <h2 class="fs-15 text uppercase text-muted mb-3">Leasing Comparison</h2>
                <h3 class="ls-sm mb-10">Compare leasing rates from top companies to find the best deal for
                    you.</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->

        <!-- loan comparison table-->
        <div class="table-responsive table-padding">


            <div class="d-md-flex d-block justify-content-between align-items-center mb-3 filter-section">
                <!-- Filter Container -->
                <div class="filter-container d-block align-items-center">
                    <label for="vehicleTypeFilter" class="me-2 fs-14">Facility Type</label>
                    <select id="vehicleTypeFilter" class="form-select w-auto typefilter">
                    </select>
                </div>

                <!-- Search Box -->
                <div class="search-container d-block align-items-center mt-5 mt-md-0">
                    <label for="searchBox" class="me-2 fs-14">Search</label>
                    <input type="text" id="searchBox" class="form-control lesingserach" placeholder="Search..." />
                </div>
            </div>

            <!-- Table -->
            <table id="leasingcomparisontable" class="table table-bordered table-fonts">
                <thead>
                    <tr>
                        <th style="width:0px"></th>
                        <th class="text-center" style="width:10%">Leasing Company</th>
                        <th class="text-center" style="width:20%">Facility per {{ formatLKR(100000) }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($filterdbanks as $bank)
                    <tr>
                        <td></td>
                        <td>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3 justify-content-center text-center align-items-center">
                                    <img src="{{env('BASE_URL')}}{{ $bank->logo }}" alt="{{ $bank->name }}"
                                        class="img-fluid table-bank-logo" margin-right:10px" />
                                    <h2 class="text-uppercase text-muted mb-3 table-bank-name">{{ $bank->name }}</h2>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#bankModal{{ $bank->id }}">
                                        <i class="uil uil-file-alt fs-15"></i>View Details
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>

                            <table id="innerratestable" class="table table-bordered table-fonts" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:8%">Period</th>
                                        <th class="text-center" style="width:12%">Rate</th>
                                        <th class="text-center" style="width:8%">Monthly Installment</th>
                                        <th class="text-center" style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bank->filterdrates as $rate)
                                    @php
                                    $sampleAmount = 100000;
                                    $monthlyRate = $rate->min_rate / 100 / 12;
                                    $loanMonths = $rate->year * 12;
                                    $monthlyInstallment = ($sampleAmount * $monthlyRate) / (1 - pow(1 + $monthlyRate,
                                    -$loanMonths));
                                    $totalPayable = $monthlyInstallment * $loanMonths;
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ $rate->year }} Years</td>
                                        <td class="text-center">{{ $rate->min_rate }}% - {{ $rate->max_rate }}%</td>
                                        <td class="text-center">{{ formatLKR($monthlyInstallment) }}</td>
                                        <td class="text-center"><button class="leasingtable-reqbtn"
                                                data-bs-toggle="modal" data-bs-target="#applyNowModal"
                                                data-bs-dismiss="modal" data-rateid="{{ $rate->id }}"
                                                data-bankid="{{ $bank->id }}"
                                                data-vehicletype="{{ $rate->vehicle_type }}"
                                                data-leasingperiod="{{ $rate->year }}"
                                                data-leasingminrate="{{ $rate->min_rate }}"
                                                data-leasingmaxrate="{{ $rate->max_rate }}"
                                                id="qtreqbtn">Request</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



            <div class="row gx-lg-8 gx-xl-12 gy-8">
                @foreach ($banks as $bank)
                <!-- Modal -->
                <div class="modal fade" id="bankModal{{ $bank->id }}" tabindex="-1"
                    aria-labelledby="bankModalLabel{{ $bank->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="padding-bottom: 0;">
                                <h5 class="modal-title bank-modal-title" id="bankModalLabel{{ $bank->id }}">
                                    {{ $bank->name }} - Leasing
                                    Details
                                </h5>
                                <img src="{{env('BASE_URL')}}{{ $bank->logo }}" alt="{{ $bank->name }}"
                                    class="img-fluid bank-modal-logo" />
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Image Carousel -->

                                <!-- @php
                                $sentences = explode('.', $bank->description);
                                @endphp

                                @foreach ($sentences as $sentence)
                                @if(trim($sentence))
                                <div class="sentence-block">
                                    <p class="sentence">{{ trim($sentence) }}.</p>
                                </div>
                                @endif
                                @endforeach -->
                                {!! $bank->description !!}

                                <p><strong>Website:</strong> <a href="{{ $bank->website }}" target="_blank"
                                        class="gap-2">{{ $bank->website }}<i class="uil uil-external-link-alt"
                                            style="margin-left:10px;"></i></a>
                                </p>
                                <h6>Available Facility Types and Rates</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-fonts-modal text-center table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Facility Type</th>
                                                <th>Leasing Period</th>
                                                <th>Rate</th>
                                                <th>Ins Per {{formatLKR(100000)}}</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bank->rates as $rate)
                                            <tr>
                                                <td>{{ $rate->vehicle_type }}</td>
                                                <td>{{ $rate->year }} Years</td>
                                                <td>{{ $rate->min_rate }}% - {{ $rate->max_rate }}%</td>
                                                <td>{{formatLKR($rate->installment)}}</td>
                                                <td><button class="leasingtable-reqbtn" data-bs-toggle="modal"
                                                        data-bs-target="#applyNowModal" data-bs-dismiss="modal"
                                                        data-rateid="{{ $rate->id }}" data-bankid="{{ $bank->id }}"
                                                        data-vehicletype="{{ $rate->vehicle_type }}"
                                                        data-leasingperiod="{{ $rate->year }}"
                                                        data-leasingminrate="{{ $rate->min_rate }}"
                                                        data-leasingmaxrate="{{ $rate->max_rate }}"
                                                        id="qtreqnewbtn">Request</button></td>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p><strong>Last Updated:</strong> {{ $bank->updated_at->format('d M Y') }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3" -->
            <!-- data-items-md="2" data-items-xs="1"> -->
            <!-- <div class="swiper"> -->
            <!-- <div class="swiper-wrapper"> -->

            <!-- </div> -->
            <!--/.swiper-wrapper -->
            <!-- </div> -->
            <!-- /.swiper -->
            <!-- </div> -->
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
</section>


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

<!-- Modal to show intallment plan -->
<div class="modal fade" id="installmentPlanModal" tabindex="-1" aria-labelledby="installmentPlanModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="padding-bottom: 0;">
                <h4 class="modal-title" id="installmentPlanModalLabel">Installment Plan</h4>
                <button id="downloadPdf" class="btn btn-primary btn-sm">Download as PDF</button>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="bank-name-logo" class="d-none justify-content-between w-100 mb-2"></div>
                <div id="modal-leasing-info" class="d-none justify-content-center align-items-center w-100"></div>
                <h3 class="modal-title">Installment Schedule</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-fonts">
                        <thead>

                        </thead>
                        <tbody id="installmentPlanTable">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<!-- DataTables Bootstrap 5 JS -->
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables Responsive JS -->
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#leasingcomparisontable').DataTable({
        paging: false,
        searching: true,
        orderable: false,
        ordering: false,
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50],
        columnDefs: [{
            targets: 0,
            visible: false,
            orderable: true // enable ordering for this column
        }],
    });




    // Custom Search Box
    $('#searchBox').on('keyup', function() {
        table.search(this.value).draw();
    });

    // Custom Filter
    const vehicleTypeFilter = document.getElementById('vehicleTypeFilter');
    const vehicletypejson = @json($vehicle_types);
    vehicletypejson.forEach((vehicletype) => {
        const option = document.createElement('option');
        option.value = vehicletype.vehicle_type;
        option.text = vehicletype.vehicle_type;
        vehicleTypeFilter.appendChild(option);
    });

    const vfilter = @json($vfilter);
    if (vfilter) {
        vehicleTypeFilter.value = vfilter;
    }

    vehicleTypeFilter.addEventListener('change', function() {
        window.location.href = `{{ route('home') }}?vfilter=${this.value}#leasingcomparisonsection`;
    });



});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const leasingCalculatorTitle = document.getElementById('leasingCalculatorTitle');
    const standardCalculatorTitle = document.getElementById('standardCalculatorTitle');
    const leasingCalculator = document.getElementById('leasingcalculator');
    const standardCalculator = document.getElementById('standardcalculator');

    leasingCalculator.style.display = 'block';
    standardCalculator.style.display = 'none';
    leasingCalculatorTitle.style.borderBottom = '2px solid blue';
    standardCalculatorTitle.style.borderBottom = 'none';

    leasingCalculatorTitle.addEventListener('click', () => {
        leasingCalculator.style.display = 'block';
        standardCalculator.style.display = 'none';
        leasingCalculatorTitle.style.borderBottom = '2px solid blue';
        standardCalculatorTitle.style.borderBottom = 'none';
    });

    standardCalculatorTitle.addEventListener('click', () => {
        leasingCalculator.style.display = 'none';
        standardCalculator.style.display = 'block';
        standardCalculatorTitle.style.borderBottom = '2px solid blue';
        leasingCalculatorTitle.style.borderBottom = 'none';

    });
});
</script>

<!-- Leasing Calculator -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const leasingCompany = document.getElementById('leasingcompany');
    const vehicleTypeSelect = document.getElementById('vehicleType');
    const leasingPeriodInput = document.getElementById('leasingperiod');
    const leasingRateInput = document.getElementById('leasingrate');
    const bankratesspan = document.getElementById('bankratespan');
    const leasingAmountInput = document.getElementById('leasingamount');
    const installmentInput = document.getElementById('installment');
    const selectedrateid = document.getElementById('selectedrateid');
    const showPlanDiv = document.getElementById('showplan');
    const installmentPlanDiv = document.getElementById('installmentplan');
    const showhidetext = document.getElementById('showhidetext');
    const totalpayablediv = document.getElementById('totalpayablediv');
    const modal_leasing_info_div = document.getElementById('modal-leasing-info');
    const modla_bank_name_logo = document.getElementById('bank-name-logo');

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
        const showplan = document.getElementById('showplan');

        if (leasingAmount && leasingRate && leasingPeriod) {
            const leasingmonths = leasingPeriod * 12;
            const monthrate = leasingRate / (100 * 12);
            const installment = (leasingAmount * monthrate) / (1 - Math.pow(1 + monthrate, -leasingmonths));

            installmentInput.value = installment.toFixed(2);
        } else {
            installmentInput.value = '0';
            populateInstallmentPlan();
        }

        showhidetext.textContent = installmentInput.value > 0 ? 'Show Installment Plan' : '';

        if (installmentInput.value > 0) {
            showPlanDiv.classList.remove('d-none');
            showPlanDiv.classList.add('d-flex');
            populateInstallmentPlan();
        } else {
            showPlanDiv.classList.remove('d-flex');
            showPlanDiv.classList.add('d-none');
            populateInstallmentPlan();
        }
    }

    showPlanDiv.addEventListener("click", function() {
        const installmentPlanModal = new bootstrap.Modal(document.getElementById(
            'installmentPlanModal'));
        installmentPlanModal.show();
        populateInstallmentPlan();
    });

    function getBankById(bankId) {
        const banks = @json($banks);
        const numericBankId = parseInt(bankId, 10);
        const bank = banks.find(bank => bank.id == numericBankId);
        return bank ? bank : null;
    }


    function populateInstallmentPlan() {
        const leasingAmount = parseFloat(leasingAmountInput.value) || 0;
        const leasingRate = parseFloat(leasingRateInput.value) || 0;
        const leasingPeriod = parseInt(leasingPeriodInput.value) || 0;
        const vehicleType = vehicleTypeSelect.options[vehicleTypeSelect.selectedIndex].text.split(" (")[0];

        if (leasingAmount && leasingRate && leasingPeriod) {


            let tableHTML =
                '<table class="table table-bordered table-fonts text-center"><thead><tr><th class="text-center">Ins.Count</th><th class="text-center">Installment</th><th class="text-center">Capital Balance</th><th class="text-center">Leasing Balance</th></tr></thead><tbody>';
            const monthrate = leasingRate / 100 / 12;
            const leasingmonths = leasingPeriod * 12;
            const monthlyInstallment = (leasingAmount * monthrate) / (1 - Math.pow(1 + monthrate, -
                leasingmonths));
            let capital = monthlyInstallment * leasingPeriod * 12;
            let remainingBalance = capital;

            let loanAmount = leasingAmount;

            for (let month = 1; month <= leasingPeriod * 12; month++) {
                let interest = loanAmount * monthrate;
                let capitaldeduction = monthlyInstallment - interest;
                loanAmount -= capitaldeduction;
                remainingBalance -= monthlyInstallment;



                tableHTML += `<tr>
                    <td class="text-center">${month}</td>
                    <td class="text-center">${formatToLKR(monthlyInstallment)}</td>
                    <td class="text-center">${loanAmount > 0 ?formatToLKR(loanAmount): '0.00'}</td>
                    <td class="text-center">${remainingBalance > 0 ? formatToLKR(remainingBalance) : '0.00'}</td>
                </tr>`;
            }
            tableHTML += '</tbody></table>';
            let intallmentplanmodaltablebody = document.getElementById('installmentPlanTable');
            intallmentplanmodaltablebody.innerHTML = tableHTML;

            let leasinginfoHTML = `
                <div class="table-responsive w-100">
                    <table class="table table-bordered table-striped table-hover text-center table-fonts-modal">
                        <thead class="table-dark">
                            <tr>
                                <th>Facility Type</th>
                                <th>Leasing Amount</th>
                                <th>Leasing Rate</th>
                                <th>Total Payable</th>
                                <th>Monthly Installment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>${vehicleType}</td>
                                <td>${formatToLKR(leasingAmount)}</td>
                                <td>${leasingRate} (${leasingPeriod} Years)</td>
                                <td>${formatToLKR(capital)}</td>
                                <td>${formatToLKR(monthlyInstallment)}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            `;

            modal_leasing_info_div.innerHTML = leasinginfoHTML;

            if (leasingCompany && vehicleTypeSelect && leasingPeriodInput.value && leasingRateInput.value &&
                leasingAmountInput.value) {
                if (installmentInput.value > 0) {

                    totalpayablediv.classList.remove("d-none");
                    totalpayablediv.classList.add("d-flex");

                    installmentPlanDiv.innerHTML = tableHTML;
                    totalpayablediv.innerHTML = `
                        <div class="table-responsive w-100">
                            <table class="table table-bordered table-striped table-hover text-center table-fonts">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Facility Type</th>
                                        <th>Leasing Amount</th>
                                        <th>Leasing Rate</th>
                                        <th>Total Payable</th>
                                        <th>Monthly Installment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>${vehicleType}</td>
                                        <td>${formatToLKR(leasingAmount)}</td>
                                        <td>${leasingRate} (${leasingPeriod} Years)</td>
                                        <td>${formatToLKR(capital)}</td>
                                        <td>${formatToLKR(monthlyInstallment)}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    `;
                } else {
                    installmentPlanDiv.innerHTML =
                        '<p>No data available. Please fill in all required fields.</p>';
                }

            }
        } else {
            installmentPlanDiv.innerHTML =
                '<p>No data available. Please fill in all required fields.</p>';
        }
    }

    if (leasingCompany && vehicleTypeSelect && leasingPeriodInput && leasingRateInput) {
        leasingCompany.addEventListener('change', function() {
            const bankId = this.value;


            const bankDetails = getBankById(bankId);
            modla_bank_name_logo.classList.remove('d-none');
            modal_leasing_info_div.classList.remove('d-none');
            modla_bank_name_logo.classList.add('d-flex');
            modal_leasing_info_div.classList.add('d-flex');

            if (bankDetails) {
                modla_bank_name_logo.innerHTML = `<h4>${bankDetails.name}</h4>
                    <img src="${bankDetails.logo}" alt="${bankDetails.name}" class="img-fluid" style="width: 20%;" />
                `;
            }

            installmentPlanDiv.classList.add('d-none');
            totalpayablediv.classList.add("d-none");
            showhidetext.textContent = 'Show Installment Plan';


            vehicleTypeSelect.innerHTML = '<option selected>Select Facility Type</option>';
            leasingPeriodInput.value = '';
            leasingRateInput.value = '';
            document.getElementById('leasingamount').value = 0;
            document.getElementById('installment').value = 0;

            if (bankId) {
                fetch(`/get-bank-rates/${bankId}`)
                    .then(response => response.json())
                    .then(data => {
                        bankRates = data;
                        if (data.length > 0) {
                            data.forEach(rate => {
                                const option = document.createElement('option');
                                option.value = rate.id;
                                option.textContent =
                                    `${rate.vehicle_type.charAt(0).toUpperCase() + rate.vehicle_type.slice(1)} (${rate.year} Years)`;
                                vehicleTypeSelect.appendChild(option);
                            });
                        } else {
                            const option = document.createElement('option');
                            option.textContent = 'No Facility Types Available';
                            vehicleTypeSelect.appendChild(option);
                        }
                    })
                    .catch(error => console.error('Error fetching Facility Types:', error));
            }
        });
        vehicleTypeSelect.addEventListener('change', function() {
            const selectedVehicleType = this.value;
            selectedrateid.value = selectedVehicleType;
            document.getElementById('leasingamount').value = 0;
            document.getElementById('installment').value = 0;
            totalpayablediv.classList.add("d-none");
            if (selectedVehicleType && bankRates.length > 0) {
                const selectedRate = bankRates.find(rate => rate.id == selectedVehicleType);
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

        showPlanDiv.addEventListener('click', () => {
            // installmentPlanDiv.classList.toggle('d-none');
            populateInstallmentPlan();
            modla_bank_name_logo.classList.remove('d-none');
            modal_leasing_info_div.classList.remove('d-none');
            modla_bank_name_logo.classList.add('d-flex');
            modal_leasing_info_div.classList.add('d-flex');
            showhidetext.textContent = installmentPlanDiv.classList.contains('d-none') ?
                'Show Installment Plan' :
                'Hide Installment Plan';
        });
    }
});
</script>


<!-- Standard Calculator -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const sloanamount = document.getElementById('sloanamount');
    const sloanrate = document.getElementById('sloanrate');
    const sloanperiod = document.getElementById('sloanperiod');
    const sinstallment = document.getElementById('sinstallment');
    const showPlanDiv = document.getElementById('stshowplan');
    const installmentPlanDiv = document.getElementById('stinstallmentplan');
    const showhidetext = document.getElementById('stshowhidetext');
    const totalpayablediv = document.getElementById('sttotalpayablediv');
    const modal_leasing_info_div = document.getElementById('modal-leasing-info');
    const modla_bank_name_logo = document.getElementById('bank-name-logo');

    document.getElementById('sloanrate').value = 0;
    document.getElementById('sloanperiod').value = 0;
    document.getElementById('sloanamount').value = 0;
    document.getElementById('sinstallment').value = 0;

    showPlanDiv.addEventListener("click", function() {
        const installmentPlanModal = new bootstrap.Modal(document.getElementById(
            'installmentPlanModal'));
        installmentPlanModal.show();
        populateInstallmentPlan();
    });


    function populateInstallmentPlan() {
        const leasingAmount = parseFloat(sloanamount.value) || 0;
        const leasingRate = parseFloat(sloanrate.value) || 0;
        const leasingPeriod = parseInt(sloanperiod.value) || 0;

        if (leasingAmount && leasingRate && leasingPeriod) {
            let tableHTML =
                '<table class="table table-bordered table-fonts text-center"><thead><tr><th class="text-center">Ins.Count</th><th class="text-center">Installment</th><th class="text-center">Capital Balance</th><th class="text-center">Leasing Balance</th></tr></thead><tbody>';
            const monthrate = leasingRate / 100 / 12;
            const leasingmonths = leasingPeriod * 12;
            const monthlyInstallment = (leasingAmount * monthrate) / (1 - Math.pow(1 + monthrate, -
                leasingmonths));
            let capital = monthlyInstallment * leasingPeriod * 12;
            let remainingBalance = capital;

            let loanAmount = leasingAmount;

            for (let month = 1; month <= leasingPeriod * 12; month++) {

                let interest = loanAmount * monthrate;
                let capitaldeduction = monthlyInstallment - interest;
                loanAmount -= capitaldeduction;
                remainingBalance -= monthlyInstallment;


                tableHTML += `<tr>
                    <td class="text-center">${month}</td>
                    <td class="text-center">${formatToLKR(monthlyInstallment)}</td>
                    <td class="text-center">${loanAmount > 0 ? formatToLKR(loanAmount): '0.00'}</td>
                    <td class="text-center">${remainingBalance > 0 ? formatToLKR(remainingBalance) : '0.00'}</td>
                </tr>`;
            }

            let intallmentplanmodaltablebody = document.getElementById('installmentPlanTable');
            intallmentplanmodaltablebody.innerHTML = tableHTML;

            tableHTML += '</tbody></table>';

            modla_bank_name_logo.classList.remove('d-flex');
            modal_leasing_info_div.classList.remove('d-flex');
            modla_bank_name_logo.classList.add('d-none');
            modal_leasing_info_div.classList.add('d-none');


            installmentPlanDiv.innerHTML = tableHTML;
            totalpayablediv.innerHTML = `
                <div class="table-responsive w-100">
                    <table class="table table-bordered table-striped table-hover text-center table-fonts">
                        <thead class="table-dark">
                            <tr>
                                <th>Leasing Amount</th>
                                <th>Leasing Rate</th>
                                <th>Total Payable</th>
                                <th>Monthly Installment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>${formatToLKR(leasingAmount)}</td>
                                <td>${leasingRate} (${leasingPeriod} Years)</td>
                                <td>${formatToLKR(capital)}</td>
                                <td>${formatToLKR(monthlyInstallment)}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            `;


        } else {
            installmentPlanDiv.innerHTML = '<p>No data available. Please fill in all required fields.</p>';
        }
    }

    function calculateStandardInstallment() {
        const loanAmount = parseFloat(sloanamount.value) || 0;
        const loanRate = parseFloat(sloanrate.value) || 0;
        const loanPeriod = parseInt(sloanperiod.value) || 0;

        if (loanAmount && loanRate && loanPeriod) {
            const monthrate = loanRate / (100 * 12);
            const leasingmonths = loanPeriod * 12;
            const monthlyInstallment = (loanAmount * monthrate) / (1 - Math.pow(1 + monthrate, -
                leasingmonths));
            sinstallment.value = monthlyInstallment.toFixed(2);
        } else {
            sinstallment.value = '0';
        }

        showhidetext.textContent = sinstallment.value > 0 ? 'Show Installment Plan' : '';

        if (sinstallment.value > 0) {
            showPlanDiv.classList.remove('d-none');
            showPlanDiv.classList.add('d-flex');
            populateInstallmentPlan();
        } else {
            showPlanDiv.classList.remove('d-flex');
            showPlanDiv.classList.add('d-none');
        }
    }

    sloanamount.addEventListener('input', calculateStandardInstallment);
    sloanrate.addEventListener('input', calculateStandardInstallment);
    sloanperiod.addEventListener('input', calculateStandardInstallment);

    showPlanDiv.addEventListener('click', () => {
        // installmentPlanDiv.classList.toggle('d-none');
        populateInstallmentPlan();
        showhidetext.textContent = installmentPlanDiv.classList.contains('d-none') ?
            'Show Installment Plan' :
            'Hide Installment Plan';
    });
});
</script>
<script>
document.getElementById('requestqt').addEventListener('click', () => {
    const leasingCompany = document.getElementById('leasingcompany').value;
    const vehicleType = document.getElementById('vehicleType').value;
    const leasingPeriod = document.getElementById('leasingperiod').value;
    const leasingRate = document.getElementById('leasingrate').value;
    const leasingAmount = document.getElementById('leasingamount').value;
    const installment = document.getElementById('installment').value;

    if (leasingCompany === 'Select Leasing Company' || vehicleType === 'Select Facility Type' || !
        leasingPeriod || !leasingRate || !leasingAmount || !installment || installment === '0' ||
        leasingAmount === '0') {
        Swal.fire({
            icon: 'warning',
            title: 'WARNING...',
            text: 'Please fill all fields before requesting a quotation',
        });
    } else {
        const applyNowModal = new bootstrap.Modal(document.getElementById('applyNowModal'));

        const leasingCompanySelect = document.getElementById('modelleasingcompany');
        const vehicleTypeSelect = document.getElementById('modelvehicleType');
        const leasingPeriodInput = document.getElementById('modelleasingperiod');
        const leasingRateInput = document.getElementById('modelleasingrate');
        const leasingAmountInput = document.getElementById('modelleasingamount');
        const installmentInput = document.getElementById('modelinstallment');
        const bankratesspan = document.getElementById('modelbankratespan');
        const rateIdInput = document.getElementById('rate_id');

        leasingCompanySelect.value = leasingCompany;
        const bankId = leasingCompany;
        vehicleTypeSelect.innerHTML = '<option selected>Select Facility Type</option>';
        if (bankId) {
            fetch(`/get-bank-rates/${bankId}`)
                .then(response => response.json())
                .then(data => {
                    bankRates = data;
                    if (data.length > 0) {
                        data.forEach(rate => {
                            const option = document.createElement('option');
                            option.value = rate.id;
                            option.textContent =
                                `${rate.vehicle_type.charAt(0).toUpperCase() + rate.vehicle_type.slice(1)} (${rate.year} Years)`;
                            vehicleTypeSelect.appendChild(option);

                            vehicleTypeSelect.value = vehicleType;

                            Array.from(vehicleTypeSelect.options).forEach(option => {
                                if (option.value !== vehicleType) {
                                    option.hidden = true;
                                }
                            });

                            rateIdInput.value = vehicleType;

                            const selectedVehicleType = vehicleType;
                            if (selectedVehicleType && bankRates.length > 0) {
                                const selectedRate = bankRates.find(rate => rate.id ==
                                    selectedVehicleType);
                                if (selectedRate) {
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
                    } else {
                        const option = document.createElement('option');
                        option.textContent = 'No Facility Types Available';
                        vehicleTypeSelect.appendChild(option);
                    }
                })
                .catch(error => console.error('Error fetching Facility Types:', error));
        }

        //make Facility Type readonly and cursor not-allowed
        vehicleTypeSelect.setAttribute('readonly', 'readonly');
        vehicleTypeSelect.style.cursor = 'not-allowed';

        leasingPeriodInput.value = leasingPeriod;
        leasingRateInput.value = leasingRate;
        leasingAmountInput.value = leasingAmount;
        installmentInput.value = installment;


        applyNowModal.show();
    }
});
</script>
<script>
document.getElementById('downloadPdf').addEventListener('click', function() {
    const {
        jsPDF
    } = window.jspdf;
    const pdf = new jsPDF({
        orientation: 'portrait',
        unit: 'mm',
        format: 'a4'
    });

    const modalContent = document.querySelector('#installmentPlanModal .modal-content');

    // Temporarily hide buttons
    const buttons = modalContent.querySelectorAll('button');
    buttons.forEach(button => button.style.display = 'none');

    // Render the content to PDF
    pdf.html(modalContent, {
        callback: function(doc) {
            // Restore button visibility
            buttons.forEach(button => button.style.display = '');

            doc.save('InstallmentPlan.pdf');
        },
        x: 10,
        y: 10,
        width: 190,
        windowWidth: 800
    });
});
</script>
<script>
$(document).ready(function() {
    // Use event delegation for dynamically created buttons
    $(document).on('click', '#qtreqnewbtn', function() {
        // Get data from the button
        var rateId = $(this).data('rateid');
        var bankId = $(this).data('bankid');
        var vehicleType = rateId;
        var leasingPeriod = $(this).data('leasingperiod');
        var leasingminRate = $(this).data('leasingminrate');
        var leasingmaxRate = $(this).data('leasingmaxrate');



        const vehicleTypeSelect = document.getElementById('modelvehicleType');
        const rateIdInput = document.getElementById('rate_id');
        const leasingRateInput = document.getElementById('modelleasingrate');
        const bankratesspan = document.getElementById('modelbankratespan');

        $('#rate_id').val(rateId);
        console.log(bankId);
        if (bankId) {
            fetch(`/get-bank-rates/${bankId}`)
                .then(response => response.json())
                .then(data => {
                    bankRates = data;
                    console.log(data);
                    if (data.length > 0) {
                        data.forEach(rate => {
                            const option = document.createElement('option');
                            option.value = rate.id;
                            option.textContent =
                                `${rate.vehicle_type.charAt(0).toUpperCase() + rate.vehicle_type.slice(1)} (${rate.year} Years)`;
                            vehicleTypeSelect.appendChild(option);

                            vehicleTypeSelect.value = vehicleType;

                            Array.from(vehicleTypeSelect.options).forEach(option => {
                                if (option.value !== vehicleType) {
                                    option.hidden = true;
                                }
                            });

                            rateIdInput.value = vehicleType;

                            const selectedVehicleType = vehicleType;
                            if (selectedVehicleType && bankRates.length > 0) {
                                const selectedRate = bankRates.find(rate => rate.id ==
                                    selectedVehicleType);
                                if (selectedRate) {
                                    leasingRateInput.value = selectedRate
                                        .min_rate;
                                    leasingRateInput.setAttribute('min', selectedRate
                                        .min_rate);
                                    leasingRateInput.setAttribute('max', selectedRate
                                        .max_rate);
                                    bankratesspan.textContent =
                                        `*(Min Rate: ${selectedRate.min_rate} - Max Rate: ${selectedRate.max_rate})`;
                                } else {
                                    $('#modelleasingperiod').val(leasingPeriod);
                                    $('#modelleasingrate').val(leasingminRate);
                                }
                            } else {
                                $('#modelleasingperiod').val(leasingPeriod);
                                $('#modelleasingrate').val(leasingminRate);
                            }

                        });
                    } else {
                        const option = document.createElement('option');
                        option.textContent = 'No Facility Types Available';
                        vehicleTypeSelect.appendChild(option);
                    }
                })
                .catch(error => console.error('Error fetching Facility Types:', error));
        }
        vehicleTypeSelect.setAttribute('readonly', 'readonly');
        vehicleTypeSelect.style.cursor = 'not-allowed';

        $('#modelleasingcompany').val(bankId);
        $('#modelleasingperiod').val(leasingPeriod);
        $('#modelleasingrate').val(leasingminRate);
        $('#modelleasingamount').val('');
        $('#modelinstallment').val('');
    });

});
</script>
<script>
$(document).ready(function() {
    // Use event delegation for dynamically created buttons
    $(document).on('click', '#qtreqbtn', function() {
        // Get data from the button
        var rateId = $(this).data('rateid');
        var bankId = $(this).data('bankid');
        var vehicleType = rateId;
        var leasingPeriod = $(this).data('leasingperiod');
        var leasingminRate = $(this).data('leasingminrate');
        var leasingmaxRate = $(this).data('leasingmaxrate');



        const vehicleTypeSelect = document.getElementById('modelvehicleType');
        const rateIdInput = document.getElementById('rate_id');
        const leasingRateInput = document.getElementById('modelleasingrate');
        const bankratesspan = document.getElementById('modelbankratespan');

        $('#rate_id').val(rateId);
        console.log(bankId);
        if (bankId) {
            fetch(`/get-bank-rates/${bankId}`)
                .then(response => response.json())
                .then(data => {
                    bankRates = data;
                    console.log(data);
                    if (data.length > 0) {
                        data.forEach(rate => {
                            const option = document.createElement('option');
                            option.value = rate.id;
                            option.textContent =
                                `${rate.vehicle_type.charAt(0).toUpperCase() + rate.vehicle_type.slice(1)} (${rate.year} Years)`;
                            vehicleTypeSelect.appendChild(option);

                            vehicleTypeSelect.value = vehicleType;

                            Array.from(vehicleTypeSelect.options).forEach(option => {
                                if (option.value !== vehicleType) {
                                    option.hidden = true;
                                }
                            });

                            rateIdInput.value = vehicleType;

                            const selectedVehicleType = vehicleType;
                            if (selectedVehicleType && bankRates.length > 0) {
                                const selectedRate = bankRates.find(rate => rate.id ==
                                    selectedVehicleType);
                                if (selectedRate) {
                                    leasingRateInput.value = selectedRate
                                        .min_rate;
                                    leasingRateInput.setAttribute('min', selectedRate
                                        .min_rate);
                                    leasingRateInput.setAttribute('max', selectedRate
                                        .max_rate);
                                    bankratesspan.textContent =
                                        `*(Min Rate: ${selectedRate.min_rate} - Max Rate: ${selectedRate.max_rate})`;
                                } else {
                                    $('#modelleasingperiod').val(leasingPeriod);
                                    $('#modelleasingrate').val(leasingminRate);
                                }
                            } else {
                                $('#modelleasingperiod').val(leasingPeriod);
                                $('#modelleasingrate').val(leasingminRate);
                            }

                        });
                    } else {
                        const option = document.createElement('option');
                        option.textContent = 'No Facility Types Available';
                        vehicleTypeSelect.appendChild(option);
                    }
                })
                .catch(error => console.error('Error fetching Facility Types:', error));
        }
        vehicleTypeSelect.setAttribute('readonly', 'readonly');
        vehicleTypeSelect.style.cursor = 'not-allowed';

        $('#modelleasingcompany').val(bankId);
        $('#modelleasingperiod').val(leasingPeriod);
        $('#modelleasingrate').val(leasingminRate);
        $('#modelleasingamount').val('');
        $('#modelinstallment').val('');
    });

});
</script>


















@endsection
