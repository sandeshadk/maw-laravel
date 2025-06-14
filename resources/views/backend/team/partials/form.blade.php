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
                <div class="tab-pane active" id="first2">
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Name*</strong>
                                {{ Form::text('name',old('name'),['class'=>'form-control', 'required']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Designation*</strong>
                                {{ Form::text('position',old('position'),['class'=>'form-control', 'required','placeholder'=>'']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                   <strong>Where do you want to publish this document</strong>&nbsp;
                                      {{ Form::select('teamsection',['leadership'=>'leadership','team'=>'team', 'industrial-advisory' => 'industrial-advisory', 'technical-advisory'=>'technical-advisory'])}}
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Email*</strong>
                                {{ Form::text('email',old('email'),['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
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
                        <label class="text-default-light">Featured Image(Optional)</label>
                        @if(isset($team) && $team->image)
                            <input type="file" name="image" class="dropify"
                                   data-default-file="{{ asset($team->image->path)}}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                    </div>
                </div>

                </div>
              

            </div>
        </div>
    </div>
    
        <div class="col-sm-4">
            <div class="card card-affix affix-4">
                <div class="card-head">
                    <div class="tools">
                        <a class="btn btn-default btn-ink" href="{{ route('team.index') }}">
                            <i class="md md-arrow-back"></i>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                        <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                        <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($team) && $team->is_published ? 'Save' : 'Publish' }}">
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

