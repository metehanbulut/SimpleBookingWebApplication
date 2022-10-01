<?php 
function rastgeleYazdir($uzunluk) {
	$icerikYazisi="";

	for ($i=0; $i<$uzunluk ; $i++) { 
		$icerikYazisi= $icerikYazisi."Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
	}
	return $icerikYazisi;
}


function dataGuzelYazdir($data) {
	print '<pre>' . print_r($data, true) . '</pre>';
}

function postYazdir($gelenVeri)
{
	foreach ($gelenVeri as $key => $entry)
	{
		print $key . ": " . $entry . "<br>";
	}
}
?>