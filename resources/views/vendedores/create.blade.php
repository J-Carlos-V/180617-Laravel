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
                <img src="/img/vendedor.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="/vendedores">
                <h3>Agrega Un Vendedor</h3>
               <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Nombre" class="form-control" placeholder="Nombre *"  required/>
                        </div>  
                        <div class="form-group">
                            <input type="text" name="ApellidoP" class="form-control" placeholder="Apellido Paterno" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="ApellidoM" class="form-control" placeholder="Apellido Materno" />
                        </div>

                        <div class="form-group">
                            {{csrf_field()}}
                            <input type="submit" name="btnSubmit" class="btnContact" value="Agregar Vendedor" />
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
</div>
section("footer");