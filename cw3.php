<!-- Ćwiczenie 3 - zmienne i łańcuchy -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Zmienne i łańcuchy</title>
</head>
<body style="background-color: blue; color: white">
<div align="center">

<?php
    $imie = 'Jan';
    $nazwisko = "Kowalski";
    print ("Nazywam się " . $imie . " " . $nazwisko . "<BR>");
//różnice w definiowaniu zmiennych
//interpolowane
    $tekst1 = "Nazywam się $imie $nazwisko";
    print ($tekst1 . "<BR>");
//brak interpolacji
    $tekst2 = 'Nazywam się $imie $nazwisko';
    print ($tekst2 . "<BR>");
?>
</div>
</body>
</html>
