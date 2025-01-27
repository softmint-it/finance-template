@extends('layouts.main')

@section('title', 'About Us')

@section('customstyles')
<style>
.review-text {
  color: #333;
  line-height: 1.6;
}

.more-text {
  color: #007bff;
  cursor: pointer;
  font-weight: bold;
  margin-left: 5px;
}
</style>
@endsection


@section('content')
<section class="wrapper bg-white mt-10 ">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-4">Hello! This is {{env('COMPANY_NAME')}}</h1>
                <p class="lead fs-lg mb-0">A company provides best leasing consultation</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{env('BASE_URL')}}/assets/img/photos/bg12.jpg"
            alt="" /></figure> -->
</section>
<!-- /section -->
<section class="wrapper bg-light  upper-end lower-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
                <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                    style="top: 3rem; left: 5.5rem"></div>
                <div class="overlap-grid overlap-grid-2">
                    <div class="item">


                        <figure class="rounded shadow d-none d-md-block"><img
                                src="{{env('BASE_URL')}}/assets/img/rover-aboutus.jpg "
                                srcset="{{env('BASE_URL')}}/assets/img/rover-aboutus.jpg  2x" alt=""></figure>
                    </div>
                    <div class="item">
                        <figure class="rounded shadow"><img src="{{env('BASE_URL')}}/assets/img/bmw-aboutus.jpg"
                                srcset="{{env('BASE_URL')}}/assets/img/bmw-aboutus.jpg 2x" alt=""></figure>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="{{env('BASE_URL')}}/assets/img/icons/lineal/megaphone.svg"
                    class="svg-inject icon-svg icon-svg-md mb-4" alt="Who Are We Icon" />
                <h2 class="display-4 mb-3">About Us</h2>
                <p class="lead fs-lg">We are a leading vehicle leasing consultation platform, simplifying your journey
                    to finding the best leasing options by bringing together rates from multiple providers in one place.
                </p>
                <p class="mb-6">Our mission is to empower individuals and businesses by providing a transparent and
                    hassle-free way to compare and select vehicle leasing solutions that suit their needs. With a focus
                    on customer satisfaction and innovation, we make it easy for you to drive away with confidence.</p>

                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Compare rates from trusted leasing
                                    providers in one place.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Save time and money with
                                    our tailored recommendations.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Quick and easy comparison with minimal
                                    effort.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Expert support to guide you
                                    through the decision-making process.</span></li>
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
                <img src="{{env('BASE_URL')}}/assets/img/icons/lineal/list.svg"
                    class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
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
                                <h4 class="mb-1">Tell Us Your Needs</h4>
                                <p class="mb-0">Share your requirements, and we’ll handle the rest.</p>
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
                                <h4 class="mb-1">Compare & Select</h4>
                                <p class="mb-0">Review and choose the best leasing facility tailored to your needs.</p>
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
                                <h4 class="mb-1">
                                    Drive Your Dream Car</h4>
                                <p class="mb-0">Turn your dream into reality with the perfect leasing solution!</p>
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


<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-md-11 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-left">
          <h2 class="fs-15 text-uppercase text-muted mb-3">Happy Customers</h2>
          <div class="row">
              <div class="col-md-8" >
                    <h3 class="display-4">
                      See what our customers say about us.
                    </h3>
              </div>
              <div class="col-md-4" >
                    <img src="{{ url('assets/img/googlereviews5.jpg') }}" style="width:60%; float:right;" />
              </div>
          </div>
      </div>
    </div>
    <div id="reviews-container" data-cue="fadeIn">
      <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper" id="reviews-slider">
            <!-- Reviews will be dynamically inserted here -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- /section -->
<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container pt-18 pb-14 pt-md-19 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1"
                    style="top: -2rem; left: -1.4rem;"></div>
                <figure class="rounded d-none d-md-block"><img src="{{env('BASE_URL')}}/assets/img/key-aboutus.jpg"
                        srcset="{{env('BASE_URL')}}/assets/img/key-aboutus.jpg 2x" alt="">
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <img src="{{env('BASE_URL')}}/assets/img/icons/lineal/telemarketer.svg"
                    class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-8">Ready to assist with your leasing needs. Let's find the perfect solution
                    together!</h2>
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
    <!-- /.
container -->
</section>

@endsection


@section('finalscripts')
<script>

  async function fetchReviews() {
  try {
    const response = await fetch('https://easyleasing.lk/api/getgooglereviews', { mode: 'no-cors' });
    const data = await response.json();
    const reviews = data.filter(review => review.text.split(' ').length > 3); // Filter reviews with more than 3 words
    const reviewsContainer = document.getElementById('reviews-slider');

    reviews.slice(0, 5).forEach(review => { // Display only the first 5 reviews
      const fullText = review.text;
      const truncatedText = fullText.split(' ').slice(0, 20).join(' ') + (fullText.split(' ').length > 20 ? '...' : '');
        
      var reviewdiv = `<p class="review-text" data-full-text="${fullText}">${truncatedText}</p>`;    
      if(fullText.split(' ').length > 20) {
          var reviewdiv = `<p class="review-text" data-full-text="${fullText}">${truncatedText}<span class="more-text">Read More</span></p>`; 
      }
      const reviewHTML = `
        <div class="swiper-slide">
          <div class="item-inner">
            <div class="card">
              <div class="card-body">
                <span class="ratings five mb-3"></span>
                <span style="float:right; margin-bottom:20px;">
                  <svg viewBox="0 0 512 512" height="18" width="18"><g fill="none" fill-rule="evenodd"><path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4"></path><path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853"></path><path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05"></path><path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335"></path><path d="M20 20h472v472H20V20z"></path></g></svg>
                </span>
                <blockquote class="icon mb-0">
                  ${reviewdiv}
                  <div class="blockquote-details">
                    <img class="rounded-circle w-12" src="${review.profile_photo_url}" alt="User Avatar" />
                    <div class="info">
                      <h5 class="mb-0">${review.author_name}</h5>
                      <p class="mb-0">Rating: ${review.rating} ★</p>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      `;
      reviewsContainer.innerHTML += reviewHTML;
    });
    
    document.addEventListener('DOMContentLoaded', function () {
      const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
        },
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    });
    
    // Add Read More toggle functionality
    document.querySelectorAll('.review-text').forEach(review => {
      const readMoreText = review.querySelector('.more-text');
      readMoreText.addEventListener('click', () => {
        const isExpanded = review.dataset.expanded === 'true';
        const fullText = review.dataset.fullText;
        const truncatedText = fullText.split(' ').slice(0, 20).join(' ') + '...';
        if (isExpanded) {
          review.innerHTML = `${truncatedText} <span class="more-text">Read More</span>`;
        } else {
          review.innerHTML = `${fullText} `;
        }

        review.dataset.expanded = !isExpanded;
      });
    });
  } catch (error) {
    console.error('Error fetching reviews:', error);
  }
}

  fetchReviews();
</script>
@endsection


