   <h1>{{ $modo }} Empleado</h1>

   @if(count($errors)>0)

      <div class="alert alert-danger" rote="alert">
      <ul>
         @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>   
      </div>
      

   @endif

   <div class="form-group">
    <label for="Nombre"> Nombre</label>
    <input type="text" class="form-control" name="Nombre" 
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
   </div>

   <div class="form-group">
    <label for="ApellidoPaterno"> Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" 
    value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
   
    </diV>
    <div class="form-group">
    <label for="ApellidoMaterno"> Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" 
    value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
    
    </div>

    <div class="form-group">
    <label for="Correo"> Correo</label>
    <input type="text" class="form-control" name="Correo" 
    value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
    
    </div>

    <div class="form-group">
    <label for="Foto"> </label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid"  src="{{ asset('storage').'/'.$empleado->Foto }}" width="100px" alt="">
    @endif
    <input  type="file" class="form-control" name="Foto" value="" id="Foto">
    
    
   </div>
    <input class="btn btn-success" type="submit" value="{{  $modo }} Datos">
    <a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a><br>