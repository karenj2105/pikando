<!-- header (inicio) -->
<?php include("header.inc.php") ?>
<!-- header (fin) -->

<section id="content" class="column">
	<span class="sombra"></span>
	<div class="centrar">
		<?php print $messages; ?>
		<a id="main-content"></a>
		<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
		<?php if ($title): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?>
		<?php print render($page['content']); ?>
	</div>	
</section>

<!-- footer (inicio) -->
<?php include("footer.inc.php"); ?>
<!-- footer (fin) -->