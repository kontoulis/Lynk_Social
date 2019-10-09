@extends('layout.app')
@section('content')
@include("includes/_navigation")
<style>
    body{
        background-color:white;
    }
</style>
<div class="head-section">
    <div class="container d-flex pt-5">
        <div class="row align-items-center h-100">
            <div class="col-md-6">
                <h1 class="display-4 font-weight-bold">Lynk Social</h1>
                <h5 class="font-weight-light text-secondary">It is a long established fact that a reader will be distracted </h5>
                <a class="btn btn-home btn-md mt-2 mr-2" href="#" role="button">Join free</a>
                <a class="btn btn-home btn-md mt-2" href="#" role="button">View on github</a>
            </div>
            <div class="col-md-6 pt-2">
                <img src="/assets/img/Social.png" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="content-1">
    <div class="container">
        <div class="row mt-5 align-items-center h-100">
            <div class="col-md-4">
                <h4 class="font-weight-bold">Lynk social network</h4>
                <p class="text-secondary">
                    It is a long established fact that a reader will be distracted by the readable content of a page when.
                </p>
            </div>
            <div class="col-md-8">
                <img src="/assets/img/post_dummy.svg" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
