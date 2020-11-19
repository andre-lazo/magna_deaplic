@extends('navbar')
<style>
    body{
        background: url({{asset('img/entrada.jpeg')}}) no-repeat center center  fixed;
          font-family: 'Titillium Web', sans-serif;
          background-size: cover; 
          
      }
</style>
@section('content')
@include('alicuotas.modal_create')
@include('alicuotas.modal_edit')
<section class=" pt-5 container pb-3" id="cuerpo">
    <h1 class="text-center mt-3 mb-5 text-white font-weight-bold">ADMINISTRACION DE REGISTRO DE ALICUOTAS</h1>
       <center><a href="" class="btn btn-primary mb-4" data-toggle="modal" data-whatever="@mdo" data-target="#exampleModal2">Añadir nuevo Registro</a></center>
    <table class="table table-dark table-hover ">
        <thead>
          <tr>
            <th scope="col">#Residencia_ID</th>
            <th scope="col">Propietario</th>
            <th scope="col">Cedula</th>
            <th scope="col">Cuotas Pagadas</th>
            <th scope="col">Cuotas Adeudadas</th>
            <th scope="col">Ultima Actualizacion</th>
            <th scope="col">Ver</th>
            <th scope="col">Modificar</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($alicuotas as $alicuota)
         <tr>
          <th scope="row">#{{$alicuota->residencia_id}}</th>
          <td>{{$alicuota->nombres.' '.$alicuota->apellidos}}</td>
          <td>{{$alicuota->cedula}}</td>
          <td>{{$alicuota->cuotas_pagadas}}</td>
          <td>{{$alicuota->cuotas_adeudadas}}</td>
          <td>{{$alicuota->updated_at}}</td>
          <td class="text-center"><a href="" class="btn btn-secondary"><i class="far fa-eye"></i> Ver</a></td>
          <td ><a class="btn btn-danger"  data-toggle="modal" data-whatever="@mdo" data-target="#exampleModal">MODIFICAR</a></td>
        </tr>
         @endforeach
        </tbody>
    </table>
   </section>
@endsection