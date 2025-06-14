@extends('backend.layouts.app')

@section('title', 'traininglocation')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'traininglocation.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.traininglocation.partials.form', ['header' => 'Create a training location'])
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
