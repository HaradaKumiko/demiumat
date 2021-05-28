@extends('layouts.master')
@section('title' , 'Blog')
@section('content')
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Blog</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></div>
         </div>
        </div>
  
        <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>{{ $blog->title }}</h4>
        </div>
        <div class="card-body">
            <h6> Ditulis Oleh : {{ $blog->user->name }} </h6>
            <p>{{ $blog->created_at->diffForHumans() }} <p>

            <p>{{ $blog->content }}</p>
            <figure>
                <img src="{{ Storage::url($blog->thumbnail)}}" alt="thumbnail" width="200">
              </figure>                
          </div>
      </div>
  </div>
        </div>
      </div>
        </div>
      </section>
    </div>
@endsection
