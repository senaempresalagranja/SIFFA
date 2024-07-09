<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			<title>PROTOTIPO SIFFA</title>
    <link rel="stylesheet" href="css/estilos.css">
 <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
     <link rel="stylesheet" href="css/alert.css">
    <script src="js/alert.js"></script>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
   
      <link href="img/logo.png" rel="icon" >
	</head>
	<body>



<form action="calcular.php" method="post">
<!-- TODOS ESTOS DIV ES PARA HACE LA VENTANA EMERGENTE DEL SELECT MAS PULIDO  -->
<div class="modal fade" id="cultivo_select">
	<div class="modal-dialog">
		<div class="modal-content">
<!-- EL HEADER DE ABAJO ES PARA EL TOTULO -->
			<div class="modal-header">
			<!-- BOOTON CERRAR -->
			<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<!-- TITULO -->
				<h2 class="modal-title">ELIGE TU CULTIVO</h2>
				
					</div>
					<!-- CUERPO DE LA VENTANA -->
				<div class="modal-body">
					<select  name="cultivo" id="cultivo">
        <option value="cafe">cafe</option>
        <option value="mango">mango</option>
    </select>

				</div>
				<div class="modal-footer">
	
	<button class="btn btn-danger "  data-dismiss="modal" aria-hidden="true">ACEPTAR</button>
</div>
		
		</div>

	</div>


</div>
</div>

<table class="table table-bordered">

<tr>
<!-- AQUI ABAJO EL ID ES PARA HACER QUE LA VENTANA APAREZCA Y EL ESPAN ES PARA QUE APARESCA LA IMAGEN -->
	<td><a href="#cultivo_select" class="btn a" data-toggle="modal"><span><img class="elige_cultivo" src="img/elige_cultivo.jpg" title="ELIGE TU CULTIVO"      alt="imagen"/></span>ELGIGE EL CULTIVO</a></td>
</tr>

    <tr>
    <td>
    	<input class="btn" type="submit" value="CALCULAR ANALISIS DE SUELO" >
    </td>
</tr>



</table>
</form>

<style>
	
	
	
</style>

<script src="js/jquery.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
	</body>
</html>
