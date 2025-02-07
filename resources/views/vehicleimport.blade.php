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
                <h1 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0 text-white"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">
                    Sri Lanka Vehicle Import
                    <br>
                    <span class="underline-3 style-3 orange">Cost Calculator</span>

                </h1>
                <div class="top-button-container">
                    <div id="showvehiclelistbtn" class="btn btn-sm btn-primary rounded">Vehicle List</div>
                </div>
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
                                    <h2 id="cifCalculatorTitle" class="cursor-pointer fs-16">Sri Lanka Vehicle Import
                                        Cost
                                        Calculator</h2>
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
                            <div id="results" class="d-none justify-content-center align-items-center mt-5">


                            </div>


                            <div class="row mt-2">
                                <div class="alert alert-warning mt-3 fs-12 col-12">
                                    <strong>Disclaimer:</strong> The above calculations are based on official documents
                                    issued by the Sri Lankan government. The duties and taxes applied are as of
                                    <strong>January 31, 2025</strong>.
                                    Please note that these values are for reference purposes only and may be subject to
                                    change without prior notice. Always consult the relevant authorities for the most
                                    up-to-date and accurate information.
                                </div>

                                <!-- Tax Information Cards -->
                                @foreach ($pdfDocuments as $doc)
                                <div class="col-lg-3 col-6">
                                    <div class="card text-center shadow-sm h-100 d-flex flex-column">
                                        <div class="card-body d-flex flex-column">
                                            <p class="pdfcard_p flex-grow-1">{{ $doc['title'] }}</p>
                                            <a href="{{ env('BASE_URL') }}/assets/uploads/taxdocs/{{ $doc['file'] }}"
                                                target="_blank" class="btn custom-btn2 mt-auto">
                                                <i class="fas fa-file-pdf"></i> View PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <!-- sample vehicle list -->
                            <div class="mt-4" id="vehiclelistdiv">
                                <div class="row">
                                    <p class="fs-32 fw-bold text-center underline-3 style-3 orange mb-4">Vehicle List
                                    </p>

                                    @foreach ($vehicles as $vehicle)
                                    <div id="vehicle{{ $vehicle['id'] }}" class="col-md-3 col-6 mb-4">
                                        <div class="card d-flex flex-column align-items-center h-100 vlistcard">
                                            <img src="{{ env('BASE_URL') }}/assets/uploads/vehiclelist/{{ $vehicle['image'] }}"
                                                class="card-img-top" alt="{{ $vehicle['name'] }}">
                                            <div class="card-body text-center flex-grow-1 d-flex flex-column">
                                                <p>{{ strtoupper($vehicle['name']) }}</p>
                                                <div
                                                    class="mt-auto d-flex gap-1 taptosee text-center justify-content-center">
                                                    <span class="mr-2">View Price</span>
                                                    <span><i class="uil uil-external-link-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
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
async function updateExchangeRate() {
    try {
        let response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=usd&vs_currencies=lkr');
        let data = await response.json();

        if (data.usd && data.usd.lkr) {
            document.getElementById('exchangeRate').value = data.usd.lkr;
        } else {
            document.getElementById('exchangeRate').value = 300;
        }
    } catch (error) {
        console.error("Error fetching exchange rate:", error);
        document.getElementById('exchangeRate').value = 300;
    }
}

updateExchangeRate();
</script>

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
document.getElementById('showvehiclelistbtn').addEventListener('click', function() {
    document.getElementById('vehiclelistdiv').scrollIntoView({
        behavior: "smooth"
    });
});
</script>

<script>
document.getElementById('cifPriceUSD').addEventListener('input', function(e) {
    var value = e.target.value;
    value = value.replace(/,/g, '');
    value = value.replace(/[^\d.]/g, '');
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    e.target.value = value;
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const cifInput = document.getElementById("cifPriceUSD");
    const exchangeRateInput = document.getElementById("exchangeRate");
    const fuelTypeSelect = document.getElementById("fuletype");
    const yearOfManufactureSelect = document.getElementById("yearOfManufacture");
    const engineCapacityInput = document.getElementById("engineCapacity");
    const resultsDiv = document.getElementById("results");
    const importForm = document.getElementById("importForm");

    const generalDutyPercentage = 30;
    const vatPercentage = 18;
    const luxuryTaxThreshold = 5000000;
    const hybridLuxuryTaxThreshold = 5500000;
    const electricLuxuryTaxThreshold = 6000000;

    const dutyRates = {
        petrol: [2450, 3850, 4450, 5150, 6400, 7700, 8450, 9650, 10850, 12050, 13300],
        diesel: [5550, 6950, 8300, 9650, 9650, 10850, 12050, 13300, 14500],
        petrolhybrid: [2750, 3450, 4800, 6300, 6900, 7250, 8450, 9650, 10850, 12050],
        dieselhybrid: [4150, 4150, 5550, 6900, 8350, 8450, 9650, 10850, 12050],
        electric: [0]
    };

    const electricrate = [{
            min: 0,
            max: 49,
            "1Y": 18100,
            "2Y": 36200,
            "3Y": 48300
        },
        {
            min: 50,
            max: 99,
            "1Y": 24100,
            "2Y": 36200,
            "3Y": 72400
        },
        {
            min: 100,
            max: 199,
            "1Y": 36200,
            "2Y": 60400,
            "3Y": 108700
        },
        {
            min: 200,
            max: Infinity,
            "1Y": 96600,
            "2Y": 132800,
            "3Y": 144900
        }
    ];

    const currentYear = new Date().getFullYear();
    for (let year = currentYear; year >= 2022; year--) {
        const option = document.createElement("option");
        option.value = year;
        option.textContent = year;
        yearOfManufactureSelect.appendChild(option);
    }
    importForm.addEventListener("submit", function(event) {
        event.preventDefault();
        calculateImportCost();

        resultsDiv.scrollIntoView({
            behavior: "smooth"
        });
    });


    cifInput.addEventListener("input", calculateImportCost);
    exchangeRateInput.addEventListener("input", calculateImportCost);
    fuelTypeSelect.addEventListener("change", calculateImportCost);
    yearOfManufactureSelect.addEventListener("change", calculateImportCost);
    engineCapacityInput.addEventListener("input", calculateImportCost);


    const vehiclelist = [{
            cifUsd: 23662,
            engineCapacity: 1800,
            fuletype: "petrolhybrid",
            year: '2024'
        },
        {
            cifUsd: 10200,
            engineCapacity: 660,
            fuletype: "petrol",
            year: '2024'
        },
        {
            cifUsd: 5500,
            engineCapacity: 800,
            fuletype: "petrol",
            year: '2024'
        },
        {
            cifUsd: 23510,
            engineCapacity: 1000,
            fuletype: "petrolhybrid",
            year: '2024'
        },
        {
            cifUsd: 45800,
            engineCapacity: 2000,
            fuletype: "diesel",
            year: '2024'
        },
        {
            cifUsd: 53000,
            engineCapacity: 2000,
            fuletype: "petrol",
            year: '2024'
        },
        {
            cifUsd: 22283,
            engineCapacity: 2000,
            fuletype: "petrol",
            year: '2024'
        },
        {
            cifUsd: 17627,
            engineCapacity: 1500,
            fuletype: "petrol",
            year: '2024'
        },
        {
            cifUsd: 30546,
            engineCapacity: 150,
            fuletype: "electric",
            year: '2024'
        },
        {
            cifUsd: 28270,
            engineCapacity: 1500,
            fuletype: "petrol",
            year: '2024'
        },
        {
            cifUsd: 45000,
            engineCapacity: 202,
            fuletype: "electric",
            year: '2024'
        },
        {
            cifUsd: 16629,
            engineCapacity: 1500,
            fuletype: "petrolhybrid",
            year: '2024'
        },
        {
            cifUsd: 28270,
            engineCapacity: 2500,
            fuletype: "petrolhybrid",
            year: '2024'
        },
        {
            cifUsd: 24611,
            engineCapacity: 2500,
            fuletype: "petrol",
            year: '2024'
        },
    ];

    for (let i = 0; i < vehiclelist.length; i++) {
        const vehicle = vehiclelist[i];
        const vehicleElement = document.getElementById(`vehicle${i + 1}`);
        vehicleElement.addEventListener("click", () => loadListedPrice(vehicle));
    }

    function loadListedPrice(vehicle) {
        cifInput.value = vehicle.cifUsd;
        engineCapacityInput.value = vehicle.engineCapacity;
        fuelTypeSelect.value = vehicle.fuletype;
        yearOfManufactureSelect.value = vehicle.year;
        document.getElementById('cifCalculatorTitle').scrollIntoView({
            behavior: "smooth"
        });
        calculateImportCost();
    }

    function calculateImportCost() {
        const cifInUsd = parseFloat(cifInput.value.replace(/,/g, '').replace(/[^\d.]/g, ''));
        const exchangeRate = parseFloat(exchangeRateInput.value);
        const engineCapacity = parseInt(engineCapacityInput.value);
        const fuelType = fuelTypeSelect.value;
        const yearOfManufacture = yearOfManufactureSelect.value;

        const cifInLkr = cifInUsd * exchangeRate;
        const pal = cifInLkr * 10 / 100;
        const generalDuty = (cifInLkr * generalDutyPercentage) / 100;
        const ccduty = calculateExciseDuty(engineCapacity, fuelType, yearOfManufacture);
        const capacity = ccduty[1];
        const dutyPerCC = ccduty[0];
        const exciseDuty = capacity * dutyPerCC;
        const luxuryTax = calculateLuxuryTax(cifInLkr, fuelType);
        const totalDuty = cifInLkr + generalDuty + exciseDuty + pal;
        const vat = (totalDuty * vatPercentage) / 100;
        const totalPrice = totalDuty + vat + luxuryTax;
        displayResults(cifInLkr, generalDuty, exciseDuty, luxuryTax, vat, totalPrice, pal, capacity, dutyPerCC,
            fuelType);
    }

    function calculateExciseDuty(engineCapacity, fuelType, yearOfManufacture) {
        if (fuelType === "electric") {
            const electricc = calculateElectricExciseDuty(engineCapacity, yearOfManufacture);
            return electricc;
        }
        let dutyPerCC = 0;
        if (engineCapacity < 1000) {
            dutyPerCC = dutyRates[fuelType][0];
        } else if (engineCapacity < 1500) {
            dutyPerCC = dutyRates[fuelType][1];
        } else if (engineCapacity < 2000) {
            dutyPerCC = dutyRates[fuelType][2];
        } else if (engineCapacity < 2500) {
            dutyPerCC = dutyRates[fuelType][3];
        } else {
            dutyPerCC = dutyRates[fuelType][4];
        }
        let ccduty = [dutyPerCC, engineCapacity]
        return ccduty;
    }

    function calculateElectricExciseDuty(engineCapacity, yearOfManufacture) {
        let yearIndex = currentYear - yearOfManufacture;

        if (yearIndex <= 0) {
            yearIndex = 1;
        }

        let duty = 0;

        for (const rate of electricrate) {
            if (engineCapacity >= rate.min && engineCapacity <= rate.max) {
                duty = rate[`${yearIndex}Y`] || 0;
                break;
            }
        }
        let ccduty = [duty, engineCapacity]
        return ccduty;
    }

    function calculateLuxuryTax(cifInLkr, fuelType) {
        let luxuryTax = 0;
        if (cifInLkr > luxuryTaxThreshold) {
            if (fuelType === "petrolhybrid" || fuelType === "dieselhybrid") {
                luxuryTax = ((cifInLkr - hybridLuxuryTaxThreshold) * 100) / 100;
            } else if (fuelType === "electric") {
                luxuryTax = ((cifInLkr - electricLuxuryTaxThreshold) * 60) / 100;
            } else {
                luxuryTax = ((cifInLkr - luxuryTaxThreshold) * 100) / 100;
            }
        }
        if (luxuryTax < 0) {
            luxuryTax = 0;
        }
        return luxuryTax;
    }

    function formatNumber(value) {
        return value.toLocaleString("en-US", {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    function displayResults(cifInLkr, generalDuty, exciseDuty, luxuryTax, vat, totalPrice, pal, capacity,
        dutyPerCC, fuelType) {
        if (!resultsDiv) {
            console.error("Error: resultsDiv is not defined.");

            return;
        }

        let capacityunit = "";
        if (fuelType === "electric") {
            capacityunit = "kW";
        } else {
            capacityunit = "cc";
        }

        //isNAN for all values
        if (isNaN(cifInLkr) || isNaN(generalDuty) || isNaN(exciseDuty) || isNaN(luxuryTax) || isNaN(vat) ||
            isNaN(totalPrice) || isNaN(pal) || isNaN(capacity) || isNaN(dutyPerCC)) {
            resultsDiv.classList.add("d-none");
            return;
        }

        resultsDiv.classList.remove("d-none");
        resultsDiv.innerHTML = `
        <div class="card shadow-lg pt-4 pb-4">
            <p class="totalcost_p text-center text-primary mb-4 costresult_t">Total Cost(LKR) : ${formatNumber(totalPrice)} </p>
            <div class="row g-3">
                <div class="col-md-3 col-6">
                    ${generateBox("CIF in LKR", cifInLkr)}
                </div>
                <div class="col-md-3 col-6">
                    ${generateBox("General Duty", generalDuty)}
                </div>
                <div class="col-md-3 col-6">
                    <lable class="badge bg-dark mb-1 fs-14">Duty Per CC/kW</lable>
                    <div class="border p-3 rounded text-md-center text-left">
                        <p class="m-0 genbox_p fw-bold">${capacity}${capacityunit} X ${formatToLKR(dutyPerCC)}</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    ${generateBox("Excise Duty", exciseDuty)}
                </div>
                <div class="col-md-3 col-6">
                    ${generateBox("Luxury Tax", luxuryTax)}
                </div>
                <div class="col-md-3 col-6">
                    ${generateBox("VAT", vat)}
                </div>
                <div class="col-md-3 col-6">
                    ${generateBox("Ports and Airport Levy", pal)}
                </div>
                <div class="col-md-3 col-6">
                    ${generateBox("Total Price", totalPrice, "bg-yellow text-white fw-bold")}
                </div>
            </div>
        </div>
    `;
    }


    function generateBox(label, value, extraClasses = "bg-light") {
        return `
            <lable class="badge bg-dark mb-1 genbox_lable">${label}</lable>
            <div class="border genbox-card p-3 rounded text-md-center text-left ${extraClasses}">
                <p class="m-0 genbox_p fw-bold">${formatToLKR(value)}</p>
            </div>
    `;
    }
});
</script>














@endsection
