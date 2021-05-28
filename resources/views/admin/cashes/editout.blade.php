@extends('layouts.master')
@section('title' , 'Edit Kas Keluar')
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Edit Kas Keluar</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Edit Kas Keluar</a></div>
         </div>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Edit Kas Keluar</h4>
        </div>
        <form action="{{ route('cashs.updateout', ['cash' => $cash->id]) }}" method="POST"> 
          @csrf
          @method('PUT')
        <div class="card-body">

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Keterangan</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="info" class="form-control {{ $errors->has('info') ? 'is-invalid' : '' }}" value="{{ $cash->info }}">
              @if($errors->has('info'))
              <div class="invalid-feedback">
                {{$errors->first('info')}}
              </div>   
              @endif  
            </div>
          </div>

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Jumlah</label>
            <div class="col-sm-6 col-md-9">
              <input type="number" name="amount" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" value="{{ $cash->amount }}">
              @if($errors->has('amount'))
              <div class="invalid-feedback">
                {{$errors->first('amount')}}
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