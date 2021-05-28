@extends('layouts.master-without-nav')
@section('title' , 'Register')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
          </div>

          <div class="card card-primary">
            <div class="card-header"><h4>Register</h4></div>

            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                <div class="row">
                  <div class="form-group col-12">
                    <label for="name">Nama</label>
                    <input id="name" type="text" class="form-control" name="name" autofocus>
                    @if($errors->has('thumbnail'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                    @endif 
                </div>

                <div class="form-group col-12">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email">
                  <div class="invalid-feedback">
                  </div>
                </div>

                <div class="form-group col-12">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat" autofocus>
                  </div>


                  <div class="form-group col-12">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group col-12">
                    <label for="password-confirm" class="d-block">Password Confirmation</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                  </div>
                </div>
                

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Register
                  </button>
                </div>
              </form>
            </div>
          </div>

          <div class="simple-footer">
            Copyright &copy; {{date('Y')}} Made with 💙 by <a href="https://www.facebook.com/han.rivaldy.5" target="_blank">Farhan Rivaldy </a>
        </div>
        </div>

      </div>
    </div>
</section>


@endsection