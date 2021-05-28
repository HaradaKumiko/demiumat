@extends('layouts.master')
@section('title' , 'Kas')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Kas {{ config('web_config')['WEB_PLACE_NAME'] }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="javascript:void(0);">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0);">Kas {{ config('web_config')['WEB_PLACE_NAME'] }}</a></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-money-bill-wave-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Saldo Kas Akhir</h4>
              </div>
              <div class="card-body">
               Rp{{number_format(totalCashs())}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-money-bill-wave-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Kas Masuk</h4>
              </div>
              <div class="card-body">
                Rp{{number_format(CashsIn())}}
            </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="fas fa-money-bill-wave-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Kas Keluar </h4>
              </div>
              <div class="card-body">
               Rp{{number_format(CashsOut())}}
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="card-header">
      <h4>Data Kas {{config('web_config')['WEB_PLACE_NAME']}}</h4>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
         <tr>
            <th>Keterangan</th>
            <th>Type</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
         </tr>
         <tbody>
            @foreach ($cashs as $cash)
            <tr>
               <td>{{ $cash->info }}</td>
               <td>
                @if ($cash->type == "Keluar")
                <span class="badge badge-danger">{{ $cash->type }}</span>
                @else
                <span class="badge badge-success">{{ $cash->type }}</span>
                 @endif
                </td>
               <td>{{ $cash->created_at->diffForHumans() }}</td>
               <td>Rp. {{ number_format($cash->amount) }}</td>
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
    </section>
  </div>

@endsection
