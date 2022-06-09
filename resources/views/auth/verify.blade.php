@extends('layouts.app')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                <h2 class="title">Mohon verifikasi email anda</h2>
                @if(session('resent'))
                <h5>Notifikasi verifikasi sudah di kirim ke email anda</h5>
                @endif
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                    Kirim tuatan
                </button>
            </form>
        </div>
    </div>
</div>

<div class="panels-container">
    <div class="panel left-panel">
        <img src="http://koperasikbn.test/image_static/login.svg" class="image" alt="" />
    </div>
</div>

</div>
@endsection