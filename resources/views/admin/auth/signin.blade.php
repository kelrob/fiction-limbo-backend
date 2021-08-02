@extends('layouts.app')

@section('main-content')

    <section id="onboard">
        <div class="container-fluid">
            <div class="row align-items-center roww">
                <div class="col-lg-4 offset-lg-4">
                    <div class="onboard-wrapper">
                        <h1>Dashboard Access</h1>
                        <form method="POST" action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" name="email"
                                    class="form-control custom-input @error('email') is-invalid @enderror"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password"
                                    class="form-control custom-input @error('password') is-invalid @enderror"
                                    id="exampleInputPassword1">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col">
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label remember-me" for="exampleCheck1">Remember me</label>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
