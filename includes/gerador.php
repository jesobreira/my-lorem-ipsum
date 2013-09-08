<?php
function joelipsum($paragrafos) {
	$retorno = "You tá the brinqueichon uite me, cara? ";
	$jafoi = array();
	$frases = explode(". ", 'You ar a véri mutchi caspa man. Do you nou the number one xampu contra caspa in the uordi. Luqui aqui Capitachion. Rimouve uarandredi porcenti ofi the caspa ande idrateiti ior hair. You puti the xampu in the midiu, from the fronte, from the berrind ande the caspa donti cai io xolder. Pliss, luqui tu me. Not joelzetes. Finixi the cocereichon in the red. Bati, pera ai, you no precisa, you ar a carecaition, you donti révi caspa. Tu teami prei veri gudi! From birráind, from de léfiti, from de raiti! My equipe pray veri naici. Iraq ande sal de Africa pray semen. But de second taime ai hevi de mete. Control de mete bai equipe praying de left de write in the midiu. Have on bext oportuniti four ixcore. Iraq marquee de midiu found berrind. I afte-dem in seconde time ai maique to chanjer. Uon prayer experience sempre maschego. I anoder prayer que hevi eperience. Qui pray very gude Steven pienar. but ai donti "bidebu"');
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
