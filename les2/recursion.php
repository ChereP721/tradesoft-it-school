<?php

function factorial (int $n)
{
	
	 if ($n <= 0) return 1;
     return $n * factorial ($n-1);	
	
};

function findRowFibo (int $len):string
{	
	$len = abs($len);
	
	function fibo (int $n):int
		{
			if ($n == 1 || $n == 2) { return 1;} else {  return fibo($n-1)+fibo($n-2); };	
		};
	
	switch ($len) {		
		case 1 :
			$res = '0';
			break;		
		case 0 : 
			$res = ' ';
			break;
		default:
			$res = '0 ';
			for ($i=1; $i<=$len-1; $i++)  $res .= fibo ($i).' ';
	};
		
	return $res;
};

function fileRenameRand (string $fname):void
{
	if (file_exists($fname))
	{
		$new_name = pathinfo($fname, PATHINFO_EXTENSION);
		$new_name = md5(str_replace('.',rand(0,1000),strval(microtime(getAsFloat)))).'.'.$new_name;
		rename($fname,$new_name);
	};		
}

function fileRand (string $fname):string
{
	$new_name = pathinfo($fname, PATHINFO_EXTENSION);
	$new_name = md5(str_replace('.',rand(0,1000),strval(microtime(getAsFloat)))).'.'.$new_name;
	return $new_name;
}

?>