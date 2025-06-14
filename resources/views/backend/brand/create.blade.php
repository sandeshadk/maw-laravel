@extends('backend.layouts.app')

@section('title', 'Programs')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'feature.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.brand.partials.form', ['header' => 'Add programs'])
            {{ Form::close() }}
        </div>
    </section>
@stop
