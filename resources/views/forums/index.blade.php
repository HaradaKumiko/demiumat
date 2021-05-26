@extends('layouts.master')
@section('css')
<link href="{{ asset('assets/vendor/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('title' , 'Forum')
@section('content')

<div class="main-content">
   <section class="section">
      <div class="section-header">
         <h1>Forum</h1>
         <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Forum</a></div>
         </div>
      </div>
      <div class="section-body">
         <div class="card">
            <div class="card-header">
               <h4>Daftar Forum {{config('web_config')['WEB_TITLE']}} </h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-4">
                     <form action="" class="form-inline">
                        <input type="text" class="form-control mr-2" placeholder="Cari Berdasarkan Judul..." name='search'>
                        <button type="submit" class='btn btn-primary'>Cari</button>
                     </form>
                  </div>
                  <div class="col-md-2 ml-auto">
                     <a class="btn btn-primary float-right" href="{{ route('forums.create') }}">Tambah </a>
                  </div>
               </div>
            </div>
            <div class="table-responsive">
               <table class="table table-bordered table-md">
                  <tr>
                     <th>Judul</th>
                     <th>Konten</th>
                     <th>Tanggal</th>
                     <th>Aksi</th>
                  </tr>
                  <tbody>
                     @foreach ($forums as $forum)
                     <tr>
                        <td>{{ substr($forum->title, 0, 35)}}...</td>
                        <td>{{ substr($forum->content, 0, 20)}}...</td>
                        <td>{{ $forum->created_at->diffForHumans() }}</td>
                        <td>
                           <div class='d-inline-flex'>
                              <a href="{{ route('forums.edit', ['forum' => $forum->id]) }}" class='btn btn-icon icon-left btn-warning btn-sm mr-2'><i class="fas fa-edit"></i>Edit</a>
                              <form action="{{ route('forums.destroy', ['forum' => $forum->id]) }}" method="post">
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
                  <li class="page-item"> {{$forums->links()}} </li>
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

