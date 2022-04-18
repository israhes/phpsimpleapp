<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
	<!-- Sidenav Toggle Button-->
	<button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
	<!-- Navbar Brand-->
	<a class="navbar-brand pe-3 ps-4 ps-lg-2" href="<?=BASE_URL . ( $_SESSION['usertype'] == 'admin' ? '/main' : '/protocols' )?>"><img src="<?=BASE_URL?>/public/img/zugueme.svg" alt="<?=APP_NAME?>"/></a>
	<!-- Navbar Search Input-->
	<form method="get" action="<?=BASE_URL?>/results" class="form-inline me-auto d-none d-lg-block me-3">
		<div class="input-group input-group-joined input-group-solid">
			<input class="form-control pe-0" id="inputSearch" name="query" type="text" placeholder="Buscar protocolos" aria-label="Search" autocomplete="off" spellcheck="false"/>
			<div class="input-group-text">
				<button class="btn-search" type="submit"><i data-feather="search"></i></button>	
			</div>
		</div>
	</form>
	
	<!-- Navbar Items-->
	<ul class="navbar-nav align-items-center ms-auto">
		<!-- Navbar Search Dropdown-->
		<!-- * * Note: * * Visible only below the lg breakpoint-->
		<li class="nav-item dropdown no-caret me-3 d-lg-none">
			<a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
			<!-- Dropdown - Search-->
			<div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
				<form class="form-inline me-auto w-100">
					<div class="input-group input-group-joined input-group-solid">
						<input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
						<div class="input-group-text"><i data-feather="search"></i></div>
					</div>
				</form>
			</div>
		</li>
		<!-- User Dropdown-->
		<li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
			<a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?=BASE_URL?>/public/assets/img/illustrations/profiles/profile-1.png" /></a>
			<div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
				<h6 class="dropdown-header d-flex align-items-center">
					<img class="dropdown-user-img" src="<?=BASE_URL?>/public/assets/img/illustrations/profiles/profile-1.png" />
					<div class="dropdown-user-details">
						<?php 
							if(isset($_SESSION['uid'])) {
								$User = new User($db);
							} elseif(isset($_SESSION['member'])) {
								$User = new Members($db);
							}
						?>
						<div class="dropdown-user-details-name"><?=$User->getFullName($uid)?></div>
						<div class="dropdown-user-details-email"><?=$User->getEmail($uid)?></div>
					</div>
				</h6>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?=BASE_URL?>/logout">
					<div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
					Salir
				</a>
			</div>
		</li>
	</ul>
</nav>