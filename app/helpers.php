<?php


//not used now
function updateExistingJsonWithNew($arr)
{
	//remove blank values from new array
	$new = array_map('array_filter', $arr[1]);
	$new = array_filter($new);

	//replace existing values if new ones different
	$output = array_replace_recursive($arr[0],$new);


   return $output;
}
