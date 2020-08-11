<?php
include('_dataset.php');
?>

<nav id="main-nav" class="navbar navbar-expand-lg">
	<div class="container d-flex justify-content-between">
		<a class="navbar-brand" href="homepage.php">
			<!-- <img src="./svg/reliefseeker.svg" alt="ReliefSeeker"> -->
			<img src="./svg/mainLogo.svg" alt="ReliefSeeker">
		</a>
		<?php /* old menu toggler
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		*/ ?>

		<button class="navbar-toggler" type="button" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-lg-auto main-menu">

				<li class="nav-item dropdown nav-full">
					<a id="fullMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link active dropdown-toggle">
						Get Care <i class="icon-arr-down"></i>
					</a>
					<div aria-labelledby="fullMenu" class="dropdown-menu dropdown-full ">
						<div class="container">
							<ul class="row dropdown-list">
								<li class="col-12 dropdown-header">Find the best ...</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Online doctor</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Online Pharmacy</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Skin Care</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Teeth Aligners</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Online Therapy</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">At-Home Lab Testing Kits</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Supplements</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Primary Care</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Digital Clinics</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Health Apps</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Medical Devices</a>
								</li>
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="single-guide.php">Activity Trackers</a>
								</li>
								<li class="col-12 list-item">
									<a class="dropdown-item blue" href="all-guides.php">See All Categories</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown dropdown-explore">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Explore <i class="icon-arr-down"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
						<div class="dropdown-header">Explore</div>
						<a class="dropdown-item" href="all-guides.php">Categories<span class="count">95</span></a>
						<a class="dropdown-item" href="all-conditions.php">Conditions<span class="count">95</span></a>
						<a class="dropdown-item" href="all-treatments.php">Treatments<span class="count">155</span></a>
						<a class="dropdown-item" href="all-providers.php">Providers<span class="count">190</span></a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="all-news.php">News</a>
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
							<a href="single-condition.php" class="item-link"><?php echo $rs_treatment['name']; ?></a>
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