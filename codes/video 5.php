<?php
	//'$' for variable declaration. no need to mention data type. it is recognized with the help of initialized value.
	$value =50;
	$name="garima";
	//these variables are case sensitive.
	//So, $value !=$Value !=$VALUE
	//echo:returns no value.
	//echo: language construct not built in function.
	$value=$value*7;
	//$name=$name*h;/*Invalid Expression.*/
	$google="Google Link";
	//echo "$value";
	//echo $value;
	//echo "50*7=",$value;//for printing variables use double quotes.
	//echo '50*7=$value';// '' prints exactly what is written inside it.
	//echo "Sum: ", 1 + 2;
	echo 'sum'.(1+2);
	
	echo 'I am '.$name.'<br>';// . used to concatenate two strings.
	echo '<a href="http://www.google.com">'.$google.'</a><br>';//for using/printing html tags use single quotes.
	//Use \ for meta characters or reserved symbols.
	echo "it's a nyc day.<br>";
	echo 'it\'s a nyc day.';
?>