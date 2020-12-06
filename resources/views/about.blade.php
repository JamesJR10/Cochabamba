@extends('layouts.app')

@section('content')
<body>
    <div class="">
        <div class="row">
          <div class="col-1">
            
          </div>          

          <div class="col" style="background: linear-gradient(to bottom, #ffffff 0%, black 100%)">
            <h1 style="color:black">ABOUT</h1>
            
              <div class="row">
                
                <div class="col-lg-5">
                    <img src={{ asset('images/IMG_20180616_213400_083.jpg')}} class="bd-placeholder-img rounded-circle" width="140" height="140">
                  <h2>Alejandro Quintana</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A illum seq</p>
                  <p><a class="btn btn-secondary" href="https://www.facebook.com/alejandro.quintana.5203/" role="button" >mas infor &raquo;</a></p>
                </div>
            </div> 
            <br><br>
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading" style="color: #3E3E3E">ACERCA DE NOSOTROS. <span class="text" style="color: #C7C7C8" >Quienes somos nosotros?.</span></h2>
                  <p class="lead" style="color: black">Somos un par de estudiantes que estudian Ing. de Sistemas en la Universidad Privada Domingo Savio.</p>
                </div>
                <div class="col-md-5">
                  <img src={{ asset('images/domingoSavio.png')}} alt="domingoSavio" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
                </div>
            </div>
            <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading" ><span class="text-muted" >"By White Power"</span></h2>
        <p class="lead" style="color: white">Hecho por Alejandro Quintana y Ramiro Argote... Dos estudiantes que se desvelaron haciendo el proyecto final...Tuvieron miles de errores pero lo solucionaron...</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src={{ asset('images/poderBlanco.png')}} alt="domingoSavio" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div> 
    <hr class="featurette-divider">
          </div>
          <div class="col-1"  >
            
          </div>
        </div>
    </div>
</body>
@endsection
