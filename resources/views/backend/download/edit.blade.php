@extends('backend.layouts.app')

@section('title', 'Brochure/flyer')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($download, ['route' =>['download.update', $download->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.download.partials.form', ['header' => 'Edit document <span class="text-primary">('.str_limit($download->name, 47).')</span>'])
            {{ Form::close() }}
        </div>
    </section>

@endsection

@push('styles')
<link href="{{ asset('backend/css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/dropify/dropify.min.js') }}"></script>
@endpush
