@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">MI LLAJTA </h1>
                <p class="lead text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt quibusdam
                    enim voluptate quidem vero quasi, dolor obcaecati exercitationem reiciendis cum consectetur commodi
                    cumque, quaerat quis placeat numquam debitis optio esse!</p>


                <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('restaurant.index')}}">Restaurant</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('cochabamba.index')}}">Cochabamba</a>

            </div>
            <div class="col-12 col-lg-6">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/cristo.png') }}" style="width:200px ;height:400px"
                                class="d-block w-100" alt="imagen cristo">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color: black">Cristo</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/cristo.jpg') }}" style="height: 400px" class="d-block w-100"
                                alt="imagen cristo">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="color: black">Cristo</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/cristo wilster.jpg') }}" style="height: 400px"
                                class="d-block w-100" alt="imagen cristo">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Cristo vestido de rojo =W=</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>

            </div>

        </div>
        <br>
        <br>
        <br>
    </div>

</main>
@endsection
