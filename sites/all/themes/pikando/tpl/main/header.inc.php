<?php
	global $base_url;
	$ruta = $base_url . '/' . drupal_get_path('theme', 'pikando');
?>
<header id="header">		
	<nav class="menu">
		<?php
			$paginas = array();
			$i = 0;
			foreach ($main_menu as $key => $elem) {
				$paginas[$i] = array($elem['title'], $elem['href'], "");
				$i = $i + 1;
			}
		?>
		<ul id="main-menu-links" class="links clearfix">
			<?php
				foreach ($paginas as $b) {
					$enlace = l('<span>' . $b[0] . '</span>', $b[1], array(
								'attributes' => array(
									'class' => array($b[2]),
								),
								'html'=>true
							));
					echo '<li>' . $enlace . '</li>';
				}
			?>
		</ul>
	</nav>
</header>
	
<div class="centrarimg">
	<img class="direccion" src="<?php echo $ruta . "/img/direccion.png"; ?>" alt="Popayán, km 4 vía a Cali sector de Rio Blanco" />	
	<img class="logo" src="<?php echo $ruta . "/img/logo.png"; ?>" alt="Pikando Parrilla y fogón" />
	<img class="reservaciones" src="<?php echo $ruta . "/img/reservaciones.png"; ?>" alt="Reservaciones: 301-453 5383, 311-324 1205" />
</div>
<?php /*if ($main_menu): ?>
		<?php print theme('links__system_main_menu', array(
		  'links' => $main_menu,
		  'attributes' => array(
			'id' => 'main-menu-links',
			'class' => array('links', 'clearfix'),
		  ),
		  'heading' => array(
			'text' => t('Main menu'),
			'level' => 'h2',
			'class' => array('element-invisible'),
		  ),
		)); */?>
<?php /*endif; */?>