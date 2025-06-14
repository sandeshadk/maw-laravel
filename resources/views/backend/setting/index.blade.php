@extends('backend.layouts.app')

@section('title', 'Setting')

@section('content')
    <section>
        {{ Form::open(['route'=>'setting.update','class'=>'form form-validate','method'=>'PUT','files'=>true,'novalidate']) }}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-head">
                        <header>General Settings</header>
                        <div class="tools">
                            <input type="submit" class="btn btn-primary" value="Save All">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                <header>General</header>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::text('setting[name]', old('setting.name') ?: setting('name'), ['class'=>'form-control','required']) }}
                                    {{ Form::label('setting[name]', 'Name') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('setting[address]', old('setting.address') ?: setting('address'), ['class'=>'form-control','id'=>'my-ckeditor','rows'=>2,'required']) }}
                                    {{ Form::label('setting[address]', 'Address') }}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                <header>Contacts</header>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::text('setting[phone]', old('setting.phone') ?: setting('phone'), ['class'=>'form-control','required']) }}
                                    {{ Form::label('setting[phone]', 'Phone') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('setting[email]', old('setting.email') ?: setting('email'), ['class'=>'form-control','required']) }}
                                    {{ Form::label('setting[email]', 'email') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('setting[Fax Us]', old('setting.Fax Us') ?: setting('Fax Us'), ['class'=>'form-control','required']) }}
                                    {{ Form::label('setting[Fax Us]', 'Fax Us') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                <header>Social Links</header>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::textarea('setting[facebook]', old('setting.facebook') ?: setting('facebook'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    {{ Form::label('setting[facebook]', 'Facebook') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('setting[linkedin]', old('setting.linkedin') ?: setting('linkedin'), ['class'=>'form-control','rows'=>2,'required']) }}
                                    {{ Form::label('setting[linkedin]', 'Linkedin') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('setting[instagram]', old('setting.instagram') ?: setting('instagram'), ['class'=>'form-control','rows'=>1,'required']) }}
                                    {{ Form::label('setting[instagram]', 'instagram') }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('setting[youtube]', old('setting.youtube') ?: setting('youtube'), ['class'=>'form-control','rows'=>1,'required']) }}
                                    {{ Form::label('setting[youtube]', 'youtube') }}


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </section>
@stop

@push('styles')
    <link href="{{ asset('css/libs/dropify/dropify.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/libs/dropify/dropify.min.js') }}"></script>

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('my-ckeditor');
        CKEDITOR.replace('my-ckeditor2');
        CKEDITOR.replace('my-ckeditor3');
    </script>


@endpush
