<?php
	global $base_url;
	$ruta = $base_url . '/' . drupal_get_path('theme', 'pikando');
?>

<!-- header (inicio) -->
<?php include("header.inc.php") ?>
<!-- header (fin) -->

<section id="vistaInicio">
	<?php print $messages; ?>
	<div class="centrar">
		<div id="carrusel">
			<?php
				print views_embed_view('diapositivas', 'blo_diapositivas');
			?>
			<a class="ant" href="#">Anterior</a>
			<a class="sig" href="#">Siguiente</a>
		</div>
		<img class="lema" src="<?php echo $ruta . "/img/denos-el-gusto.png"; ?>" alt="DENOS EL GUSTO DE ATENDERLO" />
		<ul class="servicios">
			<li>
				<?php
					$n = node_load(5);			
					$titulo = $n->title;
					$subtitulo = $n->field_ser_subtitulo['und'][0]['value'];
					$imagen = $n->field_ser_imagen['und'][0]['uri'];
					$enlace = $n->field_ser_enlace['und'][0]['value'];
				?>
				<a href="<?php print $enlace; ?>">
					<img src="<?php print file_create_url($imagen); ?>" alt="Nuestro menú"/>
					<div>
						<h3><?=$titulo;?></h3>
						<h4><?=$subtitulo;?></h4>
					</div>
				</a>
			</li>
			<li>
				<?php
					$n = node_load(6);
					$titulo = $n->title;
					$subtitulo = $n->field_ser_subtitulo['und'][0]['value'];
					$imagen = $n->field_ser_imagen['und'][0]['uri'];
					$enlace = $n->field_ser_enlace['und'][0]['value'];
				?>
				<a href="<?php print $enlace; ?>">
					<img src="<?php print file_create_url($imagen); ?>" alt="El restaurante"/>
					<div>
						<h3><?=$titulo;?></h3>
						<h4><?=$subtitulo;?></h4>
					</div>
				</a>					
			</li>
			<li>
				<?php
					$n = node_load(7);
					$titulo = $n->title;
					$subtitulo = $n->field_ser_subtitulo['und'][0]['value'];
					$imagen = $n->field_ser_imagen['und'][0]['uri'];
					$enlace = $n->field_ser_enlace['und'][0]['value'];
				?>
				<a href="<?php print $enlace; ?>">
					<img src="<?php print file_create_url($imagen); ?>" alt="Eventos"/>
					<div>
						<h3><?=$titulo;?></h3>
						<h4><?=$subtitulo;?></h4>
					</div>
				</a>
			</li>
			<li class="clearFix"></li>
		</ul>
	</div>
</section>

<!-- footer (inicio) -->
<?php include("footer.inc.php"); ?>
<!-- footer (fin) -->