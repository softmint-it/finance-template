<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="@yield('description', 'Find and compare the best vehicle leasing rates in Sri Lanka with Easy Leasing. Get leasing options from leading banks and finance companies all in one place.')">
        <meta name="keywords"
            content="@yield('keywords', 'vehicle leasing rates Sri Lanka, car leasing Sri Lanka, bike leasing Sri Lanka, compare leasing rates, bank leasing rates Sri Lanka, finance company leasing, leasing consultant Sri Lanka, Easy Leasing')">
        <meta name="author" content="@yield('author', 'https://easyleasing.lk/')">
        <title>@yield('title', 'Eazy Leasings')</title>

        <!-- Open Graph Meta Tags -->
        <meta property="og:title"
            content="@yield('og:title', 'Easy Leasing | Compare Vehicle Leasing Rates in Sri Lanka')" />
        <meta property="og:description"
            content="@yield('og:description', 'Easy Leasing is your go-to consultant for vehicle leasing rates in Sri Lanka. Compare rates from banks and finance companies to get the best deal.')" />
        <meta property="og:url" content="@yield('og:url', 'https://easyleasing.lk')" />
        <meta property="og:type" content="@yield('og:type', 'website')" />
        <meta property="og:image"
            content="@yield('og:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')" />

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="@yield('twitter:card', 'summary_large_image')" />
        <meta name="twitter:title"
            content="@yield('twitter:title', 'Easy Leasing | Compare Vehicle Leasing Rates in Sri Lanka')" />
        <meta name="twitter:description"
            content="@yield('twitter:description', 'Compare the latest vehicle leasing rates in Sri Lanka from banks and finance companies with Easy Leasing.')" />
        <meta name="twitter:image"
            content="@yield('twitter:image', 'https://easyleasing.lk/assets/img/easyleasing-compare-best-leasing-rates.jpg')" />

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/colors/navy.css') }}">
        <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

        <!-- DataTables Bootstrap 5 CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">



    </head>

    <body>
        <div class=" content-wrapper">
            @include('layouts.header')


            @yield('content')
        </div>
        @include('layouts.footer')
        @include('partials.mobilenav')
        @include('partials.progress')
        @yield('scripts')
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

        <!-- jQuery (Required for DataTables) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <!-- DataTables Bootstrap 5 JS -->
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

        <!-- helper js -->
        <script src="{{ asset('assets/js/helper.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <script>
        const notify = @json(session('notify', []));

        if (notify.length > 0) {
            notify.forEach(function(notification) {
                const type = notification[0];
                const message = notification[1];
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: type,
                    title: message,
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            });
        }
        </script>
        <script>
        const notifyn = @json($notify ?? []);

        if (notifyn.length > 0) {
            notifyn.forEach(function(notification) {
                const type = notification[0];
                const message = notification[1];
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: type,
                    title: message,
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            });
        }
        </script>


    </body>



</html>