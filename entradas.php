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
	<title>Ingresos</title>
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

	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						
						<div class="mdl-tooltip" for="notifications">Advertencias</div>
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
						<div class="mdl-tooltip" for="btn-exit">LogOut</div>
					</li>
					<li class="text-condensedLight noLink" ><small>User Name</small></li>
					<li class="noLink">
						<figure>
							<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	
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

	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						
						<div class="mdl-tooltip" for="notifications">Advertencias</div>
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
		<i class="zmdi zmdi-upload"></i><span class="hide-on-tablet">&nbsp; Ingresos</span>
			</div>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
				
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a  class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-accounts-list"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
							Administración
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="administrador.php" class="full-width">
									<div class="navLateral-body-cl">
									<i class="zmdi zmdi-account-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
										Registro
									</div>
								</a>
							</li>
							<a href="listadmin.php" class="full-width">
									<div class="navLateral-body-cl">
									<i class="zmdi zmdi-account-circle"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
										Perfil
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
							<i class="zmdi zmdi-accounts"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
								Médicos
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="medicos.php" class="full-width">
									<div class="navLateral-body-cl">
									<i class="zmdi zmdi-account-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
										Registro
									</div>
									<a href="listamedicos.php" class="full-width">
										<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account-circle"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
											Perfil
										</div>
										<a href="Nuevareceta.php" class="full-width">
											<div class="navLateral-body-cl">
											<i class="zmdi zmdi-view-subtitles"></i>
											</div>
											<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
												Receta
											</div>
									</a>
									<a href="resultadoreceta.php" class="full-width">
											<div class="navLateral-body-cl">
											<i class="zmdi zmdi-folder-person"></i>
											</div>
											<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
												Historial
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
							<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
								Pacientes
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="usuarios.php" class="full-width">
									<div class="navLateral-body-cl">
									<i class="zmdi zmdi-account-add"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
										Registro
									</div>
									<a href="listausu.php" class="full-width">
										<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account-circle"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
											Perfil
										</div>
									</a>
						<a href="verrece.php" class="full-width">
							<div class="navLateral-body-cl">
							<i class="zmdi zmdi-view-subtitles"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
								Receta
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
							<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
								Inventario
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="actualinventario.php" class="full-width">
									<div class="navLateral-body-cl">
									<i class="zmdi zmdi-group"></i> 
									</div>
									<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
										Inventario
									</div>
									<a href="entradas.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-upload"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
											Ingresos
										</div>
									</a>
						<a href="salidas.php" class="full-width">
							<div class="navLateral-body-cl">
							<i class="zmdi zmdi-download"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
								Salidas
							</div>
						</a>
						<a href="estadisticas.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-compact"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet" style='font-size: 18px'>
							Estadísticas
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
			<div class="full-width header-well-icon">
			</div> </br> 
				<h3 class="text-center tittles">Registro de medicamentos  
</br>Proceso que permite identificar y autorizar a los usuarios.</h3>	
		<div class="mdl-tabs__panel is-active" id="tabNewClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
							Datos de medicamento
							</div>
							<div class="full-width panel-content">
								<form action="entra.php" method="post">
									<h5 class="text-condensedLight">Ingresa los datos solicitados</h5>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="nombre" name="nombre" required>
										<label class="mdl-textfield__label" for="nombre">Nombre:</label>
										<span class="mdl-textfield__error">Nombre Obligatorio</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="presentacion" name="presentacion" required>
										<label class="mdl-textfield__label" for="presentacion">Presentación(ML/MG):</label>
										<span class="mdl-textfield__error">Presentación obligatoria</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="categoria" name="categoria" required>
										<label class="mdl-textfield__label" for="categoria">Categoría:</label>
										<span class="mdl-textfield__error">Categoría obligatoria</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="lote" name="lote" required>
										<label class="mdl-textfield__label" for="lote">Lote:</label>
										<span class="mdl-textfield__error">Lote obligatorio</span> 
									</div>
									<div class="mdl-textfield mdl-js-textfield">
                                    <select class="mdl-textfield__input" name="sector">
                                        <option value="" disabled="" selected="" >Selecciona Sector</option>
                                        <option value="Material de Curacion">Material de Curacion</option>
                                        <option value="Sector 1">Sector 1</option>
                                        <option value="Sector 2">Sector 2</option>
                                        <option value="Sector 3">Sector 3</option>
                                        <option value="Sector 4">Sector 4</option>
                                        <option value="Sector 5">Sector 5</option>
                                        <option value="Antibioticos">Antibioticos</option>
                                    </select>
                                </div>
									<h6 style= "color:red">Fecha de caducidad:</h6>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input type="date" class="mdl-textfield__input" name="fecha">
                                </div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number" id="cantidad" name="cantidad" required>
										<label class="mdl-textfield__label" for="cantidad">Cantidad:</label>
										<span class="mdl-textfield__error">Cantidad Obligatoria</span>
									</div>
										</br>
									<p class="text-center">
										<button class="mdl-button mdl-button--raised mdl-button--colored" style="WIDTH: 170px" id="btn-addClient" href="actualinventario.php" onclick="Fagregartecins_inc_67()">Agregar
										</button>
									</p>
									<script>
										function Fagregartecins_inc_67(){
  
  if(confirm("Esta seguro de registrar este medicamento?")){
  
            tec_inc_id_tecnicos_67 = $('#txt_tec_ins_inc_67 ').val();
            tec_inc_id_pregunta_67 = 67 //$('#txt_tec_inc_id_pre_2').val();
            if(tec_inc_id_tecnicos_67 == '' || tec_inc_id_tecnicos_67    == null){
                alert('Medicamento registrado.');
                return;
            }

            var datosTecInc1 = {
                    tec_inc_id_tecnicos         : tec_inc_id_tecnicos_67,
                    tec_inc_id_pregunta         : tec_inc_id_pregunta_67
                };

            $.post('php/agregartecinc.php', datosTecInc1, function(data, textStatus, xhr) {
                    if (data == 0){
                        alert('No se pudo procesar. Intente mas tarde.');
                        return;
                    }
                    if (data == 2){
                        alert('No se ha relizado la actuaizacion.');
                        return;
                    }
                    if (data == 3){
                        alert('No se pudo procesar. Error al insertar.');
                        return;
                    }
                    if (data == 5){
                        alert('Medicamento no encontrado.');
                        return;
                    }
                    if (data == 1){
                        $.post('php/administrador.php', datosTecInc1, function(data2, textStatus, xhr) {
                            $('#datoscuadrilla').html(data2);
                        });
                        return;
                    }
                    alert('Error:' + data);

            }); 
        return;
       }
    }
									</script>
								</form>
							</div>
						</div>
					</div>
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