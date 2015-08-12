<?php
/**
 * Retorna un arreglo de enlaces de las imagenes de las galerias
 */
function fuc_colorbox_link($image, $style_name, $style_name_link = 'colorbox_full') {
	$image_style = theme('image_style', array(
		'style_name' => $style_name,
		'path'       => $image['uri'],
		'alt'        => $image['alt'],
		'title'      => $image['title']
	));

	$url = file_create_url($image['uri']);
	$image_style = $image_style . '<span class="lupa"></span>';

	$link = l($image_style, $url, array(
		'html' => TRUE,
		'attributes' => array(
			'rel' => array('colorbox-gallery'),
			'class' => array('colorbox')
		)
	 ));
	return $link;
}
?>