@extends('backend.layouts.app')

@section('title', 'Product')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($service, ['route' =>['service.update', $service->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.service.partials.form', ['header' => 'Edit program <span class="text-primary">('.str_limit($service->title, 47).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop

@push('styles')
<link href="{{ asset('css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('js/libs/dropify/dropify.min.js') }}"></script>
@endpush
