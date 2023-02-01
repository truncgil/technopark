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
            <h1 class="section-title w-full t-left t-bold t-oswald" style="">
				{{e2("Firma Rehberi")}}
			</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="./">{{e2("Anasayfa")}}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{e2("Firma Rehberi")}}</li>
				</ol>
			</nav>

        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-12 mb-5">
            <input type="text" name="" placeholder="{{e2("Firma Ara...")}}" class="filter form-control" target=".firma-col" id="" class="form-control">
        </div>
        
        <?php $firmalar = db("contents")
             
                ->where("type","Firmalar")
                ->where("y",1);
                
                if(getisset("q")) {
                    $q = get("q");
                    $firmalar = $firmalar->where("title","LIKE","%$q%");
                }
                $firmalar = $firmalar
                ->get();
                //print2($firmalar);
                ?>
                <?php foreach($firmalar AS $k) {
                    $j = j($k->json);
                     ?>
                      <div class="col-md-4 col-6 firma-col">
						<div class="firma-card " >
							<a href="{{$k->slug}}" class="card-link text-center">
                                <div style="background:url('{{r($k->cover,256)}}');" class="cover"></div>
								<img src="{{r($k->cover,256)}}" class="d-none img-fluid" alt="{{$k->title}}">
								<div class="card-body">
									<p class="card-title text-center"><strong>{{e2($k->title)}}</strong></p>
									<p class="card-text"></p>
                                    <?php if(isset($j['Kategorileri'])) { ?>
                                    <?php foreach($j['Kategorileri'] AS $a) { ?>
                                        <a class="badge badge-success" href="{{str_slug($a)}}">{{$a}}</a>
                                    <?php } ?>
                                    <?php } ?>
								</div>
							</a>
						</div>

					</div>
                     <?php 
                } ?>
        </div>
    </div>
</section>

@endsection
