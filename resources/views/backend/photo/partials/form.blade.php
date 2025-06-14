<div class="row">
    <div class="col-md-12">
    <!-- @include('partials.errors') -->
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
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                      <div class="col-sm-12">
                          <div class="form-group">
                            <strong>Title*</strong>
                              {{ Form::text('title',old('title'),['class'=>'form-control','placeholder' => '']) }}

                          </div>
                      </div>
                  </div>
                  <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <strong>Sub description*</strong>
                              {{ Form::text('sub_description',old('sub_description'),['class'=>'form-control','placeholder' => '']) }}

                          </div>
                      </div>
                    </div>
    

                    <div class="row">
                      <div class="col-sm-12">
                        <strong>Where do you want to publish this image:</strong>&nbsp;
                        {{ Form::select('photo',['popup image'=>'popup image','client'=>'client','employers'=>'employers','industrial-advisory'=>'industrial-advisory',' government partner' => 'government partner',' funding partner' => 'funding partner',' implementing partner' => 'implementing partner']) }}
                      </div>

                    </div>
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => '(enter your URL here.. only for clients)']) }}
                                {{ Form::label('url',' URL') }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <label class="text-default-light">Featured Image   (Note):(Dimensions)(partners and clients:140*120px,  employeroverview and industrial:140*120px)</label>
                        @if(isset($photo) && $photo->image)
                            <input type="file" name="image" class="dropify"
                                   data-default-file="{{ asset($photo->image->path)}}"/>
                        @else
                            <input type="file" name="image" class="dropify"/>
                        @endif
                      </div>
                    </div>
<br>
<br>

            </div>
            
        </div>
    </div>
    <div class="col-sm-4">
          <div class="card card-affix affix-4">
              <div class="card-head">
                  <div class="tools">
                      <a class="btn btn-default btn-ink" href="{{ route('photo.index') }}">
                          <i class="md md-arrow-back"></i>
                          Back
                      </a>
                  </div>
              </div>
              <div class="card-actionbar">
                  <div class="card-actionbar-row">
                      <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                      <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                      <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($photo) && $photo->is_published ? 'Save' : 'Publish' }}">
                  </div>
              </div>
          </div>
      </div>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'my-ckeditor' );
</script>
@endpush
