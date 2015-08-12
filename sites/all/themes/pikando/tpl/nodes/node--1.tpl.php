<?php
	$cuerpo = render($content['field_pag_descripcion']);
?>
<div class="cuerpoRest"<?php print $content_attributes; ?>>
	<?php
		print $cuerpo;
	?>
</div>
<ul class="fotosRest">
	<?php
		foreach ($content['field_pag_imagen']['#items'] as $delta => $item) {			
			echo '<li>' . fuc_colorbox_link($item, 'restaurante') . '</li>';
		}
	?>
</ul>
<div class="clearFix"></div>