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
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('sub_title',old('sub_title'),['class'=>'form-control', 'required']) }}
                                {{ Form::label('Sub_title','Sub_Title*') }}
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::textarea('meta_description',old('meta_description'),['class'=>'form-control', 'rows'=>2,'id'=>'my-ckeditor2']) }}
                                {{ Form::label('meta_description','Meta Description (Optional)') }}
                                <p class="help-block">For Search Engine Optimization</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::textarea('content',old('content'),['class'=>'my-ckeditor', 'id' => 'my-ckeditor']) }}
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


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => '(enter your URL here..)']) }}
                                {{ Form::label('url','Video/Audio URL') }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <strong>Where do you want to publish this page?</strong>&nbsp;
                            {{ Form::select('pagesection',['leadership' => 'leadership','technical-advisory'=>'technical-advisory','learnerstestimonials'=>'learnerstestimonials','employerstestimonials'=>'employerstestimonials','success-story'=>'success-story','industrial-advisory'=>'industrial-advisory','about-us'=>'about-us','others'=>'others']) }}
                        </div>

                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="text-default-light">Featured Image(Optiional)</label>
                            @if(isset($page) && $page->image)
                                <input type="file" name="image" class="dropify" id="input-file-events"
                                       data-default-file="{{ asset($page->image->path)}}"/>

                            @else
                                <input type="file" name="image" class="dropify"/>
                            @endif
                            <input type="hidden" name="removeimage" id="removeimage" value=""/>
                        </div>
                    </div>
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
                        <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                        <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                        <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($page) && $page->is_published ? 'Save' : 'Publish' }}">
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
