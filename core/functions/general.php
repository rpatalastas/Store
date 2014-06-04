<?php 

/*====	RENDERING FUNCTIONS ====*/
function render_core_css(){
	$core_css = array('reset', 'nav', 'global', 'global_desktop', 'global_tablet');
	foreach($core_css as $sheet){
		echo '<link rel="stylesheet" type="text/css" href="' . STYLES_URL . $sheet . '.css" />';
	}
}

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
		if(is_array($js)){
			foreach($js as $script){
				if(is_array($script)){
					$scriptTag = "";
					$scriptTag .= '<script type="text/javascript" src="';
					$scriptTag .= SCRIPTS_URL . $script[0] . '.js"';
					if(isset($script[1])){
						if($script[1] == true){
							$scriptTag .= ' async ';
						}
					}
					else{
						throw new Exception("Define async parameter.", 1);
					}
					$scriptTag .= '></script>';
					echo $scriptTag;
				}
				else{
					throw new Exception("Array format error", 1);
				}
			}
		}
		else{
			throw new Exception("JS Not an array!", 1);
		}
	}
}
/*====	END RENDERING FUNCTIONS  ====*/

?>