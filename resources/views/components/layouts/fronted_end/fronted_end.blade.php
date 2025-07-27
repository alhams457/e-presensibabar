   <!-- resources/views/components/layouts/fronted_end/fronted_end.blade.php -->
   <!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    @include('partials.fronted_end.head')
    @livewireStyles
   </head>
   <body class="index-page">
        <div>
            <header id="header" class="header d-flex align-items-center fixed-top">
                @include('partials.fronted_end.header')     
            </header>
            <main class="main">
                @include('partials.fronted_end.main')
            </main>
            <footer id="footer" class="footer">
                @include('partials.fronted_end.footer')
            </footer>
            @include('partials.fronted_end.footer_js')
            @livewireScripts
        </div>
    </body>
   </html>