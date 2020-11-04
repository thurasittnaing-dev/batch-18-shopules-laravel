@extends('layouts.frontendtemplate')
@section('title', 'home')
@section('content')
<style>
    .styleText
    {
        text-shadow: 2px 2px #5F6A6A;
    }
</style>
<div class="container">
    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4 styleText">Laravel 7 Shopules</h1>
            <div class="list-group">
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">

                @foreach($items as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                    <a href="#"><img width="200" height="200" style="object-fit: cover;" class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{$item->name}}</a>
                            </h4>
                            <h5 class="text-success">
                                @if($item->discount == 0 OR $item->discount == "")
                                {{ $item->price." mmk" }}
                                @else
                                {{ $item->discount. " mmk "}}<del class="text-muted">{{ $item->price." mmk" }}.</del>
                                @endif
                            </h5>
                            <p class="card-text">{{ $item->description}}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-info">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
</div>

@endsection
