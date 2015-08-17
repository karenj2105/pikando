<?php
    $titulo = render($content['title']);
	$imagenes = render($content['field_pla_imagen']);
	$cuerpo = render($content['field_pla_descripcion']);
?>
<script type="text/javascript">
	(function ($) {
		$(document).ready(function() {
			var dur = 2500;
			var pDur = 7500;

			$('div.imagenes div.field-name-field-pla-imagen div.field-items').carouFredSel({
				items: {
					visible: 1,
					width: 800,
					height: 600
				},
				scroll: {
					fx: 'crossfade',
					easing: 'linear',
					duration: dur,
					timeoutDuration: pDur,
					onBefore: function( data ) {
						animate( data.items.visible, pDur + ( dur * 3 ) );
					},
					onAfter: function( data ) {
						data.items.old.find( 'img' ).stop().css({
							width: 800,
							height: 600,
							marginTop: 0,
							marginLeft: 0
						});
					}
				},
				onCreate: function( data ) {
					animate( data.items, pDur + ( dur * 2 ) );
				}
			});

			function animate( item, dur ) {
				var obj = {
					width: 900,
					height: 660
				};
				switch( Math.ceil( Math.random() * 2 ) ) {
					case 1:
						obj.marginTop = 0;
						break;
					case 2:
						obj.marginTop = -60
						break;
				}
				switch( Math.ceil( Math.random() * 2 ) ) {
					case 1:
						obj.marginLeft = 0;
						break;
					case 2:
						obj.marginLeft = -100
						break;
				}
				item.find( 'img' ).animate(obj, dur, 'linear' );
			}
		});
	})(jQuery);
</script>
<div class="plato">
	<div class="imagenes">
		<?=$imagenes; ?>
	</div>
	<div class="datos">
		<h3><?=$title; ?></h3>
		<?=$cuerpo;?>
	</div>
</div>
