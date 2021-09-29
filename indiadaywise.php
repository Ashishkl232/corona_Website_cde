


<?php
 
 $data = file_get_contents('https://api.covid19india.org/data.json');

 $daywise = json_decode($data, true);

 
 $totalcount= count( $daywise['cases_time_series']);
 
  //echo $daywise['cases_time_series'][0]['totalconfirmed'];
$i = 0;
 while ($i < $totalcount) {
 	echo $daywise['cases_time_series'][$i]['date'] . "<br>" ;
 	echo $daywise['cases_time_series'][$i]['totalconfirmed'] . "<br>" ;
 	echo $daywise['cases_time_series'][$i]['totaldeceased'] . "<br>" ;
 	echo $daywise['cases_time_series'][$i]['totalrecovered'] . "<br>" ;
 	$i++;
 }

?>
