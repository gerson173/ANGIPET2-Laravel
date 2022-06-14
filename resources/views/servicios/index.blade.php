<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SERVICIOS SISAV </title>
    <link rel="icon"  href="https://image.flaticon.com/icons/png/512/2045/2045264.png">
        
</head>
<h1 align="center" >PAGINA DE INICIO DE SERVICIOS</h1>
<style>
        body{
            background-image: url(imagenes/fondoservicios.jpg);
                margin:0%;
        }
</style>
<a href="{{url('servicios/create')}}"  style="color:purple; font-size:30px"> REGISTRAR SERVICIO ➦  </a>
<br>    
<table style="font-size:25px"> 
    <thead>
        <tr>
            <th>ID | </th>
            <th>DescripcionServicio | </th>
            <th>TipoServicio | </th> 
            <th>CostoServicio | </th> 
            <th>Acciones|</th>
        <tr>
    </thead>
    <tbody>

    @foreach ($servicios as $servicios)
    <tr>
        <td>{{$servicios->id}}</td>
        <td>{{$servicios->descripcionservicio}}</td>
        <td>{{$servicios->tiposervicio}}</td>
        <td>{{$servicios->costoservicio}}</td>
        <td> 
        
            <a href="{{url('/servicios/'.$servicios->id.'/edit')}}"> EDITAR </a>

            <form method="post" action="{{url('/servicios/'.$servicios->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button style="background-color:blue ; font-size:18px"  type="submit" onclick="return confirm('¿Estas Seguro \u{1F415} ?');"> BORRAR </button>
            </form>
            
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
<a href="{{url('/')}}" style="color:red; font-size:20px"> Volver al Menu Principal</a>
    