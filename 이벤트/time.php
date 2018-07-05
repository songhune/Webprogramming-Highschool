<?php
$d1 = new DateTime;
$d1->setTimezone(new DateTimezone("asia/seoul"));
echo $d1->format('H:i:s');
?>