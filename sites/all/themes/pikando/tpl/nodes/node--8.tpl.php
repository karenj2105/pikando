<?php
	$cuerpo = render($content['field_pag_descripcion']);
?>
<div class="fotosEven">
	<?php
		foreach ($content['field_pag_imagen']['#items'] as $delta => $item) {			
			echo fuc_colorbox_link($item, 'evento');
		}
	?>
	<div class="clearFix"></div>
</div>
<div class="cuerpoEven"<?php print $content_attributes; ?>>
	<?php
		print $cuerpo;
	?>
</div>
<div class="clearFix"></div>