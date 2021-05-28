@extends('layouts.master')
@section('title' , 'Settings')
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Pengaturan Website</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Pengaturan Website</a></div>
         </div>
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
            <label class="form-control-label col-sm-3 text-md-right">Nama Masjid / Musholla</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="WEB_PLACE_NAME" class="form-control {{ $errors->has('WEB_PLACE_NAME') ? 'is-invalid' : '' }}" value="{{ config('web_config')['WEB_PLACE_NAME'] }}">
              @if($errors->has('WEB_PLACE_NAME'))
              <div class="invalid-feedback">
                {{$errors->first('WEB_PLACE_NAME')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Alamat Masjid / Musholla</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="WEB_PLACE_ADDRESS" class="form-control {{ $errors->has('WEB_PLACE_ADDRESS') ? 'is-invalid' : '' }}" value="{{ config('web_config')['WEB_PLACE_ADDRESS'] }}">
              @if($errors->has('WEB_PLACE_ADDRESS'))
              <div class="invalid-feedback">
                {{$errors->first('WEB_PLACE_ADDRESS')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Logo Website</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <input type="file" name="WEB_LOGO" class="form-control {{ $errors->has('WEB_LOGO') ? 'is-invalid' : '' }}">
              </div>
              @if($errors->has('WEB_LOGO'))
              <div class="form-text text-danger">
                {{$errors->first('WEB_LOGO')}} 
              </div>  
              @endif 
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Favicon</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <input type="file" name="WEB_FAVICON" class="form-control {{ $errors->has('WEB_FAVICON') ? 'is-invalid' : '' }}">
              </div>
              @if($errors->has('WEB_FAVICON'))
              <div class="form-text text-danger">
                {{$errors->first('WEB_FAVICON')}} 
              </div>  
              @endif 
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Gambar Latar Belakang</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <input type="file" name="WEB_BACKGROUND_IMAGE" class="form-control {{ $errors->has('WEB_BACKGROUND_IMAGE') ? 'is-invalid' : '' }}">
              </div>
              @if($errors->has('WEB_BACKGROUND_IMAGE'))
              <div class="form-text text-danger">
                {{$errors->first('WEB_BACKGROUND_IMAGE')}} 
              </div>  
              @endif 
            </div>
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
