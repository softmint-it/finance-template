@extends('layouts.main')
@section('title', 'Easy Leasing | Privacy Policy')

@section('og:title', 'Easy Leasing | Privacy Policy')
@section('og:description', 'Understand how Easy Leasing collects, uses, and protects your personal information. Read our
privacy policy for full details.')
@section('og:url', 'https://easyleasing.lk')
@section('og:type', 'website')
@section('og:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')

@section('twitter:card', 'summary_large_image')
@section('twitter:title', 'Easy Leasing | Privacy Policy')
@section('twitter:description', 'Understand how Easy Leasing collects, uses, and protects your personal information.
Read our privacy policy for full details.')
@section('twitter:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')


@section('content')
<section class="wrapper bg-soft-primary">

    <!-- /.container -->
</section>
<!-- /section -->
<div class="container">
    <div class="row gx-0">
        <!-- /column -->
        <div class="col-xl-12">
            <section id="terms-conditions" class="wrapper pt-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">Privacy Policy</h2>
                        <p>At Easy Leasing, we value your privacy and are committed to protecting the personal
                            information you share with us. This Privacy Policy outlines how we collect, use, and
                            safeguard your data while using our services.</p>

                        <h3>1. Information We Collect</h3>
                        <p>We may collect the following types of information:</p>
                        <ul>
                            <li><strong>Personal Information:</strong> Name, email address, phone number, and any other
                                details you provide when signing up or contacting us.</li>
                            <li><strong>Usage Data:</strong> Information on how you interact with our website, including
                                IP addresses, browser type, pages visited, and time spent on the site.</li>
                            <li><strong>Cookies:</strong> Data collected through cookies to enhance your browsing
                                experience and provide personalized content.</li>
                        </ul>

                        <h3>2. How We Use Your Information</h3>
                        <p>The information we collect is used for the following purposes:</p>
                        <ul>
                            <li>To provide, operate, and maintain our website and services.</li>
                            <li>To communicate with you, respond to inquiries, and provide customer support.</li>
                            <li>To send promotional offers, newsletters, and updates (only if you have opted in).</li>
                            <li>To analyze usage patterns and improve our services.</li>
                        </ul>

                        <h3>3. Data Protection and Security</h3>
                        <p>We employ industry-standard security measures to protect your personal information from
                            unauthorized access, alteration, disclosure, or destruction. However, no method of
                            transmission over the internet is 100% secure, and we cannot guarantee absolute security.
                        </p>

                        <h3>4. Sharing of Information</h3>
                        <p>We do not sell or share your personal information with third parties, except in the following
                            cases:</p>
                        <ul>
                            <li>When required by law or in response to legal processes.</li>
                            <li>To trusted third-party service providers who assist us in operating our website or
                                providing our services, subject to confidentiality agreements.</li>
                        </ul>

                        <h3>5. Your Privacy Rights</h3>
                        <p>You have the right to access, update, or delete the personal information we have collected
                            about you. To exercise these rights, please contact us at <a
                                href="mailto:support@easyleasing.lk">support@easyleasing.lk</a>.</p>

                        <h3>6. Cookies</h3>
                        <p>We use cookies to improve your browsing experience and analyze site traffic. You can manage
                            or disable cookies through your browser settings.</p>

                        <h3>7. Changes to This Privacy Policy</h3>
                        <p>We may update this Privacy Policy from time to time to reflect changes in our practices or
                            legal requirements. Please review this page periodically for updates.</p>

                        <h3>8. Contact Us</h3>
                        <p>If you have any questions or concerns about this Privacy Policy or our data practices, please
                            contact us at:</p>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-envelope"></i></span><span>Email: <a
                                        href="mailto:{{env('COMPANY_EMAIL')}}">{{env('COMPANY_EMAIL')}}</a></span></li>
                            <li><span><i class="uil uil-phone"></i></span><span>Phone: {{env('COMPANY_PHONE')}}</span>
                            </li>
                        </ul>
                    </div>

                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
</div>
@endsection