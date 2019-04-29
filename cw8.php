<!-- ćwiczenie 8 - warunki -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>If - instrukcje wyboru - pierwiastki trójmianu kwadratowego </title>
</head>
<body style="background-color: blue; color: white">
<div align="center">
<?php
// definicja współczynników trójmianu
    $a = -1;
    $b = 4;
    $c = -1;
// obliczenia
    $delta = pow ( $b, 2) - 4 * $a * $c;
    if ( $delta < 0 ) 
    {
	printf ("Równanie nie ma pierwiastków w zbiorze liczb rzeczywistych<BR>Delta wynosi: %0.2f", $delta);
    } elseif ( $delta == 0 ) 
    {
	$x0 = - $b / ( 2 * $a );
	printf ("Równanie ma jeden pierwiastek w zbiorze liczb rzeczywistych<BR>x1=%0.2f<BR>delta=%0.2f", $x0, $delta);
    } else 
    {
	$x1 = ( - $b - sqrt ( $delta ) ) / ( 2 * $a );
	$x2 = ( - $b + sqrt ( $delta ) ) / ( 2 * $a );
	printf ("Równanie ma dwa pierwiastki w zbiorze liczb rzeczywistych<BR>x1=%0.2f<BR>x2=%0.2f<BR>delta=%0.2f", $x1, $x2, $delta);
    }
?>
</body>
</html>

