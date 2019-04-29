<!-- Ćwiczenie 4 - obliczenia -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Matematyka... pole koła o promieniu 7</title>
</head>
<body style="background-color: blue; color: white">
<div align="center">
<?php
    define ("Liczba_PI", 3.14);
    $promien= 7;
    printf ("Pole koła o promieniu 7 wynosi %f<BR>", (Liczba_PI * $promien * $promien ) );
    printf ("Pole koła o promieniu 7 wynosi %0.2f<BR><HR>", ( Liczba_PI * $promien * $promien ) );
// wyświetlenie i wyliczenie tego samego aczkolwiek w inny sposób
    $pole = ( Liczba_PI * $promien * $promien );
    print ("<font color=\"#FF0000\">Pole koła o promieniu 7 wynosi ");
    printf ("%f<BR>",$pole);
    print ("Pole koła o promieniu 7 wynosi ");
    printf ("%0.2f<BR></font><HR>", $pole);
?>
</div>
</body>
</html>
