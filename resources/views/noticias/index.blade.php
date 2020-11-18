@extends('navbar')

@section('content')
    @include('noticias.model_create')
   
    <a id="inicio" href="" data-toggle="modal" data-target="#noticia_nueva" class="ml-3 mt-4 btn btn-outline-danger"><i class="fas fa-calendar-plus"></i> Añadir Noticias</a>
    <h1 class="ml-3 mt-4" >ULTIMAS NOTICIAS</h1>
    <div class="col-xs-8 col-lg-4">
        @if($errors->any())
        <div class="alert alert-danger font-weight-bold">
           
            <h4>Errores al Guardar Noticia</h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
        </div>
      @endif
    </div>
    @foreach ($noticias as $noticia)
    @include('noticias.model_delete')
<section class="jumbontron " >
          
    
    </section>
  <section class="ml-5  mt-5 mr-5">
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <img src="{{asset('img/'.$noticia->imagen)}}" width="100%" height="100%">
        </div>
        <div class="col-xs-12 col-lg-6">
            <h1 class="text-center">NOTICIA: {{$noticia->titulo}}</h1>
            <span class="font-weigth-bold" style="font-family:Georgia, 'Times New Roman', Times, serif;">fecha de publicacion: {{$noticia->created_at}} </span>
            <div class="mt-3">
                
               <p>{{$noticia->contenido_completo}}</p>
            </div>
            <center><button type="button" class=" btn btn-outline-danger" data-toggle="modal" data-target="#modalEliminar-{{$noticia->id}}"><i class="far fa-trash-alt"></i> Eliminar</button></center>
        </div>
    </div>
    
  </section>
@if ($loop->last)
<div class="mx-auto mt-5">
  <center>
  <a href="#inicio"  class=" btn btn-outline-danger "><i class="fas fa-arrow-alt-circle-up"></i> Volver</a>
  </center>
</div>
@endif
 
@endforeach
    @endsection