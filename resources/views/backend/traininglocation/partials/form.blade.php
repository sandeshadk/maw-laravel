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
                                <strong>Location_Name*</strong>
                                {{ Form::text('name',old('name'),['class'=>'form-control', 'required']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Address</strong>
                                {{ Form::textarea('address',old('address'),['class'=>'my-ckeditor','id'=>'my-ckeditor','required','placeholder'=>'']) }}
                            </div>
                        </div>
                    </div>
                    


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <strong>Phone*</strong>
                                {{ Form::text('phone',old('phone'),['class'=>'form-control']) }}
                            </div>
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
