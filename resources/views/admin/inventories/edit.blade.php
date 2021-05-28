@extends('layouts.master')
@section('title' , 'Edit Inventaris')
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Edit Inventaris</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Edit Inventaris</a></div>
         </div>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Edit Inventaris</h4>
        </div>
        <form action="{{ route('inventory.update', ['inventory' => $inventory->id]) }}" method="POST" enctype="multipart/form-data"> 
          @csrf
          @method('PUT')
        <div class="card-body">

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Nama Inventaris</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{$inventory->name}}">
              @if($errors->has('name'))
              <div class="invalid-feedback">
                {{$errors->first('name')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Jumlah</label>
            <div class="col-sm-6 col-md-9">
              <input type="number" name="amount" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" value="{{ $inventory->amount }}">
              @if($errors->has('amount'))
              <div class="invalid-feedback">
                {{$errors->first('amount')}}
              </div>   
              @endif  
            </div>
          </div>

          
          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Status</label>
            <div class="col-sm-6 col-md-9">
            <select class="form-control select" name="status">
              <option value="Layak" @if($inventory->status == 'Layak') selected @endif>Layak</option>
              <option value="Tidak Layak" @if($inventory->status == 'Tidak Layak') selected @endif>Tidak Layak</option>
            </select>
          </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Sumber Inventaris</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="source" class="form-control {{ $errors->has('source') ? 'is-invalid' : '' }}" value="{{ $inventory->source }}">
              @if($errors->has('source'))
              <div class="invalid-feedback">
                {{$errors->first('source')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Gambar (opsional)</label>
            <div class="col-sm-6 col-md-9">
              <div class="custom-file">
                <figure>
                    <img src="{{ Storage::url($inventory->gallery)}}" alt="gallery" width="100">
                  </figure>
                <input type="file" name="gallery" class="form-control {{ $errors->has('gallery') ? 'is-invalid' : '' }}">
              </div>
              @if($errors->has('gallery'))
              <div class="form-text text-danger">
                {{$errors->first('gallery')}} 
              </div>  
              @endif 
            </div>
          </div>

        <div class="card-footer bg-whitesmoke text-md-right">
          <button class="btn btn-primary" type="submit">Edit Inventaris</button>
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
