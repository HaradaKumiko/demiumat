@extends('layouts.master')
@section('css')
<link href="{{ asset('assets/vendor/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('title' , 'Pengguna')
@section('content')

<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Pengguna</h1>
         <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Pengguna</a></div>
         </div>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-header">
               <h4>Daftar Pengguna {{config('web_config')['WEB_TITLE']}} </h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-4">
                     <form action="" class="form-inline">
                        <input type="text" class="form-control mr-2" placeholder="Cari Berdasarkan Nama..." name='search'>
                        <button type="submit" class='btn btn-primary'>Cari</button>
                     </form>
                  </div>
                  <div class="col-md-2 ml-auto">
                     <a class="btn btn-primary float-right" href="{{ route('users.create') }}">Tambah </a>
                  </div>
               </div>
            </div>
            <div class="table-responsive">
               <table class="table table-bordered table-md">
                  <tr>
                     <th>Nama</th>
                     <th>Role</th>
                     <th>Aksi</th>
                  </tr>
                  <tbody>
                     @foreach ($users as $user)
                     <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                           <div class='d-inline-flex'>
                              <a href="{{ route('users.edit', ['user' => $user->id]) }}" class='btn btn-icon icon-left btn-warning btn-sm mr-2'><i class="fas fa-edit"></i>Edit</a>
                              <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
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
                  <li class="page-item"> {{$users->links()}} </li>
               </ul>
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

