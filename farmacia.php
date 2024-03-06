<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administratores</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>
<form action="inicio.php" method="post">
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
	    <section class="NotificationArea">
	        <div class="full-width text-center NotificationArea-title tittles">Advertencias<i class="zmdi zmdi-close btn-Notification"></i></div>
	        <a href="#" class="Notification" id="notifation-unread-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>Secretaria General... REVISANDO ESTADISTICAS</strong> 
	                    <br>
	                    <small>Justo Ahora</small>
	                </p>
	            </div>
	        	<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div> 
	        </a>
	        <a href="#" class="Notification" id="notifation-read-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Nuevos Medicamentos</strong> 
	                    <br>
	                    <small>Justo Ahora</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Advertencia Leida</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-unread-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger
"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>Fluconazol ¡CADUCADO!</strong> 
	                    <br>
	                    <small>Hace 3 Minutos</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Advertencia no leida</div>
	        </a> 
	        <a href="#" class="Notification" id="notifation-read-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Calcitrion ¡AGOTADO!</strong> 
	                    <br>
	                    <small>Hace 1 Minuto</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Advertencia Leida</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-read-3">
	            <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Bezafibrato ¡PRONTO A CADUCAR!</strong> 
	                    <br>
	                    <small>Hace 10 Minutos</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Advertencia Leida</div>
	        </a>  
	    </section>
	</section>
	</form>
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						
						<div class="mdl-tooltip" for="notifications">Notifications</div>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Cerrar Sesion</div>
					</li>
					<li class="text-condensedLight noLink" ><small>Farmacéutico</small></li>
					<li class="noLink">
						<figure>
							<img src="assets/img/usuario.png" alt="Avatar" class="img-responsive">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> 
			</div>
			<figure class="full-width" style="height: 80px;">
				<div class="navLateral-body-cl">
					<img src="assets/img/saludM.png" class="img-responsive">
				</div>
				<figcaption class="navLateral-body-cr hide-on-tablet">
					<span style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
						NEMILIS<br>
						<small>Sistema de Inventario</small>
					</span>
				</figcaption>
			</figure>
		<div class="full-width tittles navLateral-body-tittle-menu">
			<i class="zmdi zmdi-account-add"></i><span class="hide-on-tablet">&nbsp; Farmacéutico</span>
			</div>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-receipt"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Inventario
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
							<ul class="full-width menu-principal sub-menu-options">
								<li class="full-width">
									<a href="actualinventario.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-receipt"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Inventario
										</div>
										<a href="entradas.html" class="full-width">
											<div class="navLateral-body-cl">
												<i class="zmdi zmdi-plus"></i>
											</div>
											<div class="navLateral-body-cr hide-on-tablet">
												Ingresos
											</div>
										</a>
							<a href="salidas.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-minus"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Dispensación
								</div>
							</a>
							<a href="estadisticas.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-check-all"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									Estadística
								</div>
							</a>
							</ul>
			</nav>
		</div>
	</section>
	</section>
	<div class="full-width panel-content">
		<form  action="buscaradmin.php" method="post">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
		<i class="zmdi zmdi-search"></i>
		<input type="text" name="buscar"  style="WIDTH: 780px; "size=32 name=text1> &nbsp;       
		   <input class="mdl-button mdl-button--raised mdl-button--colored" style="WIDTH: 120px"; style="margin-left: 10px" type="submit" value="Buscar">
		</div>
		</form>
		<br><br><br> 
		<?php
			// Función para obtener los medicamentos a punto de caducar
			function obtenerMedicamentosACaducar()
			{
				// Conexión a la base de datos
				$bd_host = "127.0.0.1";
				$bd_user = "root";
				$bd_pass = "";
				$bd_name = "inventario";
				$conexion = new mysqli($bd_host, $bd_user, $bd_pass, $bd_name);
				if ($conexion->connect_errno) {
					die("Fallo:(" . $conexion->mysqli_connect_errno() . ")" . $conexion->mysqli_connect_errno());
				}

				// Array para almacenar los nombres de los medicamentos a caducar
				$medicamentosACaducar = array();

				// Consulta SQL para obtener los medicamentos
				$query = "SELECT nombre, fecha FROM medicamentos";

				// Ejecutar la consulta
				$result = $conexion->query($query);

				// Verificar si hay resultados
				if ($result->num_rows > 0) {
					// Iterar sobre los resultados
					while ($row = $result->fetch_assoc()) {
						// Obtener la fecha de caducidad del medicamento y convertirla a timestamp
						$fechaCaducidad = strtotime($row['fecha']);

						// Calcular la fecha actual y la fecha dentro de dos semanas
						$fechaActual = time();
						$dosSemanasDespues = strtotime('+2 weeks', $fechaActual);

						// Si la fecha actual es mayor a la fecha de caducidad menos dos semanas
						if ($fechaActual > ($fechaCaducidad - (2 * 7 * 24 * 60 * 60))) {
							// Agregar el nombre del medicamento al array de medicamentos a caducar
							$medicamentosACaducar[] = $row;
						}
					}
				}

				// Cerrar la conexión a la base de datos
				$conexion->close();

				// Devolver el array de medicamentos a caducar
				return $medicamentosACaducar;
			}

			// Ejecutar la función y obtener los medicamentos a caducar
			$medicamentosACaducar = obtenerMedicamentosACaducar();

			?>
				<style>
					table {
						width: 100%;
						border-collapse: collapse;
					}
					th, td {
						border: 1px solid #ddd;
						padding: 8px;
						text-align: left;
					}
					th {
						background-color: #f2f2f2;
					}
				</style>

			<h3>Medicamentos a caducar dentro de las próximas dos semanas:</h3>

			<?php if (empty($medicamentosACaducar)): ?>
				<p>No hay medicamentos a caducar en las próximas dos semanas.</p>
			<?php else: ?>
				<table>
					<tr>
						<th>Nombre del Medicamento</th>
						<th>Fecha de Caducidad</th>
					</tr>
					<?php foreach ($medicamentosACaducar as $medicamento): ?>
						<tr>
							<td><?php echo $medicamento['nombre']; ?></td>
							<td><?php echo $medicamento['fecha']; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			<?php endif; ?>

		<div>
		<form method = "post">
				<div class="mdl-cell mdl-cell--2-col-phone mdl-cell--4-col-tablet mdl-cell--1-col-desktop"  style="display : flex;flex-direction : row;">
				<table class='mdl-data-table mdl-js-data-table mdl-shadow--20dp full-width table-responsive'  style="width: 100%;">
						<thead><tr><th class='mdl-data-table__cell--non-numeric'>ID</th>
							<th>Nombre</th>
							<th>Presentacion</th>
							<th>Categoria</th>
							<th>Lote</th>
							<th>Fecha</th>
							<th>Cantidad</th>
							<th>Seleccionar</th>
						</tr></thead><tbody>


			<?php

				try 
				{
					
					$conMySQL = new PDO("mysql:host=localhost;port=3306;dbname=inventario","root","");
					$conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$conMySQL->exec("SET CHARACTER SET UTF8");
					
					$sentenciaSQL= "SELECT * FROM  medicamentos";
					foreach($conMySQL->query($sentenciaSQL) as $fila)
					{
						echo "
						<tr>
							<td>".$fila['id']."</td>
							<td>".$fila['nombre']."</td>
							<td>".$fila['categoria']."</td>
							<td>".$fila['lote']."</td>
							<td>".$fila['sector']."</td>
							<td>".$fila['fecha']."</td>
							<td>".$fila['cantidad']."</td>
							</td><td><input type='checkbox' id='cbox1' name='eliminar[]' value='".$fila['id']."'></td>
							";
					
					}
					
				}
				catch (PDOException $e)
				{

					printf ("¡Error!: ".$e->getMessage()."<br/>");
					die();

				}
				finally 
				{
					$conMySQL = null;
				}

			?>
				</form>

			<?php

				$bd_host = "127.0.0.1";
				$bd_user = "root";
				$bd_pass = "";
				$bd_name = "inventario";
				$conexion = new mysqli($bd_host,$bd_user,$bd_pass,$bd_name);
				if($conexion-> connect_errno){
					die("Fallo:(".$conexion->mysqli_connect_errno().")".$conexion-> mysqli_connect_errno());
				}

			if(isset($_POST['eliminar'])){
				if(empty($_POST['eliminar'])){
					echo "Hola";
			
				}else{
					foreach($_POST['eliminar'] as $id_borrar){
						$borrarAlumnos = $conexion->query("DELETE FROM medicamentos WHERE  id='$id_borrar'");
					}
				}
			}

			?>
	
	</div>  
		</form>
	</div>
</tbody>
</table>
<div> 
<button class="mdl-button mdl-button--raised " style="color: red" style="margin: 10px"  type="submit" value="Eliminar">Eliminar</button>            
</div>
</section>
</body>
</html>