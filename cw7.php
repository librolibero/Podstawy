<!-- Ćwiczenie 7 - pętla while -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Pętle - while - wydrukowanie X razy imienia i nazwiska</title>
</head>
<body style="background-color: blue; color: white">
<div align="center">
<?php
    $IleRazy = 21;
    $Licznik = 1;
    while ( $Licznik != $IleRazy ) 
    {
	printf ("%d. Jan Kowalski<BR>", $Licznik);
	$Licznik++; // $Licznik = $Licznik + 1;
    }
?>
</div>
</body>
</html>
