<?php

$arr = array(array('name' => 'meat1', 'calories'=>'100', 'index' =>'2', 'fats' =>'100', 'proteins'=>'300'),
		array('name' => 'meat2', 'calories'=>'100', 'index' =>'2', 'fats' =>'100', 'proteins'=>'100'),
		array('name' => 'meat3', 'calories'=>'200', 'index' =>'3', 'fats' =>'300', 'proteins'=>'300'),
		array('name' => 'meat4', 'calories'=>'300', 'index' =>'6', 'fats' =>'200', 'proteins'=>'200'),
		array('name' => 'meat5', 'calories'=>'400', 'index' =>'1', 'fats' =>'150', 'proteins'=>'330'));

$count = count ($arr);
$sum=0;

for ($i=0; $i < $count; $i++) { 
	$arr[$i]['coef'] = $arr[$i]['index']*$arr[$i]['index'] + ($arr[$i]['fats'] + $arr[$i]['proteins'])/($arr[$i]['calories']*2);
	$sum += $arr[$i]['coef'];
}

echo '<table border="1">';
echo '<tr>';
echo "<td>name</td>
<td> colories</td>
<td> index</td>
<td> fats</td>
<td> proteins</td>
<td> coef</td>";
echo "</tr>";

for ($j=0; $j < $count; $j++) { 
		
		foreach ($arr[$j] as $value) {
			echo "<td>".$value."</td>";
		}
		echo '</tr>';
	}
echo '</table>';
$sum_avg = $sum/$count;
echo 'Avg = '.$sum_avg;

$min = $arr[0]['index'];
$index_min = 0;
for ($k=1; $k < $count ; $k++) { 
	if ($min > $arr[$k]['index']) {
		$min = $arr[$k]['index'];
		$index_min = $k;
	}
}
echo "<p>Min is = ".$arr[$index_min]['index'].";</p>";