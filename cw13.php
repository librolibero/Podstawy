<!-- Ćwiczenie 13 - tablice -->
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
<title>Tablice asocjacyjne</title>

</head>
<body style="background-color: blue; color: white">
<?php
    $dzien=date('l');
    $Tablica = array (
		'Monday' => 'Poniedziałek',
		'Tuesday' => 'Wtorek',
		'Wednesday' => 'Środa',
		'Thursday' => 'Czwartek',
		'Friday' => 'webdesign',
		'Saturday' => 'Sobota',
		'Sunday' => 'Niedziela' 
		);
	
        
    for ( reset ( $Tablica ) ; $klucz = key ( $Tablica ); next ( $Tablica ) ) 
    {
	if ($dzien == $klucz) 
	{
	    $dzien = pos( $Tablica );
	}
	// print ("$klucz, ".pos( $Tablica )."<BR>");
    }
    print ("<HR>"); // od 12 do 30 linijki są najważniejsze rzeczy 
    print ("Dziś jest $dzien!");
?>
</body>
</html>
