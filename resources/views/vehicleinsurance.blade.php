@extends('layouts.main')

@section('title', 'Easy Leasing | Sri Lanka Vehicle Insurance')

@section('og:title', 'Easy Leasing | Sri Lanka Vehicle Insurance')
@section('og:description', 'Find the best vehicle insurance rates in Sri Lanka with Easy Leasing. Compare policies from
top providers and secure the best coverage for your vehicle.')
@section('og:url', 'https://easyleasing.lk')
@section('og:type', 'website')
@section('og:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')

@section('twitter:card', 'summary_large_image')
@section('twitter:title', 'Easy Leasing | Sri Lanka Vehicle Insurance')
@section('twitter:description', 'Find the best vehicle insurance rates in Sri Lanka with Easy Leasing. Compare policies
from top providers and secure the best coverage for your vehicle.')
@section('twitter:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')

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
<section id="easyleasinginsmainbanner" class="wrapper image-wrapper bg-cover bg-image bg-gray position-relative"
    data-image-src="{{env('BASE_URL')}}/assets/img/photos/insuarancebanner.jpg" style="padding-bottom: 150px;">
    <div class="container pt-17   position-relative">
        <div class="row">
            <div class="col-12 text-center text-sm-start" data-cues="slideInDown" data-group="page-title"
                data-interval="-200" data-delay="500">
                <h1 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0 text-black" style="">
                    Compare Best
                    <br>
                    <span class="underline-3 style-3 yellow">Motor Insurance Sri Lanka</span>
                </h1>
                <!-- <div><a href="#leasingcomparisonsection" class="btn btn-lg btn-primary rounded">Best Rates</a></div> -->
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->


        <!-- /.container -->
</section>
<!-- /section -->

<section id="calculatorsection" class="wrapper bg-light">
    <div class="container" style="padding-top:0px;">
        <div class="calculator-block" style="margin-top:-100px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-lg-flex d-block justify-content-between">
                                <div class="d-flex justify-lg-content-between gap-3">
                                    <h4 id="cifCalculatorTitle" class="cursor-pointer">Motor Insurance Sri Lanka</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="insurancesection">
                            <div class="row">
                                <div id="insurancesectionslider" class="slider" style="width:100% !important;">
                                    <div class="slide-track">
                                        @foreach ($insuranceCompanies as $bank)
                                        <div class="slide">
                                            <img src="{{env('BASE_URL')}}{{ $bank->logo }}" height="50" width="150"
                                                alt="" />
                                        </div>
                                        @endforeach
                                        @foreach ($insuranceCompanies as $bank)
                                        <div class="slide">
                                            <img src="{{env('BASE_URL')}}{{ $bank->logo }}" height="50" width="150"
                                                alt="" />
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- generate a text that syaing if you want w motor inusrace feel free to contact us -->
                                <div
                                    class="col-md-12 text-center mt-3 d-grid justify-content-center align-items-center">
                                    <p class="text-center mt-5">If you want to get a motor insurance, feel free to
                                        contact
                                        us.</p>
                                    <a href="tel:{{env('COMPANY_PHONE')}}"
                                        class="link-dark fs-22 fs-md-22 fs-lg-32  gap-2 align-items-center justify-content-center"
                                        style="padding: 0;">
                                        <i class="fas fa-headset"></i>
                                        {{env('COMPANY_PHONE')}}
                                    </a>
                                </div>


                            </div>
                            <div id="results" class="d-none justify-content-center align-items-center mt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
function updateBannerImage() {
    const banner = document.getElementById('easyleasinginsmainbanner');
    const mobileImageSrc = "{{env('BASE_URL')}}/assets/img/photos/easyleasinginsuarancemobilebanner2.jpg";
    const desktopImageSrc = "{{env('BASE_URL')}}/assets/img/photos/insuarancebanner.jpg";

    if (window.innerWidth < 500) {
        banner.setAttribute('data-image-src', mobileImageSrc);
    } else {
        banner.setAttribute('data-image-src', desktopImageSrc);
    }
}

// Run on page load
updateBannerImage();

// Run on window resize
window.addEventListener('resize', updateBannerImage);
</script>




@endsection