@extends('layouts.master')
@section('title' , 'Dashboard')
@section('content')
<div class="main">
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
                                <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">  
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group  {{ $errors->has('WEB_PLACE_NAME') ? 'has-error' : '' }}">
                                      <label for="WEB_PLACE_NAME">Nama Masjid / Musholla</label>
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
    </div>
@endsection
