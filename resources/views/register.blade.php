@extends('app')
@section('main')
    <main class="background-auth register">
        <div class="container auth-section">
            <div class="row">
                <div class="col-md-6 col-12 image-auth">
                    <img src="./assets/img/ManTalkingToAnimals.png" alt="Man Talking to Animals">
                </div>

                <div class="col-md-6 col-12">
                    <div class="auth-form">
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                        <h1>Register</h1>
                        <form method="POST" action="{{ route('auth.register.action') }}">
                            @csrf
                            <div class="field">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="full_name" id="name"
                                    placeholder="Masukkan nama lengkap anda" value="{{ old('full_name') }}">
                            </div>

                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Masukkan email anda" value="{{ old('email') }}">
                            </div>

                            <div class="field">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Masukkan password anda">
                            </div>

                            <div class="field">
                                <label for="password_confirmation">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Masukkan kembali password anda">
                            </div>

                            <div class="submit-button">
                                <button type="submit">Register</button>
                            </div>

                        </form>

                        <div class="other-links">
                            <p>Sudah memiliki akun? <a href="{{ route('auth.index') }}">Login disini!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    {{-- <div class="container mt-5">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register.action') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="Enter your name">
                            </div>
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
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                        <div class="mt-3 text-center">
                            <p>Sudah punya akun? <a href="{{ route('login') }}">Login disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
