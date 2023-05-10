<div class="contenedor">
		<!-- Barra de navegación y menú desplegable -->
        <nav>
		<ul>
			<li><a href="<?php echo site_url('home');?>">Inicio</a></li>
			<li>
				<a href="<?php echo site_url('Mensajes');?>">Mensajes</a>
				<ul>
					<li><a href="#">Nuevo mensaje</a></li>
					<li><a href="#">Bandeja de entrada</a></li>
					<li><a href="#">Enviados</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Configuración</a>
				<ul>
					<li><a href="<?php echo site_url('Perfil');?>">Perfil</a></li>
					<li><a href="<?php echo site_url('cuenta');?>">Cuenta</a></li>
					<li><a href="#">Notificaciones</a></li>
				</ul>
			</li>
			<li><a href="#">Cerrar sesión</a></li>
		</ul>
	</nav>

		<!-- Contenido de la página de configuración -->
		<div class="contenido">
			<h1>Configuración</h1>
			<form action="#" method="post">
				<div class="campo">
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" value="Nombre de usuario">
				</div>
				<div class="campo">
					<label for="correo">Correo electrónico:</label>
					<input type="email" id="correo" name="correo" value="usuario@correo.com">
				</div>
				<div class="campo">
					<label for="contraseña">Contraseña:</label>
					<input type="password" id="contraseña" name="contraseña">
				</div>
				<div class="campo">
					<label for="confirmar-contraseña">Confirmar contraseña:</label>
					<input type="password" id="confirmar-contraseña" name="confirmar-contraseña">
				</div>
				<div class="campo">
					<label for="notificaciones">Notificaciones:</label>
					<select id="notificaciones" name="notificaciones">
						<option value="activado">Activado</option>
						<option value="desactivado">Desactivado</option>
					</select>
				</div>
				<div class="botones">
					<input type="submit" value="Guardar cambios" class="boton-guardar">
					<input type="button" value="Cancelar" class="boton-cancelar">
				</div>
			</form>
		</div>
	</div>