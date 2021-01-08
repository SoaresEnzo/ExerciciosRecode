<!-- Alguns arrays baseados em taxonomia criados para usar um função recursiva para mostrar o conteúdo de suas strings -->
<?php

$Chlorohydra = array(
	'Chlorohydra viridissima',
	'Vazio'
);

$Hydra = array(
	'Hydra carnea',
	'Hydra corallifera'
);

$Halammohydridae = array(
	'Halammohydra',
	'Vazio'
);

$Otohydridae = array(
	'Otohydra',
	'Octohydra'
);

$Alatinidae = array(
	'Alatina',
	'Manokia'
);

$Carybdeidae = array(
	'Carybdea',
	'Vazio'
);

$Chirodropidae = array(
	'Chironex',
	'Chirodropus'
);

$Chiropsalmidae = array(
	'Chiropsalmus',
	'Chiropsoides'
);

$Corticium = array(
	'Corticium niger',
	'Corticium abyssi'
);

$Placinolopha = array(
	'Placinolopha europae',
	'Placinolopha sarai'
);

$Oscarella = array(
	'Oscarella carmela',
	'Oscarella lobularis'
);

$Pseudocorticium = array(
	'Pseudocortitcium jarrei',
	'Vazio'
);

$Astrophorina = array(
	'Ancorinidae',
	'Corallistidae'
);

$Chondrosiida = array(
	'Chondrosiidae Schulze',
	'Vazio'
);

$Agelasida = array(
	'Agelasidae',
	'Astroscleridae'
);

$Dendroceratida = array(
	'Darwinellidae',
	'Dictyodendrillidae'
);


			$Hydridae = array($Hydra, $Chlorohydra);
			$Actinulida = array($Otohydridae, $Halammohydridae);
		$hydrozoa =	array($Hydridae, $Actinulida);
			$Chirodropida = array($Chirodropidae, $Chiropsalmidae);
			$Carybdeida = array($Alatinidae, $Carybdeidae);
		$cubozoa = array($Carybdeida, $Chirodropida);
	$cnidaria = array($cubozoa, $hydrozoa);
			$Ceractinomorpha = array($Agelasida, $Dendroceratida);
			$Tetractinomorpha = array($Astrophorina, $Chondrosiida);
		$demonspongiae = array($Tetractinomorpha, $Ceractinomorpha);
			$Oscarellidae = array($Oscarella, $Pseudocorticium);
			$Plakinidae = array($Placinolopha, $Corticium);
		$Homosclerophorida = array($Plakinidae, $Oscarellidae);
	$porifera = array($demonspongiae, $Homosclerophorida);
$animalia = array($porifera, $cnidaria);


function check($arr){
    $contaTrue=0;
    foreach($arr as $item){
        if(is_string($item)){
            $contaTrue++;
        }
    }
    if($contaTrue==count($arr)){
        return true;
    } else {
        return false;
    }
}

function showAllAnimalia($reino){
	if(check($reino)){
		foreach($reino as $sub){
			echo $sub."<br/>";
		}
	}else if(is_array($reino[0]) && is_array($reino[1])){
		showAllAnimalia($reino[0]);
		showAllAnimalia($reino[1]);
	}
}

showAllAnimalia($animalia);

