@extends('layouts.app')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">

            <form class="sign-in-form" method="POST" action="{{ route('password.update') }}">
                <h2 class="card-title">Atur Ulang Kata Sandi</h2>
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="nip" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus placeholder="NIP" />
                </div>
                <div class="input-error">
                    @error('nip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata Sandi" />
                </div>
                <div class="input-error">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autofocus placeholder="Konfirmasi Ulang" />
                </div>
                <div class="input-error">
                    @error('passowrd_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Atur Ulang
                </button>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <img src="https://kopkarkbn.com/image_static/login.svg" class="image" alt="" />
        </div>
    </div>
</div>
@endsection