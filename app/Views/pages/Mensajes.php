<nav>
		<ul>
			<li><a href="<?php echo site_url('home');?>">Inicio</a></li>
			<li>
				<a href="mensajes.php">Mensajes</a>
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
	<br>
    <div class="container">
		<h1>Sección de mensajes</h1>
		<div class="messages-container">
			<div class="message">
				<div class="meta">
					<span class="from">De: Esteban Piñeros</span> | <span class="date">01/05/2023 10:00am</span>
				</div>
				<div class="body">
					<p class="subject">Reunión del equipo</p>
					<p class="content">Hola equipo, recuerden que tenemos una reunión importante el próximo miércoles a las 3:00pm en la sala de juntas. Por favor confirmen su asistencia lo antes posible. Saludos, Juan.</p>
				</div>
			</div>
			<div class="message">
				<div class="meta">
					<span class="from">De: Leandro Ramirez</span> | <span class="date">30/04/2023 2:30pm</span>
				</div>
				<div class="body unread">
					<p class="subject">Entrega del proyecto</p