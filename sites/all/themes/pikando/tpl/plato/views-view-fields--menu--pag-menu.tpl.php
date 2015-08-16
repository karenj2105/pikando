<?php
	$titulo = $fields['title']->content;
	$urlPortada = $fields['field_pla_imagen']->content;
	$nid = $fields['nid']->content;
?>

<a class="colorbox-node" href="<?php echo "node/" . $nid; ?>">
    <img src="<?=$urlPortada; ?>" alt=""/>
    <span class="lupa"></span>
</a>
 <h4><span><?=$titulo; ?></span></h4>