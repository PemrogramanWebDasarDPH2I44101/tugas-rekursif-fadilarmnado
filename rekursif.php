<?php
function piramida1($i,$j){
  if($i > 0){
  	if ($j > 0) {
  		echo "*";
  		$j--;
  		piramida1($i,$j);

  	}else{
  		echo "<br>";
  		$i--;
  		piramida1($i,$i);
  	}
  }  
}
piramida1(5,5);
echo "<br>*=========================================*<br>";
$angka = 5;
function piramida2($i,$j,$angka){
	if ($i <= $angka) {
		if ($j <= $i) {
			echo $i;
			$j++;
			piramida2($i,$j,$angka);
		}else{
			echo "<br>";
			$i++;
			piramida2($i,1,$angka);
		}
	}
}
piramida2(1,1,$angka);

?>
