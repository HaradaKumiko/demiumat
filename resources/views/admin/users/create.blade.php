@extends('layouts.master')
@section('title' , 'Tambah Pengguna')
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Tambah Pengguna</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Tambah Pengguna</a></div>
         </div>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Tambah Pengguna</h4>
        </div>
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data"> 
          @csrf
        <div class="card-body">

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Nama</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}">
              @if($errors->has('name'))
              <div class="invalid-feedback">
                {{$errors->first('name')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Email</label>
            <div class="col-sm-6 col-md-9">
              <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}">
              @if($errors->has('email'))
              <div class="invalid-feedback">
                {{$errors->first('email')}}
              </div>   
              @endif  
            </div>
          </div>

          
          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Role</label>
            <div class="col-sm-6 col-md-9">
            <select class="form-control select" name="role">
              <option value="Warga" {{ (old('role') == 'Warga') ? 'selected' : '' }}>Warga</option>
              <option value="Pengurus Takmir {{ (old('role') == 'Pengurus Takmir') ? 'selected' : '' }}">Pengurus Takmir</option>
              <option value="Administrator {{ (old('role') == 'Administrator') ? 'selected' : '' }}">Administrator</option>
            </select>
          </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Alamat</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="alamat" class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" value="{{ old('alamat') }}">
              @if($errors->has('alamat'))
              <div class="invalid-feedback">
                {{$errors->first('alamat')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Telepon</label>
            <div class="col-sm-6 col-md-9">
              <input type="number" name="telepon" class="form-control {{ $errors->has('telepon') ? 'is-invalid' : '' }}" value="{{ old('telepon') }}">
              @if($errors->has('telepon'))
              <div class="invalid-feedback">
                {{$errors->first('telepon')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Avatar</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <input type="file" name="avatar" class="form-control {{ $errors->has('avatar') ? 'is-invalid' : '' }}">
              </div>
              @if($errors->has('avatar'))
              <div class="form-text text-danger">
                {{$errors->first('avatar')}} 
              </div>  
              @endif 
            </div>
          </div>

        <div class="card-footer bg-whitesmoke text-md-right">
          <button class="btn btn-primary" type="submit">Tambahkan Pengguna</button>
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
