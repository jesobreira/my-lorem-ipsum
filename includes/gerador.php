<?php
function joelipsum($paragrafos) {
	$retorno = "You tá the brinqueichon uite me, cara? ";
	$jafoi = array();
	$frases = explode(". ", file_get_contents(dirname(__FILE__)."/frases.txt"));
	for($i = 0; $i <= $paragrafos; $i++) {
		echo "<p>";
		for($j = 0; $j <= 5; $j++) {
			if(count($jafoi)==count($frases)) $jafoi = array();
			while(in_array($new = rand(0, count($frases)-1), $frases)) {
				$new = rand(0, count($frases)-1);
			}
			$retorno .= $frases[$new].". ";
		}
		$retorno .= "</p>\n";
	}
	return $retorno;
}
