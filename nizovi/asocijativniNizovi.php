<?php

	/*
	1. Zadatak
	*/
	//Marka auta => godište
	$automobili = array(
	"Opel Astra"=>"2000",
	"Opel Corsa"=>"2010",
	"Fiat Stilo"=>"2004"	
	);
	
	/*Ispisati sve automobile i njihova godišta */
	echo "<br> <b>Svi automobili:</b> <br>";
	foreach($automobili as $x=>$xv)
	{
		echo "Auto $x godište $xv <br>";
	}
	
	/*Ispisati sve automobile koji su stariji od 10 godina */
	echo "<br> <b>Automobili stariji od 10 godina:</b> <br>";
	foreach($automobili as $x=>$xv)
	{
		if(date('Y')-$xv > 10)
		{
			echo "Auto $x godište $xv <br>";
		}
	}
	
	/*Automobili koji sadrze string Opel*/
	echo "<br> <b>Automobili koji sadrze string Opel i proizvedeni su nakon 2000. godine:</b> <br>";
	foreach($automobili as $x=>$xv)
	{
		if(strpos($x, 'Opel') !== false && $xv > 2000)
		{
			echo "Auto $x godište $xv <br>";
		}
	}
	
	echo "<hr>";
	
	/*
	2. Zadatak
	*/
	//Ime osobe => visina
	
	$niz = array(
	"Jelena"=>"173",
	"Nikolina"=>"150",
	"Pera"=>"173",
	"Valerija"=>"120"
	);
	
	/*Ispisati sve osobe i njihove visine*/
	echo "<br> <b>Sve osobe:</b> <br>";
	foreach($niz as $x=>$xv)
	{
		echo "Osoba $x visoka $xv cm <br>";
	}
	
	/*Natprosečno visoke osobe*/
	echo "<br> <b>Natprosečno visoke osobe:</b> <br>";
	$suma = 0;
	foreach($niz as $x=>$xv)
	{
		$suma += $xv;
	}
	$prosek = $suma / count($niz);
	echo "Prosek $prosek <br>";
	foreach($niz as $x=>$xv)
	{	
		if($xv > $prosek)
		{
			echo "Osoba $x visoka $xv cm <br>";
		}
	}
	
	/*
	Ispisati sve osobe koje imaju maksimalnu visinu
	*/
	echo "<br> <b>Osobe maksimalne visine:</b> <br>";
	$max = 0;
	foreach($niz as $x=>$xv)
	{
		if($max < $xv)
		{
			$max = $xv;
		}
	}
	echo "Najviša visina $max <br>";
	
	foreach($niz as $x=>$xv)
	{
		if($max == $xv)
		{
			echo "Osoba $x visoka $xv cm <br>";
			break;
		}
	}
	
	/*Sve osobe visoke ispod proseka,
	  a čije ime počinje na slovo 'V'*/
	echo "<br><b>Sve osobe visoke ispod proseka,
	  a čije ime počinje na slovo 'V'</b><br>";
	
	foreach($niz as $x=>$xv)
	{
		if($xv<$prosek && substr($x, 0, 1) === 'V')
		{
			echo "Osoba $x visoka $xv cm <br>";
			break;
		}
	}
	
	
	
	
	
	
	
	
	

?>