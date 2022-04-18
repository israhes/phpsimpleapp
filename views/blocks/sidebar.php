<div id="layoutSidenav_nav">
	<nav class="sidenav shadow-right sidenav-light">
		<div class="sidenav-menu">
			<div class="nav accordion" id="accordionSidenav">
				<!-- Sidenav Menu Heading (Account)-->
				<!-- * * Note: * * Visible only on and above the sm breakpoint-->
				<div class="sidenav-menu-heading d-sm-none">Account</div>
				<!-- Sidenav Link (Alerts)-->
				<!-- * * Note: * * Visible only on and above the sm breakpoint-->
				<a class="nav-link d-sm-none" href="#!">
					<div class="nav-link-icon"><i data-feather="bell"></i></div>
					Alerts
					<span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
				</a>
				<!-- Sidenav Link (Messages)-->
				<!-- * * Note: * * Visible only on and above the sm breakpoint-->
				<a class="nav-link d-sm-none" href="#!">
					<div class="nav-link-icon"><i data-feather="mail"></i></div>
					Messages
					<span class="badge bg-success-soft text-success ms-auto">2 New!</span>
				</a>
				
				<!-- Sidenav Menu Heading (Core)-->
				<div class="sidenav-menu-heading">Panel de control</div>
				
				<?php if( isset($_SESSION['uid']) ) {?>
				<a class="nav-link" href="<?=BASE_URL?>/main">
					<div class="nav-link-icon"><i data-feather="home"></i></div>
					Inicio
				</a>
				<?php } elseif( isset($_SESSION['member']) ) {?>
				<a class="nav-link" href="<?=BASE_URL?>/protocols">
					<div class="nav-link-icon"><i data-feather="home"></i></div>
					Inicio
				</a>
				<?php } ?>

				<a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCases" aria-expanded="false" aria-controls="collapseCases">
					<div class="nav-link-icon"><i class="fas fa-list"></i></div>
					Protocolos
					<div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
				</a>
				<div class="collapse" id="collapseCases" data-bs-parent="#accordionSidenav">
					<nav class="sidenav-menu-nested nav accordion" id="accordionSidenavCasesMenu">
						<a class="nav-link" href="<?=BASE_URL?>/protocols">Todos los protocolos</a>
						<?php if(isset($_SESSION['uid'])) {?>
							<a class="nav-link" href="<?=BASE_URL?>/protocol/new">Nuevo protocolo</a>
							<a class="nav-link" href="<?=BASE_URL?>/status-list">Estados</a>
							<a class="nav-link" href="<?=BASE_URL?>/type-documents">Tipos de documento</a>
						<?php } ?>
					</nav>
				</div>
				
				<?php if(isset($_SESSION['uid'])) {?>
				
				<a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseMembers" aria-expanded="false" aria-controls="collapseMembers">
					<div class="nav-link-icon"><i class="fas fa-users"></i></div>
					Miembros
					<div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
				</a>
				<div class="collapse" id="collapseMembers" data-bs-parent="#accordionSidenav">
					<nav class="sidenav-menu-nested nav accordion" id="accordionSidenavMembersMenu">
						<a class="nav-link" href="<?=BASE_URL?>/members">Todos los miembros</a>
						<a class="nav-link" href="<?=BASE_URL?>/member/new">Nuevo miembro</a>
						<a class="nav-link" href="<?=BASE_URL?>/titles">Títulos</a>
					</nav>
				</div>
				
				<a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCustomer" aria-expanded="false" aria-controls="collapseCustomer">
					<div class="nav-link-icon"><i class="fas fa-user-friends"></i></div>
					Clientes
					<div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
				</a>
				<div class="collapse" id="collapseCustomer" data-bs-parent="#accordionSidenav">
					<nav class="sidenav-menu-nested nav accordion" id="accordionSidenavCustomerMenu">
						<a class="nav-link" href="<?=BASE_URL?>/customers">Todos los clientes</a>
						<a class="nav-link" href="<?=BASE_URL?>/customer/new">Nuevo cliente</a>
					</nav>
				</div>
				
				<a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseAdmins" aria-expanded="false" aria-controls="collapseAdmins">
					<div class="nav-link-icon"><i class="fas fa-users-cog"></i></div>
					Administradores
					<div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
				</a>
				<div class="collapse" id="collapseAdmins" data-bs-parent="#accordionSidenav">
					<nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAdminsMenu">
						<a class="nav-link" href="<?=BASE_URL?>/admins">Todos los administradores</a>
						<a class="nav-link" href="<?=BASE_URL?>/admin/new">Nuevo administrador</a>
					</nav>
				</div>
				
				<?php } ?>
				<a class="nav-link" href="<?=BASE_URL?>/logout">
					<div class="nav-link-icon"><i data-feather="log-out"></i></div>
					Salir
				</a>
			</div>
		</div>
		<!-- Sidenav Footer-->
		<div class="sidenav-footer">
			<div class="sidenav-footer-content">
				<div class="sidenav-footer-subtitle">Conectado como:</div>
				<div class="sidenav-footer-title"><?=$User->getFullName($uid)?></div>
			</div>
		</div>
	</nav>
</div>