<?php
function multi($x, $y) {
	$returner = $x*$y;
	return $returner;
}
function run() {
	echo "<table>";
	for($x=0; $x<=100; $x++) {
		if($x==0) {
			echo "<tr>";
			echo "<th> </th>";
			for($y=1; $y<=100; $y++) {
				echo "<th>$y</th>";
			}
			echo "</tr>";
		}
		else {
			echo "<tr>";
			echo "<th>$x</th>";
			for($y=1; $y<=100; $y++) {
				$returner = $x*$y;
				echo "<th>$returner</th>";
			}
			
		}
	}
}
run();
?>
