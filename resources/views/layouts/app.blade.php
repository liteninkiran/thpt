<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css') }}">

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">

        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
        <link rel='shortcut icon' type='image/x-icon' href="{{ asset('admin/assets/img/favicon.ico') }}" />
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    </head>

    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">

            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>


        <!-- General JS Scripts -->
        <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
        <!-- JS Libraies -->
        <script src="{{ asset('admin/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
        <!-- Page Specific JS File -->
        <script src="{{ asset('admin/assets/js/page/index.js') }}"></script>
        <!-- Template JS File -->
        <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
        <!-- Custom JS File -->
        <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
{{-- 
        <script>
            const imgInput = document.getElementById('image-upload');
            const previewDiv = document.getElementById('image-preview');
            src = '';
            imgInput.onchange = evt => {
                const [file] = imgInput.files;
                if (file) {
                    src = URL.createObjectURL(file);
                }
                previewDiv.style.backgroundImage = `url('${src}')`;
                previewDiv.style.backgroundRepeat = 'no-repeat';
                previewDiv.style.backgroundSize = 'Auto 100%';
            }
        </script>
 --}}
    </body>

</html>
