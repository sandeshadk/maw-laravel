 @extends('backend.layouts.app')

@section('title', 'Brochure/flyer')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'download.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.download.partials.form', ['header' => 'Create a file for download'])
            {{ Form::close() }}
        </div>
    </section>
@endsection
