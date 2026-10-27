<?php
var_dump(7 / 2);
var_dump(8 / 2);
var_dump("5" + 3);
var_dump("5" . 3);
var_dump(17 % 5);
?>

<?php
$sati = intdiv(135, 60);
$minute = 135 % 60;

echo $sati . " h " . $minute . " min";
?>


<?php
$nazivTvrtke = "SigurnaMreža d.o.o.";

echo "strlen: " . strlen($nazivTvrtke) . "<br>";
echo "mb_strlen: " . mb_strlen($nazivTvrtke) . "<br>";

echo strtoupper($nazivTvrtke);
?>