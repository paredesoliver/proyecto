<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso al sistema</title>
	<!-- bootstrap -->
	<!-- primero librerias y despues archivos nuestros -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- colores -->
	<link rel="stylesheet" href="colores.css">
</head>
<body>

<div class="login">
<!-- letras de registro  -->
<svg viewbox="-4 -1 110 22">
  <defs>
    <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
      <stop offset="5%" stop-color="#D3D3D3"/>
      <stop offset="95%" stop-color="#660708"/>
    </linearGradient>
    <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
      <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
        <animateTransform
            attributeName="transform"
            begin="0s"
            dur="1.5s"
            type="translate"
            from="0,0"
            to="40,0"
            repeatCount="indefinite" />
      </path>
    </pattern>
  </defs>
  <text text-anchor="middle" x="50" y="15" font-size="21" fill="url(#wave)"  fill-opacity="50">REGISTRO</text>
  <text text-anchor="middle" x="50" y="15" font-size="21" fill="url(#gradient)" fill-opacity="0.5">REGISTRO</text>
</svg>
<!-- el resto del formulario -->

    <form method="POST" action="Clases/validar.php">
    	<input type="text" name="per_usuario" id="per_usuario" placeholder="Usuario" required="required" />
        <input type="password" name="per_clave" id="per_clave" placeholder="Clave" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large ">Ingresar</button>
    </form>

</div>


</body>
</html>