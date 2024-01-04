@extends('layouts.navbar')

@section('content')
<!-- Page Banner Area Start -->
<div class="page__banner" data-background="{{ asset('front/assets/img/page-banner.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-content">
                    <h1>Nos Formations</h1>
                    <div class="page__banner-menu">
                        <ul>
                            <li><a href="#"><i class="flaticon-home-icon-silhouette"></i> Accueil - </a>
                            </li>
                            <li> Nos Formations
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->
<div class="container">
    <div class="row">
        <div class="col-md-3">Form1</div>
        <div class="col-md-3">Form2</div>
        <div class="col-md-3">Form3</div>
        <div class="col-md-3">Form4</div>
    </div>
    <div class="row">
        <div class="col-md-3">Form1</div>
        <div class="col-md-3">Form2</div>
        <div class="col-md-3">Form3</div>
        <div class="col-md-3">Form4</div>
    </div>
    <div class="row">
        <div class="col-md-3">Form1</div>
        <div class="col-md-3">Form2</div>
        <div class="col-md-3">Form3</div>
        <div class="col-md-3">Form4</div>
    </div>
</div>

@endsection
