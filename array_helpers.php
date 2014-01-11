<?php

/**
* @name array_rotate
* @param array        - input array
* @param direction    - 0 for shifting elements left, 1 for shifting elements right, (:any)-shifting elements right
* @param how_elements - how many element to rotate
* @desc               - method for rotating array elements in circle by choosing direction and number of elements
* @return             - no return value, call by reference
*/
function array_rotate(&$array, $direction = 1, $how_elements = 1)
{
	$count = count($array);
	$copy = $array;
	
	switch ($direction)
	{
		case 0 :
			for($i = 0; $i < $count; $i++)
			{
				if($i < $how_elements)
				{
					for($j = 0; $j < $count; $j++)
					{
						$key = (($j + 1) < $count) ? ($j + 1) : false;
						if($key)
							$array[$j] =& $array[$key];
						else
							$array[$j] =& $copy[$i];
					}
				}
			}
			break;
		
		case 1 :
			for($i = ($count - 1); $i >= 0; $i--)
			{
				if($i >= ($count - $how_elements))
				{
					for($j = ($count - 1); $j >= 0; $j--)
					{
						$key = ($j > 0) ? ($j - 1) : false;
						if($key)
							$array[$j] =& $array[$key];
						else
						{
							if($key === 0)
								$array[$j] =& $array[$key];
							else
								$array[$j] =& $copy[$i];
						}
					}
				}
			}
			break;
		
		default :
			for($i = ($count - 1); $i >= 0; $i--)
			{
				if($i >= ($count - $how_elements))
				{
					for($j = ($count - 1); $j >= 0; $j--)
					{
						$key = ($j > 0) ? ($j - 1) : false;
						if($key)
							$array[$j] =& $array[$key];
						else
						{
							if($key === 0)
								$array[$j] =& $array[$key];
							else
								$array[$j] =& $copy[$i];
						}
					}
				}
			}
			break;
	}
}

?>
