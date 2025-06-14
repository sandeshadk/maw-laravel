@extends('backend.layouts.app')

@section('title', 'photo')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'photo.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.photo.partials.form', ['header' => 'Create a image'])
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

@endpush
