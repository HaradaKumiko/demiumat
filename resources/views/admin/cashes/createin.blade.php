@extends('layouts.master')
@section('title' , 'Tambah Kas Masuk')
@section('css')
<link href="{{ asset('assets/vendor/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Tambah Kas Masuk</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Tambah Kas Masuk</a></div>
         </div>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Tambah Kas Masuk</h4>
        </div>
        <form action="{{ route('cashs.storein') }}" method="POST"> 
          @csrf
        <div class="card-body">

          <div class="form-group row align-items-center">
            <label class="form-control-label col-sm-3 text-md-right">Keterangan</label>
            <div class="col-sm-6 col-md-9">
              <input type="text" name="info" class="form-control {{ $errors->has('info') ? 'is-invalid' : '' }}" value="{{ old('info') }}">
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
              <input type="number" name="amount" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" value="{{ old('amount') }}">
              @if($errors->has('amount'))
              <div class="invalid-feedback">
                {{$errors->first('amount')}}
              </div>   
              @endif  
            </div>
          </div>

        <div class="card-footer bg-whitesmoke text-md-right">
          <button class="btn btn-primary" type="submit">Tambahkan</button>
        </div>
      </div>
    </form>
    
    <div class="card-header">
      <h4>Data Kas Masuk</h4>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
         <tr>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
            <th>Aksi</th>
         </tr>
         <tbody>
            @foreach ($cashs as $cash)
            <tr>
               <td>{{ $cash->info }}</td>
               <td>Rp. {{ number_format($cash->amount) }}</td>
               <td>{{ $cash->created_at->diffForHumans() }}</td>
               <td>
                  <div class='d-inline-flex'>
                     <a href="{{ route('cashs.editin', ['cash' => $cash->id]) }}" class='btn btn-icon icon-left btn-warning btn-sm mr-2'><i class="fas fa-edit"></i>Edit</a>
                     <form action="{{ route('cashs.destroy', ['cash' => $cash->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="button" class='btn btn-icon icon-left btn-danger btn-sm btn-delete'><i class="fas fa-trash"></i>Hapus</button>
                     </form>
                  </div>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
   <div class="col-md-6 ml-auto">
      <ul class="pagination float-right">
         <li class="page-item"> {{$cashs->links()}} </li>
      </ul>
   </div>

   
  </div>

        </div>
      </div>
        </div>
      </section>
    </div>
@endsection
@section('script')
<script src="{{ asset('assets/vendor/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{ asset('assets/scripts/sweetalert.js') }}"></script>
@if(Session::has('success'))
<script>
   toastr.success("{{Session::get('success')}}")
</script>
@endif
@endsection
