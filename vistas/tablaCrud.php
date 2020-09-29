
<?php
	require_once "../clases/Conexion.php";
	$con = new Conectar();
	$conexion = Conectar::conexion();
	$sql = "SELECT id_videojuego,

					nombre,
					tipo,
					fecha,
					descripcion
			FROM t_videojuegos";
	$result = mysqli_query($conexion, $sql);

	
?>

<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
 	<span class="fas fa-user-plus"></span> Agregar nuevo
</button>
<hr>
<table class="table table-hover" id="tablaDatos">
	<thead>
		<tr>
			<td>id_videojuego</td>
			<td>Nombre</td>
			<td>tipo</td>
			<td>fecha de lanzamiento</td>
			<td>descripcion</td>
		
		</tr>
	</thead>
	<tbody>
	<?php
		while($ver = mysqli_fetch_array($result)):
	 ?>
		<tr>
		<tr>
			<td><?php echo $ver['id_videojuego'] ?></td>
			<td><?php echo $ver['tipo'] ?></td>
			<td><?php echo $ver['nombre'] ?></td>
			<td><?php echo $ver['fecha'] ?></td>
			<td><?php echo $ver['descripcion'] ?></td>
			
		</tr>
		<?php
			endwhile; 
		 ?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatos').DataTable();

	});

</script>