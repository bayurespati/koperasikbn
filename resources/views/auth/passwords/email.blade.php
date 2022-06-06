@extends('layouts.app')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form class="sign-in-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <h2 class="title">Forget Passowrd</h2>

                @if (session('status'))
                <div class="alert alert-ssuccess">
                    {{ session('status') }}
                </div>
                @endif

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

                <div>
                    <button type="submit" class="btn btn-primary">
                        Send Link
                    </button>

                    <button class="btn btn-primary" onclick="backLogin()">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <img src="http://koperasikbn.test/image_static/login.svg" class="image" alt="" />
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    function backLogin() {
        window.location = '/login';
    }
</script>
@endsection