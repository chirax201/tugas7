<?php
	$star=17;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b-=10){
		echo "&nbsp";
	}
	for($c=1; $c<=$a; $c++){
		echo "fariz";
	}
	echo "<br>";
	}
	for($a=1; $a<=$star; $a++){
	for($b=100; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "fariz";
	}
	echo "<br>";
	}
?>