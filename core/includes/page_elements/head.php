<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<?php 
	if(isset($css)){
		render_css($css);
	}
	if(isset($js)){
		render_js($js);
	}
	?>
</head>