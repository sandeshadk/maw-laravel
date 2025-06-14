@extends('backend.layouts.app')

@section('title', 'Album')

@section('content')
    <section>
        <div class="section-body">
            <!-- Create Album Form -->

            {{ Form::open(['route' =>'album.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.album.partials.form', ['header' => 'Create New Album'])
            {{ Form::close() }}


        </div>
    </section>
@stop

