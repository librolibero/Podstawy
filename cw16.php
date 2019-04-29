<!-- Ćwiczenie 16 - przekazywanie danych z formularza -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Formularze</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
</head>
<body style="background-color: blue; color: white">
<?php

if (isset($_GET['zmienna'])) { // sprawdz, czy do strony przychodzi i jest osadzona zmienna
$przechwycona_zmianna = $_GET['zmienna'];
print "W formularzu wpisano <B>$przechwycona_zmianna</B>";
} else {
print "<form action=\"cw16.php\" method=get>";
print "<input type\"text\" name=\"zmienna1\"><br>";
print "<input type=\"submit\" Value=\"Wyślij\">";
print "</form>";
}
?>
</body>
</html>
