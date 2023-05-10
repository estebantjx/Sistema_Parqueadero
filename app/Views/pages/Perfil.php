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
					<li><a href="#">Perfil</a></li>
					<li><a href="<?php echo site_url('cuenta');?>">Cuenta</a></li>
					<li><a href="#">Notificaciones</a></li>
				</ul>
			</li>
			<li><a href="#">Cerrar sesión</a></li>
		</ul>
	</nav>

    <div class="container">
		<h1>Sección de perfil</h1>
		<div class="profile-container">
        <div class="profile-picture"></div>
			<div class="profile-info">
				<h2>Nombre del usuario</h2>
				<p>Correo electrónico: esteban@gmail.com</p>
				<a href="#" class="edit-profile-link">Editar perfil</a>
			</div>
			<div class="profile-stats">
				<div class="stat">
					<strong>100</strong>
					Mensajes enviados
				</div>
				<div class="stat">
					<strong>50</strong>
					Mensajes recibidos
				</div>
				<div class="stat">
					<strong>80%</strong>
					Porcentaje de mensajes leídos
				</div>
			</div>
		</div>
	</div>