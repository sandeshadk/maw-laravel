@extends('backend.layouts.app')

@section('title', 'Feature')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($brand, ['route' =>['feature.update', $brand->brand],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.brand.partials.form', ['header' => 'Edit Feature <span class="text-primary">('.str_limit($brand->title, 47).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop
