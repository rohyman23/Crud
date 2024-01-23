
<h1>{{ $modo }} Empleado </h1>



<div class="form-group">

<label for="Nombre">Nombre</label>
<input type="text" required class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)? $empleado->Nombre:''}}" id="Nombre">
<br>

</div>

<div class="form-group">

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" required class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)? $empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">
<br>

</div>

<div class="form-group">

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" required class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)? $empleado->ApellidoMaterno:''}}" id="ApellidoMaterno">
<br>
</div>


<div class="form-group">

<label for="Correo">Correo</label>
<input type="text" required class="form-control" name="Correo" value="{{ isset($empleado->Correo)? $empleado->Correo:''}}" id="Correo">
<br>
<label for="Foto"></label>
</div>

<div class="form-group">

@if(isset($empleado->foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto}}" width="100px" alt="">
@endif
<input type="file" required class="form-control" name="Foto" value="" id="Foto">
<br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>

<br>