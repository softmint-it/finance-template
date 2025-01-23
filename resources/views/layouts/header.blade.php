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
                <a href="{{route('home')}}">
                    <img src="./assets/img/EASYlogo.png" style="width:300px; max-width:80%;"
                        srcset="./assets/img/EASYlogo.png 2x" alt="" />
                </a>


            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <!--h3 class="text-white fs-30 mb-0">{{env('COMPANY_NAME')}}</h3 -->
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                                href="{{ route('home') }}">
                                Leasing
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link {{ Route::currentRouteName() === 'vehicle-insurance' ? 'active' : '' }}"
                                href="{{ route('vehicle-insurance') }}">
                                Insurance
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link {{ Route::currentRouteName() === 'vehicle-import' ? 'active' : '' }}"
                                href="{{ route('vehicle-import') }}">
                                Vehicle Import
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link {{ Route::currentRouteName() === 'about-us' ? 'active' : '' }}"
                                href="{{ route('about-us') }}">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link custom-nav-link {{ Route::currentRouteName() === 'contact-us' ? 'active' : '' }}"
                                href="{{ route('contact-us') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>



                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">{{env('COMPANY_EMAIL')}}</a>
                            <br /> {{env('COMPANY_PHONE')}}<br />
                            <nav class="nav social social-white mt-4">
                                <a href="{{getenv('FACEBOOK_LINK')}}"><i class="uil uil-facebook-f"></i></a>
                                <a href="{{getenv('INSTAGRAM_LINK')}}"><i class="uil uil-instagram"></i></a>
                                <a href="{{getenv('YOUTUBE_LINK')}}"><i class="uil uil-youtube"></i></a>
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
                    <li class="nav-item">
                        <a href="tel:{{env('COMPANY_PHONE')}}" class="nav-link">
                            <i class="uil uil-phone"></i>
                        </a>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li> -->
                    <li class="nav-item w-full d-none d-lg-block">
                        <button id="desktop-applynow-button" class="nav-link btn apply-now text-center">
                            <i class="uil uil-arrow-right"></i>
                            Ask for a Leasing
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
    <!-- Modal Structure -->
    <div id="phone-modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>📞 <strong>{{getenv('COMPANY_PHONE')}}</strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0">{{env('COMPANY_NAME')}}</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <p>We are a creative company that focuses on long term relationships with
                    customers.</p>
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <a href="mailto:first.last@email.com">{{env('COMPANY_EMAIL')}}</a><br /> {{env('COMPANY_PHONE')}}
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Learn More</h4>
                <ul class="list-unstyled">
                    <li><a href="{{route('home')}}">Leasing</a></li>
                    <li><a href="{{route('vehicle-insurance')}}">Insurance</a></li>
                    <li><a href="{{route('vehicle-import')}}">Vehicle Import</a></li>
                    <li><a href="{{route('about-us')}}">About Us</a></li>
                    <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
                    <a href="{{getenv('FACEBOOK_LINK')}}"><i class="uil uil-facebook-f"></i></a>
                    <a href="{{getenv('INSTAGRAM_LINK')}}"><i class="uil uil-instagram"></i></a>
                    <a href="{{getenv('YOUTUBE_LINK')}}"><i class="uil uil-youtube"></i></a>
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
<div class="modal fade" id="applyNowModal" tabindex="-1" aria-labelledby="askforleasing" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <div class="d-flex justify-lg-content-between gap-3 w-100">
                    <button type="button" id="askforleasingtitle" class="askforleasbtn w-100 btn-sm">Ask For
                        Leasing</button>
                    <button type="button" id="requestcalltitle" class="askforleasbtn w-100 btn-sm">Request a
                        Call</button>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="askforleasing">
                <form id="applyNowForm">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <p class="bg-secondary text-black" style="border-radius: 10px; padding-left:10px"><b>Leasing
                                    Information</b></p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select id="modelleasingcompany" class="form-select" name="leasing_company_id"
                                    aria-label="Default select example">
                                    <option value="0">Any Bank/Leasing</option>
                                    @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                    @endforeach
                                </select>
                                <label for="modelleasingcompany" class="form-label">Expected Bank/Leasing</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" id="modelvehicleType" class="form-control" name="vehicle_type"
                                    placeholder="Vehicle Make & Model">
                                <label for="modelvehicleType" class="form-label" name="vehicle_type">Vehicle
                                    Make & Model</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">

                                <input type="text" id="modelyear" class="form-control" name="vehicle_year"
                                    placeholder="Vehicle Model Year">
                                <label for="modelvehicleType" class="form-label" name="vehicle_type">Vehicle Model
                                    Year</label>
                            </div>
                        </div>
                        <input type="hidden" name="rate_id" id="rate_id">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">

                                <select id="modelleasingperiod" class="form-select" name="leasing_period"
                                    aria-label="Default select example">
                                    <option value="8">8 Years</option>
                                    <option value="7">7 Years</option>
                                    <option value="6">6 Years</option>
                                    <option selected value="5">5 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="2">2 Years</option>
                                    <option value="1">1 Year</option>
                                </select>
                                <label for="modelleasingperiod" class="form-label
                                    ">Leasing Period (Years)</label>


                            </div>
                        </div>
                        <div class="col-md-6 d-none">
                            <div class="form-floating mb-3">

                                <input type="text" class="form-control" id="modelleasingrate" placeholder="Leasing Rate"
                                    name="rate">
                                <label for="modelleasingrate" class="form-label
                                    ">Leasing Rate (%)</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" mb-3">
                                <div class="form-floating input-container">
                                    <input type="text" class="form-control" id="modelleasingamount"
                                        placeholder="Leasing Amount" name="amount">
                                    <span class="currencynew">{{ getenv('CURRENCY') }}</span>
                                    <label for="modelleasingamount" class="form-label
                                    ">Expected Leasing Amount</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none">
                            <div class="form-floating mb-3">

                                <input type="text" class="form-control" id="modelinstallment"
                                    placeholder="Monthly Installment" name="installment" readonly
                                    style="cursor: not-allowed;">
                                <label for="modelinstallment" class="form-label
                                    ">Monthly Installment</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <p class="bg-secondary text-black" style="border-radius: 10px; padding-left:10px">
                                <b>Personal
                                    Information</b>
                            </p>
                        </div>
                        <div class="form-floating mb-3">

                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                name="requester_name">
                            <label for="name" class="form-label">Name</label>
                        </div>
                        <div class="form-floating mb-3">

                            <input type="text" class="form-control" id="mobile" placeholder="Your Mobile Number"
                                name="mobile" required>
                            <label for="email" class="form-label">Your mobile number<span
                                    class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-3">

                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">

                            <input type="text" class="form-control" id="email" placeholder="Your Nearest City"
                                name="city" required>
                            <label for="city" class="form-label">Nearest City<span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-4 btn-sm">Request For A Leasing</button>
                </form>
            </div>
            <div class="modal-body" id="requestcall">
                <h4 class="text-start">Reach Us</h4>
                <a href="tel:{{env('COMPANY_PHONE')}}"
                    class="link-dark fs-22 fs-md-22 fs-lg-32 d-flex gap-2 align-items-center justify-content-start"
                    style="padding-left: 20px;">
                    <i class="fas fa-headset "></i>{{env('COMPANY_PHONE')}}
                </a>
                <h4 class="text-start mt-5">Request a Call</h4>
                <form id="requestcallForm">
                    @csrf
                    <div class="form-floating mb-4">
                        <input id="phone" type="text" name="mobile" class="form-control"
                            placeholder="{{env('COMPANY_PHONE')}}" required>
                        <label for="form_mobile">Your mobile number <span class="text-danger">*</span></label>
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please provide a valid mobile number </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-4 btn-sm">Request a Call</button>
                </form>
            </div>

        </div>
    </div>
</div>
<img src="./assets/img/icons/request-btn.gif" id="mobile-applynow-button" class="floating-button-new"
    srcset="./assets/img/icons/request-btn.gif" alt="request" />


</button>
<link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const askforleasingtitle = document.getElementById('askforleasingtitle');
    const requestcalltitle = document.getElementById('requestcalltitle');
    const askforleasing = document.getElementById('askforleasing');
    const requestcall = document.getElementById('requestcall');

    askforleasing.style.display = 'block';
    requestcall.style.display = 'none';
    askforleasingtitle.style.backgroundColor = 'var(--bs-primary)';
    askforleasingtitle.style.color = 'white';
    requestcalltitle.style.backgroundColor = 'white';
    requestcalltitle.style.color = 'var(--bs-primary)';


    askforleasingtitle.addEventListener('click', () => {
        askforleasing.style.display = 'block';
        requestcall.style.display = 'none';
        askforleasingtitle.style.backgroundColor = 'var(--bs-primary)';
        askforleasingtitle.style.color = 'white';
        requestcalltitle.style.backgroundColor = 'white';
        requestcalltitle.style.color = 'var(--bs-primary)';
    });

    requestcalltitle.addEventListener('click', () => {
        askforleasing.style.display = 'none';
        requestcall.style.display = 'block';
        askforleasingtitle.style.backgroundColor = 'white';
        askforleasingtitle.style.color = 'var(--bs-primary)';
        requestcalltitle.style.backgroundColor = 'var(--bs-primary)';
        requestcalltitle.style.color = 'white';

    });
});
</script>
<script>
const modelleasingAmountInput = document.getElementById('modelleasingamount');
modelleasingAmountInput.addEventListener('input', function(e) {
    const value = this.value.replace(/,/g, '');
    this.value = Number(value).toLocaleString('en-US');
});
</script>
<script>
document.addEventListener('click', function(event) {
    if (event.target && event.target.id === 'phone-icon') {
        const modal = new bootstrap.Modal(document.getElementById('phone-modal'));
        const phoneIcon = document.getElementById('phone-icon');
        const rect = phoneIcon.getBoundingClientRect();

        const modalElement = document.querySelector('#phone-modal .modal-dialog');
        modalElement.style.position = 'absolute';
        modalElement.style.top = `${rect.top + window.scrollY + 40}px`;
        modalElement.style.left = `${rect.left}px`;

        modal.show();
    }
});
</script>
<script>
document.addEventListener('click', function(event) {
    if (event.target && event.target.id === 'desktop-applynow-button') {
        const applyNowModal = new bootstrap.Modal(document.getElementById('applyNowModal'));

        const vehicleTypeSelect = document.getElementById('modelvehicleType');
        document.getElementById('modelleasingrate').value = 0;
        document.getElementById('modelleasingperiod').value = 5;
        document.getElementById('modelleasingamount').value = 0;
        document.getElementById('modelinstallment').value = 0;
        document.getElementById('modelleasingcompany').value = 0;
        vehicleTypeSelect.value = '';
        applyNowModal.show();
    }
    if (event.target && event.target.id === 'mobile-applynow-button') {
        const applyNowModal = new bootstrap.Modal(document.getElementById('applyNowModal'));
        const vehicleTypeSelect = document.getElementById('modelvehicleType');
        document.getElementById('modelleasingrate').value = 0;
        document.getElementById('modelleasingperiod').value = 0;
        document.getElementById('modelleasingamount').value = 0;
        document.getElementById('modelinstallment').value = 0;
        document.getElementById('modelleasingcompany').value = 'Select Leasing/Bank';
        vehicleTypeSelect.value = '';
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
    document.getElementById('modelleasingcompany').value = 'Select Leasing/Bank';
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
            const baseUrl = "{{ config('app.url') }}";
            fetch(`${baseUrl}/submit-quotation-request`, {
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    const requestcallForm = document.getElementById('requestcallForm');
    const requestcallModal = document.getElementById('applyNowModal');
    const requestcallModalInstance = new bootstrap.Modal(requestcallModal);

    if (requestcallForm) {
        requestcallForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(requestcallForm);
            formData.append('_token', document.querySelector('input[name="_token"]').value);
            const baseUrl = "{{ config('app.url') }}";
            fetch(`${baseUrl}/submit-request-call`, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Request call submitted successfully.',
                                confirmButtonText: 'OK',
                            })
                            .then(() => {
                                requestcallModalInstance.hide();
                                requestcallForm.reset();
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
