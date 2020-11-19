@extends('navbar')

@section('content')
<section class="mt-5 pt-5">
    <h1 class="text-center">
        ADMINISTRACION DE RESERVACIONES
    </h1>
    <div class="container mb-5 mt-5 ">
       
        <form class="form-inline ml-3 " >
            <label class="mr-3">BUCAR POR:</label>
            <div class="input-group input-group-sm bg-secondary">
               
                    <select class="form-control form-control-navbar" name="search" type="searcharia-label="Search" width="50%" style="font-weight: bold;" name="" class="form-control mb-5"  id="">
                        <optio  n value="" style="font-weight: bold;">Piscinas</option>
                        <option value="" style="font-weight: bold;">Salon de Eventos</option>
                        <option value="" style="font-weight: bold;">Cancha 1(cesped)</option>
                        <option value="" style="font-weight: bold;">Cancha 2(multiuso)</option>
                        <option value="" style="font-weight: bold;">Cancha 3(multiuso 2)</option>
            
                    </select>
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
   
    <div class="container">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">First</th>
                <th scope="col" class="text-center">Last</th>
                <th scope="col" class="text-center">Handle</th>
                <th scope="col" class="text-center">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center">1</th>
                <td class="text-center">Mark</td>
                <td class="text-center">Otto</td>
                <td class="text-center">@mdo</td>
                <td><center><a href="" class="btn btn-outline-danger">ELIMINAR</a></center></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">2</th>
                <td class="text-center">Jacob</td>
                <td class="text-center">Thornton</td>
                <td class="text-center">@fat</td>
                <td><center><a href="" class="btn btn-outline-danger">ELIMINAR</a></center></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">3</th>
                <td class="text-center">Larry</td>
                <td class="text-center">the Bird</td>
                <td class="text-center">@twitter</td>
                <td><center><a href="" class="btn btn-outline-danger">ELIMINAR</a></center></td>
              </tr>
            </tbody>
          </table>
          
          
         
    </div>
</section>
@endsection