@extends('layout.app')
@section('content')
@include("includes/_navigation")
<style>
    body {
        background-color: #edf2f7;
    }
</style>
<div class="alert alert-message m-0 border-0" role="alert">

    <h6 class="text-center text-light pt-2">Help make Lynk, Discover how you can help build <u style="color:#4FD1C5;">here on github</u></h6>

</div>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            hello world
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- POST COLUMN FOR DISPLAYING POSTS -->
        <div class="col-md-5">
            <div class="card border-0">
                <div class="card-body">
                    <div class="card shadow-sm border-0 mb-2 p-2">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- POST COLUMN FOR DISPLAYING POSTS -->
        <div class="col-md-4">
            <div class="card border-0">
                <div class="card-body">
                    <div class="card shadow-sm border-0 mb-2 p-2">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
