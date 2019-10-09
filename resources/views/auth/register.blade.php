@extends('layout.app')
@section('content')
@include("includes/_navigation")

<div class="container">
    <div class="row mt-5">
        <div class="card border-0 shadow-sm mx-auto" style="width: 20rem;">
            <div class="card-body">
                <form>
                    <h4 class="font-weight-bold text-center">Get started</h4>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="Username">
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-home float-right">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
