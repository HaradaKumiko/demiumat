@extends('layouts.master')
@section('title' , 'Dashboard')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total User</h4>
              </div>
              <div class="card-body">
                <h6> {{totalUsers()}} </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Forum</h4>
              </div>
              <div class="card-body">
                <h6> {{totalForums()}} </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-money-bill-wave-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Saldo Kas</h4>
              </div>
              <div class="card-body">
              <h6> Rp. {{number_format(totalCashs())}} </h6>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-pallet"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Inventaris</h4>
              </div>
              <div class="card-body">
                <h6> {{totalInventory()}} </h6>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="card">
      <div class="card-header">
        <h4>{{config('web_config')['WEB_HEADER']}} </h4>
      </div>
      <div class="card-body">
        <p>Masih banyak fitur yang akan dibuat, untuk mendapatkan update atau ikut berkontribusi silahkan kunjungi halaman <a href="https://github.com/HaradaKumiko/demiumat" target="__blank">Github</a> Saya.</p>
         <p> Bila terdapat kendala dipersilahkan untuk menghubungi Saya, informasi kontak bisa lihat di halaman github yang sudah saya berikan </p>
          <strong> Thank You - ありがとうございます	</strong>
      </div>
    </div>

  </div>
    </section>
  </div>

@endsection
