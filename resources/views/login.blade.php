@extends('app')
@section('content')

    <div class="container mt-5">
        @if(session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
        @endif
        @if($errors->any())
        @foreach ($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        login
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('login.action')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary">login</button>
                        </form>
                        <div class="mt-3 text-center">
                            <p>belum punya akun? <a href="{{route('register')}}">registrasi disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection