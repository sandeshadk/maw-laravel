<div class="row">
    <div class="col-md-12">
        @include('partials.errors')
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-head">
               
                <header>{!! $header !!}</header>
                <div class="tools visible-xs">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="Publish">
                </div>
            </div>
            <div class="card-body tab-content">
                     <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Title*</strong>
                                {{ Form::text('title',old('title'),['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Content*</strong>
                                {{ Form::textarea('content',old('content'),['class'=>'form-control','placeholder'=>'','rows'=>2,'cols'=>40]) }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>first_button_title*</strong>
                                    {{ Form::text('first_button_title',old('first_button_title'),['class'=>'form-control','rows'=>2,'cols'=>40]) }}
                                </div>
                                
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>first_button_url*</strong>
                                    {{ Form::text('first_button_url',old('first_button_url'),['class'=>'form-control']) }}
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>second_button_title*</strong>
                                    {{ Form::text('second_button_title',old('second_button_title'),['class'=>'form-control']) }}
                                </div>
                                
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>second_button_url*</strong>
                                    {{ Form::text('second_button_url',old('second_button_url'),['class'=>'form-control']) }}
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-default-light">Featured Image    <strong>Note</strong>:(Dimension:1350*450px)</label>
                            @if(isset($slider) && $slider->image)
                                <input type="file" name="image" class="dropify"
                                       data-default-file="{{ asset($slider->image->path) }}"/>
                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                        </div>
                    </div>

                
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" href="{{ route('slider.index') }}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($slider) && $slider->is_published ? 'Save' : 'Publish' }}">
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
<script>
    CKEDITOR.replace( 'my-ckeditor' );
</script>
@endpush
