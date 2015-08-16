<?php
	global $base_url;
	$ruta = $base_url . '/' . drupal_get_path('theme', 'pikando');
?>
<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
<div class="contacto">
	<div class="formulario">
		<?php
			print drupal_render($form['progressbar']);

			if (isset($form['preview_message'])) {
				print '<div class="messages warning">';
				print drupal_render($form['preview_message']);
				print '</div>';
			}
			print drupal_render($form['submitted']);
			print drupal_render_children($form);
		?>
	</div>
	<div class="ubicacion">
		<h3>¿CÓMO LLEGAR?</h3>
		<p>
			Avance por la vía panamericana rumbo a Cali (norte) y encontrará nuestras instalaciones. Le tomará entre 5 y 7 minutos desde el SENA norte.
		</p>
		<script type="text/javascript">
			(function ($) {
				$(document).ready(function() {
					establecerMapa();
				});
			})(jQuery);
		</script>
		<div id="mapa"></div>
		<span>[latitud: 2.517096, longitud: -76.543774]</span>
	</div>
	<div class="clearFix"></div>
</div>
