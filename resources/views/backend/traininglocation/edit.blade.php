@extends('backend.layouts.app')

@section('title', 'traininglocation')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($location, ['route' =>['traininglocation.update', $location->slug],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.traininglocation.partials.form', ['header' => 'Edit location <span class="text-primary">('.str_limit($location->name).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop
