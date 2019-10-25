<?php

require_once "Leite.php";
require_once "DVD.php";
date_default_timezone_set("America/Sao_Paulo");

//-------------------------------------------------------------------------

$DVD_01 = new DVD(1, 15, "Harry Potter - Pedra Filosofal", 1997);
$DVD_02 = new DVD(2, 10, "Harry Potter - Câmara Secreta", 1998);
$DVD_03 = new DVD(3, 13, "Harry Potter - Prisioneiro de Askaban", 1999);
$DVD_04 = new DVD(4, 12, "Harry Potter - Cálice de Fogo", 2000);

//--------------------------------------------------------------------------

$Leite_01 = new Leite(5, 12, "Cemil", 1000, "14/08/2019");
$Leite_02 = new Leite(6, 13, "Piracanjuba", 1000, "25/11/2019");
$Leite_03 = new Leite(7, 14, "Nutri Leite", 1000, "16/12/2019");
$Leite_04 = new Leite(8, 15, "Primor", 1000, "14/11/2019");
$Leite_05 = new Leite(9, 16, "Itambé", 1000, "05/10/2019");
$Leite_06 = new Leite(10, 17, "Parmalat", 1000, "11/10/2019");

//--------------------------------------------------------------------------

$estoque = array(
	$DVD_01->codigo => $DVD_01,
	$DVD_02->codigo => $DVD_02,
	$DVD_03->codigo => $DVD_03,
	$DVD_04->codigo => $DVD_04,
	$Leite_01->codigo => $Leite_01,
	$Leite_02->codigo => $Leite_02,
	$Leite_03->codigo => $Leite_03,
	$Leite_04->codigo => $Leite_04,
	$Leite_05->codigo => $Leite_05,
	$Leite_06->codigo => $Leite_06);

//-------------------------------------------------------------------------

$numero = 1;
for($i = 5; $i <= 10; $i++){
echo "LEITE: $numero<br>$estoque[$i]<br><hr>";
$numero++;
}

//-------------------------------------------------------------------------

for($i = 1; $i <= 4; $i++){
echo "FILME: $i<br>$estoque[$i]<br><hr>";
}

//--------------------------------------------------------------------------

$mensagem = '';
for($i = 5; $i <= 10; $i++){
	if($estoque[$i]->estaVencido()){
		$mensagem .= $estoque[$i]->getMarca()."<br>";
	}
}
echo "Os seguintes leite estão vencidos: <br>$mensagem<br><hr>";

//---------------------------------------------------------------------------

$anoDigitado = 2007;
$mensagemPegaAno = '';
$boolean = false;
for($i = 1; $i <= 4; $i++){
	if($estoque[$i]->getAno() == $anoDigitado){
		$mensagemPegaAno .= $estoque[$i]->getTitulo()."<br>";
		$boolean = true;
	}
	}if($boolean == true){
		echo "Os DVDs lançados em $anoDigitado são: <br>$mensagemPegaAno<br><hr>";
	}else{
		echo "Nenhum dos DVDs em estoque foi lançado no ano <br>$anoDigitado<br><hr>";
	}

//-----------------------------------------------------------------------------------------------

$somaTotalProdutos = null;
for($i = 1; $i <= 10; $i++){
	$somaTotalProdutos += $estoque[$i]->preco;
}
echo "A soma total dos produtos em estoque é: $somaTotalProdutos<br>";

//-----------------------------------------------------------------------------------------------

?>