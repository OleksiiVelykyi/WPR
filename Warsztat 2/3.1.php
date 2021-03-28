<?php
$arr = array();
$size = 10;
$max = 0;
echo(" Your table : ");
for( $x = 0; $x < $size; $x++ ){
	$arr[$x] = rand(1,100);
	echo ($arr[$x]."\t");
}

max_for($arr,$max,$size);
max_while($arr,$max,$size);
max_dowhile($arr,$max,$size);
max_foreach($arr,$max);

function max_for($arr,$max,$size){
	for( $x = 0; $x < $size; $x++ ){
		if( $max < $arr[$x] )
			$max = $arr[$x];
	}
	echo ("<br>"."for : ".$max);
}

function max_while($arr,$max,$size){
	$x = 0;
	while ( $x < $size){	
		if( $arr[$x] > $max )
			$max = $arr[$x];
		$x++;
	}
	echo ("<br>"."while : ".$max);
}

function max_dowhile($arr,$max,$size){
	$x = 0;
	do{
		if( $arr[$x] > $max )
			$max = $arr[$x];
		$x++;
	}
	while( $x < $size );
	echo ("<br>"."dowhile : ".$max);
}

function max_foreach($arr,$max){
	foreach ( $arr as $value ) {
		if( $max < $value ){
			$max = $value;
		}
	}
	echo ("<br>"."foreach : ".$max);
}

?>
