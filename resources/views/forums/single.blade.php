@extends('layouts.master')
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
          <h4>{{ $forum->title }}</h4>
        </div>
        <div class="card-body">
            <h6> Ditulis Oleh : {{ $forum->user->name }} </h6>
            <p>{{ $forum->created_at->diffForHumans() }} <p>

            <p>{{ $forum->content }}</p>
            <figure>
                <img src="{{ Storage::url($forum->thumbnail)}}" alt="thumbnail" width="200">
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
