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
                                            <label for="fuletype">Fuel Type:</label>
                                            <select id="fuletype" required class="form-select">
                                                <option value="petrol">Petrol</option>
                                                <option value="diesel">Diesel</option>
                                                <option value="petrolhybrid">Petrol Hybrid</option>
                                                <option value="dieselhybrid">Diesel Hybrid</option>
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
document.addEventListener("DOMContentLoaded", function() {
    const importForm = document.getElementById("importForm");
    const resultsDiv = document.getElementById("results");
    const yearSelect = document.getElementById("yearOfManufacture");

    // Populate Year of Manufacture Dropdown
    const currentYear = new Date().getFullYear();
    for (let year = currentYear; year >= 2000; year--) {
        const option = document.createElement("option");
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }

    importForm.addEventListener("submit", function(event) {
        event.preventDefault();
        calculateImportCost();
    });

    function calculateImportCost() {
        const cifUSD = parseFloat(document.getElementById("cifPriceUSD").value.replace(/,/g, ""));
        const exchangeRate = parseFloat(document.getElementById("exchangeRate").value);
        const fuelType = document.getElementById("fuletype").value;
        const yearOfManufacture = parseInt(document.getElementById("yearOfManufacture").value);
        const engineCapacity = parseFloat(document.getElementById("engineCapacity").value);

        if (isNaN(cifUSD) || cifUSD <= 0 || isNaN(exchangeRate) || exchangeRate <= 0 || isNaN(engineCapacity) ||
            engineCapacity <= 0) {
            alert("Please enter valid values.");
            return;
        }

        const age = currentYear - yearOfManufacture;
        const cifLKR = cifUSD * exchangeRate;

        let exciseDuty = 0;
        if (fuelType === "electric") {
            exciseDuty = getElectricExciseDuty(engineCapacity);
        } else if (fuelType.includes("hybrid")) {
            exciseDuty = getHybridExciseDuty(fuelType, engineCapacity);
        } else {
            const baseExcise = engineCapacity * getExciseDutyPerCC(engineCapacity);
            exciseDuty = baseExcise * getAgeMultiplier(age);
        }

        const customsDuty = cifLKR * 0.30;
        const pal = cifLKR * 0.10;
        const baseForVAT = cifLKR + exciseDuty + customsDuty + pal;
        const vat = baseForVAT * 0.18;

        const luxuryTaxThreshold = 5000000;
        const luxuryTax = baseForVAT > luxuryTaxThreshold ? (baseForVAT - luxuryTaxThreshold) * 0.25 : 0;

        const totalCost = cifLKR + exciseDuty + customsDuty + pal + vat + luxuryTax;

        resultsDiv.innerHTML = `
            <h4>Calculation Breakdown</h4>
            <p><strong>CIF Value:</strong> USD ${formatCurrency(cifUSD)} × ${exchangeRate} = LKR ${formatCurrency(cifLKR)}</p>
            <p><strong>Excise Duty:</strong> LKR ${formatCurrency(exciseDuty)}</p>
            <p><strong>Customs Duty (30% of CIF):</strong> LKR ${formatCurrency(customsDuty)}</p>
            <p><strong>PAL (10% of CIF):</strong> LKR ${formatCurrency(pal)}</p>
            <p><strong>VAT (18%):</strong> LKR ${formatCurrency(vat)}</p>
            <p><strong>Luxury Tax:</strong> LKR ${luxuryTax > 0 ? formatCurrency(luxuryTax) : "Not Applicable"}</p>
            <h4>Total Cost: LKR ${formatCurrency(totalCost)}</h4>
        `;
        resultsDiv.classList.remove("d-none");
    }

    function getExciseDutyPerCC(cc) {
        if (cc <= 1500) return 4200;
        if (cc <= 2000) return 6850;
        if (cc <= 2500) return 8000;
        if (cc <= 2750) return 9100;
        if (cc <= 3000) return 10500;
        if (cc <= 4000) return 12050;
        return 13300;
    }

    function getElectricExciseDuty(kw) {
        if (kw < 50) return 1000000;
        if (kw <= 100) return 1500000;
        if (kw <= 200) return 2500000;
        return 4000000;
    }

    function getHybridExciseDuty(type, cc) {
        if (type === "petrolhybrid") {
            return cc <= 1500 ? 1500000 : 2500000;
        } else {
            return cc <= 1500 ? 2000000 : 3500000;
        }
    }

    function getAgeMultiplier(age) {
        if (age <= 3) return 1;
        if (age <= 10) return 1 + (0.05 * (age - 3));
        return 2;
    }

    function formatCurrency(amount) {
        return amount.toLocaleString(undefined, {
            maximumFractionDigits: 2
        });
    }
});
</script>




@endsection
