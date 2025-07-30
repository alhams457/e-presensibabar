<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-startbar="dark" data-bs-theme="dark">

    <head>
        

      @include('partials.backed_end.head')

    </head>

    <body>
         @include('partials.backed_end.top_bar')        

        @include('partials.backed_end.left_bars')

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