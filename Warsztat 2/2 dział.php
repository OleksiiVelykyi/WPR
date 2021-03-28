<?php
echo "Zadanko 2.1 ---> ";
function random($number){
    
    for ($i=1; $i<=5; $i++){
        $random[$i] = rand(1,100);
    }
    return $random[$number];
}
echo random(3);

echo "   Zadanko 2.2---> ";

function WhatNationalityAmI($x)
{
	$table["Ukraina"]="Ukrainiec";
	$table["Polska"]="Polak";
	$table["Francja"]="Francuz";
	$table["Hiszpania"]="Hiszpanie";
	$table["Rosja"]="Rosjanin";
	echo $table[$x];
}
WhatNationalityAmI("Ukraina");

?>
