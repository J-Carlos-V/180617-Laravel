@extends("../layouts/layout");
@section("contenido");

<br>
<br>
<br>
<br>


            <div class="row" style="background-color: #fff;">
            <div class= "col-md-2"></div>
            
                <div class="col-md-8 col-md-offset-2" ">
                    <table class="table table-hover">
                        <thead style="background-color: #cccccc;">
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Apellido Paterno</td>
                                <td>Apellido Paterno</td>
                                <td>Funciones</td>
                            </tr>
                        </thead>
                        <tbody>                
                        @foreach($vendedores as $vendedor)
                            <tr>
                                <td>{{$vendedor->id}}</td>
                                <td>{{$vendedor->Nombre}}</td>
                                <td>{{$vendedor->ApellidoP}}</td>
                                <td>{{$vendedor->ApellidoM}}</td>
                                
                                <td>
                                    <a href= "{{route('vendedores.create')}}" class="btn btn-outline-success btn-sm">Crear</a>
                                    <a href= "{{route('vendedores.edit', $vendedor->id)}}" class="btn btn-outline-primary btn-sm">Actualizar</a>
                                    
                                    <form method="POST" action="/vendedores/{{$vendedor->id}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="submit" name="btnSubmit" class="btn btn-outline-danger btn-sm" value="Eliminar" />
                                    </form>
                                </td>
                            </tr> 
                        @endforeach
                        </tbody>
                   </table>
                </div>
              
            </div>