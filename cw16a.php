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

if (isset($_POST['zmienna'])) {
$przechwycona_zmianna = $_POST['zmienna'];
print "W formularzu wpisano <B>$przechwycona_zmianna</B>";
} else {
print "<form action=\"cw16a.php\" method=post>";
print "<input type\"text\" name=\"zmienna\"><br>";
print "<input type=\"submit\" Value=\"Wyślij\">";
print "</form>";
}
?>
</body>
</html>
