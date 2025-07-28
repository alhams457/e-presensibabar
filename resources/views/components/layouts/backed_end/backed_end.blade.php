   <!-- resources/views/components/layouts/backed_end/backed_end.blade.php -->
   <!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-startbar="light"data-bs-theme="dark">  
   <head>
    @include('partials.backed_end.head')
    @livewireStyles
   </head>
   <body>
      <div>
        @include('partials.backed_end.top_bar')
        @include('partials.backed_end.left_bars')
        <div class="startbar-overlay d-print-none"></div>
        <div class="page-wrapper">
         {{ $slot }}
        </div>
        @include('partials.backed_end.footer_js') 
        @livewireScripts
      </div>

   </body>
   </html>
