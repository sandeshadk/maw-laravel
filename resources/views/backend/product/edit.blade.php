@extends('backend.layouts.app')

@section('title', 'Product')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($product, ['route' =>['product.update', $product->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.product.partials.form', ['header' => 'Edit product <span class="text-primary">('.str_limit($product->title, 47).')</span>'])
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
