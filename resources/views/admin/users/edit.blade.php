@extends('layouts.master')
@section('title' , 'Edit Pengguna')
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Edit Pengguna</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Edit Pengguna</a></div>
         </div>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Edit Pengguna</h4>
        </div>
        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data"> 
          @csrf
          @method('PUT') 
        <div class="card-body">
          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Nama</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{$user->name}}">
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
              <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{$user->email}}">
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
              <option value="Warga" @if($user->role == 'Warga') selected @endif>Warga</option>
              <option value="Pengurus Takmir" @if($user->role == 'Pengurus Takmir') selected @endif>Pengurus Takmir</option>
              <option value="Administrator" @if($user->role == 'Administrator') selected @endif>Administrator</option>
            </select>
          </div>
          </div>
  
          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Alamat</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="alamat" class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" value="{{$user->alamat}}">
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
              <input type="number" name="telepon" class="form-control {{ $errors->has('telepon') ? 'is-invalid' : '' }}" value="{{$user->telepon}}">
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
                <figure>
                    <img src="{{ Storage::url($user->avatar)}}" alt="avatar" width="100">
                  </figure>
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
