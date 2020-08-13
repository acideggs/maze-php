<?php
/*
*	First Maze Test
*/

function generateMaze(int $size){
	$is_odd = true;
	$path = 0;
	$x_wall = "";
	$i = 1;
	while($i <= $size){
		if ($i % 2 == 1) {
			if($is_odd){
				$path = 2;
			} else {
				$path = $size - 1;
			}
			$is_odd = !$is_odd;
			$x_wall = str_repeat("@", $size);
			$x_wall[$path - 1] = " ";
			echo "$x_wall";
		} else {
			echo "@" . str_repeat(" ", $size - 2) . "@";
		}
		echo "\n";
		$i++;
	}
}

function generatePrettyMaze(int $size){
	$is_odd = true;
	$path = 0;
	$x_wall = "";
	$i = 1;
	while($i <= $size){
		if ($i % 2 == 1) {
			if($is_odd){
				$path = 2;
			} else {
				$path = $size - 1;
			}
			$is_odd = !$is_odd;
			$x_wall = str_repeat("@", $size);
			$x_wall[$path - 1] = " ";
			echo "$x_wall";
		} else {
			echo "@" . str_repeat("   ", $size - 2) . "@";
		}
		echo "\n";
		$i++;
	}
}

/*
*	Argument must be 4n-1
*/
echo "\nMaze : \n";
echo "\n";
generateMaze(15);
echo "\n";
generateMaze(19);
echo "\nPretty Maze : \n";
echo "\n";
generatePrettyMaze(15);
echo "\n";
generatePrettyMaze(19);

echo "\nNB : Maze use 1 space (\" \") character. Pretty Maze use 3 space (\"   \")";
?>


