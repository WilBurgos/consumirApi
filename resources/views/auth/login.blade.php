@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="http://127.0.0.1:8000/api/login"><!-- action="http://127.0.0.1:8000/api/login" || action="{{ route('login') }}" -->
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="login">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // (function () {
    //     'use strict';
    //     const clientId = 2;
    //     const clientSecret = 'JTygqUslwnqxEKzdLWA8ADRMwMyqxe1VOtsCVI32';
    //     const grantType = 'password';
    //     let login = document.getElementById('login');
    //     login.addEventListener('click', e => {
    //         e.preventDefault();
    //         fetch('http://localhost:8000/oauth/token', {
    //             method: 'POST',
    //             body: JSON.stringify({
    //                 client_id: clientId,
    //                 client_secret: clientSecret,
    //                 grant_type: grantType,
    //                 username: document.getElementById('email').value,
    //                 password: document.getElementById('password').value
    //             }),
    //             headers: { 'Content-Type': 'application/json' },
    //         }).then(response => {
    //             return response.json()
    //         }).then(data => {
    //             localStorage.setItem('token', data.access_token)
    //             console.log(data)
    //             // 'use strict';
    //             if ( localStorage.getItem('token') ) {
    //                 fetch('http://localhost:8000/api/permissions', {
    //                     method: 'GET',
    //                     headers: { 'Authorization': 'Bearer ' + localStorage.getItem('token') }
    //                 }).then(response => {
    //                     return response.json()
    //                 }).then(data => {
    //                     console.log(data)
    //                 })
    //             }
    //         })
    //     });
    // })();

    // (function () {
    //     'use strict';
    //     let login = document.getElementById('login');
    //     login.addEventListener('click', e => {
    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             data: {
    //                 'email': document.getElementById('email').value,
    //                 'password': document.getElementById('password').value
    //             },
    //             url: 'http://127.0.0.1:8000/api/login',
    //             // url: '{{ route('login') }}',
    //             dataType: 'json',
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             success: function(data) {
    //                 localStorage.setItem('token', data.access_token)
    //                 console.log(data)
    //                 $.ajax({
    //                     type: 'POST',
    //                     data: {
    //                         'user': data.user,
    //                         'acces_token': data.access_token
    //                     },
    //                     // url: 'http://127.0.0.1:8000/api/login',
    //                     url: '{{ route('dataLogin') }}',
    //                     dataType: 'json',
    //                     headers: {
    //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                     },
    //                     success: function(data) {
    //                         localStorage.setItem('token', data.access_token)
    //                         console.log(data)
    //                     },error: function(data) {
    //                         console.log(data)
    //                     }
    //                 });
    //             },error: function(data) {
    //                 console.log(data)
    //             }
    //         });
    //     });
    // })();
</script>

@endsection
