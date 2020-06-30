@extends('stack30-temp.null_content')

@section('content')

  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
          <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
              <div class="card-header border-0">
                <div class="card-title text-center">
                  <div class="p-1">
                    <img src="{{ asset('images/logo-bappeko.png') }}" alt="branding logo">
                  </div>
                </div>
              </div>
              <div class="card-content">
                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                  <span>Silakan Masuk Sesuai Username dan Password</span>
                </p>
                <div class="card-body pt-0">
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset class="form-group floating-label-form-group">
                      <label for="user-name">Username</label>
                      <input type="text" class="form-control" id="username" name="username" required data-validation-required-message="Username Harus Diisi" placeholder="Isikan Username Anda">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group mb-1">
                      <label for="user-password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Password Harus Diisi" placeholder="Silakan Masukkan Password Anda">
                    </fieldset>
                    <div class="form-group row">
                      <div class="col-md-6 col-12 text-center text-sm-left">
                        <fieldset>
                          <input type="checkbox" id="remember-me" class="chk-remember">
                          <label for="remember-me"> {{ __('Ingatkan Saya') }}</label>
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="#!" class="card-link">{{ __('Lupa Password') }}</a></div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block"><i class="ft-unlock"></i> {{ __('Masuk') }}</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@section('script_partials')
  <script src="{{ asset('stack30-temp/js/scripts/forms/validation/form-validation.js') }}" type="text/javascript"></script>
@endsection
