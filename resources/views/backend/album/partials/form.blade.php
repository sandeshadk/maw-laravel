<div class="row">
    <div class="col-md-12">
    <!-- @include('partials.errors') -->
    </div>
    <div class="col-sm-8">
        {{--<div class="section-body">--}}

            <div class="card">
                <div class="card-head">
                    <header>{!! $header !!}</header>


                    @if (isset($errors) && $errors->has(''))
                        <div class="alert alert-block alert-error fade in" id="error-block">
                            <?php
                            $messages = $errors->all('<li>:message</li>');
                            ?>
                            <button type="button" class="close" data-dismiss="alert">×</button>

                            <h4>Warning!</h4>
                            <ul>
                                @foreach($messages as $message)
                                    {{$message}}
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form name="createnewalbum" method="POST" action="{{route('album.create_album')}}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>


                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::text('name',old('name'),['class'=>'form-control', 'required']) }}
                                            {{ Form::label('name','Album Name*') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {{ Form::text('description',old('description'),['class'=>'form-control']) }}
                                            {{ Form::label('description','Album description*') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="text-default-light">Select a Cover Image</label>
                                        @if(isset($albums) && $albums->image)
                                            <input type="file" name="cover_image" class="dropify"
                                                   data-default-file="{{ asset($albums->image->path)}}"/>
                                        @else
                                            <input type="file" name="cover_image" class="dropify"/>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <a class="btn btn-default btn-ink" href="{{route('album.index')}}">
                                <i class="md md-arrow-back"></i>
                                Back
                            </a>
                            <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                            <button type="submit" class="btn btn-info ink-reaction">Create!</button>
                        </fieldset>
                    </form>
                </div>
            </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{route('album.index')}}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            {{ Form::hidden('view', old('view')) }}
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <button type="submit" class="btn btn-info ink-reaction">Create!</button>
                </div>
            </div>
        </div>
    </div>
</div>


{{--<div class="tools visible-xs">--}}
{{--<a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">--}}
{{--<i class="md md-arrow-back"></i>--}}
{{--Back--}}
{{--</a>--}}
{{--<input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">--}}
{{--<input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-body">--}}
{{--<div class="row">--}}
{{--<div class="col-sm-12">--}}
{{--<div class="form-group">--}}
{{--{{ Form::text('name',old('name'),['class'=>'form-control', 'required']) }}--}}
{{--{{ Form::label('name','Album Name*') }}--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-sm-12">--}}
{{--<div class="form-group">--}}
{{--{{ Form::text('description',old('description'),['class'=>'form-control']) }}--}}
{{--{{ Form::label('description','Album Description*') }}--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-sm-12">--}}
{{--<label class="text-default-light">Where do you want to publish this document</label>--}}
{{--{{ Form::select('view',['Ads'=>'Ads','Popup'=>'Popup','Cover'=>'Cover Picture']) }}--}}
{{--</div>--}}

{{--</div>--}}

{{--<div class="row">--}}
{{--<div class="col-sm-12">--}}
{{--<label class="text-default-light">Select a Cover Image</label>--}}
{{--@if(isset($albums) && $album->image)--}}
{{--<input type="file" name="image" class="dropify"--}}
{{--data-default-file="{{ asset($album->image->path)}}"/>--}}
{{--@else--}}
{{--<input type="file" name="image" class="dropify"/>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<label for="cover_image">Select a Cover Image</label>--}}
{{--{{Form::file('image')}}--}}
{{--</div>--}}

{{--</div>--}}
{{--<div class="card-actionbar">--}}
{{--<div class="card-actionbar-row">--}}
{{--<button type="reset" class="btn btn-default ink-reaction">Reset</button>--}}
{{--<input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">--}}
{{--<input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($albums) && $albums->is_published ? 'Save' : 'Publish' }}">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-sm-4">--}}
{{--<div class="card card-affix affix-4">--}}
{{--<div class="card-head">--}}
{{--<div class="tools">--}}
{{--<a class="btn btn-default btn-ink" href="{{ route('album.index') }}">--}}
{{--<i class="md md-arrow-back"></i>--}}
{{--Back--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="card-actionbar">--}}
{{--<div class="card-actionbar-row">--}}
{{--<button type="reset" class="btn btn-default ink-reaction">Reset</button>--}}
{{--<input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">--}}
{{--<input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($albums) && $albums->is_published ? 'Save' : 'Publish' }}">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
