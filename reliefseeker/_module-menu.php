<?php
include('_dataset.php');
?>
<nav id="main-nav" class="navbar navbar-expand-lg bd-navbar <?php if(isset($notsticky) && $notsticky == 'yes'){ echo 'not-sticky';}?>">
	<div class="container d-flex justify-content-between">
		<a class="navbar-brand" href="page-index.php">
			<img src="<?php echo $logo;?>" alt="ReliefSeeker">
		</a>

		<button class="navbar-toggler" type="button" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-lg-auto main-menu">

				<li class="nav-item dropdown nav-full">
					<a id="fullMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link active dropdown-toggle">
						Get Care <i class="icon-arr-down"></i>
					</a>
					<div class="dropdown-menu dropdown-getcare" aria-labelledby="fullMenu" >
						<div class="container">
							<ul class="row dropdown-list">
								<li class="col-12 dropdown-header">
									<p>Find the best ...</p>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Online doctor</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Online Pharmacy</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Skin Care</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Teeth Aligners</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Online Therapy</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">At-Home Lab Testing Kits</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Supplements</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Primary Care</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Digital Clinics</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Health Apps</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Medical Devices</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="page-single-category.php">Activity Trackers</a>
								</li>
								<li class="col-12 list-item">
									<a class="dropdown-item btn btn-see-all" href="page-all-categories.php">See All Categories</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown nav-explore">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Explore <i class="icon-arr-down"></i>
					</a>
					<div class="dropdown-menu dropdown-explore" aria-labelledby="navbarDropdown2">
						<div class="container">
							<ul class="row dropdown-list">
								<li class="col-12 dropdown-header">
									<p>Explore</p>
								</li>
								<li class="col-12 list-item">
									<a class="dropdown-item" href="page-all-categories.php">Categories<span class="count">95</span></a>
								</li>
								<li class="col-12 list-item">
									<a class="dropdown-item" href="page-all-conditions.php">Conditions<span class="count">95</span></a>
								</li>
								<li class="col-12 list-item">
									<a class="dropdown-item" href="page-all-treatments.php">Treatments<span class="count">155</span></a>
								</li>
								<li class="col-12 list-item">
									<a class="dropdown-item" href="page-all-providers.php">Providers<span class="count">190</span></a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="page-all-news.php">News</a>
				</li>
				<li class="nav-item" id="treatments-dropdown-toggler">
					<a class="nav-link" href="#">
						Find my condition <i class="icon-arr-down"></i>
					</a>
				</li>
			</ul>
	

			<div class="dropdown search-block">
				<input type="text" placeholder="Find Treatment For..." class="search-input dropdown-toggle" id="menuInput" onkeyup="filterFunction()" id="dropdownSearchMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i id="search-block-close" class="icon-icon-x"></i>
				<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownSearchMenuButton">

					<ul id="myDropdown" class="dropdown-list">
						
						<?php
						foreach ($rs_treatments as $rs_treatment) 
						{ 
						?>
						<li class="dropdown-item">
							<a href="page-single-condition.php" class="item-link">
								<p class="name"><?php echo $rs_treatment['name']; ?></p>
								<p class="group">Conditions</p>
							</a>
						</li>
						<?php	
						}
						?>

					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>
<div class="nav-spacer"></div>