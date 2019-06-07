<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
   

        <form action="{{url('\ingresarP')}}" method="get" accept-charset="utf-8">
             <button type="submit" name="VolverIngresar" class="btn btn-primary">Volver a Ingresar</button>
        </form>
            
    <CENTER><h1>FORMULARIO MOSTRAR <span class="badge badge-secondary"></span></h1></CENTER>
    <br>
   



  <table class="table table-bordered">
  <thead>
    <tr>
        <th colspan="" rowspan="" headers="" scope=""></th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CEDULA</th>
      <th scope="col">PROMEDIO</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>{{$arreglo[0]}}</td>
      <td>{{$arreglo[1]}}</td>
      <td>{{$arreglo[2]}}</td>
       <td >{{$arreglo[3]}}</td>

      @if($arreglo[3]>=9and $arreglo[3]<11)
      
      <td style="background-color: #0FDE31">EXCELENTE</td>
        @elseif($arreglo[3]>=7 and $arreglo[3]< 9)
      <td style="background-color: #310AF9">MUY BUENO</td>
      @elseif($arreglo[3]>=5 and $arreglo[3]< 7)
      <td style="background-color: #E7FB0E">BUENO</td>
      @elseif($arreglo[3]>0 and $arreglo[3]< 5)
      <td style="background-color: #F70909">REGULAR</td>
      @endif
    </tr>
  
  </tbody>
</table>
        
	
</body>
</html>