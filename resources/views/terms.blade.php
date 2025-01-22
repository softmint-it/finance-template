@extends('layouts.main')
@section('title', 'Easy Leasing | Terms and Conditions')

@section('og:title', 'Easy Leasing | Terms and Conditions')
@section('og:description', 'Learn about the terms and conditions of using Easy Leasing. Understand the policies and
guidelines that govern our services.')
@section('og:url', 'https://easyleasing.lk')
@section('og:type', 'website')
@section('og:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')

@section('twitter:card', 'summary_large_image')
@section('twitter:title', 'Easy Leasing | Terms and Conditions')
@section('twitter:description', 'Learn about the terms and conditions of using Easy Leasing. Understand the policies and
guidelines that govern our services.')
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
                        <h2 class="mb-3">Terms & Conditions</h2>
                        <p>Welcome to Easy Leasing! By accessing and using our website, you agree to be bound by the
                            following terms and conditions. Please read them carefully before using our services.</p>

                        <h3>1. Acceptance of Terms</h3>
                        <p>By using this website, you acknowledge that you have read, understood, and agreed to these
                            Terms & Conditions. If you do not agree, you must not use our services.</p>

                        <h3>2. Use of the Website</h3>
                        <p>You agree to use this website only for lawful purposes and in a manner that does not infringe
                            upon the rights of others or restrict their use and enjoyment of the site. Prohibited
                            activities include:</p>
                        <ul>
                            <li>Uploading or transmitting harmful or malicious content.</li>
                            <li>Engaging in fraudulent, abusive, or illegal activities.</li>
                            <li>Attempting to gain unauthorized access to the website, servers, or related databases.
                            </li>
                        </ul>

                        <h3>3. Intellectual Property</h3>
                        <p>All content on this website, including text, images, graphics, and logos, is the intellectual
                            property of Easy Leasing or its licensors. You may not reproduce, distribute, or modify any
                            content without prior written consent.</p>

                        <h3>4. Disclaimer of Liability</h3>
                        <p>Easy Leasing provides this website and its content on an "as-is" basis without any
                            warranties, express or implied. We are not responsible for any inaccuracies or errors in the
                            information provided or for any damages arising from the use of our website.</p>

                        <h3>5. Third-Party Links</h3>
                        <p>Our website may contain links to third-party websites. We do not endorse or assume
                            responsibility for the content or practices of these external sites. Accessing third-party
                            links is at your own risk.</p>

                        <h3>6. User Accounts</h3>
                        <p>When creating an account, you are responsible for maintaining the confidentiality of your
                            login details. You agree to notify us immediately if you suspect any unauthorized access to
                            your account.</p>

                        <h3>7. Changes to Terms</h3>
                        <p>We reserve the right to modify these Terms & Conditions at any time. Any changes will be
                            posted on this page, and your continued use of the website constitutes acceptance of the
                            updated terms.</p>

                        <h3>8. Governing Law</h3>
                        <p>These Terms & Conditions are governed by and construed in accordance with the laws of Sri
                            Lanka. Any disputes arising from these terms will be subject to the exclusive jurisdiction
                            of the courts of Sri Lanka.</p>

                        <h3>9. Termination</h3>
                        <p>We reserve the right to terminate or suspend access to our website without prior notice if we
                            determine that you have violated these Terms & Conditions.</p>

                        <h3>10. Contact Us</h3>
                        <p>If you have any questions or concerns regarding these Terms & Conditions, please contact us
                            at:</p>
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