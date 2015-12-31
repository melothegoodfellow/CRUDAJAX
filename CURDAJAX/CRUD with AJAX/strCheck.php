<?php

$name = "Melroy";
$alpha = "M";
$len = strlen($alpha);

echo stristr($alpha, substr($name,0,$len));

?>