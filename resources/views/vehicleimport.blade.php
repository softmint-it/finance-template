@extends('layouts.main')

@section('description', 'Calculate the total cost of importing a vehicle to Sri Lanka. Get accurate cost estimates
including taxes, duties, and shipping charges with Easy Leasing’s vehicle import calculator.')

@section('keywords', 'vehicle import cost calculator Sri Lanka, car import cost Sri Lanka, import vehicle taxes Sri
Lanka, vehicle import duty Sri Lanka, Sri Lanka car taxes, Easy Leasing import calculator')



@section('title', 'Easy Leasing | Sri Lanka Vehicle Import Cost Calculator')

@section('og:title', 'Easy Leasing | Sri Lanka Vehicle Import Cost Calculator')
@section('og:description', 'Easily calculate the total cost of importing a vehicle to Sri Lanka, including taxes,
duties, and other fees. Get accurate estimates for your import journey.')
@section('og:url', 'https://easyleasing.lk/vehicle-import-cost-calculator-sri-lanaka')
@section('og:type', 'website')
@section('og:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')

@section('twitter:card', 'summary_large_image')
@section('twitter:title', 'Easy Leasing | Sri Lanka Vehicle Import Cost Calculator')
@section('twitter:description', 'Easily calculate the total cost of importing a vehicle to Sri Lanka, including taxes,
duties, and other fees. Get accurate estimates for your import journey.')
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
<section id="easyleasingimportmainbanner" class="wrapper image-wrapper bg-cover bg-image bg-gray position-relative"
    data-image-src="https://di-uploads-pod47.dealerinspire.com/toyotaofwestohio/uploads/2023/12/2019-Toyota-Muilti-Vechile-Banner.png"
    style="padding-bottom: 150px;">
    <div class="container pt-17   position-relative">
        <div class="row">
            <div class="col-12 text-center text-sm-start" data-cues="slideInDown" data-group="page-title"
                data-interval="-200" data-delay="500">
                <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0 text-white"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">
                    Sri Lanka Vehicle Import
                    <br>
                    <span class="underline-3 style-3 yellow">Cost Calculator</span>
                </h2>
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
                                    <h6 id="cifCalculatorTitle" class="cursor-pointer">Sri Lanka Vehicle Import Cost
                                        Calculator</h6>
                                </div>
                                <!-- <div class="slider">
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
                                </div> -->

                            </div>
                        </div>
                        <div class="card-body" id="cifcalculator">
                            <div class="row">
                                <form id="importForm">
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6 col-12 mt-2">
                                            <label for="cifPriceUSD">CIF Price (USD):</label>
                                            <div class="input-container">
                                                <input type="text" id="cifPriceUSD" placeholder="Enter CIF Price in USD"
                                                    required class="form-control">
                                                <span class="currency">{{ getenv('CURRENCYTWO') }}</span>
                                            </div>

                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-12 mt-2">
                                            <label for="exchangeRate">Exchange Rate (USD to LKR):</label>
                                            <div class="input-container">
                                                <input type="text" id="exchangeRate" placeholder="Enter Exchange Rate"
                                                    class="form-control" required value="300">
                                                <span class="currency">{{ getenv('CURRENCY') }}</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-12 mt-2">
                                            <label for="vehicleType">Vehicle Type:</label>
                                            <select id="vehicleType" required class="form-select">
                                                <option value="petrol">Petrol</option>
                                                <option value="diesel">Diesel</option>
                                                <option value="hybrid">Hybrid</option>
                                                <option value="pluginhybrid">Plugin Hybrid</option>
                                                <option value="electric">Electric</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-12 mt-2">
                                            <label for="yearOfManufacture">Year of Manufacture:</label>
                                            <select id="yearOfManufacture" required class="form-select">
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-12 mt-2">
                                            <label for="engineCapacity">Engine/Motor Capacity (cc/kW):</label>
                                            <input type="text" id="engineCapacity" placeholder="Enter Capacity" required
                                                class="form-control">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-12 mt-md-8 mt-2">
                                            <button class="btn btn-primary btn-sm w-100 "
                                                type="submit">Calculate</button>
                                        </div>
                                    </div>

                                </form>

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
    const banner = document.getElementById('easyleasingimportmainbanner');
    const mobileImageSrc = "{{env('BASE_URL')}}/assets/img/photos/vehicleimportmobilebanner.jpg";
    const desktopImageSrc =
        "https://di-uploads-pod47.dealerinspire.com/toyotaofwestohio/uploads/2023/12/2019-Toyota-Muilti-Vechile-Banner.png";

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

<script>
const yearSelect = document.getElementById('yearOfManufacture');
const currentYear = new Date().getFullYear();

// Add the current year and the previous 5 years
for (let i = 0; i <= 5; i++) {
    const year = currentYear - i;
    const option = document.createElement('option');
    option.value = year;
    option.textContent = year;
    yearSelect.appendChild(option);
}
</script>
<script>
const cifPriceUSDInput = document.getElementById('cifPriceUSD');
cifPriceUSDInput.addEventListener('input', function(e) {
    const value = this.value.replace(/,/g, '');
    this.value = Number(value).toLocaleString('en-US');
});

const exchangeRateInput = document.getElementById('exchangeRate');
exchangeRateInput.addEventListener('input', function(e) {
    const value = this.value.replace(/,/g, '');
    this.value = Number(value).toLocaleString('en-US');
});



const engineCapacityInput = document.getElementById('engineCapacity');
engineCapacityInput.addEventListener('input', function(e) {
    this.value = this.value.replace(/[^0-9.]/g, '');
});
</script>
<script>
//clear form
document.getElementById('importForm').reset();


document.getElementById('importForm').addEventListener('submit', function(event) {
    event.preventDefault();

    calculatecost();
});


document.getElementById('cifPriceUSD').addEventListener('input', calculatecost);
document.getElementById('exchangeRate').addEventListener('input', calculatecost);
document.getElementById('vehicleType').addEventListener('change', calculatecost);
document.getElementById('yearOfManufacture').addEventListener('input', calculatecost);
document.getElementById('engineCapacity').addEventListener('input', calculatecost);


function calculatecost() {
    const exchangeRate = parseFloat(document.getElementById('exchangeRate').value.replace(/,/g, ''));
    const cifPriceUSD = parseFloat(document.getElementById('cifPriceUSD').value.replace(/,/g, ''));
    const vehicleType = document.getElementById('vehicleType').value;
    const yearOfManufacture = parseInt(document.getElementById('yearOfManufacture').value);
    const engineCapacity = parseFloat(document.getElementById('engineCapacity').value);
    const resultsDiv = document.getElementById('results');

    console.log(exchangeRate, cifPriceUSD, vehicleType, yearOfManufacture, engineCapacity);

    if (isNaN(exchangeRate) || isNaN(cifPriceUSD) || isNaN(yearOfManufacture) || isNaN(engineCapacity)) {
        resultsDiv.classList.remove('d-grid');
        resultsDiv.classList.add('d-none');
        return;
    }
    const cifPriceLKR = cifPriceUSD * exchangeRate;

    let generalDutyRate, exciseTaxRate;

    switch (vehicleType) {
        case 'petrol':
            generalDutyRate = 0.2;
            exciseTaxRate = engineCapacity > 2000 ? 0.25 : 0.15;
            break;
        case 'diesel':
            generalDutyRate = 0.25;
            exciseTaxRate = engineCapacity > 2000 ? 0.30 : 0.20;
            break;
        case 'hybrid':
            generalDutyRate = 0.15;
            exciseTaxRate = 0.10;
            break;
        case 'pluginhybrid':
            generalDutyRate = 0.10;
            exciseTaxRate = 0.08;
            break;
        case 'electric':
            generalDutyRate = 0.05;
            exciseTaxRate = 0;
            break;
        default:
            generalDutyRate = 0;
            exciseTaxRate = 0;
    }

    const vatRate = 0.12;
    const luxuryTaxThreshold = 10000000;
    const luxuryTaxRate = 0.25;

    const generalDuty = cifPriceLKR * generalDutyRate;
    const exciseTax = cifPriceLKR * exciseTaxRate;
    const vat = (cifPriceLKR + generalDuty + exciseTax) * vatRate;
    const luxuryTax = cifPriceLKR > luxuryTaxThreshold ? (cifPriceLKR - luxuryTaxThreshold) * luxuryTaxRate : 0;

    const totalCost = cifPriceLKR + generalDuty + exciseTax + vat + luxuryTax;

    resultsDiv.classList.remove('d-none');
    resultsDiv.classList.add('d-grid');
    resultsDiv.innerHTML = `
        <h3 class="modal-title mb-2">Vehicle Import Cost</h3>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <p>CIF Price<br> <b>${formatToLKR(cifPriceLKR)}</b></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <p>General Duty<br> <b>${formatToLKR(generalDuty)}</b></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <p>Excise Tax<br> <b>${formatToLKR(exciseTax)}</b></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <p>VAT<br> <b>${formatToLKR(vat)}</b></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <p>Luxury Tax <br> <b>${formatToLKR(luxuryTax)}</b></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h4 class="text-blue"><strong>Total Cost<br> <b>${formatToLKR(totalCost)}</b></strong></h4>
            </div>
        </div>
    `;
}
</script>



@endsection
