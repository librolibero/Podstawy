<!-- Ćwiczenie 10 - funkcje -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Funkcja - pogrubienie/kursywa/podkreślenie</title>
</head>
<body style="background-color: blue; color: white">
<?php
    function BIU ($text) 
    {
	return ("<B><I><U>$text</U></I></B>");
    }
    print ("Zwykły tekst a tu ");
    print BIU("pogrubiony/kursywa/podkreślony");
    print (" i znów zwykły!");
?>
</body>
</html>
