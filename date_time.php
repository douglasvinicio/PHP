<?php
/* Get server time*/
$date = new DateTime();
echo $date->format('Y-m-d H:i:s');
/* Add 1 Day */
$date->add(new DateInterval('P1D'));
echo '<br>'.$date->format('Y-m-d H:i:s');
/* Change Timezone to UTC */
$date->setTimezone(new DateTimeZone('etc/UTC'));
echo '<br>'.$date->format('Y-m-d H:i:s');
