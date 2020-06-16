<?php
include('_dataset.php');
?>

<nav id="main-nav" class="navbar navbar-expand-lg navbar-light bg-grey">
	<div class="container d-flex justify-content-between">
		<a class="navbar-brand" href="homepage.php">
			<img src="./svg/reliefseeker.svg" alt="ReliefSeeker">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-lg-auto main-menu">
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Guides <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
					</a>
					<div class="dropdown-menu " aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="single-guide.php">Best Online Doctors</a>
						<a class="dropdown-item" href="#">Best Online Therapists</a>
						<a class="dropdown-item" href="#">Best Digital Clinics</a>
						<a class="dropdown-item" href="#">Best Online Pharmacies</a>
						<a class="dropdown-item blue" href="all-guides.php">See All Guides</a>
					</div>
				</li> -->
				<li class="nav-item dropdown nav-full">
					<a id="fullMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
						Guides <i class="icon-arr-down"></i>
					</a>
					<div aria-labelledby="fullMenu" class="dropdown-menu dropdown-full">
						<div class="container">
							<ul class="row dropdown-list">
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Online doctor</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Online Pharmacy</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Skin Care</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Teeth Aligners</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Online Therapy</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">At-Home Lab Testing Kits</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Supplements</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Primary Care</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Digital Clinics</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Health Apps</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Medical Devices</a>
								</li>
								<li class="col-lg-3 col-md-6 list-item">
									<a class="dropdown-item" href="all-conditions.php">Activity Trackers</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Explore <i class="icon-arr-down"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
						<a class="dropdown-item" href="all-conditions.php">All Conditions</a>
						<a class="dropdown-item" href="all-providers.php">All providers</a>
						<a class="dropdown-item" href="all-treatments.php">All Treatments</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="all-news.php">News</a>
				</li>
			</ul>
	

			<div class="dropdown search-block">
				<button class="dropdown-toggle btn-search"  type="button" id="dropdownSearchMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="full-btn">
						<i class="icon-icon-search"></i>
						Find Treatment For...
					</span>
					<span class="min-btn">Find my condition <i class="icon-arr-down"></i></span>
				
				</button>
				<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownSearchMenuButton">
					<input type="text" placeholder="Find Treatment For..." class="search-input" id="menuInput" onkeyup="filterFunction()">
					<i class="icon-icon-search"></i>
					<ul id="myDropdown" class="dropdown-list">
						
						<?php
						foreach ($rs_treatments as $rs_treatment) 
						{ 
						?>
						<li class="dropdown-item">
							<a href="single-condition.php" class="item-link"><?php echo $rs_treatment['treatment_name']; ?></a>
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