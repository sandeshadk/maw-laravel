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
                               {{ Form::text('location',old('location'),['class'=>'form-control']) }}
                                {{ Form::label('add location','Add location(for apply course)*') }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('course',old('course'),['class'=>'form-control']) }}
                                {{ Form::label('add course','Add course(for apply course)*') }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('graduate',old('graduate'),['class'=>'form-control']) }}
                                {{ Form::label('add graduate type','Add graduate type(for hire graduates )*') }}
                            </div>
                        </div>
                    </div>

                
                    <div class="row">
                        <div class="col-sm-12">
                            <strong>Where do you want to publish this form data?</strong>&nbsp;
                            {{ Form::select('formsection',['apply-course'=>'apply-course','hire-graduates'=>'hire-graduates']) }}
                        </div>

                    </div>
                    <br>
                    <
                    <div class="card-head">
                        <div class="tools">
                            <a class="btn btn-default btn-ink" href="{{ route('form.index') }}">
                                <i class="md md-arrow-back"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="card-actionbar">
                        <div class="card-actionbar-row">
                        <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                        <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                        <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($form) && $form->is_published ? 'Save' : 'Publish' }}">
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
