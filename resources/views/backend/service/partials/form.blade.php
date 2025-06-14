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
                            {{ Form::text('title',old('title'),['class'=>'form-control', 'required']) }}
                            {{ Form::label('title','Title*') }}
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::textarea('sub_description',old('sub_description'),['class'=>'my-ckeditor','id' => 'my-ckeditor', 'rows'=>2]) }}
                                {{ Form::label('sub_description','Sub Description (Optional)') }}
                                <p class="help-block">For Search Engine Optimization</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::textarea('content',old('content'),[ 'id' => 'my-ckeditor2' ,'class'=>'my-ckeditor']) }}
                                <br>
                                {{ Form::label('Content','Content')}}           
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('is_featured',1, isset($service) ? $service->is_featured ? 'checked'  :'':'')}}
                                {{ Form::label('is_featured','Add to this list') }}                                
                            </div>
                        </div>
                    
                    </div>
               
               
                
                <div class="row">
                    <div class="col-sm-12">
                            <label class="text-default-light">Featured Image(Optiional)</label>
                            @if(isset($service) && $service->image)
                                <input type="file" name="image" class="dropify" id="input-file-events"
                                       data-default-file="{{ asset($service->image->path)}}"/>

                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                            <input type="hidden" name="removeimage" id="removeimage" value=""/>
                    </div>
                </div>
                

                
               
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-affix affix-4">
            <div class="card-head">
                <div class="tools">
                    <a class="btn btn-default btn-ink" onclick="history.go(-1);return false;">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction"
                           value="{{ isset($service) && $service->is_published ? 'Save' : 'Publish' }}">
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('my-ckeditor');
        CKEDITOR.replace('my-ckeditor2');
    </script>
@endpush
