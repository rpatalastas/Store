<?php 

function render_css($css){
	if($css != null){
		if(!is_array($css)){
			throw new Exception("CSS Not an array!", 1);
			return;
		}
		foreach($css as $sheet){
			echo '<link rel="stylesheet" type="text/css" href="' . STYLES_URL . $sheet . '.css" />';
		}
	}
}

function render_js($js){
	if($js != null){
		if(!is_array($js)){
			throw new Exception("JS Not an array!", 1);
			return;
		}
		foreach($js as $script){
			echo '<script type="text/javascript" src="' . SCRIPTS_URL . $script . '.js" async/></script>';
		}
	}
}

?>