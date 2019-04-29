<!-- Ćwiczenie 6 - pętla do .. while -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Pętle - do ... while - suma wszystkich liczb od 0 do 100</title>
</head>
<body style="background-color: blue; color: white">
<div align="center">
<?php
    $SumaLiczb = 0;
    $KolejnaLiczba = 0;
    do
    {
	$SumaLiczb += $KolejnaLiczba; // $SumaLiczb = $SumaLiczb + $KolejnaLiczba;
	$KolejnaLiczba++; // $KolejnaLiczba = $KolejnaLiczba + 1
    } while ($KolejnaLiczba <= 100);
    print ("Suma liczb od 0 do 100 wynosi $SumaLiczb");
?>
</div>
</body>
</html>
