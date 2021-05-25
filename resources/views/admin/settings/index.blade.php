@extends('layouts.master')
@section('title' , 'Settings')
@section('content')
{{-- <div class="main">
    <div class="main-content">
        <div class="container-flud">  
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Settings</h3>
							<p class="panel-subtitle">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                                </ol>
                            </p>
						              </div>
					                  	<div class="panel-body">
                                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">  
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group  {{ $errors->has('WEB_PLACE_NAME') ? 'has-error' : '' }}">
                                      <label for="WEB_PLACE_NAME"></label>
                                      <input type="text" name="WEB_PLACE_NAME" class="form-control" value="{{ config('web_config')['WEB_PLACE_NAME'] }}">
                                      @if($errors->has('WEB_PLACE_NAME'))
                                          <span class="help-block">{{ $errors->first('WEB_PLACE_NAME') }}</span>
                                      @endif  
                                    </div>

                                    <div class="form-group  {{ $errors->has('WEB_PLACE_ADDRESS') ? 'has-error' : '' }}">
                                        <label for="WEB_PLACE_ADDRESS">Nama Masjid / Musholla</label>
                                        <input type="text" name="WEB_PLACE_ADDRESS" class="form-control" value="{{ config('web_config')['WEB_PLACE_ADDRESS'] }}">
                                        @if($errors->has('WEB_PLACE_ADDRESS'))
                                            <span class="help-block">{{ $errors->first('WEB_PLACE_ADDRESS') }}</span>
                                        @endif  
                                      </div>

                                    <div class="form-group  {{ $errors->has('WEB_LOGO') ? 'has-error' : '' }}">
                                        <label for="WEB_LOGO">Logo Website</label>
                                        <p><img src="{{ Storage::url('assets/'.config('web_config')['WEB_LOGO']) }}" alt="Logo" width="70"></p>
                                        <input type="file" name="WEB_LOGO" class="form-control" id="WEB_LOGO">
                                        @if($errors->has('WEB_LOGO'))
                                            <span class="help-block">{{ $errors->first('WEB_LOGO') }}</span>
                                        @endif  
                                      </div>

                                      <div class="form-group  {{ $errors->has('WEB_FAVICON') ? 'has-error' : '' }}">
                                        <label for="WEB_FAVICON">FAVICON</label>
                                        <p><img src="{{ Storage::url('assets/'.config('web_config')['WEB_FAVICON']) }}" alt="Favicon" width="70"></p>
                                        <input type="file" name="WEB_FAVICON" class="form-control">
                                        @if($errors->has('WEB_FAVICON'))
                                            <span class="help-block">{{ $errors->first('WEB_FAVICON') }}</span>
                                        @endif  
                                      </div>

                                      <div class="form-group  {{ $errors->has('WEB_BACKGROUND_IMAGE') ? 'has-error' : '' }}">
                                        <label for="WEB_BACKGROUND_IMAGE">Gambar Latar Belakang</label>
                                        <p><img src="{{ Storage::url('assets/'.config('web_config')['WEB_BACKGROUND_IMAGE']) }}" alt="Background" width="70"></p>
                                        <input type="file" name="WEB_BACKGROUND_IMAGE" class="form-control">
                                        @if($errors->has('WEB_BACKGROUND_IMAGE'))
                                            <span class="help-block">{{ $errors->first('WEB_BACKGROUND_IMAGE') }}</span>
                                        @endif  
                                      </div>

                                      <div class="form-group  {{ $errors->has('WEB_HEADER') ? 'has-error' : '' }}">
                                        <label for="WEB_HEADER">Header Website</label>
                                        <input type="text" name="WEB_HEADER" class="form-control" value="{{ config('web_config')['WEB_HEADER'] }}">
                                        @if($errors->has('WEB_HEADER'))
                                            <span class="help-block">{{ $errors->first('WEB_HEADER') }}</span>
                                        @endif  
                                      </div>

                                      <div class="form-group  {{ $errors->has('WEB_MOTTO') ? 'has-error' : '' }}">
                                        <label for="WEB_MOTTO">Semboyan Masjid / Musholla</label>
                                        <input type="text" name="WEB_MOTTO" class="form-control" value="{{ config('web_config')['WEB_MOTTO'] }}">
                                        @if($errors->has('WEB_MOTTO'))
                                            <span class="help-block">{{ $errors->first('WEB_MOTTO') }}</span>
                                        @endif  
                                      </div>
                                      <button type="submit" class='btn btn-primary'>Submit</button>
                                      
                                </form>
							</div>
						</div>
					</div>
            </div>
        </div>
    </div> --}}
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Pengaturan Website</h1>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>General Settings</h4>
        </div>
        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data"> 
          @csrf
          @method('PUT') 
        <div class="card-body">
          <div class="form-group row align-items-center">
            <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Masjid / Musholla</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="WEB_PLACE_NAME" class="form-control" value="{{ config('web_config')['WEB_PLACE_NAME'] }}">
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label for="site-description" class="form-control-label col-sm-3 text-md-right">Alamat Masjid / Musholla</label>
            <div class="col-sm-6 col-md-9">
              <textarea class="form-control" name="WEB_PLACE_ADDRESS">{{ config('web_config')['WEB_PLACE_ADDRESS'] }}</textarea>
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Logo Website</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <input type="file" name="WEB_LOGO" class="custom-file-input">
                <label class="custom-file-label">Choose File</label>
              </div>
              <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Favicon</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <input type="file" name="WEB_FAVICON" class="custom-file-input">
                <label class="custom-file-label">Choose File</label>
              </div>
              <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Gambar Latar Belakang</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <input type="file" name="WEB_BACKGROUND_IMAGE" class="custom-file-input">
                <label class="custom-file-label">Choose File</label>
              </div>
              <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
            </div>
          </div>
        </div>

        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-right">Header Website</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="WEB_HEADER" class="form-control" value="{{ config('web_config')['WEB_HEADER'] }}">
          </div>
        </div>

        <div class="form-group row align-items-center">
          <label for="site-title" class="form-control-label col-sm-3 text-md-right">Semboyan Masjid / Musholla</label>
          <div class="col-sm-6 col-md-9">
            <input type="text" name="WEB_MOTTO" class="form-control" value="{{ config('web_config')['WEB_MOTTO'] }}">
          </div>
        </div>
        
        <div class="card-footer bg-whitesmoke text-md-right">
          <button class="btn btn-primary" type="submit">Save Changes</button>
        </div>
      </div>
    </form>
  </div>
        </div>
      </div>
        </div>
      </section>
    </div>
@endsection
