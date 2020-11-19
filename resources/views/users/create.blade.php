@extends('navbar')

@section('content')
<div class="row" >
    <div class="col-xs-12 col-lg-6" >
        <img src="{{asset('img/magna.jpeg')}}" width="100%" alt="">
    </div>
    <div class="col-xs-12 col-lg-6">
      <div >
        @if($errors->any())
        <div class="alert alert-danger font-weight-bold">
           
            <h4>Errores al Guardar Usuario</h4>
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
        <h1 class=" text-center mb-5 mt-5">FORMULARIO DE CREACION DE USUARIO</h1>

 
    <form action="/user" method="POST" class="mx-auto" enctype="multipart/form-data" style="max-width: 20rem">
        @csrf
  
          <div class="form-group">
           <center> <label for="exampleInputEmail1"><i class="far fa-user"></i> NOMBRE</label></center>
            <input required   type="text" class="form-control" name="name" placeholder="ingrese su nombre">
            <center> <label for="exampleInputEmail1" class="mt-2"><i class="far fa-user"></i> APELLIDO</label></center>
            <input required  type="text" class="form-control" name="apellido" placeholder="ingrese su nombre">
          </div> 
         
          <div class="form-group">
           <center> <label for="email"><i class="far fa-envelope"></i> Email </label></center>
            <input  type="email" class="form-control" name="email" placeholder="ingrese su email" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <center> <label ><i class="fas fa-id-card"></i> Cedula </label></center>
             <input maxlength="10" minlength="10" type="text" class="form-control" name="cedula" placeholder="ingrese numero de cedula" >
           </div>
           <div class="form-group">
            <center> <label ><i class="fas fa-house-user"></i> Codigo de Residencia </label></center>
             <select name="residencia" class="form-control">
               @foreach ($residencias as $residencia)
               <option value="{{$residencia->residencia_id}}">{{$residencia->residencia_id}}</option>
               @endforeach
             </select>
           </div>
          <div class="form-group">
           <center> <label for="password"><i class="fas fa-unlock-alt"></i> Password</label></center>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
          <center>  <label for="password"><i class="fas fa-unlock-alt"></i> Confirme Password</label></center>
            <input type="password" class="form-control" name="password_confirmation">
          </div>
          
         
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Guardar</i></button>
          <button type="reset" class="btn btn-danger"><i class="fas fa-window-close"> Cancelar</i> </button>
  
        </form>
      
    </div>
</div>

@endsection