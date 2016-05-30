
<?php
/*
	$number1=1000;
	$number2=2000;
	//echo 'Addition:<br>'.$number1+$number2.'<br>';//problematic since '.' i.e. period operator has higher precedence than '+' and '-'.
	echo 'Addition:<br>'.($number1+$number2).'<br>';
	echo 'Subraction:<br>'.($number1-$number2).'<br>';
	echo 'Multiplication:<br>'.$number1*$number2.'<br>';
	echo 'Division:<br>'.$number1/$number2.'<br>';
*/
?>

<?php
	/*$num1=10;
	$num2=20;
	if($num1==$num2)
	{
		echo "Numbers are equal.";
	}
	else if($num1>$num2)
	{
		echo "Num1 is greater than Num2.";
	}
	else{
		echo "Num1 is not equal to Num2.";
	}*/
?>


<?php
	/*
		=== - Identically equal-values as well as types are equal
		!= - Not equal
		<> - Not equal
		!== - Non-Identical-values are not equal or the type. 
	*/
	/*$num1=10;
	$num2='10';
	
	if($num1!==$num2){
		echo "Equal";
	}
	else{
		echo "Not Equal.";
	}*/
?>

<?php
	/*logical operators*/
	
	/* '&&' or 'and' -and
	   '||' or 'or'
	   'xor'-either exp1 or exp2 is correct but not bith at the same time.
	   '!'-not
		*/
	
/*	$num1=10;
	$num2=20;
	if($num1==$num2 and $num1>$num2)
	{
		echo "Equal";
	}
	else{
		echo "Not equal.";
	}*/
	
?>

<?php

	/*$names=array('Mark','July','Aparna');
	$names[3]='Julie';
	echo $names[2];
	print_r($names);//to print all the elements altogether.*/
?>

<?php
	/*
	$names=array(20=>'Mark',30=>'Simran',40=>'gupta');

	echo "ROLL NO. 20 is $names[20] <br>";
	print_r($names);*/
?>

<?php
/*Array inside an array-Multi Dimensional array.*/
	
/*$students=array(array('Mark',20,56),
				array('John',30,78),
				array('Kavita',19,37));
				
echo $students[0][0].' '.$students[0][1].' '.$students[0][2].'<br>';
echo $students[1][0].' '.$students[1][1].' '.$students[1][2].'<br>';
echo $students[2][0].' '.$students[2][1].' '.$students[2][2].'<br>';
*/

$students=array(array('Name'=>'Mark',
						'Age'=>20,
						'Weight'=>30),
				array('Name'=>'Kavita',
						'Age'=>45,
						'Weight'=>50),
				array('Name'=>'Kanchan',
						'Age'=>25,
						'Weight'=>35));
echo $students[0]['Name'].' '.$students[0]['Age'].' '.$students[0]['Weight'].'<br>';
echo $students[1]['Name'].' '.$students[1]['Age'].' '.$students[1]['Weight'].'<br>';
echo $students[2]['Name'].' '.$students[2]['Age'].' '.$students[2]['Weight'].'<br>';

?>