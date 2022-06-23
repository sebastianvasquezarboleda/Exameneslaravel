<div class="mb-3">
  <label class="form-label">Nombre</label>
  <input type="number" value="{{ isset($procedimiento->Nombre)?$procedimiento->Nombfd:'' }}" class="form-control" id="Nombre" name="Nombre">
</div>

<div class="mb-3">
  <label class="form-label">Precio</label>
  <input type="text" value="{{ isset($procedimiento->Precio)?$procedimiento->Precio:'' }}" class="form-control" id="Precio" name="Precio">
</div>



<input type="submit" value="{{$modo}}" class="btn btn-primary">
<a href="{{ url('procedimiento') }}" class="btn btn-warning" >Regresar</a>

