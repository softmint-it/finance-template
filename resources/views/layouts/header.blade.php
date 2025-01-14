<style>
.apply-now {
    width: 180px;
    background-color: #f8f9fa;
    color: #000;
    border: 1px solid #000;
    border-radius: 10px;
    transition: ease-in-out 0.3s;
    font-size: 16px;
    padding-left: 2px !important;
    padding-right: 4px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
}

.apply-now:hover {
    transition: ease-in-out 0.3s;
    background-color: #000;
    color: #fff;
}

.custom-nav-link {
    transition: ease-in-out 0.3s;
}

.custom-nav-link:hover {
    scale: 1.1;
    color: blue;
    transition: ease-in-out 0.3s;
}

.custom-nav-link.active {
    font-weight: bold;
    color: blue !important;
}
</style>
<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-50">
                <a href="./index.html">
                    <img src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                </a>
                <button id="mobile-applynow-button" class="nav-link btn apply-now text-center d-lg-none d-block mt-1">
                    <i class="uil uil-arrow-right"></i>
                    Request a Quote
                </button>

            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">{{env('COMPANY_NAME')}}</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link <?= ($_SERVER['REQUEST_URI'] === '/') ? 'active' : '' ?>"
                                href="/">Leasing</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link <?= ($_SERVER['REQUEST_URI'] === '/') ? 'active' : '' ?>"
                                href="/">Insurance</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link <?= ($_SERVER['REQUEST_URI'] === '/about-us') ? 'active' : '' ?>"
                                href="/about-us">About Us</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link <?= ($_SERVER['REQUEST_URI'] === '/contact-us') ? 'active' : '' ?>"
                                href="/contact-us">Contact Us</a>
                        </li>
                    </ul>

                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">{{env('COMPANY_EMAIL')}}</a>
                            <br /> {{env('COMPANY_PHONE')}}<br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                    <li class="nav-item w-full d-none d-lg-block">
                        <button id="desktop-applynow-button" class="nav-link btn apply-now text-center">
                            <i class="uil uil-arrow-right"></i>
                            Request a Quote
                        </button>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0">{{env('COMPANY_NAME')}}</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for
                    your business.</p>
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <address> {{env('COMPANY_ADDRESS')}} </address>
                <a href="mailto:first.last@email.com">{{env('COMPANY_EMAIL')}}</a><br /> {{env('COMPANY_PHONE')}}
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Learn More</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
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
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>

<!-- Modal Markup -->
<div class="modal fade" id="applyNowModal" tabindex="-1" aria-labelledby="applyNowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyNowModalLabel">Request a Quotation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="applyNowForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="modelleasingcompany" class="form-label">Leasing Company</label><span
                                    class="text-danger">*</span>
                                <select id="modelleasingcompany" class="form-select" name="leasing_company_id"
                                    aria-label="Default select example">
                                    <option selected>Select Leasing Company</option>
                                    @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="modelvehicleType" class="form-label" name="vehicle_type">Vehicle
                                    Type</label><span class="text-danger">*</span>
                                <select id="modelvehicleType" class="form-select" aria-label="Default select example">
                                    <option selected>Select Vehicle Type</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="rate_id" id="rate_id">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="modelleasingperiod" class="form-label
                                    ">Leasing Period (Years)</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="modelleasingperiod" name=" leasing_period"
                                    placeholder="Leasing Period" required readonly style="cursor: not-allowed;">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="modelleasingrate" class="form-label
                                    ">Leasing Rate (%)</label><span class="text-danger">*</span><br><span
                                    id="modelbankratespan" class="text-danger" style="font-size:8px;"></span>
                                <input type="number" class="form-control" id="modelleasingrate"
                                    placeholder="Leasing Rate" step="0.1" name="rate" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="modelleasingamount" class="form-label
                                    ">Leasing Amount</label><span class="text-danger">*</span>
                                <input type="number" class="form-control" id="modelleasingamount"
                                    placeholder="Leasing Amount" required name="amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="modelinstallment" class="form-label
                                    ">Monthly Installment</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="modelinstallment"
                                    placeholder="Monthly Installment" required name="installment" readonly
                                    style="cursor: not-allowed;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="requester_name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label><span class="text-danger">*</span>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Phone</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="mobile" placeholder="Your Mobile Number"
                            name="mobile" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Note</label>
                        <textarea class="form-control" id="leasingnote" rows="3" placeholder="Your Message"
                            name="note"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Request</button>
                </form>
            </div>
        </div>
    </div>
</div>
<link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<script>
document.addEventListener('click', function(event) {
    if (event.target && event.target.id === 'desktop-applynow-button') {
        const applyNowModal = new bootstrap.Modal(document.getElementById('applyNowModal'));
        applyNowModal.show();
    }
    if (event.target && event.target.id === 'mobile-applynow-button') {
        const applyNowModal = new bootstrap.Modal(document.getElementById('applyNowModal'));
        applyNowModal.show();
    }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const leasingCompany = document.getElementById('modelleasingcompany');
    const vehicleTypeSelect = document.getElementById('modelvehicleType');
    const leasingPeriodInput = document.getElementById('modelleasingperiod');
    const leasingRateInput = document.getElementById('modelleasingrate');
    const bankratesspan = document.getElementById('modelbankratespan');
    const leasingAmountInput = document.getElementById('modelleasingamount');
    const installmentInput = document.getElementById('modelinstallment');
    const rateIdInput = document.getElementById('rate_id');

    document.getElementById('modelleasingrate').value = 0;
    document.getElementById('modelleasingperiod').value = 0;
    document.getElementById('modelleasingamount').value = 0;
    document.getElementById('modelinstallment').value = 0;
    document.getElementById('modelleasingcompany').value = 'Select Leasing Company';


    let bankRates = [];

    function modelcalculateInstallment() {
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
            document.getElementById('modelleasingamount').value = 0;
            document.getElementById('modelinstallment').value = 0;

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
                            option.textContent = 'No Vehicle Types Available';
                            vehicleTypeSelect.appendChild(option);
                        }
                    })
                    .catch(error => console.error('Error fetching vehicle types:', error));
            }
        });
        vehicleTypeSelect.addEventListener('change', function() {
            const selectedVehicleType = this.value;
            document.getElementById('modelleasingamount').value = 0;
            document.getElementById('modelinstallment').value = 0;

            if (selectedVehicleType && bankRates.length > 0) {
                rateIdInput.value = selectedVehicleType;
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

        leasingAmountInput.addEventListener('input', modelcalculateInstallment);
        leasingRateInput.addEventListener('input', modelcalculateInstallment);
        leasingPeriodInput.addEventListener('input', modelcalculateInstallment);
    }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const applyNowForm = document.getElementById('applyNowForm');
    const applyNowModal = document.getElementById('applyNowModal');
    const applyNowModalInstance = new bootstrap.Modal(applyNowModal);

    if (applyNowForm) {
        applyNowForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(applyNowForm);
            formData.append('_token', document.querySelector('input[name="_token"]').value);

            fetch('/submit-quotation-request', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Quotation request submitted successfully.',
                                confirmButtonText: 'OK',
                            })
                            .then(() => {
                                applyNowModalInstance.hide();
                                applyNowForm.reset();
                                window.location.reload();
                            });
                    } else if (data.status === 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
                        });
                    } else {
                        // Handle validation errors here
                        if (data.hasOwnProperty('errors')) {
                            let errorMessages = Object.values(data.errors).flat().join('<br>');
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                html: errorMessages,
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'An error occurred. Please try again later.',
                            });
                        }
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'An error occurred. Please try again later.',
                    });
                });
        });
    }
});
</script>
