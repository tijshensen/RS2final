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
				<li class="nav-item dropdown dropdown-explore">
					<a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Play your category <i class="icon-arr-down"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown2">

						<?php
							$x =0;
							foreach ($rs_guides_cards as $rs_guides_card) 
							{ 
							?>
								<?php	
								include('_card-guide.php');
								?>
							<?php 
							$x++;
							if($x==8) break;
							} 
						?>
					</div>
				</li>
				<li class="nav-item" id="treatments-dropdown-toggler">
					<a class="nav-link" href="#">
                    New Jersey <i class="icon-arr-down"></i>
					</a>
				</li>
			</ul>
	

			<div class="dropdown search-block nj">
				<input type="text" placeholder="New Jersey" class="search-input dropdown-toggle" id="menuInput" onkeyup="filterFunction()" id="dropdownSearchMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i id="search-block-close" class="icon-icon-x"></i>
				<div class="dropdown-search dropdown-menu" aria-labelledby="dropdownSearchMenuButton">

					<ul id="myDropdown" class="dropdown-list">
						
						<?php
						foreach ($rs_states_list as $rs_states_list) 
						{ 
						?>
						<li class="dropdown-item">
							<a href="" class="item-link"><img src="./img/<?php echo $rs_states_list['pl-flag']; ?>" alt=""><?php echo $rs_states_list['pl-state']; ?></a>
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