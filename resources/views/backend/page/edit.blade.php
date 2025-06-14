@extends('backend.layouts.app')

@section('title', 'Page')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($page, ['route' =>['page.update', $page->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.page.partials.form', ['header' => 'Edit Page <span class="text-primary">('.str_limit($page->title, 47).')</span>'])
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
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

@endpush
<script>
        CKEDITOR.replace( 'my-ckeditor', {
            height: 300,// Configure your file manager integration. This example uses CKFinder 3 for PHP.
            filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
            filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images'
        } );


        
    </script>

