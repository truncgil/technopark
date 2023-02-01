<?php use App\Contents; ?>
@extends('layouts.app')
@section("title","Firma Rehberi")
@section('content')

<style>
    .default-section {
        margin: 200px 0;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 800;
    }
 
    @media screen and (max-width:768px) {
        .section-title {
            font-size: 2rem;
            font-weight: 800;
        }
    }
</style>

<section class=" about-section medium">
    <div class="header">
        <div class="container">
            <h1 class="col-12 section-title w-full t-left t-bold t-oswald" style="">
                {{e2("Firma Rehberi")}}
            </h1>

        </div>
    </div>
    <div class="container">
        <div class="row">

            
            <?php $kategoriler = contents("firma-kategorileri");
                
                ?>
            <?php foreach($kategoriler AS $k) { ?>
            <div class="col-md-3 col-6">
                <div class="card mb-3" >
                <img src="{{picture($k->cover)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        
                        <h2 class="card-title">{{e2($k->title)}}</h2>
                        <p class="card-text"></p>
                        <a href="{{$k->slug}}" class="card-link">Listele</a>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>

@endsection
