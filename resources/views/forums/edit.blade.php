@extends('layouts.master')
@section('title' , 'Edit Forum')
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Edit Forum</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Edit Forum</a></div>
         </div>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Edit Forum</h4>
        </div>
        <form action="{{ route('forums.update', ['forum' => $forum->id]) }}" method="POST" enctype="multipart/form-data"> 
          @csrf
          @method('PUT') 
        <div class="card-body">
          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Judul</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{$forum->title}}">
              @if($errors->has('title'))
              <div class="invalid-feedback">
                {{$errors->first('title')}}
              </div>   
              @endif  
            </div>
          </div>

          
          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Konten</label>
            <div class="col-sm-6 col-md-9">
                <textarea name="content" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}">{{ $forum->content }}</textarea>
              @if($errors->has('content'))
              <div class="invalid-feedback">
                {{$errors->first('content')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Thumbnail</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <figure>
                    <img src="{{ Storage::url($forum->thumbnail)}}" alt="thumbnail" width="100">
                  </figure>
                <input type="file" name="thumbnail" class="form-control {{ $errors->has('thumbnail') ? 'is-invalid' : '' }}">
              </div>
              @if($errors->has('thumbnail'))
              <div class="form-text text-danger">
                {{$errors->first('thumbnail')}} 
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
