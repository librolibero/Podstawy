<!-- Ćwiczenie 9 - wybór -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Switch/Case - instrukcje wyboru - nazwy miesięcy słownie</title>

</head>
<body style="background-color: blue; color: white">
<?php
// pobranie daty
    $dzien = date ( "d" );
    $miesiac = date ( "m" );
    $rok = date ( "Y" );
    switch ( $miesiac ) 
    {
	case '01': $miesiac = 'stycznia'; break;
	case '02': $miesiac = 'lutego'; break;
	case '03': $miesiac = 'marca'; break;
	case '04': $miesiac = 'kwietnia'; break;
	case '05': $miesiac = 'maja'; break;
	case '06': $miesiac = 'czerwca'; break;
	case '07': $miesiac = 'lipca'; break;
	case '08': $miesiac = 'sierpnia'; break;
	case '09': $miesiac = 'wrze¶nia'; break;
	case '10': $miesiac = 'paĽdzienika'; break;
	case '11': $miesiac = 'listopada'; break;
	case '12': $miesiac = 'grudnia'; break;
        default: $miesiac = ' ??? '; break;
    }
    print ("$dzien $miesiac $rok");
?>
</body>
</html>
