<?php
include('_dataset.php');
?>

<nav id="main-nav" class="navbar navbar-expand-lg">
	<div class="container d-flex justify-content-between">
		<a class="navbar-brand" href="homepage.php">
			<img src="<?php echo $logo;?>" alt="<?php echo $title;?>">
		</a>

		<button class="navbar-toggler" type="button" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-lg-auto main-menu">

				<li class="nav-item dropdown nav-full">
					<a id="fullMenu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link active dropdown-toggle">
						invest now <i class="icon-arr-down"></i>
					</a>
					<div aria-labelledby="fullMenu" class="dropdown-menu dropdown-full ">
						<div class="container">
							<ul class="row dropdown-list">
								<li class="col-12 dropdown-header">Find the best ...</li>
								
								<?php
								foreach ($rs_guides_cards as $rs_guides_card) 
								{ 
								?>
								
								<li class="col-lg-4 col-md-6 list-item">
									<a class="dropdown-item" href="<?php echo $rs_guides_card['guide_url']; ?>"><?php echo $rs_guides_card['guide_title']; ?></a>
								</li>
								<?php	
								}
								?>
								
								<li class="col-12 list-item">
									<a class="dropdown-item blue" href="all-providers.php">See All Categories</a>
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
						<a class="dropdown-item" href="category-page.php">All categories</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="category-news.php">News</a>
				</li>
				<li class="nav-item" id="treatments-dropdown-toggler">
					<a class="nav-link" href="#">
						Find my condition <i class="icon-arr-down"></i>
					</a>
				</li>
			</ul>
	

			<div class="dropdown search-block">
				<input type="text" placeholder="Find Investments ..." class="search-input dropdown-toggle" id="menuInput" onkeyup="filterFunction()" id="dropdownSearchMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i id="search-block-close" class="icon-icon-x"></i>
				<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownSearchMenuButton">

					<ul id="myDropdown" class="dropdown-list">
						
						<?php
						foreach ($rs_guides_cards as $rs_guides_card) 
						{ 
						?>
						<li class="dropdown-item">
							<a href="<?php echo $rs_guides_card['guide_url']; ?>" class="item-link"><?php echo $rs_guides_card['guide_title']; ?></a>
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