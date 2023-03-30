<header>
	<ul>
		<?php 
			// Défini le nom et le url des items de notre navigation  
			$navItems = [
				["name" => "Accueil", "url" => "/"],
				["name" => "À propos", "url" => "/about"],
				["name" => "Contact", "url" => "/contact"]
			];
				
			// Boucle qui parcourt chaque item du tableau
			foreach ($navItems as $navItem):
		?>
			<li>
				<a href="<?php echo $navItem["url"]; ?>">
					<?php echo $navItem["name"]; ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</header>