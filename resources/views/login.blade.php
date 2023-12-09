@extends('app')

@section('main')
    <main class="background-auth login">
        <div class="container auth-section">
            <div class="row">
                <div class="col-md-6 col-12 image-auth">
                    <img src="./assets/img/ManTalkingToAnimals.png" alt="Man Talking to Animals">
                </div>

                <div class="col-md-6 col-12">
                    <div class="auth-form">
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('error'))
                            <p class="alert alert-danger">{{ session('error') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                        <h1>Login</h1>
                        <form method="POST" action="{{ route('auth.login.action') }}">
                            @csrf
                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Masukkan email anda">
                            </div>

                            <div class="password-section">
                                <div class="field">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password"
                                        placeholder="Masukkan password anda">
                                </div>
                                <a href="#">Forgot Password?</a>
                            </div>


                            <div class="submit-button">
                                <button type="submit">Login</button>
                            </div>

                        </form>

                        <div class="other-links">
                            <p>Belum memiliki akun? <a href="{{ route('auth.register') }}">Daftar disini!</a></p>
                            <p>Atau <a href="{{ route('home.index') }}">masuk sebagai tamu</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

    {{-- <div class="container mt-5">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        login
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.action') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary">login</button>
                        </form>
                        <div class="mt-3 text-center">
                            <p>belum punya akun? <a href="{{ route('register') }}">registrasi disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
