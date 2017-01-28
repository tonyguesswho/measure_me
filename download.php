<?php
header('Content-disposition: attachement; filename=measurement.pdf');
header('Content-type: application/pdf');
readfile('measurement.pdf');




?>
