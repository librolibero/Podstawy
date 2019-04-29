<!-- Ćwiczenie 12 - tablice -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Tablice</title>

</head>
<body style="background-color: blue; color: white">
<?php
    srand ();
    print ("<table border=\"1\" width=\"200\">");
    for ( $wiersz = 1 ; $wiersz <= 3 ; $wiersz++ ) 
    {
	print ("<TR>");
	for ( $kolumna = 1 ; $kolumna <= 3 ; $kolumna++ ) 
	{
	    print ("<TD align=\"right\" width=\"30\">".($macierz[$wiersz][$kolumna] = rand(1,99))."</TD>");
	}
	print ("</TR>");
    }
    printf ("</Table>");
?>
</body>
</html>
