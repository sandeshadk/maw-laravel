@extends('backend.layouts.app')

@section('title', 'Product')

@section('content')

    <section>
        <div class="section-body">
            {{ Form::open(['route' =>['product.store', $brand],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.product.partials.form', ['header' => 'Create a product'])

            {{ Form::close() }}
        </div>
    </section>
@stop


@push('styles')
    <link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
    <script>
        var manualUploader = new qq.FineUploader({
            element: document.getElementById('fine-uploader-manual-trigger'),
            template: 'qq-template-manual-trigger',
            request: {
                endpoint: '/server/uploads'
            },
            thumbnails: {
                placeholders: {
                    waitingPath: '/source/placeholders/waiting-generic.png',
                    notAvailablePath: '/source/placeholders/not_available-generic.png'
                }
            },
            autoUpload: false,
            debug: true
        });

        qq(document.getElementById("trigger-upload")).attach("click", function() {
            manualUploader.uploadStoredFiles();
        });
    </script>
@endpush
