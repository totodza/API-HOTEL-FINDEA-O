@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>CRUD</h1>
  </div>
</div>

<form action="{{ url('guardarregistro') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="form-group">
     <label for="exampleInputEmail1">nombre de habitacion</label>
     <input type="text" class="form-control" name="nombrehabitacion">
    </div> 

     <div class="form-group">
     <label for="exampleInputEmail1">numero de camas</label>
     <input type="text" class="form-control" name="numerocamas">
    </div> 

    <div class="form-group">
     <label for="exampleInputEmail1">aire</label>
     <input type="text" class="form-control" name="aire">
    </div> 

    <div class="form-group">
     <label for="exampleInputEmail1">precio</label>
     <input type="text" class="form-control" name="precio">
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Imagen</label>
        <input type="file"  name="imagen" >
    </div> 

    <br>
<button type="submit" class="btn btn-primary" id="insertar">Guardar</button>
</form>
        
@endsection
