<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<form action="{{url('\mostrarP')}}" method="post" accept-charset="utf-8">
    {{csrf_field()}}
    <CENTER><h1>FORMULARIO INGRESAR <span class="badge badge-secondary"></span></h1></CENTER>
    <div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NUMERO DE PERSONAS A INGRESAR:</label>
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="PERSONAS" name="numeroP" value="">
    </div>
    <br>


    <div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NOMBRE</label>
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nombre" name="nombre" value="">
    </div>
    <br>
        <div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">APELLIDO</label>
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Apellido" name="apellido" value="">
    </div>
    <br>
        <div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CEDULA</label>
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Cedula" name="cedula" value="">
    </div>
    <br>
    <div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">PROMEDIO</label>
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="promedio" name="promedio" value="">
    </div>
    <br>
    <div>
        <button type="submit" name="Ingresar" class="btn btn-primary">Ingresar</button>
    </div>
    <br>
   
</form>
   
</form>
</body>
</html>