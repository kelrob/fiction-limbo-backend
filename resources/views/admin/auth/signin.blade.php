@extends('layouts.app')

@section('main-content')

    <section id="onboard">
        <div class="container-fluid">
            <div class="row align-items-center roww">
                <div class="col-lg-4 offset-lg-4">
                    <div class="onboard-wrapper">
                        <h1>Dashboard Access</h1>
                        <form action="dashboard" method="GET">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" class="form-control custom-input" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control custom-input" id="exampleInputPassword1">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
