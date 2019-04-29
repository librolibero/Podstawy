<!-- Ćwiczenie 2 - wyświetlenie czasu -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Czas</title>

<meta http-equiv="Refresh" content="1">
</head>
<body style="background-color: blue; color: white">
<div align="center">
<?php
    $czas = getdate( time() );
    printf("%d:%d:%d",$czas["hours"],$czas["minutes"],$czas["seconds"]);
?>
</div>
</body>
</html>
