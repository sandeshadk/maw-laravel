<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Tags -->
    <meta name="keywords" content="MawAcademy">
    <meta name="description" content="{{'description'}}">
    <meta name="author" content="MawAcademy">

    <!-- Title-->
    <title>{{ str_replace('_', ' ',config('app.name')) }} - @yield('title', 'Page')</title>

    <!-- Styles -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('backend/css/materialadmin-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/materialadmin-default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/css/libs/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}">
      <!-- Datatable Format -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">--}}
    <!--Modernizr Js-->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/mawlogo.png')}}">

    <!-- Page Level Styles -->
    @stack('styles')
</head>
<body class="menubar-hoverable header-fixed menubar-pin menubar-first">
    @if (auth()->guest())
        @yield('guest')
    @else
        <!-- BEGIN HEADER -->
        @include('backend.layouts.partials.header')
        <!-- END HEADER -   ->
        <!- BEGIN BASE -->
        <div id="base">
            <div id="content">
                @yield('content')
            </div>

            @include('backend.layouts.partials.menubar')
        </div>
        <!-- END BASE -->
    @endif

    <!-- Global Script For Setting Session Messages and Active URL -->
    @include('backend.layouts.partials.global-script')

    <!-- Scripts -->
    <script src="{{ asset('backend/js/libs/jquery/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/spin.js/spin.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/autosize/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/App.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppNavigation.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppCard.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppForm.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppVendor.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppToast.min.js') }}"></script>
    <script src="{{ asset('backend/js/core/source/AppBootBox.min.js') }}"></script>
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>


     @push('scripts')
        <script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
        {{--<script src="{{ asset('backend/js/libs/ckeditor/ckeditor.js') }}"></script>--}}
        {{--<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>--}}

        <script>
            $(function(){
                $('.my-ckeditor').each(function(e){
                    CKEDITOR.replace( this.id,  {
                        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                        filebrowserUploadMethod: 'form'
                    });
                });
            });
        </script>
    @endpush

    <!-- Page Level Scripts -->
    @stack('scripts')
</body>
</html>
