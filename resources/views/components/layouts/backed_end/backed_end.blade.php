<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-startbar="dark" data-bs-theme="dark">

    <head>
        

      {{-- @include('partials.backed_end.head') --}}

        <meta charset="utf-8" />
        <title>Starter | Dastone - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/backed_end/images/favicon.ico') }}">


        <!-- App css -->
        <link href="{{ asset('assets/backed_end/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/backed_end/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/backed_end/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>
         @livewire('backend.partials.top-bars')        

        @livewire('backend.partials.left-bars')

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                {{ $slot }}
                
                @include('partials.backed_end.right_bar')
                @include('partials.backed_end.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        @include('partials.backed_end.footer_js')
    </body>
    <!--end body-->
</html>