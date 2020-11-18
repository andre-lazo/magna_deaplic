@extends('navbar')

@section('content')
<div class="row" >
    <div class="col-xs-12 col-lg-6" >
        <img src="{{asset('img/magna.jpeg')}}" width="100%" height="100%" alt="">
    </div>
    <div class="col-xs-12 col-lg-6">
        @if($errors->any())
          <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
          </div>
        @endif
        <h1 class=" text-center mb-5 mt-5">INGRESO DE NOTICIAS</h1>
        
 
    <form action="/noticia" method="POST" class="mx-auto" enctype="multipart/form-data" style="max-width: 20rem">
        @csrf
  
    
         
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">TITULO DE NOTICIA:</label>
            <input type="text" class="form-control" name="titulo" id="recipient-name">
          
         
           
            <label for="message-text" class="col-form-label">CONTENIDO DE PREVIO:</label><br>
            <center><textarea maxlength="350" name="previo" class="form-comtrol" style="width: 100%;" id="" cols="10" rows="5"></textarea>
              <span class="text-danger"> maximo de caracteres permitidos: 350</span>
          </center>
            <br>
            <label for="message-text" class="col-form-label">CONTENIDO COMPLETO:</label><br>
            <center><textarea class="form-comtrol" name="completo" style="width: 100%;" id="" cols="30" rows=5></textarea>
            </center>
            <br><label for="message-text" class="col-form-label">IMAGEN:</label>
            <input type="file" class="form-control" name="imagen" id="recipient-name">
           
          </div>
        
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Guardar</i></button>
          <button type="reset" class="btn btn-danger"><i class="fas fa-window-close"> Cancelar</i> </button>
  
        </form>
      
    </div>
</div>

@endsection