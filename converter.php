<?php

/*
 * Simple Coverter Strings to MySQL Int Representations
 * By versailles / viloid
 * Sec7or team | Surabaya Hackerlink
*/

function conv($txt){
	$arr = array(
			"0" => "false",
			"1" => "true",
			"2" => "true%2btrue",
			"3" => "floor(pi())",
			"4" => "ceil(pi())",
			"5" => "floor(version())",
			"6" => "ceil(version())",
			"7" => "ceil(pi()%2bpi())",
			"8" => "floor(version()%2bpi())",
			"9" => "floor(pi()*pi())",
			"A" => "ceil(pi()*pi())",
			"B" => "ceil(pi()*pi())%2btrue",
			"C" => "ceil(pi()%2bpi()%2bversion())",
			"D" => "floor(pi()*pi()%2bpi())",
			"E" => "ceil(pi()*pi()%2bpi())",
			"F" => "ceil(pi()*pi()%2bversion())",
			"G" => "floor(pi()*version())",
			"H" => "ceil(pi()*version())",
			"I" => "ceil(pi()*version())%2btrue",
			"J" => "floor((pi()%2bpi())*pi())",
			"K" => "ceil((pi()%2bpi())*pi())",
			"L" => "ceil(ceil(pi())*version())",
			"M" => "ceil(pi()*ceil(pi()%2bpi()))",
			"N" => "ceil((pi()%2bceil(pi()))*pi())",
			"O" => "ceil(pi())*ceil(version())",
			"P" => "floor(pi()*(version()%2bpi()))",
			"Q" => "floor(version()*version())",
			"R" => "floor(version())*floor(version())%2btrue%2btrue",
			"S" => "ceil(pi()*pi()*pi()-pi())",
			"T" => "floor(pi()*pi()*floor(pi()))", 
			"U" => "concat(floor(pi()),false)",
			"V" => "floor(pi()*pi()*pi())",
			"W" => "ceil(pi()*pi()*pi())",
			"X" => "ceil(pi()*pi()*pi())%2btrue",
			"Y" => "ceil(pow(pi(),pi())-pi())",
			"Z" => "ceil(pi()*pi()*pi()%2bpi())"
			);

		$res = array();
		foreach(str_split(strtoupper($txt)) as $s){
			$res[] .= "conv(".strtr($s, $arr).", ceil(pi()*pi()), floor(pi()*pi()*floor(pi()))%2bceil(pi()%2bpi()))";
		}
	return "concat(".implode(",", $res).")";
}

echo conv("cans21");

/* 
Result :
concat(conv(ceil(pi()%2bpi()%2bversion()), ceil(pi()*pi()), floor(pi()*pi()*floor(pi()))%2bceil(pi()%2bpi())),conv(ceil(pi()*pi()), ceil(pi()*pi()), floor(pi()*pi()*floor(pi()))%2bceil(pi()%2bpi())),conv(ceil((pi()%2bceil(pi()))*pi()), ceil(pi()*pi()), floor(pi()*pi()*floor(pi()))%2bceil(pi()%2bpi())),conv(ceil(pi()*pi()*pi()-pi()), ceil(pi()*pi()), floor(pi()*pi()*floor(pi()))%2bceil(pi()%2bpi())),conv(true%2btrue, ceil(pi()*pi()), floor(pi()*pi()*floor(pi()))%2bceil(pi()%2bpi())),conv(true, ceil(pi()*pi()), floor(pi()*pi()*floor(pi()))%2bceil(pi()%2bpi())))

Tinggal Bikin form aja , atau apalah, karepmu ..
*/
