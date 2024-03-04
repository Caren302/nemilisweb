<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consultar Receta</title>
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
	<form action="index.php" method="post">
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
					<li class="text-condensedLight noLink" ><small>Administrador</small></li>
					<li class="noLink">
						<figure>
							<img src="assets/img/avatar-female.png" alt="Avatar" class="img-responsive">
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
				<i class="zmdi zmdi-close btn-menu"></i> Registro Administradores
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">

					<img src="assets/img/avatar-female.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption class="navLateral-body-cr hide-on-tablet">
					<span>
						Ruth<br>
						<small>Administrador</small>
					</span>
				</figcaption>
			</figure>
		<div class="full-width tittles navLateral-body-tittle-menu">
				<i class="zmdi zmdi-lamp"></i><span class="hide-on-tablet">&nbsp; Nemilis</span>
			</div>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
				
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-accounts-list"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Administracion
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="administrador.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Registrar
									</div>
								</a>
							</li>
							<a href="listadmin.php"  class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account-circle"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Perfil administradores
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-account-circle"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Médicos
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="medicos.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Registrar médico
									</div>
									<a href="perlme.html" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-face"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Perfil médico
										</div>
										<a href="Nuevareceta.php" class="full-width">
											<div class="navLateral-body-cl">
												<i class="zmdi zmdi-view-web"></i>
											</div>
											<div class="navLateral-body-cr hide-on-tablet">
												Nueva Receta
											</div>
									</a>
									</a>
									</ul>
								</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-accounts"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Pacientes
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="usuarios.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Registrar pacientes
									</div>
									<a href="perlpacientes.html" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-mood"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Perfil pacientes
										</div>
									</a>
						<a href="Verrece.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-web"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Consultar receta
							</div>
						</a>
						</a>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-library"></i>
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
										<i class="zmdi zmdi-washing-machine"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Consultar inventario
									</div>
									<a href="entradas.html" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-square-right"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											Entradas inventario
										</div>
									</a>
						<a href="salidas.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-long-arrow-left"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Salidas inventario
							</div>
						</a>
						<a href="estadisticas.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-long-arrow-left"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Estadisticas
							</div>
						</a>
						</ul>
					</li>
			</nav>
		</div>
	</section>
	</section>
	
	<section class="full-width pageContent">
			<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewClient" class="mdl-tabs__tab is-active">Buscar paciente</a>
				<a href="#tabListClient" class="mdl-tabs__tab">Consultar receta</a>
				<a href="#tabrecClient" class="mdl-tabs__tab">Recordatorios</a>
			</div>
			
			<div class="mdl-tabs__panel is-active" id="tabNewClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Paciente
							</div> 
							<div class="full-width panel-content">
								<form>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text"  id="nombre">
										<label class="mdl-textfield__label" for="nombre">Nombre </label>
										<span class="mdl-textfield__error">Nombre Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text"  id="apellidos">
										<label class="mdl-textfield__label" for="apellidos">Apellidos</label>
										<span class="mdl-textfield__error">Apellidos Invalida</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number"  id="nss">
										<label class="mdl-textfield__label" for="nss">NSS</label>
										<span class="mdl-textfield__error">NSS Invalido</span> 
									</div>
									<h6>Fecha de cita médica</h6>
											<div class="mdl-textfield mdl-js-textfield">
												<input type="date" class="mdl-textfield__input">
											</div>
								</form>
							<center>
								<button class="mdl-button mdl-button--raised mdl-button--colored">Buscar receta</button>
								<center>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mdl-tabs__panel is-active" id="tabrecClient">
			<?php
				// Función para obtener los recordatorios de la toma de medicamentos
				function obtenerRecordatorios()
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

					// Array para almacenar los recordatorios
					$recordatorios = array();

					// Consulta SQL para obtener los recordatorios
					$query = "SELECT nombre, fecha_inicio, hora_toma, frecuencia, notas FROM recordatorios";

					// Ejecutar la consulta
					$result = $conexion->query($query);

					// Verificar si hay resultados
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							// Agregar el recordatorio al array de recordatorios
							$recordatorios[] = $row;
						}
					}

					// Cerrar la conexión a la base de datos
					$conexion->close();

					// Devolver el array de recordatorios
					return $recordatorios;
				}

				// Ejecutar la función y obtener los recordatorios
				$recordatorios = obtenerRecordatorios();
				?>
				<style>
					table {
						width: 100%;
						border-collapse: collapse;
					}

					th,
					td {
						border: 1px solid #ddd;
						padding: 8px;
						text-align: left;
					}

					th {
						background-color: #f2f2f2;
					}
				</style>

				<h3>Recordatorios de Toma de Medicamentos:</h3>

				<?php if (empty($recordatorios)): ?>
					<p>No hay recordatorios de toma de medicamentos.</p>
				<?php else: ?>
					<table>
						<tr>
							<th>Nombre del Medicamento</th>
							<th>Fecha de Inicio</th>
							<th>Hora de Toma</th>
							<th>Frecuencia</th>
							<th>Notas</th>
						</tr>
						<?php foreach ($recordatorios as $recordatorio): ?>
							<tr>
								<td><?php echo $recordatorio['nombre']; ?></td>
								<td><?php echo $recordatorio['fecha_inicio']; ?></td>
								<td><?php echo $recordatorio['hora_toma']; ?></td>
								<td><?php echo $recordatorio['frecuencia']; ?></td>
								<td><?php echo $recordatorio['notas']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				<?php endif; ?>

				<style>
					body {
						font-family: Arial, sans-serif;
					}
					form {
						max-width: 400px;
						margin: 0 auto;
					}
					label {
						display: block;
						margin-bottom: 5px;
					}
					input[type="text"], input[type="date"], select, textarea {
						width: 100%;
						padding: 8px;
						margin-bottom: 10px;
						border: 1px solid #ccc;
						border-radius: 4px;
						box-sizing: border-box;
					}
					input[type="submit"] {
						background-color: #4CAF50;
						color: white;
						padding: 10px 20px;
						border: none;
						border-radius: 4px;
						cursor: pointer;
						font-size: 16px;
					}
					input[type="submit"]:hover {
						background-color: #45a049;
					}
				</style>
				<form action="procesar_formulario.php" method="POST">
					<label for="nombre">Nombre del Medicamento:</label>
					<input type="text" id="nombre" name="nombre" required>
				
					<label for="fecha_inicio">Fecha de Inicio:</label>
					<input type="date" id="fecha_inicio" name="fecha_inicio" required>
				
					<label for="hora_toma">Hora de Toma:</label>
					<input type="time" id="hora_toma" name="hora_toma" required>
				
					<label for="frecuencia">Frecuencia:</label>
					<select id="frecuencia" name="frecuencia" required>
						<option value="diario">Diario</option>
						<option value="semanal">Semanal</option>
						<option value="mensual">Mensual</option>
					</select>
				
					<label for="notas">Notas Adicionales:</label>
					<textarea id="notas" name="notas" rows="4"></textarea>
				
					<input type="submit" value="Guardar Recordatorio">
				</form>
			</div>
			
			
			<div class="mdl-tabs__panel" id="tabListClient">
				<div>
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
							<div class="full-width panel-tittle bg-success text-center tittles">
							Datos de Receta
							</div><br/>
							<table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
								<thead>
								<tr>
									<td style="text-align: center;">Médico</td>
									<td style="text-align: center;">Paciente</td>
									<td style="text-align: center;">Observaciones</td>
									<td style="text-align: center;" >Medicamentos</td>
								</tr>
								</thead>
								<tr bgcolor="#FBFCFC">
									<td style="text-align: left">Antonio Lopez</td>
									<td style="text-align: left;">Monica Gutierrez</td>
									<td style="text-align: left;">36°</td>
									<td style="text-align: left;">Azitromicina</td>
								</tr>
								<tr bgcolor="#FBFCFC">
									<td style="text-align: left;">1203919281312</td>
									<td style="text-align: left;">Femenino</td>
									<td style="text-align: left;">Ninguna</td>
									<td style="text-align: left;">500mg</td>
								</tr>
								<tr bgcolor="#FBFCFC">
									<td style="text-align: left;">03/08/2022</td>
									<td style="text-align: left;">60 kg</td>
									<td style="text-align: left;">Tos seca, ardor de garganta y dolores nusculares</td>
									<td style="text-align: left;">4 Capsulas</td>
								</tr>
								<tr bgcolor="#FBFCFC">
									<td style="text-align: left;">025</td>
									<td style="text-align: left;">20 años</td>
									<td style="text-align: left;">Dolor de cabeza</td>
									<td style="text-align: left;">Antibioticos</td>
								</tr>
								<tr bgcolor="#FBFCFC">
									<td style="text-align: left;">Santa Maria Nativitas</td>
									<td style="text-align: left;">M334I23G78O9210</td>
									<td style="text-align: left;">60</td>
									<td style="text-align: left;">1 c/8 horas por una semana</td>
								</tr>
							</table><br/>
						<center>
							<button> <a class="mdl-button mdl-button--raised mdl-button--colored" href="pdf.php"><i class="fa fa-download"></i>Descargar archivo PDF</a></button>
						</center>
						</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>