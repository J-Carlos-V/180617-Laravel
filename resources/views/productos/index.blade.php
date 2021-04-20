@extends("../layouts/layout");


@section("contenido");

<br>
<br>
<br>
<br>
 
<section id="gallery">
    <div class="container">
       <div class="row">
           @foreach($productos as $producto)
          <div class="col-lg-4 mb-4">
             <div class="card">
             <a href= "{{route('productos.show', $producto->id)}}">
             <img src="/img/{{$producto->Nombre}}.png" alt="" class="card-img-top">
             </a>
                <div class="card-body">
                   <h5 class="card-title">{{$producto->Nombre}}</h5>
                   <p class="card-text">{{$producto->Descripcion}}</p>
                   <a href="" class="btn btn-outline-danger btn-sm">{{$producto->Precio}}</a>
                   <a href="" class="btn btn-outline-success btn-sm">{{$producto->Contenido}}</a>
                </div>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </section>