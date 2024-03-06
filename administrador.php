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
		<i class="zmdi zmdi-accounts-list"></i></i><span class="hide-on-tablet">&nbsp;Administración</span>
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
							Administración
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="listadmin.php" class="full-width">
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
								<a href="medicos.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										Registrar médico
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
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
			</div> </br>
				<pre> 
					&nbsp; <h3 class="text-center tittles">Bienvenido usuario administrador </h3>	
				</pre>
		</section>
		
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>