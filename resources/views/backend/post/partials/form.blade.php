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
            <div class="card-body">
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
                            {{ Form::textarea('sub_description',old('sub_description'),['class'=>'form-control', 'rows'=>2]) }}
                            {{ Form::label('Sub','Sub Description') }}
                        </div>
                    </div>
                </div>
               <!--  -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::textarea('Url',old('Url'),['class'=>'form-control', 'rows'=>2]) }}
                            {{ Form::label('Url','Url (Optional)') }}
                            <p class="help-block">For Audio/Video links Optimization</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ Form::textarea('content',old('content'),['class'=>'my-ckeditor','required', 'id' => 'my-ckeditor']) }}
                            <br>
                            {{ Form::label('Content','Content')}}           
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::checkbox('is_featured',1, isset($services) ? $services->is_featured ? 'checked'  :'':'')}}
                                {{ Form::label('is_featured','Feature in Homepage') }}                                
                            </div>
                        </div>
                    
                    </div>
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="text-default-dark">Where do you want to publish this?{{ Form::select('view',['abc'=>'abc','xyz'=>'xyz']) }}</label>
                            
                        </div>
                        
                    </div>
                  
                </div> -->
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-default-light">Featured Image(Optiional)</label>
                        @if(isset($post) && $post->image)
                            <input type="file" name="image" class="dropify" data-default-file="{{ asset($post->image->path) }}"/>
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
                    <a class="btn btn-default btn-ink" href="{{ route('post.index') }}">
                        <i class="md md-arrow-back"></i>
                        Back
                    </a>
                </div>
            </div>
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" name="Reset" class="btn btn-default ink-reaction">Reset</button>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($post) && $post->is_published ? 'Save' : 'Publish' }}">
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    

    <script>
        $(document).ready(function(){
            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                // return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                $('input[name=removeimage]').val(1);
            });
        });
    </script>


@endpush

