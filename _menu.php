<?php
include('_dataset.php');
?>


<nav id="main-nav" class="navbar navbar-expand-lg navbar-light bg-grey">
	<div class="container d-flex justify-content-between">
		<a class="navbar-brand" href="homepage.php">
			<img src="./img/reliefseeker.svg" width="244" height="42" alt="ReliefSeeker">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto main-menu">
				<li class="nav-item dropdown">
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
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Explore <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg>
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
				<button onclick="myFunction()" class="dropdown-toggle btn-search"  type="button" id="dropdownSearchMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="full-btn">
						<svg width="24" height="24" viewBox="0 0 24 24"><path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg>
						Find Treatment For...
					</span>
					<span class="min-btn">Find my condition <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z"/></svg></span>
				
				</button>
				<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownSearchMenuButton">
					<input type="text" placeholder="Find Treatment For..." class="search-input" id="menuInput" onkeyup="filterFunction()">
					<svg width="24" height="24" viewBox="0 0 24 24"><path d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z"/></svg>
					
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
<script>
	//SEARCH FUNCTION FOR MENU
    function filterFunction() {
		var value = $("#menuInput").val().toLowerCase();
		$("#myDropdown li a").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
	}
</script>