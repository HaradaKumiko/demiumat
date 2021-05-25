@extends('layouts.master')

@section('css')
<link href="{{ asset('assets/vendor/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection

@section('title' , 'Pengguna')
@section('content')
{{-- <div class="main">
    <div class="main-content">
        <div class="container-flud">  
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Pengguna</h3>
							<p class="panel-subtitle">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pengguna</a></li>
                                </ol>
                            </p>
						    </div>

					        <div class="panel-body">
                                <div class="col-md-2 float-left">
                                    <form action="" class="form-inline">
                                        <input type="text" class="form-control mr-2" placeholder="Cari Berdasarkan Nama..." name='search'>
                                        <button type="submit" class='btn btn-primary'>Cari</button>
                                    </form>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th># </th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }} </td>
                                            <td>{{$user->name}} </td>
                                            <td>{{$user->role}} </td>
                                            <td> 
                                                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-warning btn-sm"><i class="lnr lnr-pencil"></i></a>
                                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-danger btn-delete btn-sm"><i class="lnr lnr-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
							</div>
                            <div class="text-center">
                                {{$users->links()}}
                            </div>
						</div>

					</div>
            </div>
        </div>
    </div> --}}

    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
    
          <div class="section-body">
            <h2 class="section-title">Dashboard</h2>
        <p class="section-lead">This page is just an example for you to create your own page.</p>
        <div class="card">
          <div class="card-header">
            <h4>Welcome to {{config('web_config')['WEB_TITLE']}} </h4>
          </div>
          <div class="card-body">
            <div class="col-md-4">
            <form action="" class="form-inline">
                <input type="text" class="form-control mr-2" placeholder="Cari Berdasarkan Nama..." name='search'>
                <button type="submit" class='btn btn-primary'>Cari</button>
            </form>
        </div>
        <div class="col-md-2 ml-auto">
            <a class="btn btn-primary float-right" href="{{ route('users.create') }}">Tambah</a>
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
                    <td>{{$user->name}} </td>
                    <td>{{$user->role}} </td>
                    <td> 
                        <div class="d-inline-flex">
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-danger btn-delete"><i class="fas fa-trash "></i></button>
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
          </div>
          <div class="card-footer bg-whitesmoke">
            {{$users->links()}}
        </div>
        </div>
          </div>
        </section>
      </div>
@endsection

@section('script')
<script src="{{ asset('assets/vendor/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{ asset('assets/scripts/sweetalert.js') }}"></script>
@endsection
