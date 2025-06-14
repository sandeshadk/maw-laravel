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
                              {{ Form::text('title',old('title'),['class'=>'form-control', 'required']) }}

                          </div>
                      </div>
                  </div>
                
<br>
                    <div class="row">
                    <div class="col-sm-12">

                        <input type="file" name="file" class="dropify"/>
                    </div>
                </div>
            </div>
            <!-- <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                    <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                    <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($download) && $download->is_published ? 'Save' : 'Publish' }}">
                </div>
            </div> -->
        </div>
    </div>
    <div class="col-sm-4">
          <div class="card card-affix affix-4">
              <div class="card-head">
                  <div class="tools">
                      <a class="btn btn-default btn-ink" href="{{ route('download.index') }}">
                          <i class="md md-arrow-back"></i>
                          Back
                      </a>
                  </div>
              </div>
              <div class="card-actionbar">
                  <div class="card-actionbar-row">
                      <button type="reset" class="btn btn-default ink-reaction">Reset</button>
                      <input type="submit" name="draft" class="btn btn-info ink-reaction" value="Save Draft">
                      <input type="submit" name="publish" class="btn btn-primary ink-reaction" value="{{ isset($download) && $download->is_published ? 'Save' : 'Publish' }}">
                  </div>
              </div>
          </div>
      </div>
</div>
