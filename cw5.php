<!-- Ćwiczenie 5 - pętla FOR -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Pętle - for - obliczenie silnii liczby</title>
</head>
<body style="background-color: blue; color: white">
<div align="center">
<?php
    $Liczba = 17;
    $silnia = 1;
    for ( $i=1 ; $i <= $Liczba ; $i++ )
    /* $i = $i +1 */
    {
	$silnia *= $i; /* $silnia = *silnia*$i */
    }
    print ("$Liczba! = $silnia");
?>
</div>
</body>
</html>
