@if(count($errors)>0)
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

<a href="{{ url('empleado/')}}">Regresar</a>
<br>
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" value="{{ isset($empleado->nombre)?$empleado->nombre:old('nombre') }}">
<br>

<label for="apellidoPaterno">Apellido Paterno</label>
<input type="text" name="apellidoPaterno" value="{{ isset($empleado->apellidoPaterno)?$empleado->apellidoPaterno:old('apellidoPaterno')}}">
<br>

<label for="apellidoPaterno">Apellido Materno</label>
<input type="text" name="apellidoMaterno" value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:old('apellidoMaterno') }}">
<br>

<label for="foto">Foto:</label>
@if(isset($empleado->foto))
<img src="{{ asset('storage').'/'.$empleado->foto }}" width="100px" alt="">
@endif
<input type="file" name="foto" value="">
<br>
<input type="submit" value="{{$modo}}">
