@extends("../layouts/layout");


@section("contenido");
<style>
            body{
            background: -webkit-linear-gradient(left, #34495e ,   #21618c  );
        }
        .contact-form{
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }
        .contact-form .form-control{
            border-radius:1rem;
        }
        .contact-image{
            text-align: center;
        }
        .contact-image img{
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            transform: rotate(29deg);
        }
        .contact-form form{
            padding: 14%;
        }
        .contact-form form .row{
            margin-bottom: -7%;
        }
        .contact-form h3{
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }
        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }
        .btnContactSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }
</style>
<br>
<br>
<br>
<br>
<br>
<div class="container contact-form">
            <div class="contact-image">
                <img src="/img/edit.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="/productos/{{$producto->id}}">
                <h3>Edita el registro</h3>
               <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Nombre" class="form-control" placeholder="Nombre *"  required value ="{{$producto->Nombre}}"/>
                        </div>  
                        <div class="form-group">
                            <input type="text" name="Descripcion" class="form-control" placeholder="Descripción" value ="{{$producto->Descripcion}}"/>
                        </div>
                        <div class="form-group">
                            <input type="number" name="Precio" class="form-control" placeholder="Precio *"  required value ="{{$producto->Precio}}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="Contenido" class="form-control" placeholder="Contenido " value ="{{$producto->Contenido}}"/>
                        </div>
                        <div class="form-group">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT" />
                            <input type="submit" name="btnSubmit" class="btnContact" value="Actualizar Producto" />
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
</div>
section("footer");