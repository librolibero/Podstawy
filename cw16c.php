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

if ((isset($_GET['zmienna1'])) and (isset($_GET['zmienna2']))) {
$przechwycona_zmianna1 = $_GET['zmienna1'];
$przechwycona_zmianna2 = $_GET['zmienna2'];
print "W formularzu wpisano <B>$przechwycona_zmianna1</B> i <B>$przechwycona_zmianna2</B>";
} else {
print "<form action=\"cw16c.php\" method=get>";
print "<input type\"text\" name=\"zmienna1\"><br>";
print "<input type\"text\" name=\"zmienna2\"><br>";
print "<input type=\"submit\" Value=\"Wyślij\">";
print "</form>";
}
?>
</body>
</html>
