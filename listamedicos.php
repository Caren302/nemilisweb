<?php

    $bd_host = "127.0.0.1";
	$bd_user = "root";
	$bd_pass = "";
	$bd_name = "inventario";
	$conexion = new mysqli($bd_host,$bd_user,$bd_pass,$bd_name);
	if($conexion-> connect_errno){
		die("Fallo:(".$conexion->mysqli_connect_errno().")".$conexion-> mysqli_connect_errno());
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta de Inventario</title>
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
		<i class="zmdi zmdi-accounts-alt"></i><span class="hide-on-tablet">&nbsp;Administratores</span>
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
							<a href="listadmin.php" class="full-width">
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
								<a href="medicos.html" class="full-width">
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
								<a href="usuarios.html" class="full-width">
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
						<a href="Verrece.html" class="full-width">
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
								Farmacia
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
		<section class="full-width header-well">			
			<br/>
			<h2 class="text-center tittles" style="text-decoration: underline blue 2px;">Bienvenid@ a perfil medicos.</h2>	
    <div class="full-width panel-content">
                              						<div>
							<form method = "post">
									<div>
							<form method ="post">
									<div>
										<div class="full-width text-center">
							<div class="mdl-card mdl-shadow--2dp full-width product-card">
								<div class="mdl-card__title">
									<img src="assets/img/pac1.png" alt="doc" class="img-responsive">
								</div>
								<div class="mdl-card__supporting-text">
									<table>
								</div>
							</div>
								<?php
                        try {
                            $conMySQL = new PDO("mysql:host=localhost;port=3306;dbname=inventario", "root", "");
                            $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $conMySQL->exec("SET CHARACTER SET UTF8");

                            $sentenciaSQL = "SELECT * FROM medicos";
                            foreach ($conMySQL->query($sentenciaSQL) as $fila) {
                                echo "
                                <div class='product-item'>
                                    <p><strong>Cedula:</strong> " . $fila['cedula'] . "</p>
                                    <p><strong>Nombre:</strong> " . $fila['nombre'] . "</p>
                                    <p><strong>Dirección:</strong> " . $fila['direccion'] . "</p>
                                    <p><strong>Teléfono:</strong> " . $fila['telefono'] . "</p>
                                    <p><strong>Correo:</strong> " . $fila['correo'] . "</p>
                                    <p><strong>Usuario:</strong> " . $fila['usuario'] . "</p>
                                </div>
                                ";
                            }
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        } finally {
                            $conMySQL = null;
                        }
                        ?>
						
                        </div>  
                            </form>
                        </div>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</section>
</body>
</html>
