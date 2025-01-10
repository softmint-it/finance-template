<style>
.apply-now {
    width: 130px;
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
                    Apply Now
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
                            Apply Now
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
                <h5 class="modal-title" id="applyNowModalLabel">Apply Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="applyNowForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

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